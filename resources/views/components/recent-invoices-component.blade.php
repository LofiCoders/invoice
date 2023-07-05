<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg mt-4 mb-4">
    <table class="min-w-full divide-y divide-gray-300">
        <thead class="bg-gray-50">
        <tr>
                        <th scope="col"
                            class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                            Invoice No
                        </th>
                        <th scope="col"
                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Company
                        </th>
                        <th scope="col"
                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Customer
                        </th>
                        <th scope="col"
                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Email
                        </th>
                        <th scope="col"
                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Amount
                        </th>
                        <th scope="col"
                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                            Tax
                        </th>

                        <th scope="col"
                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Status
                        </th>
                        <th scope="col" class="relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-0">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse($invoices as $invoice)
                        <tr>
                            <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">{{ $invoice->invoice_number ?? '' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">{{ $invoice->customer->company ?? '' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">{{ $invoice->customer->name ?? '' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $invoice->customer->email ?? '' }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $invoice->total }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $invoice->tax }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $invoice->status }}</td>
                            <td class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <a href="" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                        class="sr-only">, AAPS0L</span></a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="8" class="bg-yellow-300"> There are no available data to show</td></tr>
                    @endforelse
                    </tbody>
    </table>
</div>
