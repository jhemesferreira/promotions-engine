<?php

namespace App\DTO;

class LowestPriceEnquiry implements PromotionEquiryInterface
{
    private ?int $productId;

    private ?int $quantity;

    private ?string $requestLocation;

    private ?string $voucherCode;

    private ?string $requestDate;

    private ?int $price; 

    private ?int $discountPrice;

    private ?int $promotionId;

    private ?string $promotionName;

    /**
     * Get the value of productId
     */ 
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */ 
    public function setProductId(?int $productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of requestLocation
     */ 
    public function getRequestLocation(): ?string
    {
        return $this->requestLocation;
    }

    /**
     * Set the value of requestLocation
     *
     * @return  self
     */ 
    public function setRequestLocation(?string $requestLocation): self
    {
        $this->requestLocation = $requestLocation;

        return $this;
    }

    /**
     * Get the value of voucherCode
     */ 
    public function getVoucherCode(): ?string
    {
        return $this->voucherCode;
    }

    /**
     * Set the value of voucherCode
     *
     * @return  self
     */ 
    public function setVoucherCode(?string $voucherCode): self
    {
        $this->voucherCode = $voucherCode;

        return $this;
    }

    /**
     * Get the value of requestDate
     */ 
    public function getRequestDate(): ?string
    {
        return $this->requestDate;
    }

    /**
     * Set the value of requestDate
     *
     * @return  self
     */ 
    public function setRequestDate(?string $requestDate): self
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of discountPrice
     */ 
    public function getDiscountPrice(): ?int
    {
        return $this->discountPrice;
    }

    /**
     * Set the value of discountPrice
     *
     * @return  self
     */ 
    public function setDiscountPrice(?int $discountPrice): self
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }

    /**
     * Get the value of promotionId
     */ 
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * Set the value of promotionId
     *
     * @return  self
     */ 
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;

        return $this;
    }

    /**
     * Get the value of promotionName
     */ 
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * Set the value of promotionName
     *
     * @return  self
     */ 
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;

        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}