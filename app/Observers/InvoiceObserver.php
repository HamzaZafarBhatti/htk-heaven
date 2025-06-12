<?php

namespace App\Observers;

use App\Models\Invoice;

class InvoiceObserver
{
    public function creating(Invoice $invoice): void
    {
        if (empty($invoice->invoice_number)) {
            $invoice->invoice_number = 'SAS-INV-' . now()->format('Ymd') . '-' . strtoupper(uniqid());
        }
    }
    public function saving(Invoice $invoice): void
    {
        // Calculate totals if not set
        if (empty($invoice->total_amount)) {
            $subtotal = $invoice->items->sum(function ($item) {
                return $item->unit_price * $item->quantity;
            });

            $subtotal = number_format($subtotal, 2);

            $totalDiscount = $invoice->items->sum(function ($item) {
                return ($item->unit_price * $item->quantity * $item->discount / 100);
            });

            $totalDiscount = number_format($totalDiscount, 2);

            $taxableAmount = $subtotal - $totalDiscount;

            $totalTax = $invoice->items->sum(function ($item) use ($taxableAmount) {
                return ($item->unit_price * $item->quantity - ($item->unit_price * $item->quantity * $item->discount / 100)) * $item->tax_rate / 100;
            });

            $totalTax = number_format($totalTax, 2);

            $grandTotal = $taxableAmount + $totalTax;

            $grandTotal = number_format($grandTotal, 2);

            $invoice->total_amount = $subtotal;
            $invoice->discount_amount = $totalDiscount;
            $invoice->tax_amount = $totalTax;
            $invoice->grand_total = $grandTotal;
        }
    }
    /**
     * Handle the Invoice "created" event.
     */
    public function created(Invoice $invoice): void
    {
        //
    }

    /**
     * Handle the Invoice "updated" event.
     */
    public function updated(Invoice $invoice): void
    {
        //
    }

    /**
     * Handle the Invoice "deleted" event.
     */
    public function deleted(Invoice $invoice): void
    {
        //
    }

    /**
     * Handle the Invoice "restored" event.
     */
    public function restored(Invoice $invoice): void
    {
        //
    }

    /**
     * Handle the Invoice "force deleted" event.
     */
    public function forceDeleted(Invoice $invoice): void
    {
        //
    }
}
