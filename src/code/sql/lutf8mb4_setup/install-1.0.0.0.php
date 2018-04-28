<?php

$installer = $this;
/* @var $installer Loewenstark_Utf8mb4_Model_Resource_Setup */
$installer->startSetup();

$installer->getConnection()
        ->changeTableEngine($installer->getTable('catalogsearch/fulltext'), 'INNODB');
$installer->getConnection()
        ->addForeignKey(
                $installer->getFkName('catalogsearch/fulltext', 'product_id', 'catalog/product', 'entity_id'),
                'catalogsearch/fulltext',
                'product_id',
                'catalog/product',
                'entity_id');
$installer->getConnection()
        ->addForeignKey(
                $installer->getFkName('catalogsearch/fulltext', 'store_id', 'core/store', 'store_id'),
                'catalogsearch/fulltext',
                'store_id',
                'core/store',
                'store_id');

$installer->endSetup();