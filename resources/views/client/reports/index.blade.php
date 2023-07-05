<x-app-layout>
	<nav aria-label="Progress">
		<ol role="list" class="divide-y divide-gray-300 bg-white border border-b-gray-300 md:flex md:divide-y-0">
			<li class="relative md:flex md:flex-1">
				<!-- Completed Step -->
				<a href="{{ route('account.dashboard')}}" class="group flex w-full items-center">
					<span class="flex items-center px-6 py-4 text-sm font-medium">
						<span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-slate-600 group-hover:bg-slate-800">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
								<path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
								<path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
							</svg>
						</span>
						<span class="ml-4 text-sm font-medium text-gray-900">Dashboard</span>
					</span>
				</a>
				<!-- Arrow separator for lg screens and up -->
				<div class="absolute right-0 top-0 hidden h-full w-5 md:block" aria-hidden="true">
					<svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
						<path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
					</svg>
				</div>
			</li>
			<li class="relative md:flex md:flex-1">
				<!-- Current Step -->
				<a href="#" class="flex items-center px-6 py-4 text-sm font-medium" aria-current="step">
					<span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-indigo-600 group-hover:bg-indigo-800">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
							</svg>
						</span>
					<span class="ml-4 text-sm font-medium text-gray-900">Report</span>
				</a>
			</li>
		</ol>
	</nav>

	<div class="py-8 mr-2 ml-2">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<x-client-stats/>
			<x-invoice-stats/>
			<x-report-table-component/>
		</div>
	</div>
</x-app-layout>