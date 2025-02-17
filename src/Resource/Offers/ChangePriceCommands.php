<?php


namespace Imper86\PhpAllegroApi\Resource\Offers;


use Imper86\PhpAllegroApi\Resource\AbstractResource;
use Psr\Http\Message\ResponseInterface;

class ChangePriceCommands extends AbstractResource
{
    public function put(string $offerId, string $commandId, array $body): ResponseInterface
    {
        return $this->apiPut("/offers/{$offerId}/change-price-commands/{$commandId}", $body);
    }
}