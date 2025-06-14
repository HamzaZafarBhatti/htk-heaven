    <div id="invoice-print-content">
        <div class="invoice-container">
            <div class="invoice-header">
                <div class="logo-container">
                    @if ($invoice->logo)
                        <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('storage/' . $invoice->logo))) }}"
                            alt="Logo" class="invoice-logo">
                    @else
                        <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('assets/images/update-17-06-2023/resources/main-menu-logo.png'))) }}"
                            alt="Logo" class="invoice-logo">
                    @endif
                </div>
                <div class="shop-info">
                    @if ($invoice->company_name)
                        <h2 style="margin: 0;">{{ $invoice->company_name }}</h2>
                    @endif
                    @if ($invoice->company_address)
                        <p>{{ $invoice->company_address }}</p>
                    @else
                        <p>{{ $site_settings->address }}</p>
                    @endif
                    @if ($invoice->company_phone)
                        <p>Phone: {{ $invoice->company_phone }}</p>
                    @else
                        <p>Phone: {{ $site_settings->phone }}</p>
                    @endif
                    @if ($invoice->company_email)
                        <p>Email: {{ $invoice->company_email }}</p>
                    @else
                        <p>Email: {{ $site_settings->email }}</p>
                    @endif
                </div>
            </div>

            <div class="invoice-title-section">
                <div class="invoice-title">
                    <h1>Invoice</h1>
                    <p class="invoice-number">#{{ $invoice->invoice_number }}</p>
                </div>
                <div class="invoice-dates">
                    <p>{{ $invoice->created_at->format('M d, Y') }}</p>
                    <p>Due: {{ $invoice->due_date->format('M d, Y') }}</p>
                </div>
            </div>

            <div class="customer-section">
                <h2>Customer</h2>
                <p>{{ $invoice->customer->name }}</p>
                <p>{{ $invoice->customer->address }}</p>
                <p>Phone: {{ $invoice->customer->phone }}</p>
            </div>

            <div class="invoice-subtitle">
                <h2 style="margin: 0;">{{ $invoice->title }}</h2>
            </div>

            <table class="invoice-items">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                        <th>Discount</th>
                        <th>VAT</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoice->items as $item)
                        <tr>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>£{{ number_format($item->unit_price, 2) }}</td>
                            <td>{{ $item->discount }}%</td>
                            <td>{{ $item->tax_rate }}%</td>
                            <td>£{{ number_format($item->total, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="invoice-totals">
                <div class="total-row">
                    <span>Subtotal:</span>
                    <span>£{{ number_format($invoice->total_amount, 2) }}</span>
                </div>
                <div class="total-row">
                    <span>Discount:</span>
                    <span>-£{{ number_format($invoice->discount_amount, 2) }}</span>
                </div>
                <div class="total-row">
                    <span>VAT:</span>
                    <span>£{{ number_format($invoice->tax_amount, 2) }}</span>
                </div>
                <div class="grand-total">
                    <span>Total:</span>
                    <span>£{{ number_format($invoice->grand_total, 2) }}</span>
                </div>
            </div>

            @if ($invoice->notes)
                <div class="invoice-notes">
                    <h3>Notes:</h3>
                    <p>{{ $invoice->notes }}</p>
                </div>
            @endif

            <div class="invoice-footer">
                <p>Thank you for your business!</p>
            </div>
        </div>
    </div>

    <style>
        /* Base Styles */
        #invoice-print-content {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.5;
        }

        .invoice-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .invoice-logo {
            max-width: 150px;
            margin-bottom: 10px;
        }

        .shop-info p {
            margin: 0;
            color: #666;
        }

        .invoice-title-section {
            /* display: flex;
            justify-content: space-between; */
            margin-bottom: 10px;
        }

        .invoice-title h1 {
            font-size: 24px;
            margin: 0 0 5px 0;
            color: #222;
        }

        .invoice-number {
            color: #666;
            margin: 0;
        }

        .invoice-dates {
            float: right;
        }

        .invoice-dates p {
            margin: 5px 0;
            color: #666;
            text-align: right;
        }

        .customer-section{
            margin-bottom: 10px;
        }

        .invoice-subtitle {
            text-align: center;
            margin-bottom: 20px;
        }

        .customer-section h2{
            font-size: 18px;
            margin: 0 0 10px 0;
            color: #222;
        }

        .customer-section p {
            margin: 0;
            color: #666;
        }

        .invoice-items {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .invoice-items th {
            background: #f5f5f5;
            padding: 10px;
            text-align: left;
            font-weight: bold;
            color: #555;
            border-bottom: 1px solid #ddd;
        }

        .invoice-items td {
            padding: 10px;
            border-bottom: 1px solid #eee;
            color: #666;
        }

        .invoice-items tr:last-child td {
            border-bottom: none;
        }

        .invoice-totals {
            width: 250px;
            margin-left: auto;
            margin-bottom: 30px;
        }

        .total-row {
            /* display: flex;
            gap: 30px; */
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .grand-total {
            /* display: flex;
            gap: 30px; */
            padding: 12px 0;
            font-weight: bold;
            font-size: 18px;
        }

        .total-row span:nth-child(2),
        .grand-total span:nth-child(2) {
            float: right;
        }

        .invoice-notes {
            margin-bottom: 30px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .invoice-notes h3 {
            font-size: 16px;
            margin: 0 0 10px 0;
            color: #222;
        }

        .invoice-notes p {
            color: #666;
            margin: 0;
        }

        .invoice-footer {
            text-align: center;
            padding-top: 15px;
            border-top: 1px solid #eee;
            color: #999;
            font-size: 14px;
        }

        /* Print Styles */
        @media print {
            body * {
                visibility: hidden;
                margin: 0;
                padding: 0;
            }

            #invoice-print-content,
            #invoice-print-content * {
                visibility: visible;
            }

            #invoice-print-content {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                padding: 0;
                margin: 0;
                box-shadow: none;
            }

            .invoice-container {
                box-shadow: none;
                padding: 20px;
                max-width: 100%;
            }

            @page {
                size: A4;
                margin: 10mm;
            }

            .no-print {
                display: none !important;
            }
        }
    </style>
