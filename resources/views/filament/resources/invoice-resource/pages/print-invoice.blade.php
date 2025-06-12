
<x-filament-panels::page>
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-sm">
        <div class="flex justify-between flex-col items-center mb-8">
            <div class="mb-4">
                <img src="{{ asset('assets/images/update-17-06-2023/resources/main-menu-logo.png') }}" alt="Logo" class="mx-auto" width="25%">
            </div>
            <div class="text-center font-semibold">
                <p class="text-gray-600">{{ $site_settings->address }}</p>
                <p class="text-gray-600">Phone: {{ $site_settings->phone }}</p>
                <p class="text-gray-600">Email: {{ $site_settings->email }}</p>
            </div>
        </div>
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Invoice</h1>
                <p class="text-gray-600">#{{ $record->invoice_number }}</p>
            </div>
            <div class="text-right">
                <p class="text-gray-600">{{ $record->created_at->format('M d, Y') }}</p>
                <p class="text-gray-600">Due: {{ $record->due_date->format('M d, Y') }}</p>
            </div>
        </div>

        <div class="mb-8">
            <div>
                <h2 class="font-semibold text-gray-800">Customer</h2>
                <p class="text-gray-600">{{ $record->customer->name }}</p>
                <p class="text-gray-600">{{ $record->customer->address }}</p>
                <p class="text-gray-600">Phone: {{ $record->customer->phone }}</p>
            </div>
        </div>

        <div class="mb-8">
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Description</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qty
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit
                            Price</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Discount</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tax
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($record->items as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->quantity }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                £{{ number_format($item->unit_price, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->discount }}%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->tax_rate }}%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                £{{ number_format($item->total, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex justify-end">
            <div class="w-64">
                <div class="flex justify-between py-2 border-b">
                    <span class="font-medium">Subtotal:</span>
                    <span>£{{ number_format($record->total_amount, 2) }}</span>
                </div>
                <div class="flex justify-between py-2 border-b">
                    <span class="font-medium">Discount:</span>
                    <span>-£{{ number_format($record->discount_amount, 2) }}</span>
                </div>
                <div class="flex justify-between py-2 border-b">
                    <span class="font-medium">Tax:</span>
                    <span>£{{ number_format($record->tax_amount, 2) }}</span>
                </div>
                <div class="flex justify-between py-2 font-bold text-lg">
                    <span>Total:</span>
                    <span>£{{ number_format($record->grand_total, 2) }}</span>
                </div>
            </div>
        </div>

        @if ($record->notes)
            <div class="mt-8 pt-4 border-t">
                <h3 class="font-semibold text-gray-800">Notes:</h3>
                <p class="text-gray-600">{{ $record->notes }}</p>
            </div>
        @endif

        <div class="mt-12 pt-4 border-t text-center text-gray-500 text-sm">
            <p>Thank you for your business!</p>
        </div>
    </div>

    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #content,
            #content * {
                visibility: visible;
            }

            #content {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }

            .no-print {
                display: none !important;
            }
        }
    </style>
</x-filament-panels::page>
