<?php
namespace Loevgaard\Dandomain\Api\Request\Customer;

class CreateGroupDiscountRequest extends CreateDiscountRequest
{
    public function __construct(array $discount)
    {
        parent::__construct($discount, DiscountType::TYPE_GROUP);
    }
}
