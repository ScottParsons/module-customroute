<?php
/*
 * @package    SussexDev_CustomRoute
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-customroute/blob/master/LICENSE.md
 * @version    1.0.2
 */
namespace SussexDev\CustomRoute\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_CUSTOMROUTE_ENABLE = 'customroute/general/active';
    const XML_PATH_CUSTOMROUTE_ROUTE  = 'customroute/general/route';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Data constructor.
     *
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    )
    {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;

    }

    /**
     * @return bool
     */
    public function isModuleEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_CUSTOMROUTE_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string
     */
    public function getModuleRoute()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_CUSTOMROUTE_ROUTE, ScopeInterface::SCOPE_STORE);
    }
}
