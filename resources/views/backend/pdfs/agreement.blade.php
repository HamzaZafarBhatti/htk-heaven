<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Credit Hire Agreement - {{ config('app.name') }}</title>
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

        .mb-2 {
            margin-bottom: .5rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .font-bold {
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div>
        <h1 class="mb-2">Credit Hire Agreement - {{ $agreement->company_name }}</h1>
        <p class="mb-4">
            Please note this is a legally binding contract only sign this if you agree to be bound by all its terms. The
            hire period on this document is legally binding. You will be obliged to pay the entire length of the
            contract even if you wish to return the car early. Please read all terms and conditions before you sign this
            agreement set out by {{ $agreement->company_name }} on this hire agreement. This Agreement may be signed by
            electronic
            signature (as defined in the Electronic Communications Act 2000) and shall have the same legal effect,
            validity and enforceability as if signed by hand written signature to the extent and as provided for in any
            applicable law (including the Electronic Communications Act 2000).
        </p>
        <table class="mb-2">
            <tr>
                <td class="w-25">
                    <p class="font-bold">
                        Agreement Start Date
                    </p>
                    <p>
                        {{ $agreement->start_date->format('d/m/Y') }}
                    </p>
                </td>
                <td class="w-25">
                    <p class="font-bold">
                        Start Time
                    </p>
                    <p>
                        {{ $agreement->start_time->format('H:i') }}
                    </p>
                </td>
                <td class="w-25">
                    <p class="font-bold">
                        Agreement End Date
                    </p>
                    <p>
                        {{ $agreement->end_date->format('d/m/Y') }}
                    </p>
                </td>
                <td class="w-25">
                    <p class="font-bold">
                        End Time
                    </p>
                    <p>
                        {{ $agreement->end_time->format('H:i') }}
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="font-bold">
                        Reference Number (Driver Number)
                    </p>
                    <p>
                        {{ $agreement->driver_reference }}
                    </p>
                </td>
                <td colspan="2">
                    <p class="font-bold">
                        {{ $agreement->ref_number }}
                    </p>
                </td>
            </tr>
        </table>
        <h2 class="mb-4">Hirer Details</h2>
        <table>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Name
                    </p>
                    <p>
                        {{ $agreement->full_name }}
                    </p>
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Date of Birth
                    </p>
                    <p>
                        {{ $agreement->dob->format('d/m/Y') }}
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="font-bold">
                        Address
                    </p>
                    <p>
                        {{ $agreement->full_address }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Email
                    </p>
                    <p>
                        {{ $agreement->email }}
                    </p>
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Phone
                    </p>
                    <p>
                        {{ $agreement->phone }}
                    </p>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="w-33">
                    <p class="font-bold">
                        Driving License Number
                    </p>
                    <p>
                        {{ $agreement->license_number }}
                    </p>
                </td>
                <td class="w-33">
                    <p class="font-bold">
                        DVLA Expiry Date
                    </p>
                    <p>
                        {{ $agreement->license_expiry_date->format('d/m/Y') }}
                    </p>
                </td>
                <td class="w-33">
                    <p class="font-bold">
                        Country License Issued
                    </p>
                    <p>
                        {{ $agreement->license_issuing_country->getLabel() }}
                    </p>
                </td>
            </tr>
        </table>
        <table class="mb-2">
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        PCO Badge Number
                    </p>
                    <p>
                        {{ $agreement->pco_badge_number }}
                    </p>
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        PCO Badge Expiry
                    </p>
                    <p>
                        {{ $agreement->pco_badge_expiry_date->format('d/m/Y') }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        National Insurance Number
                    </p>
                    <p>
                        {{ $agreement->nin }}
                    </p>
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Nationality
                    </p>
                    <p>
                        {{ $agreement->nationality }}
                    </p>
                </td>
            </tr>
        </table>
        <h2 class="mb-4">Vehicle Details ( Vehicle is owned by {{ $agreement->company_name }})</h2>
        <table class="mb-2">
            <tr>
                <td class="w-25">
                    <p class="font-bold">
                        Vehicle Registration
                    </p>
                    <p>
                        {{ $agreement->vehicle_registration_number }}
                    </p>
                </td>
                <td class="w-25">
                    <p class="font-bold">
                        Make
                    </p>
                    <p>
                        {{ $agreement->vehicle_make }}
                    </p>
                </td>
                <td class="w-25">
                    <p class="font-bold">
                        Model
                    </p>
                    <p>
                        {{ $agreement->vehicle_model }}
                    </p>
                </td>
                <td class="w-25">
                    <p class="font-bold">
                        Colour
                    </p>
                    <p>
                        {{ $agreement->vehicle_colour }}
                    </p>
                </td>
            </tr>
        </table>
        <p>
            Please read all terms and conditions before you sign this agreement set out by {{ $agreement->company_name }} on
            this
            hire agreement.
        </p>
        <br>
        <p>
            DECLARATION:
            <br>
            <br>
            I declare that the information given in this form is correct and complete. In addition, I hereby acknowledge
            and confirm that during the duration of the vehicle hire I shall be liable for any penalty charges (PCNs),
            parking or traffic fines including such penalties or excess charges howsoever issued under the following
            acts: PART III of the RTA 1988 / SECTIONS 45 and / or 46 of the RTA 1984 / RTA of 1991. It is further agreed
            that the full cost of repair to the vehicle and replacement costs resulting from the theft or damage of
            telematics, camera or vehicle tracking equipment will be met by the nominated hirer above, if such theft or
            damage occurs during the hire period.
        </p>
        <br>
        <table>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Signature (Hirer)
                    </p>
                    <img src="{{ $agreement->customer_signature }}" alt="customer_signature">
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Signed for and on Behalf of the Company Director
                    </p>
                    @if ($agreement->company_signature)
                        <img src="{{ $agreement->company_signature }}" alt="company_signature">
                    @endif
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Date
                    </p>
                    <p>
                        {{ $agreement->customer_signature_date->format('d/m/Y') }}
                    </p>
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Date
                    </p>
                    <p>
                        {{ $agreement->company_signature_date->format('d/m/Y') }}
                    </p>
                </td>
            </tr>
        </table>
        <br>
        <p>
            <strong>
                I {{ $agreement->full_name }} liable for all Parking Penalties, Traffic Offence Penalties, from All
                councils, Transport for London, Police, Any organization member of the British Parking Association
                issued under Regulation 6 of the Road User Charging (Charges and Penalty Charges London) Regulations
                2001 as amended.Those Regulations also confirm liability for a penalty charge can be transferred when
                the vehicle has been hired from Registered Keeper who is a Hire Firm under a Hire Agreement with section
                66 of the Road Traffic Offenders Act 1988 being the adopted definition of a hire agreement. Schedule 2
                of The Road Traffic (Owner Liability) Regulations 2000.
            </strong> When you sign this rental agreement, you accept the conditions set out in this rental agreement.
            Please read this agreement carefully. If there is anything you do not understand, ask a member of staff to
            explain it. All charges and legal costs for any congestion charge, road-traffic offence or parking offence,
            or any other offence involving the rental vehicle, including costs from the vehicle being clamped, seized or
            towed away. If we instruct a third party to act on our behalf you will be accountable for the financial
            implications that this will bring not only for the money outstanding but also charges incurred by the third
            party. If {{ $agreement->company_name }} has to instruct a third party to collect outstanding monies owed these
            charges and interest will be added to the original debt amount. You are responsible for paying the
            appropriate authority or company for any charges and costs when they ask for these payments. You will also
            be responsible for paying our reasonable administration charges for dealing with these matters.
            <strong>Vehicle Registration: {{ $agreement->vehicle_registration_number }}</strong>
        </p>
        <br>
        <table>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Signature (Hirer)
                    </p>
                    <img src="{{ $agreement->customer_signature }}" alt="customer_signature">
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Date
                    </p>
                    <p>
                        {{ $agreement->customer_signature_date->format('d/m/Y') }}
                    </p>
                </td>
            </tr>
        </table>
        <br>
        <p>Please find attached more pages contracted terms and conditions you accepted and signed.</p>
        <br>
        <p>
            <strong>
                Please Note: All signatures (where applicable) has been recorded electronically.The price is on offer
                is not fixed.
            </strong>
            The price of rental offer can increase depend on driver's insurance. Company's rental price
            starts from £140.00 (depends on vehicle's condition)If company introduce any offer that offer is valid for
            only two weeks from agreement start date.Offer is only valid if driver or individual hire a vehicle for
            minimum three months. If hirer, hire the vehicle less than three months the offer is not valid for the
            hirer.Hirer has to pay deposit which is £300 - £500 (depends on license and offences). Deposit is
            refundable. (Please note: for more information on this paragraph read the detail terms on Section 4, Section
            6, Section 10)
        </p>
        <br>
        <p class="font-bold">INTRODUCTION</p>
        <br>
        <p>The Company agrees to hire the Vehicle described in the agreement to the Hirer {{ $agreement->full_name }}
            on the terms set out below.</p>
        <br>
        <p class="font-bold">TERMS & CONDITIONS:</p>
        <br>
        <p class="font-bold">1. HIRE AGREEMENT</p>
        <br>
        <p><strong>1.A</strong> The Company agrees to hire the Vehicle to the Hirer ({{ $agreement->full_name }}) for
            the duration of the Hire Period (unless the Agreement is terminated early in accordance with its terms).</p>
        <br>
        <p><strong>1.B</strong> The Agreement will only be extended if, before the end of the Hire Period, the
            Company and the Hirer agree in writing the terms on which the hire of the Vehicle is to be extended.</p>
        <br>
        <p class="font-bold">2. HIRER’S GENERAL OBLIGATIONS</p>
        <br>
        <p><strong>2.A</strong> The Hirer is the only authorised person to drive the vehicle. <strong>2.B</strong> The
            Hirer will keep the Vehicle in good repair and condition (reasonable wear and tear excepted) throughout the
            Hire Period and will not modify or alter the Vehicle or any of its parts or accessories without the
            Company’s prior written consent. The Hirer will ensure at the Hirer’s expense that the Vehicle is serviced
            and that replaceable parts are replaced in accordance with the manufacturer’s recommendations at service
            stations approved in advance by the Company. <strong>2.C</strong> The Hirer will ensure that the Vehicle is
            not overloaded at any time.<strong>2.D</strong> The Hirer will not use the Vehicle except for the purposes
            for which it is supplied by the Company, and will not use the Vehicle for driving tuition, for hire to any
            third party or for any sporting or racing activities, nor will the Vehicle be taken outside Great
            Britain.<strong>2.E</strong> The Hirer will ensure the Vehicle is kept locked when not in use and adequately
            safeguarded against risk of loss or theft.<strong>2.F</strong> The Hirer will upon request give the Company
            access to inspect the Vehicle during normal business hours.<strong>2.G</strong> The Hirer will immediately
            notify the Company of any loss or damage occurring to the Vehicle during the Hire Period.</p>
        <br>
        <p class="font-bold">
            3. COMPANY’S GENERAL OBLIGATIONS
        </p>
        <br>
        <p><strong>3.A</strong> If the Vehicle is damaged or breaks down during the Hire Period through no fault of the
            Hirer, the Company may, but is not obliged to, replace the Vehicle with a suitable alternative Vehicle.
            However, the Company will only replace the Vehicle if it has an alternative Vehicle
            available.<strong>3.B</strong> Vehicle Excise Duty (car tax) will be borne by the Company. Other costs will
            be the responsibility of the Hirer.</p>
        <br>
        <p class="font-bold">
            4. HIRE CHARGES AND PAYMENT
        </p>
        <br>
        <p><strong>4.A</strong> Hire Charges (including any deposit payable by the Hirer) are set out in Part A of the
            Schedule.<strong>4.B</strong> The Hirer will pay Hire Charges weekly in advance against the Company’s
            invoice. The first payment will be due immediately before the Hire Period starts.<strong>4.C</strong> All
            invoices must be settled weekly in advance, failing which the Company will have the right to terminate the
            Agreement and repossess the Vehicle. Any late payment will entitle the Company to interest at the rate
            specified by the Late Payment of Commercial Debts (Interest) Act 1998.<strong>4.D</strong> If the Company
            terminates the Agreement before expiry of the Hire Period on account of the Hirer’s default or breach of
            contract, the Hirer will remain liable to the Company for all Hire Charges which are unpaid and all Hire
            Charges which would have become due if the Hire Period had continued for its full duration.
        </p>
        <br>
        <p class="font-bold">
            5. INSURANCE & INDEMNITY
        </p>
        <br>
        <p>
            <strong>5.A</strong> The Hirer will take out and maintain at his expense throughout the hire period a fully
            comprehensive insurance policy against loss or damage of the vehicle to its full replacement value with an
            insurance company approved by the Company. The Hirer must provide evidence to the Company that the insurance
            is in force when he takes delivery of the Vehicle and that the Company’s interest is noted on the policy.
            <strong>5.B</strong> In the event of any loss or damage, the Hirer will immediately notify the Company and
            will hold any insurance money in trust for the Company. Also, the Hirer authorises the Company to collect
            any insurance monies from the insurers. Any insurance money will be applied in repairs and any shortfall
            will be the responsibility of the Hirer. <strong>5.C</strong> The Hirer will promptly pay any speeding
            fines, parking charges or other penalties arising during the period of the Agreement and indemnify the
            Company against all claims, costs and proceedings arising as a result of the same.<strong>5.E</strong> The
            Hirer will indemnify the Company against any uninsured losses relating to the Vehicle while it is under the
            control of the Hirer and against all losses, claims, damages, and expenses arising out the use of the
            vehicle during the Agreement. The Hirer will also indemnify the Company against any claims or proceedings
            arising in respect of personal injury or death of any person or damage to any property, which arises out of
            the use of the Vehicle during the Hire Period.
        </p>
        <br>
        <p class="font-bold">
            6. OFFERED PRICE AND INSURANCE
        </p>
        <br>
        <p>
            <strong>6.A</strong> Our service is based on first come and first serve. The price of the rental is not
            fixed it may be vary and depends on the insurance price. The price of the rental is based on hirer's
            insurance.<strong>6.B</strong> There are certain terms and requirement from our insurance company if hirer
            does not fulfil the insurer requirement then company will obtain the insurance from third parties. And the
            price of insurance will depend on hirer insurance quote. All insurances which will obtain from third
            parties, those have to pay by hirer directly. Company will only take or charge the customer rent and
            deposit.<strong>6.C</strong> If hirer fulfil our insurer requirement then we will charge driver insurance
            and rent in advance {{ $agreement->company_name }} rental price for Toyota prius starts from £140.00.(only for
            car).<strong>6.E</strong> There are certain requirements and terms of our insurer please read below all
            terms and requirements from our insurer.
        </p>
        <br>
        <p class="font-bold">
            6.E.1 VEHICLES AND DRIVERS
        </p>
        <br>
        <p>
            <strong>6.E.1.1</strong> No refund of premium will be allowed in respect of any insured vehicle involved in
            a non recoverable accident or loss<strong>6.E.1.2</strong> Drivers must have a UK Licence for a minimum of
            3yrs And Taxi Licence 1 years<strong>6.E.1.3</strong> Drivers must be resident in UK for minimum of
            3yrs<strong>6.E.1.4</strong> Excluding drivers who have more than 6 penalty points on their driving licence
            or who currently have:AC,BA,CD,CU,DD,DR,IN,TT,UT<strong>6.E.1.5</strong> Any proposer/driver aged over 25
            and under 65yrs with more than 5 years UK driving experience:<strong>6.E.1.6</strong> Excludes drivers under
            25 and over 65 unless previously agreed with Underwriters
        </p>
        <br>
        <p class="font-bold">
            6.E.2 Use FOR UK Only Private or Public Hire
        </p>
        <br>
        <p>
            <strong>6.E.2.1</strong> There is no carriage of toxic chemicals or other hazardous/dangerous goods or
            materials<strong>6.E.2.2</strong> There is no extensive foreign use (for example, in excess of four weeks
            any one time).<strong>6.E.2.3</strong> All overseas use should be notified prior to
            departure<strong>6.E.2.4</strong> There is no airside use Technology<strong>6.E.2.5</strong> All vehicles
            are fitted with cameras for evidence of an incident
        </p>
        <br>
        <p class="font-bold">
            6.E.3 EXCESS
        </p>
        <br>
        <p>
            Hirer has to pay Excess fees to the insurance company. Company ({{ $agreement->company_name }}) is not liable for
            any excess fee. If hirer has any accident and company make claim against vehicle damage, then hirer will pay
            the Excess fees. Company <strong>6.E.3.1.</strong> £350 Accidental damage<strong>6.E.3.2.</strong> £350 Fire
            and Theft Excess<strong>6.E.3.3.</strong> £80 windscreen Excess
        </p>
        <br>
        <p class="font-bold">
            6.E.4 Claims and Accidents
        </p>
        <br>
        <p>
            <strong>6.E.4.1</strong> Claims must be reported within 24 hrs<strong>6.E.4.2</strong> Excess doubled if
            claim reported more than 24hrs after the incident<strong>6.E.4.3</strong> Additional Third Party excess of
            £500 on all claims not reported within 48hrs<strong>6.E.4.4</strong> Additional Third Party excess of £1000
            on all claims reported more than 7 days after the incident
        </p>
        <br>
        <p class="font-bold">
            7. ACCIDENT
        </p>
        <br>
        <p>
            <strong>7.1</strong> If Hirer is involved in any accident, faulty or non-faulty, hirer has to inform the
            company within 24 hours of an accident. Please report your accident on 0333 5777 066 or
            <a href="{{ route('home.report-claim') }}">{{ route('home.report-claim') }}</a> <strong>7.2</strong> Hirer
            is not authorised to make any claim against vehicle damage, as vehicle is owned by
            {{ $agreement->company_name }}.<strong>7.3</strong> Hirer is not authorised to repair the vehicle by any accident
            damage (faulty, non-faulty). Only Company can repair the vehicle if any accident
            occurred.<strong>7.4</strong> {{ $agreement->company_name }} will make all claims against the vehicle
            damage to the insurance through our qualified solicitors.<strong>7.5</strong> If Hirer make any claim
            against vehicle damage this will consider breach of contract terms. And company will terminate the hire
            agreement and company will take legal action against hirer. Hirer is clearly not authorised to make any
            claim or take any money against vehicle damage from Insurance Claim. As Vehicle is owned by
            {{ $agreement->company_name }}.
        </p>
        <br>
        <p class="font-bold">
            8. PENALTY TICKETS/SPEEDING TICKETS, OTHER PENALTIES
        </p>
        <br>
        <p>
            <strong>8.1</strong> Company is not responsible for any penalty tickets. When company will receive any
            penalty tickets, we will transfer all tickets on hirer name. You give us authority to disclose your details
            (includes, Hire Contract) to Council. Hirer will be responsible for all penalty tickets.<strong>8.2</strong>
            During the duration of the vehicle hire you will be liable for any penalty charges (PCNs), parking or
            traffic fines including such penalties or excess charges howsoever issued under the following acts: PART III
            of the RTA 1988 / SECTIONS 45 and / or 46 of the RTA 1984 / RTA of 1991.
        </p>
        <br>
        <p class="font-bold">
            9. DATA PROTECTION ACT 1998 (Privacy Policy)
        </p>
        <br>
        <p>
            <strong>9.1</strong> We keep your data safe and confidential according to data protection act 1998. We do
            not sell or disclose your data to any third parties. If authorities (e.g Police, Council, DVLA or any
            appropriate Government Agency) request your data then you give us authority that we can share your data with
            appropriate agencies (authorities).
        </p>
        <br>
        <p class="font-bold">
            10. TWO WEEKS NOTICE
        </p>
        <br>
        <p>
            <strong>10.1</strong> Hirer must give us two weeks notice in advance before leaving the vehicle. Notice form
            will be attached with the agreement. If you fail to inform us then we will deduct two weeks rent from your
            deposit.
        </p>
        <br>
        <p class="font-bold">
            10.2 For deposit refund we have following policy please read carefully.
        </p>
        <br>
        <p>
            <strong>10.2.A</strong> The deposit will be returned to you after five weeks from Notice Date. If you have
            any ongoing accident claim against vehicle damage, or you have any penalty tickets then we will not refund
            your deposit until the claim has been processed successfully. If you have any vehicle damage then we will
            deduct vehicle damage cost from your deposit.
        </p>
        <br>
        <p class="font-bold">
            11. TERMINATION
        </p>
        <br>
        <p>
            The Company may terminate the Agreement if: <strong>11.1</strong> The Hirer becomes insolvent or has a
            receiver or liquidator or administrator appointed over its affairs; or <strong>11.2</strong> The Hirer
            commits a breach of the Agreement and terms and conditions of the agreement. <strong>11.3</strong> Upon
            termination, the Hirer will deliver the Vehicle to the Company at the location where it was delivered by the
            Company to the Hirer and in the same condition (fair wear and tear excepted).
        </p>
        <br>
        <p class="font-bold">
            12. ASSIGNMENT
        </p>
        <br>
        <p>
            <strong>12.1</strong> The Hirer will not assign, sublet or part with possession of the Vehicle during the
            Hire Period.
        </p>
        <br>
        <p class="font-bold">
            13. GOVERNING LAW AND DISPUTES
        </p>
        <br>
        <p>
            <strong>13.1</strong> The agreement between you as hirer and us as company {{ $agreement->company_name }}
            governed by English law and any dispute will be resolved by the English courts. I have read and understand
            the terms and conditions and I accept all terms and conditions.
        </p>
        <br>
        <p class="font-bold">
            Vehicle Registration: {{ $agreement->vehicle_registration_number }}
        </p>
        <br>
        <p class="font-bold">
            Name: {{ $agreement->full_name }}
        </p>
        <br>
        <p class="font-bold">
            Address: {{ $agreement->full_address }}
        </p>
        <br>
        <p class="font-bold">
            Agreement Submission Reference Number: {{ $agreement->ref_number }}
        </p>
        <br>
        <table>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Signature (Hirer)
                    </p>
                    <img src="{{ $agreement->customer_signature }}" alt="customer_signature">
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Date
                    </p>
                    <p>
                        {{ $agreement->customer_signature_date->format('d/m/Y') }}
                    </p>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <h2 style="text-align: center;" class="mb-4">
            Hire Charges
        </h2>
        <table>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Storage
                    </p>
                    <p>
                        {{ $agreement->storage }}
                    </p>
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Daily Rent
                    </p>
                    <p>
                        £{{ number_format($agreement->daily_rent, 2) }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Rental Term
                    </p>
                    <p>
                        {{ $agreement->rental_term }}
                    </p>
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        E-Reference
                    </p>
                    <p>
                        {{ $agreement->e_reference }}
                    </p>
                </td>
            </tr>
        </table>
        <br>
        <p>
            The Rent (<strong>£{{ number_format($agreement->daily_rent, 2) }}</strong>) Hirer
            ({{ $agreement->full_name }}) has to pay in advance.The deposit (£0.00) be repaid to the you 3 weeks after
            expiry of the Hire Period. and following the return of the Vehicle to the company in at least as good
            condition as it was delivered to the Hirer ({{ $agreement->full_name }}) at the beginning of the Hire
            Period (fair wear and tear excepted).
        </p>
        <br>
        <p class="font-bold">
            DATA PROTECTION ACT 1998
        </p>
        <br>
        <p>
            We keep your data safe and confidential according to data protection act 1998. We do not sell or disclose
            your data to any third parties. If authorities (e.g Police, Council, DVLA or any appropriate Government
            Agency) request your data then you (<strong>as Hirer {{ $agreement->full_name }}</strong>) give us
            authority that we can share your data with appropriate agencies (authorities). Please sign below to give us
            authority.
        </p>
        <br>
        <p class="font-bold">
            Hirer Name: {{ $agreement->full_name }}
        </p>
        <br>
        <p class="font-bold">
            Hirer Date of Birth: {{ $agreement->dob->format('d/m/Y') }}
        </p>
        <br>
        <p class="font-bold">
            Hirer Address: {{ $agreement->full_address }}
        </p>
        <br>
        <table>
            <tr>
                <td class="w-50">
                    <p class="font-bold">
                        Signature (Hirer)
                    </p>
                    <img src="{{ $agreement->customer_signature }}" alt="customer_signature">
                </td>
                <td class="w-50">
                    <p class="font-bold">
                        Date
                    </p>
                    <p>
                        {{ $agreement->customer_signature_date->format('d/m/Y') }}
                    </p>
                </td>
            </tr>
        </table>
        <br>
        <p class="font-bold">
            Notes
        </p>
        <br>
        <p>
            {{ $agreement->notes }}
        </p>
    </div>
</body>

</html>
