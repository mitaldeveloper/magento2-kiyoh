<?php
namespace Mital\Kiyoh\Model\ResourceModel\Kiyoh;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Mital\Kiyoh\Model\Kiyoh',
            'Mital\Kiyoh\Model\ResourceModel\Kiyoh'
        );
    }
}
