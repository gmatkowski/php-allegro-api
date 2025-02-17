<?php


namespace Imper86\PhpAllegroApi\Resource\Payments;


use Imper86\PhpAllegroApi\Resource\AbstractResource;
use Psr\Http\Message\ResponseInterface;

class PaymentOperations extends AbstractResource
{
    public function get(?array $query = null): ResponseInterface
    {
        return $this->apiGet('/payments/payment-operations', $query);
    }
}