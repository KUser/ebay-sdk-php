<?php
namespace DTS\eBaySDK\SellFeed\Types;

/**
 * @property string $taskId
 * @property string $status
 * @property string $feedType
 * @property string $creationDate
 * @property string $completionDate
 * @property string $schemaVersion
 * @property string $detailHref
 * @property \DTS\eBaySDK\SellFeed\Types\UploadSummary $uploadSummary
 */
class GetInventoryTaskResponse extends \DTS\eBaySDK\Types\BaseType
{
    private static $propertyTypes = [
        'taskId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'taskId'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'feedType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'feedType'
        ],
        'creationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'completionDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'completionDate'
        ],
        'schemaVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'schemaVersion'
        ],
        'detailHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detailHref'
        ],
        'uploadSummary' => [
            'type' => 'DTS\eBaySDK\SellFeed\Types\UploadSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'uploadSummary'
        ]
    ];

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