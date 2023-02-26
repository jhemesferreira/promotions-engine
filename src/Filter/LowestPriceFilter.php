<?php

namespace App\Filter;

use App\DTO\PromotionEquiryInterface;

class LowestPriceFilter implements PromotionsFilterInterface
{
    public function apply(PromotionEquiryInterface $enquiry): PromotionEquiryInterface
    {
        $enquiry->setDiscountPrice(50)
            ->setPrice(100)
            ->setPromotionId(3)
            ->setPromotionName('Black Friday half price sale');

        return $enquiry;
    }
}