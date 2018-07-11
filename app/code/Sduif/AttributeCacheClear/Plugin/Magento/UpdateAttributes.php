<?php
namespace Sduif\AttributeCacheClear\Plugin\Magento;

use Magento\Catalog\Model\Product\Action\Interceptor;

class UpdateAttributes
{
    protected $_cacheManager;
    protected $cacheTypeList;
    protected $cacheFrontendPool;

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool
    ) {
        $this->_cacheManager = $context->getCacheManager();
        $this->cacheTypeList = $cacheTypeList;
        $this->cacheFrontendPool = $cacheFrontendPool;
    }


    public function beforeExecute() {
        
        //$productIds = $this->attributeHelper->getProductIds();

        $types = array('block_html','collections','full_page');
        foreach ($types as $type) {
            $this->cacheTypeList->cleanType($type);
        }

        return;
    }
}