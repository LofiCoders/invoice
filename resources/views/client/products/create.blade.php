<x-app-layout>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    		@if(session('message'))
                <div class="bg-white">
    				<div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8">
      					<div class="mx-auto max-w-4xl">
      						<div class="rounded-md bg-red-50 p-4">
      							<div class="flex">
      								<div class="flex-shrink-0">
      									<svg class="h-5 w-5 text-red-400" x-description="Heroicon name: mini/check-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"></path>
										</svg>
									</div>
									<div class="ml-3">
										<p class="text-sm font-medium text-red-800">{{ session('message') }}</p>
									</div>
									<div class="ml-auto pl-3">
										<div class="-mx-1.5 -my-1.5">
											<button type="button" class="inline-flex rounded-md bg-red-50 p-1.5 text-red-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:ring-offset-red-50">
												<span class="sr-only">Dismiss</span>
												<svg class="h-5 w-5" x-description="Heroicon name: mini/x-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
													<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path>
												</svg>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            @endif
	    	<form action="{{ route("account.products.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
	      		<div class="shadow sm:overflow-hidden sm:rounded-md">
			        <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
				        <div>
				            <h3 class="text-lg font-medium leading-6 text-gray-900">Add New Product</h3>
				        </div>

			          	<div class="grid grid-cols-6 gap-6">
				            <div class="col-span-6 sm:col-span-3">
				            	<x-input-label for="name" :value="__('Name')" />
            					<x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
            					<x-input-error :messages="$errors->get('name')" class="mt-2" />
        					</div>

				            <div class="col-span-6 sm:col-span-3">
						        <x-input-label for="product_code" :value="__('Product Code')" />
						        <x-text-input id="product_code" class="block mt-1 w-full" type="text" name="product_code" :value="old('product_code')" />
						        <x-input-error :messages="$errors->get('product_code')" class="mt-2" />
				            </div>

				            <div class="col-span-6 sm:col-span-3">
			              		<x-input-label for="type" :value="__('Product Type')" />
					            <select id="type" name="type" :value="old('type')" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
					            	<option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
					            	@foreach(App\Models\Product::PRODUCT_TYPE_SELECT as $key => $label)
                        				<option value="{{ $key }}" {{ old('type', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    				@endforeach

					            </select>
					            <x-input-error :messages="$errors->get('type')" class="mt-2" />
			            	</div>
			            	<div class="col-span-6 sm:col-span-3">
			              		<x-input-label for="product_price" :value="__('Product Price')" />
			              		<x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" />
            					<x-input-error :messages="$errors->get('price')" class="mt-2" />
			            	</div>


				            <div class="col-span-6 sm:col-span-6 lg:col-span-3">
				           		<x-input-label for="product_description" :value="__('Product Description')" />
				              	<textarea type="text" rows="4" cols="3" name="description" id="description" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
				              	</textarea>
				            </div>

				            <div class="col-span-6 sm:col-span-3 lg:col-span-3">
				                <x-input-label for="status" :value="__('Product Status')" />
					            <select id="status" name="status" :value="old('status')" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
					            	<option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
					            	@foreach(App\Models\Product::STATUS_SELECT as $key => $label)
                        				<option value="{{ $key }}" {{ old('status', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    				@endforeach

					            </select>
					            <x-input-error :messages="$errors->get('product_code')" class="mt-2" />
				            </div>
			          	</div>
			        </div>
			        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
			          	<x-primary-button type="submit">
			          		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
			          		SAVE PRODUCT
			          </x-primary-button>
                    </div>
	      		</div>
	    	</form>
    	</div>
    </div>

</x-app-layout>
