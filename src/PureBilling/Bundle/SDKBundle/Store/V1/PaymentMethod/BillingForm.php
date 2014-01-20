<?php

namespace PureBilling\Bundle\SDKBundle\Store\V1\PaymentMethod;

use Symfony\Component\Validator\Constraints as Assert;
use PureMachine\Bundle\SDKBundle\Store\Annotation as Store;
use PureBilling\Bundle\SDKBundle\Store\Base\PaymentMethod;

class BillingForm extends PaymentMethod
{
    /**
     * @Store\Property(description="callback we will call after billing from")
     * @Assert\Type("string")
     * @Assert\NotBlank
     */
    protected $callback;
}
