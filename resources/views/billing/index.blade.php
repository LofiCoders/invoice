<x-app-layout>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div x-data="{ open: false }">
                <div class="flex items-center justify-center py-8 mb-8">
                    <button type="button" class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" role="switch" aria-checked="false" x-ref="switch" x-state:open="Enabled" x-state:!open="Not Enabled" :class="{ 'bg-indigo-600': open, 'bg-gray-200': !(open) }" aria-labelledby="annual-billing-label" :aria-checked="open.toString()" @click="open = !open">
                        <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out" x-state:open="Enabled" x-state:!open="Not Enabled" :class="{ 'translate-x-5': open, 'translate-x-0': !(open) }"></span>
                    </button>

                    <span class="ml-3" id="annual-billing-label" @click="open = !open; $refs.switch.focus()">
                        <span class="text-sm font-medium text-gray-900">Annual billing</span>
                        <span class="text-sm text-gray-500">(Save 10%)</span>
                    </span>
                </div>
                <div x-show="!open" class="space-y-4 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                        @forelse($monthlyPlans as $monthly)
                        <div class="relative flex flex-col rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900">{{ $monthly->name }}</h3>
                                @if($monthly->name=='Professional Plan')
                                <p class="absolute top-0 -translate-y-1/2 transform rounded-full bg-indigo-500 py-1.5 px-4 text-sm font-semibold text-white">Most popular</p>
                                @endif
                                <p class="mt-4 flex items-baseline text-gray-900">
                                    <span class="text-5xl font-bold tracking-tight">{{ config('saas.currency')}}{{ number_format($monthly->price/100) }}</span>
                                    <span class="ml-1 text-xl font-semibold">/month</span>
                                </p>
                                <p class="mt-6 text-gray-500">The essentials to provide your best work for clients.</p>

                                <!-- Feature list -->
                                <ul role="list" class="mt-6 space-y-6">
                                  
                                                        <li class="flex">
                                                          <svg class="h-6 w-6 flex-shrink-0 text-indigo-500" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                                          <span class="ml-3 text-gray-500">5 products</span>
                                                        </li>
                                                      
                                                        <li class="flex">
                                                          <svg class="h-6 w-6 flex-shrink-0 text-indigo-500" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                                          <span class="ml-3 text-gray-500">Up to 1,000 subscribers</span>
                                                        </li>
                                                      
                                                        <li class="flex">
                                                          <svg class="h-6 w-6 flex-shrink-0 text-indigo-500" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                                          <span class="ml-3 text-gray-500">Basic analytics</span>
                                                        </li>
                                                      
                                                        <li class="flex">
                                                          <svg class="h-6 w-6 flex-shrink-0 text-indigo-500" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                                          <span class="ml-3 text-gray-500">48-hour support response time</span>
                                                        </li>
                                  
                                </ul>
                            </div>
                            <a href={{ route('checkout', $monthly->slug) }} class="bg-indigo-500 text-white hover:bg-indigo-800 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Monthly billing</a>
                        </div>
                        @empty
                        <div class="bg-yellow-300">There are no Monthly Plans</div>
                        @endforelse
                    </div>
                    <div x-show="open" class="space-y-4 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                        @forelse($yearlyPlans as $monthly)
                        <div class="relative flex flex-col rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900">{{ $monthly->name }}</h3>
                                @if($monthly->name=='Professional Plan')
                                <p class="absolute top-0 -translate-y-1/2 transform rounded-full bg-indigo-500 py-1.5 px-4 text-sm font-semibold text-white">Most popular</p>
                                @endif
                                <p class="mt-4 flex items-baseline text-gray-900">
                                    <span class="text-5xl font-bold tracking-tight">{{ config('saas.currency')}}{{ number_format($monthly->price/100) }}</span>
                                    <span class="ml-1 text-xl font-semibold">/month</span>
                                </p>
                                <p class="mt-6 text-gray-500">The essentials to provide your best work for clients.</p>

                                <!-- Feature list -->
                                <ul role="list" class="mt-6 space-y-6">
                                  
                                                        <li class="flex">
                                                          <svg class="h-6 w-6 flex-shrink-0 text-indigo-500" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                                          <span class="ml-3 text-gray-500">5 products</span>
                                                        </li>
                                                      
                                                        <li class="flex">
                                                          <svg class="h-6 w-6 flex-shrink-0 text-indigo-500" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                                          <span class="ml-3 text-gray-500">Up to 1,000 subscribers</span>
                                                        </li>
                                                      
                                                        <li class="flex">
                                                          <svg class="h-6 w-6 flex-shrink-0 text-indigo-500" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                                          <span class="ml-3 text-gray-500">Basic analytics</span>
                                                        </li>
                                                      
                                                        <li class="flex">
                                                          <svg class="h-6 w-6 flex-shrink-0 text-indigo-500" x-description="Heroicon name: outline/check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                                          <span class="ml-3 text-gray-500">48-hour support response time</span>
                                                        </li>
                                  
                                </ul>
                            </div>
                            <a href="#" class="bg-indigo-500 text-white hover:bg-indigo-700 mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium">Monthly billing</a>
                        </div>
                        @empty
                        <div class="bg-yellow-300">There are no Monthly Plans</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</x-app-layout>