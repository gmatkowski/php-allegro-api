<?php


namespace Imper86\PhpAllegroApi\Resource\Sale;


use Imper86\PhpAllegroApi\Resource\AbstractResource;
use Psr\Http\Message\ResponseInterface;

class OfferContacts extends AbstractResource
{
    public function post(array $body): ResponseInterface
    {
        return $this->apiPost('/sale/offer-contacts', $body);
    }

    public function get(?string $id, ?array $query = null): ResponseInterface
    {
        return $this->apiGet(sprintf('/sale/offer-contacts%s', $id ? "/{$id}" : ''), $query);
    }

    public function put(string $id, array $body): ResponseInterface
    {
        return $this->apiPut("/sale/offer-contacts/{$id}", $body);
    }
}