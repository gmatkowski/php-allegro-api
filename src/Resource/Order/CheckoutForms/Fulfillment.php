<?php


namespace Imper86\PhpAllegroApi\Resource\Order\CheckoutForms;


use Imper86\PhpAllegroApi\Resource\AbstractResource;
use Psr\Http\Message\ResponseInterface;

class Fulfillment extends AbstractResource
{
    public function put(string $checkoutFormId, array $body): ResponseInterface
    {
        return $this->apiPut("/order/checkout-forms/{$checkoutFormId}/fulfillment", $body);
    }
}