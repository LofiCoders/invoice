<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Bussiness Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your business's profile information.") }}
        </p>
    </header>

    <form method="post" action="{{ route('account.profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="address" :value="__('Business Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->profile->address ?? '')" required autofocus autocomplete="address"  style="width: 100% !important;"/>
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
        <div>
            <x-input-label for="website" :value="__('Business website')" />
            <x-text-input id="curreny" name="website" type="text" class="mt-1 block w-full" :value="old('website', $user->profile->website ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('website')" />
        </div>
        <div>
            <x-input-label for="twitter" :value="__('Business Phone')" />
            <x-text-input id="twitter" name="twitter" type="text" class="mt-1 block w-full" :value="old('twitter', $user->profile->twitter ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('twitter')" />
        </div>
        <div>
            <x-input-label for="instagram" :value="__('Business instagram')" />
            <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full" :value="old('instagram', $user->profile->instagram ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
        </div>
        <div>
            <x-input-label for="facebook" :value="__('Business facebook')" />
            <x-text-input id="facebook" name="facebook" type="text" class="mt-1 block w-full" :value="old('facebook', $user->profile->facebook ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('facebook')" />
        </div>
        <div>
            <x-input-label for="linkedin" :value="__('Business linkedin')" />
            <x-text-input id="linkedin" name="linkedin" type="text" class="mt-1 block w-full" :value="old('linkedin', $user->profile->linkedin ?? '')" required />
            <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
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