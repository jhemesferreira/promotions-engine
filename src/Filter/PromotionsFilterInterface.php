<?php

namespace App\Filter;

use App\DTO\PromotionEquiryInterface;

interface PromotionsFilterInterface
{
    public function apply(PromotionEquiryInterface $enquiry): PromotionEquiryInterface;
}