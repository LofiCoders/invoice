<x-app-layout>
	<x-slot name="header">
	    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
	            {{ __('Setting') }}
	        </h2>
	</x-slot>
	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mr-2 ml-2 items-center">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
  				<div class="relative flex items-center space-x-3 rounded-lg bg-white px-6 py-5 shadow-sm">
    				 <div class="max-w-xl">
                    @include('settings.parts.business')
                </div>
                
  				</div>
  				<div class="relative flex items-center space-x-3 rounded-lg bg-white px-6 py-5 shadow-sm">
    				 <div class="max-w-xl">
                    @include('settings.parts.address')
                </div>
  				</div>

			</div>
        </div>
    </div>
</x-app-layout>
 