<?php
namespace DTS\eBaySDK\SellFeed\Enums;

/**
 * Enumeration for feedType values used in inventory tasks
 */
class InventoryFeedTypeEnum
{
    // Inventory upload feed types
    const C_LMS_ADD_FIXED_PRICE_ITEM = 'LMS_ADD_FIXED_PRICE_ITEM';
    const C_LMS_END_FIXED_PRICE_ITEM = 'LMS_END_FIXED_PRICE_ITEM';
    const C_LMS_REVISE_FIXED_PRICE_ITEM = 'LMS_REVISE_FIXED_PRICE_ITEM';
    const C_LMS_RELIST_FIXED_PRICE_ITEM = 'LMS_RELIST_FIXED_PRICE_ITEM';
    const C_LMS_VERIFY_ADD_FIXED_PRICE_ITEM = 'LMS_VERIFY_ADD_FIXED_PRICE_ITEM';
    const C_LMS_ADD_ITEM = 'LMS_ADD_ITEM';
    const C_LMS_END_ITEM = 'LMS_END_ITEM';
    const C_LMS_REVISE_ITEM = 'LMS_REVISE_ITEM';
    const C_LMS_RELIST_ITEM = 'LMS_RELIST_ITEM';
    const C_LMS_VERIFY_ADD_ITEM = 'LMS_VERIFY_ADD_ITEM';
    const C_LMS_REVISE_INVENTORY_STATUS = 'LMS_REVISE_INVENTORY_STATUS';

    // Report download feed type
    const C_LMS_ACTIVE_INVENTORY_REPORT = 'LMS_ACTIVE_INVENTORY_REPORT';
}