<?php

namespace PureBilling\Bundle\SDKBundle\Store\V1\Invoice;

use Symfony\Component\Validator\Constraints as Assert;
use PureMachine\Bundle\SDKBundle\Store\Annotation as Store;
use PureBilling\Bundle\SDKBundle\Store\Base\InvoiceItemBase;
use PureBilling\Bundle\SDKBundle\Constraints as PBAssert;

class NewInvoiceOfferItem extends InvoiceItemBase
{
    /**
     * @Store\Property(description="Offer Id.")
     * @PBAssert\Type(type="id", idPrefixes={"offer"})
     * @Store\Entity()
     * @Assert\NotNull()
     */
    protected $offer;
}
