<?php

namespace App\Actions;

use App\Dtos\LeadDto;
use App\Models\Lead;

final class CreateLeadAction
{
    public function handle(LeadDto $leadDto): Lead
    {
        return Lead::create([
            'name' => $leadDto->name,
            'email' => $leadDto->email,
            'phone' => $leadDto->phone,
            'message' => $leadDto->message,
        ]);
    }
}
