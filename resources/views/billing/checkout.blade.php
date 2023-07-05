<x-app-layout>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-3xl px-6 lg:px-8">
	    	<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
		        <div class="py-6">
					<form action="{{ route('checkout.process') }}" method="POST" id="payment-form" data-secret="{{ $intent->client_secret}}" class="ml-8 mr-8">
						@csrf
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
						<input type="hidden" id="plan-paying-amount" value="{{ number_format($subtotal / 100, 2) }}" />
                    	<input type="hidden" id="tax-percent" value="{{ $taxPercent }}" />
						<div>
							<x-input-label for="cardholder-name" :value="__('Cardholder Name')" />
							<x-text-input id="cardholder-name" class="block mt-1 w-full" type="text" autofocus autocomplete="name" />
						</div>
						<div class="mt-4">
							<x-input-label for="card-element" :value="__('Credit or debit card')" />
							<div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
						</div>
						<div class="mt-4">
							<x-danger-button type="submit">Pay {{ config('saas.currency')}}{{ number_format($plan->price/100)}}</x-danger-button>
						</div>

					</form>
		        </div>
		   </div>
		</div>
	</div>
	 @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            // Create a Stripe client.
            var stripe = Stripe("{{ env('STRIPE_KEY') }}");
            // Create an instance of Elements.
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Lexend", sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };
            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});
            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });
            // Handle form submission.
            var form = document.getElementById('payment-form');
            var cardHolderName = document.getElementById('cardholder-name');
            var clientSecret = form.dataset.secret;
            form.addEventListener('submit', async function(event) {
                event.preventDefault();
                const { setupIntent, error } = await stripe.confirmCardSetup(
                    clientSecret, {
                        payment_method: {
                            card,
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
                if (error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(setupIntent);
                }
                // stripe.createToken(card).then(function(result) {
                //     if (result.error) {
                //     // Inform the user if there was an error.
                //     var errorElement = document.getElementById('card-errors');
                //     errorElement.textContent = result.error.message;
                //     } else {
                //     // Send the token to your server.
                //     stripeTokenHandler(result.token);
                //     }
                // });
            });
            // Submit the form with the token ID.
            function stripeTokenHandler(setupIntent) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'paymentMethod');
                hiddenInput.setAttribute('value', setupIntent.payment_method);
                form.appendChild(hiddenInput);
                // Submit the form
                form.submit();
            }
        </script>
    @endpush
</x-app-layout>