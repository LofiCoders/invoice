<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Bussiness Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your business's profile information.") }}
        </p>
    </header>

    <form method="post" action="{{ route('account.profile.update') }}" class="mt-6 space-y-6 grid grid-cols-1 gap-4 sm:grid-cols-2">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="company" :value="__('Business name')" />
            <x-text-input id="company" name="company" type="text" class="mt-1 block w-full" :value="old('company', $user->profile->company ?? '')" required autofocus autocomplete="company"  style="width: 100% !important;"/>
            <x-input-error class="mt-2" :messages="$errors->get('company')" />
        </div>
        <div>
            <x-input-label for="currency" :value="__('Business Currency')" />
            <x-text-input id="curreny" name="currency" type="text" class="mt-1 block w-full" :value="old('currency', $user->profile->currency ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('currency')" />
        </div>
        <div>
            <x-input-label for="mobile_no" :value="__('Business Phone')" />
            <x-text-input id="mobile_no" name="mobile_no" type="text" class="mt-1 block w-full" :value="old('mobile_no', $user->profile->mobile_no ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('mobile_no')" />
        </div>
        <div>
            <x-input-label for="country" :value="__('Business Country')" />
            <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" :value="old('country', $user->profile->country ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
        </div>
        <div>
            <x-input-label for="state" :value="__('Business state')" />
            <x-text-input id="state" name="state" type="text" class="mt-1 block w-full" :value="old('state', $user->profile->state ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('state')" />
        </div>
        <div>
            <x-input-label for="city" :value="__('Business city')" />
            <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $user->profile->city ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('city')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>