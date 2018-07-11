# Magento 2 | Bugfix to clear cache after updating attributes

This is a simple quick fix for Magento 2 that'll clear the block, collections, and FPC after mass updating attributes through the Magento 2 backend.

## Installation

* Add this plugin to your store
* Run **php bin/magento setup:upgrade --keep-generated**
* Clear cache **php bin/magento cache:clean**