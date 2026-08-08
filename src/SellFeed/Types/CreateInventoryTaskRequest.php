<?php

namespace DTS\eBaySDK\SellFeed\Types;

/**
 * @property \DTS\eBaySDK\SellFeed\Enums\InventoryFeedTypeEnum $feedType
 * @property string $schemaVersion
 * @property \DTS\eBaySDK\SellFeed\Types\InventoryFilterCriteria $filterCriteria
 */
class CreateInventoryTaskRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'feedType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'feedType'
        ],
        'schemaVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'schemaVersion'
        ],
        'filterCriteria' => [
            'type' => 'DTS\eBaySDK\SellFeed\Types\InventoryFilterCriteria',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'filterCriteria'
        ],
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
