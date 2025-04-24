<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} Accident Management Form - {{ $accident_management->ref_number }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            font-family: Arial, sans-serif;
        }

        body,
        body * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: inherit;
        }

        table {
            width: 100%;
        }

        td {
            padding-bottom: 0.75rem;
            vertical-align: top;
        }

        td p {
            margin: 0;
        }

        .w-50 {
            width: 50%;
        }

        .w-25 {
            width: 25%;
        }

        .w-33 {
            width: 33.333333%;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .font-bold {
            font-weight: 700;
        }

        th {
            text-align: left;
            border-bottom: 2px solid #ddd;
            padding: 0.25rem;
        }

        .bordered-table {
            border-collapse: collapse;
            border: none;
        }

        .bordered-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .bordered-table td {
            padding: 0.25rem;
        }
    </style>
</head>

<body>
    <div>
        <table>
            <tr>
                <td colspan="2">
                    <h1>Accident Management</h1>
                </td>
            </tr>
            <tr>
                <td class="w-50"></td>
                <td class="w-50" style="text-align: center">
                    <h2>File Ref</h2>
                    <h2>{{ $accident_management->ref_number }}</h2>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <h3>
                        Company:
                    </h3>
                </td>
                <td class="w-50" style="text-align: end">
                    <h3 class="font-bold">Amount to be Settled: {{ $accident_management->amount }}</h3>
                </td>
            </tr>
        </table>
        <hr>


        <div style="margin-top: 1rem; margin-bottom: 0.25rem;">
            <h2 class="font-bold mb-4">
                Please use the following details if you would like to make a call to third party or want to send a
                letter or email:
            </h2>
            <p class="mb-4"><strong>
                    Contact:
                </strong>
                {{ $accident_management->road_traffic_accident?->third_party?->tp_phone }}
            </p>
            <p class="mb-4"><strong>
                    Email:
                </strong>
                {{ $accident_management->road_traffic_accident?->third_party?->tp_email }}
            </p>
            <table>
                <tr>
                    <td class="w-50">
                        <p><strong>Your Policy Number:</strong>
                            {{ $accident_management->road_traffic_accident?->third_party?->tp_insurance_policy_number }}
                        </p>
                    </td>
                    <td class="w-50">
                        <p><strong>Your Claim Reference:</strong>
                            {{ $accident_management->tp_claim_reference }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p><strong>Your Policy Holder Name:</strong>
                            {{ $accident_management->road_traffic_accident?->third_party?->full_name }}
                        </p>
                    </td>
                    <td class="w-50">
                        <p><strong>Your Vehicle Registration:</strong>
                            {{ $accident_management->road_traffic_accident?->third_party?->tp_vehicle_registration_number }}
                        </p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-33">
                        <p><strong>Our Driver Name:</strong>
                            {{ $accident_management->road_traffic_accident->full_name }}
                        </p>
                    </td>
                    <td class="w-33">
                        <p><strong>Our Registration:</strong>
                            {{ $accident_management->road_traffic_accident->vehicle_registration_number }}
                        </p>
                    </td>
                    <td class="w-33">
                        <p><strong>Our Reference:</strong>
                            {{ $accident_management->ref_number }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <p>
                            <strong>
                                Date of Incident:
                            </strong>
                            {{ $accident_management->road_traffic_accident->accident_date->format('d/m/Y') }}
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <hr>

        <div style="margin-top: 1rem;">
            <h1 class="font-bold mb-4">
                {{ $accident_management->file_status->getLabel() }}
            </h1>
        </div>
        <div style="margin-bottom: 1rem;">
            <h2>Events</h2>
            <table class="bordered-table">
                <tr>
                    <th class="w-25">Date</th>
                    <th class="w-50">Comments</th>
                    <th class="w-25">Notes By</th>
                </tr>
                @foreach ($events as $item)
                    <tr>
                        <td>
                            <p>
                                {{ \Carbon\Carbon::parse($item['date'])?->format('d/m/Y') }}
                            </p>
                        </td>
                        <td>
                            <p>
                                {{ $item['comment'] }}
                            </p>
                        </td>
                        <td>
                            <p>
                                {{ $users[$item['user_id']] }}
                            </p>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div style="margin-bottom: 1rem;">
            <h2>Actions</h2>
            <table class="bordered-table">
                <tr>
                    <th class="w-25">Action Date</th>
                    <th class="w-50">Action Notes</th>
                    <th class="w-25">Action By</th>
                </tr>
                @foreach ($actions as $item)
                    <tr>
                        <td>
                            <p>
                                {{ \Carbon\Carbon::parse($item['date'])?->format('d/m/Y') }}
                            </p>
                        </td>
                        <td>
                            <p>
                                {{ $item['note'] }}
                            </p>
                        </td>
                        <td>
                            <p>
                                {{ $users[$item['user_id']] }}
                            </p>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
            <table>
                <tr>
                    <td class="w-33">
                        <p>
                            <strong>File Status</strong>
                        </p>
                        <p>
                            {{ $accident_management->file_status->getLabel() }}
                        </p>
                    </td>
                    <td class="w-33">
                        <p>
                            <strong>Ref</strong>
                        </p>
                        <p>
                            {{ $accident_management->ref_number }}
                        </p>
                    </td>
                    <td class="w-33">
                        <p>
                            <strong>Current Position</strong>
                        </p>
                        <p>
                            {{ $accident_management->current_position }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <p>
                            <strong>Status</strong>
                        </p>
                        <p>
                            {{ $accident_management->status->getLabel() }}
                        </p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-50">
                        <p>
                            <strong>File Generated on</strong>
                        </p>
                        <p>
                            {{ $accident_management->created_at->format('d/m/Y') }}
                        </p>
                    </td>
                    <td class="w-50">
                        <p>
                            <strong>RTA Ref</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident->rta_number }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p>
                            <strong>Our Client Name</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident->full_name }}
                        </p>
                    </td>
                    <td class="w-50">
                        <p>
                            <strong>Our Car Registration</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident->vehicle_registration_number }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p>
                            <strong>Our Client Email</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident->email }}
                        </p>
                    </td>
                    <td class="w-50">
                        <p>
                            <strong>Our Client Phone</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident->phone }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>
                            <strong>Date of Accident</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident->accident_date->format('d/m/Y') }}
                        </p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-25">
                        <p>
                            <strong>Claim Company</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident?->third_party?->tp_insurance_company }}
                        </p>
                    </td>
                    <td class="w-25">
                        <p>
                            <strong>3rd Party Claim Ref</strong>
                        </p>
                        <p>
                            {{ $accident_management->tp_claim_reference }}
                        </p>
                    </td>
                    <td class="w-25">
                        <p>
                            <strong>3rd Party Insurance Phone</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident?->third_party?->tp_insurance_company_phone }}
                        </p>
                    </td>
                    <td class="w-25">
                        <p>
                            <strong>3rd Party Insurance Email</strong>
                        </p>
                        <p>
                            {{ $accident_management->tp_insurance_company_email }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="w-25">
                        <p>
                            <strong>3rd Party Name</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident?->third_party?->full_name }}
                        </p>
                    </td>
                    <td class="w-25">
                        <p>
                            <strong>3rd Party Policy Number</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident?->third_party?->tp_insurance_policy_number }}
                        </p>
                    </td>
                    <td class="w-25">
                        <p>
                            <strong>3rd Party Registration</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident?->third_party?->tp_vehicle_registration_number }}
                        </p>
                    </td>
                    <td class="w-25">
                        <p>
                            <strong>3rd Party Phone</strong>
                        </p>
                        <p>
                            {{ $accident_management->road_traffic_accident?->third_party?->tp_phone }}
                        </p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-50">
                        <p>
                            <strong>Amount to be Setteled?</strong>
                        </p>
                        <p>
                            {{ $accident_management->amount }}
                        </p>
                    </td>
                    <td class="w-50">
                        <p>
                            <strong>Vehicle Condition</strong>
                        </p>
                        <p>
                            {{ $accident_management->vehicle_condition->getLabel() }}
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
