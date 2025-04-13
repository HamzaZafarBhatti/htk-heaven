<x-filament::page>
    <div class="p-6 bg-white border rounded shadow space-y-4">
        <div class="flex justify-between items-center">
            <div>
                <strong class="text-lg">File Ref:</strong>
                <div>{{ $record->ref_number }}</div>
            </div>
            <div class="text-right">
                <strong>Amount to be Settled:</strong>
                <div class="text-xl font-bold text-green-700">
                    {{ Number::currency($record->settlement_amount, in: 'GBP', locale: 'en') }}
                </div>
            </div>
        </div>

        <div class="border-t pt-4">
            <p class="font-semibold">Company:</p>
            <p>{{ $record->road_traffic_accident->third_party->tp_insurance_company ?? 'Nil' }}</p>
        </div>

        <div class="border-t pt-4">
            <p class="font-semibold">Please use the following details if you would like to make a call to third party or
                want to send a letter or email:</p>
            <p class="mt-3"><strong>Contact:</strong>
                {{ $record->road_traffic_accident->third_party->tp_insurance_company_phone ?? 'Nil' }}</p>
            <p class="mt-3"><strong>Email:</strong> {{ $record->tp_insurance_company_email ?? 'Nil' }}</p>

            <div class="mt-3">
                <p class="font-bold"><em>Your Policy Number:</em>
                    {{ $record->third_party->tp_insurance_policy_number ?? 'Nil' }}</p>
                <p class="font-bold"><em>Your Claim Reference:</em> {{ $record->tp_claim_reference ?? 'Nil' }}</p>
                <p class="font-bold"><em>Your Policy Holder Name:</em> {{ $record->road_traffic_accident->third_party->full_name ?? 'Nil' }}</p>
                <p class="font-bold"><em>Your Vehicle Registration:</em> {{ $record->road_traffic_accident->third_party->tp_vehicle_registration_number ?? 'Nil' }}</p>
            </div>

            <div class="mt-3">
                <p><strong>Our Driver Name:</strong> {{ $record->road_traffic_accident->full_name }}</p>
                <p><strong>Our Registration:</strong> {{ $record->road_traffic_accident->vehicle_registration_number }}</p>
                <p><strong>Our Reference:</strong> {{ $record->road_traffic_accident->rta_number }}</p>
            </div>

            <p class="mt-3"><strong>Date of Incident:</strong>
                {{ \Carbon\Carbon::parse($record->incident_date)->format('d/m/Y') }}</p>
        </div>
    </div>
</x-filament::page>
