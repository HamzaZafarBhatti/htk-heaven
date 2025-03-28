<?php

namespace App\Services;

use App\Models\AccidentClaim;

class AccidentClaimService
{

    public function store(array $data): AccidentClaim
    {
        $accident_claim = new AccidentClaim();
        $accident_claim->email = $data['email'];
        $accident_claim->full_name = $data['full_name'];
        $accident_claim->phone = $data['phone'];
        $accident_claim->accident_date = $data['accident_date'];
        $accident_claim->accident_postcode = $data['accident_postcode'];
        $accident_claim->car_registration_number = $data['car_registration_number'];
        $accident_claim->accident_fault = $data['accident_fault'];
        // $accident_claim->accident_location = $data['accident_location'];
        $accident_claim->is_car_roadworthy = $data['is_car_roadworthy'];
        $uploadedPaths = [];
        if (request()->hasFile('pictures')) {
            foreach (request()->file('pictures') as $file) {
                $path = $file->store('accident-claims', 'public');
                $uploadedPaths[] = $path;
            }
        }
        $accident_claim->pictures = $uploadedPaths;
        $accident_claim->privacy_policy_accepted = $data['privacy_policy_accepted'];
        $accident_claim->save();

        return $accident_claim;
    }
}
