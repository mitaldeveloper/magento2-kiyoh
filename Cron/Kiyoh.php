<?php
namespace Mital\Kiyoh\Cron;

class Kiyoh 
{    
    protected $_gridFactory; 
    protected $helperData;

    public function __construct(
        \Mital\Kiyoh\Model\KiyohFactory $gridFactory,
        \Mital\Kiyoh\Helper\Data $helperData,
        array $data = []
    ){
        $this->helperData = $helperData;
        $this->_gridFactory = $gridFactory;
    }

    public function execute(\Magento\Cron\Model\Schedule $schedule)
    {

        $this->helperData->fetchReview();
    }
}