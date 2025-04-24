<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} RTA Form - {{ $rta->ref_number }}</title>
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

        .w-16 {
            width: 16.666667%;
        }

        .w-33 {
            width: 33.333333%;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-semibold {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div>
        <div
            style="display: table; vertical-align: middle; text-align: center; border-bottom: 1px solid; padding-top: 1.5rem; padding-bottom: 1.5rem; width: 100%;">
            <!-- Logo -->
            <div style="display: table-cell; vertical-align: middle;">
                <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('assets/images/update-17-06-2023/resources/main-menu-logo.png'))) }}"
                    alt="{{ config('app.name') }} Logo" style="width: 15rem;" />
            </div>

            <!-- Company Info -->
            <div
                style="font-size: 0.875rem; line-height: 1.25rem; display: table-cell; vertical-align: middle; text-align: left; width: 55%;">
                <p class="font-bold" style="font-size: 1.125rem; line-height: 1.75rem;">{{ config('app.name') }}</p>
                <p><span class="font-semibold">Registered Address:</span> {{ $site_settings->address }}</p>
                <p><span class="font-semibold">Email:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $site_settings->email }}
                </p>
                <p><span class="font-semibold">Phone:</span>&nbsp;&nbsp;&nbsp;{{ $site_settings->phone }} /
                    {{ $site_settings->mobile }}
                </p>
                <p><span class="font-semibold">WEB:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ route('home.index') }}
                </p>
                <p style="font-size: 0.75rem; line-height: 1rem;">
                    Company Registered in England and Wales. Company Registration Number 09163645
                </p>
            </div>
        </div>

        <div style="margin-top: 1rem; margin-bottom: 1rem;">
            <h1 style="font-size: 1.875rem; line-height: 2.25rem;" class="font-bold">
                Swift Accident Solutions RTA Form
            </h1>
            <p>Please fill in the form below to report an accident.</p>
        </div>

        <div class="mb-8">
            <table>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Accident Reporting Date</p>
                        <p>{{ $rta->accident_reporting_date->format('d/m/Y') }}</p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">RTA Reference</p>
                        <p>{{ $rta->rta_number }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Driver Reference (Driver Number)</p>
                        <p>
                            @if ($rta->driver_reference)
                                {{ $rta->driver_reference }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Agreement Reference Number</p>
                        <p>
                            @if ($rta->agreement_reference)
                                {{ $rta->agreement_reference }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Driver Details -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Driver Details</h2>
            <table>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Name</p>
                        <p>{{ $rta->full_name }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Date of Birth</p>
                        <p>{{ $rta->dob->format('d/m/Y') }}</p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Phone</p>
                        <p>{{ $rta->phone }}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Address</p>
                        <p>{{ $rta->full_address }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Email</p>
                        <p>{{ $rta->email }}</p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Occupation</p>
                        <p>
                            @if ($rta->occupation)
                                {{ $rta->occupation }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">National Insurance Number</p>
                        <p>{{ $rta->nin }}</p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Type of Injury</p>
                        <p>
                            @if ($rta->injury_type)
                                {{ $rta->injury_type }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-25">
                        <p class="font-bold">Driver's Insurance Company</p>
                        <p>
                            @if ($rta->insurance_company)
                                {{ $rta->insurance_company }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-25">
                        <p class="font-bold">Insurance Policy Number</p>
                        <p>
                            @if ($rta->insurance_policy_number)
                                {{ $rta->insurance_policy_number }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-25">
                        <p class="font-bold">Cover Type</p>
                        <p>{{ $rta->cover_type->name }}</p>
                    </td>
                    <td class="w-25">
                        <p class="font-bold">Insurance Company Phone</p>
                        <p>
                            @if ($rta->insurance_company_phone)
                                {{ $rta->insurance_company_phone }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p class="font-bold">Did Driver Report to the police?</p>
                        <p>{{ $rta->is_police_reported ? 'Yes' : 'No' }}</p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Vehicle Details -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Vehicle Details</h2>
            <table>
                <tr>
                    <td class="w-16" colspan="2">
                        <p class="font-bold">Vehicle Registration</p>
                        <p>{{ $rta->vehicle_registration_number }}</p>
                    </td>
                    <td class="w-16">
                        <p class="font-bold">Make</p>
                        <p>{{ $rta->vehicle_make }}</p>
                    </td>
                    <td class="w-16">
                        <p class="font-bold">Model</p>
                        <p>{{ $rta->vehicle_model }}</p>
                    </td>
                    <td class="w-16">
                        <p class="font-bold">Colour</p>
                        <p>{{ $rta->vehicle_colour }}</p>
                    </td>
                    <td class="w-16">
                        <p class="font-bold">Year</p>
                        <p>{{ $rta->vehicle_year }}</p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Vehicle Road Worthy</p>
                        <p>{{ $rta->is_vehicle_road_worthy ? 'Yes' : 'No' }}</p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Vehicle Damage</p>
                        <p>
                            @if ($rta->vehicle_damage)
                                {{ $rta->vehicle_damage }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Third Party Details -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Third Party Details</h2>
            <table>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Name</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->full_name }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Address</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->full_address }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Phone</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_phone }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Email</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_email }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-16" colspan="2">
                        <p class="font-bold">Vehicle Registration</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_vehicle_registration_number }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-16">
                        <p class="font-bold">Make</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_vehicle_make }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-16">
                        <p class="font-bold">Model</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_vehicle_model }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-16">
                        <p class="font-bold">Colour</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_vehicle_colour }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-16">
                        <p class="font-bold">Year</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_vehicle_year }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-33">
                        <p class="font-bold">TP Insurance Company</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_insurance_company }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-33">
                        <p class="font-bold">Insurance Policy Number</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_insurance_policy_number }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-33">
                        <p class="font-bold">Insurance Company Phone</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_insurance_company_phone }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Occupancy and Injuries -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Occupancies in the Vehicle</h2>
            <table>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Number of Pessengers in HTK Driver's Vehicle</p>
                        <p>
                            @if ($rta->passengers_count)
                                {{ $rta->passengers_count }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Number of Pessenger in Third Party Vehicle</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_passengers_count }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Is Any of pessenger injured?</p>
                        <p>{{ $rta->is_passenger_injured ? 'Yes' : 'No' }}</p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Witness -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Independent Witness</h2>
            <table>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Name</p>
                        <p>
                            @if ($rta->witness)
                                {{ $rta->witness->full_name }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Address</p>
                        <p>
                            @if ($rta->witness)
                                {{ $rta->witness->full_address }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Phone</p>
                        <p>
                            @if ($rta->witness)
                                {{ $rta->witness->witness_phone }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Email</p>
                        <p>
                            @if ($rta->witness)
                                {{ $rta->witness->witness_email }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">CCTV</p>
                        <p>{{ $rta->witness?->is_cctv ? 'Yes' : 'No' }}</p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Accident Details -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Accident Details</h2>
            <table>
                <tr>
                    <td class="w-33">
                        <p class="font-bold">Date of Accident</p>
                        <p>{{ $rta->accident_date->format('d/m/Y') }}</p>
                    </td>
                    <td class="w-33">
                        <p class="font-bold">Time</p>
                        <p>{{ $rta->accident_time->format('H:i') }}</p>
                    </td>
                    <td class="w-33">
                        <p class="font-bold">Location/Postcode</p>
                        <p>{{ $rta->accident_location }}</p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Purpose of Journey</p>
                        <p>
                            @if ($rta->journey_purpose)
                                {{ $rta->journey_purpose }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Was the driver wearing seat belt</p>
                        <p>{{ $rta->was_driver_wearing_seat_belt ? 'Yes' : 'No' }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Weather Condition</p>
                        <p>
                            @if ($rta->weather_condition)
                                {{ $rta->weather_condition }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Road Condition</p>
                        <p>
                            @if ($rta->road_condition)
                                {{ $rta->road_condition }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Speed of HTK Driver's Vehicle</p>
                        <p>
                            @if ($rta->vehicle_speed)
                                {{ $rta->vehicle_speed }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Speed of Third Party Vehicle</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_vehicle_speed }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Third Party Vehicle Damage</p>
                        <p>
                            @if ($rta->third_party)
                                {{ $rta->third_party->tp_vehicle_damage }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">HTK Vehicle Damage</p>
                        <p>
                            @if ($rta->vehicle_damage)
                                {{ $rta->vehicle_damage }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Police Reference Number</p>
                        <p>
                            @if ($rta->police_reference_number)
                                {{ $rta->police_reference_number }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Circumstances</p>
                        <p>
                            @if ($rta->circumstances)
                                {{ $rta->circumstances }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Notes</p>
                        <p>
                            @if ($rta->notes)
                                {{ $rta->notes }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">The content of this statement are true and best to my Knowledge and
                            belief.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="font-bold">Name: {{ $rta->full_name }} {{ $rta->full_address }} Date of Birth:
                            {{ $rta->dob->format('d/m/Y') }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <p class="font-bold">Signature</p>
                        <p>
                            @if ($rta->signature)
                                <img src="{{ $rta->signature }}" alt=""
                                    style="width: 20rem; margin-top: 1.25rem;">
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                    <td class="w-50">
                        <p class="font-bold">Date</p>
                        <p>
                            @if ($rta->signature)
                                {{ $rta->signature_date?->format('d/m/Y') }}
                            @else
                                &nbsp;
                            @endif
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
