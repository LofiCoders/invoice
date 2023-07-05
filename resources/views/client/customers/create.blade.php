<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-8 lg:px-12 mr-2 ml-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('account.customers.store')}}" class="py-6 px-6">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <div class="mb-6">
                        <x-input-label for="name" :value="__('Name')" class="required" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name')}}" autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email')}}"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="phone_number" :value="__('Phone Number')" />
                        <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" value="{{ old('phone_number')}}" />
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="company" :value="__('Company Name')" />
                        <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" value="{{ old('company')}}" />
                        <x-input-error :messages="$errors->get('company')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="website" :value="__('Website')" />
                        <x-text-input id="website" class="block mt-1 w-full" type="text" name="website" value="{{ old('website')}}" />
                        <x-input-error :messages="$errors->get('website')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="country" :value="__('Country')" />
                        
                
                        <select id="country_id" name="country_id" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('product_code')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="state" :value="__('State')" />
                        <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" value="{{ old('state')}}" />
                        <x-input-error :messages="$errors->get('state')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="city" :value="__('City')" />
                        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" value="{{ old('city')}}" />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ old('address')}}" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                    
                    
                    
                    
                    <x-primary-button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Save customer
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
