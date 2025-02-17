<?php

namespace Imper86\PhpAllegroApi\Resource\Sale;

use Imper86\PhpAllegroApi\Resource\AbstractResource;
use Psr\Http\Message\ResponseInterface;

class CategoryParametersScheduledChanges extends AbstractResource
{
    public function get(?array $query = null): ResponseInterface
    {
        return $this->apiGet('/sale/category-parameters-scheduled-changes', $query);
    }
}
