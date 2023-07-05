<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-8 lg:px-12 mr-2 ml-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('account.products.update',$product->id)}}"  class="py-6 px-6">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_id" value="{{auth()->id()}}">
                    <div class="mb-6">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $product->name}}" autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="product_code" :value="__('Product Code')" />
                        <x-text-input id="product_code" class="block mt-1 w-full" type="text" name="product_code" value="{{ $product->product_code}}" />
                        <x-input-error :messages="$errors->get('product_code')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="type" :value="__('Product Type')" />
                        <select id="type" name="type" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                    @foreach(App\Models\Product::PRODUCT_TYPE_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('type', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('type')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="price" :value="__('Product Price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{ $product->price}}" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>
                    
                    <div class="mb-6">
                        <x-input-label for="status" :value="__('Product Status')" />
                        <select id="status" name="status" :value="old('status')" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                    @foreach(App\Models\Product::STATUS_SELECT as $key => $label)
                                        <option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('product_code')" class="mt-2" />
                    </div>
                    <x-primary-button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Save product
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
