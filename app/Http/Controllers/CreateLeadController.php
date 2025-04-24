<?php

namespace App\Http\Controllers;

use App\Actions\CreateLeadAction;
use App\Dtos\LeadDto;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\Log;

class CreateLeadController extends Controller
{
    public function __invoke(ContactUsRequest $contactUsRequest): void
    {
        $lead = (new CreateLeadAction)->handle(
            new LeadDto(
                name: $contactUsRequest->get('name'),
                phone: $contactUsRequest->get('phone'),
                message: $contactUsRequest->get('message'),
            )
        );

        Log::info('Lead generated', ['lead' => $lead, 'source' => 'contact_form']);
    }
}
