<?php
namespace Mital\Kiyoh\Model;

class Kiyoh extends \Magento\Framework\Model\AbstractModel
{
    
    const CACHE_TAG = 'mital_kiyoh';

    /**
     * @var string
     */
    protected $_cacheTag = 'mital_kiyoh';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'mital_kiyoh';

    protected function _construct()
    {
        $this->_init('Mital\Kiyoh\Model\ResourceModel\Kiyoh');
    }
}