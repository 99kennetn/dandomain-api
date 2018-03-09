<?php
namespace Loevgaard\Dandomain\Api\Request\Product;

use Loevgaard\Dandomain\Api\Request\ObjectRequest;
use Loevgaard\Dandomain\Api\Request\RequestInterface;
use Loevgaard\Dandomain\Api\Traits\CategoryIdTrait;
use Loevgaard\Dandomain\Api\Traits\SiteIdTrait;
use Loevgaard\Dandomain\Api\ValueObject\CategoryId;
use Loevgaard\Dandomain\Api\ValueObject\SiteId;

/**
 * @see http://4221117.shop53.dandomain.dk/admin/webapi/endpoints/v1_0/ProductService/help/operations/GetCategory
 */
class GetCategoryRequest extends ObjectRequest
{
    use CategoryIdTrait;
    use SiteIdTrait;

    public function __construct(CategoryId $categoryId, SiteId $siteId)
    {
        $this->categoryId = $categoryId;
        $this->siteId = $siteId;

        parent::__construct(RequestInterface::METHOD_GET, sprintf('/admin/WEBAPI/Endpoints/v1_0/ProductService/{KEY}/Category/%s/%s', $this->categoryId, $this->siteId));
    }
}
