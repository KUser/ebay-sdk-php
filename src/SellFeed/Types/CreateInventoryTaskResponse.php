<?php

namespace DTS\eBaySDK\SellFeed\Types;

use DTS\eBaySDK\StatusCodeTrait;
use DTS\eBaySDK\HttpHeadersTrait;

/**
 *
 * @property string $taskId
 */
class CreateInventoryTaskResponse extends \DTS\eBaySDK\Types\BaseType
{
    use StatusCodeTrait;
    use HttpHeadersTrait;

    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'taskId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'taskId'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     * @param int $statusCode Status code
     * @param array $headers HTTP Response headers.
     */
    public function __construct(array $values = [], $statusCode = 200, array $headers = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);

        $this->statusCode = (int)$statusCode;

        $this->setHeaders($headers);

        // Extract taskId from Location header if present
        // Location format: https://api.ebay.com/sell/feed/v1/task/{taskId}
        if ($this->hasHeader('location')) {
            $location = $this->getHeaderLine('location');
            if (preg_match('#/task/([^/]+)$#', $location, $matches)) {
                $this->taskId = $matches[1];
            }
        }
    }
}