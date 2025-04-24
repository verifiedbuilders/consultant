<?php

namespace App\Dtos;

readonly class LeadDto
{
    public function __construct(
        public string $name,
        public string $phone,
        public ?string $message = null,
    ) {}
}
