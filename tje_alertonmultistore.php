<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Class Tje_alertonmultistore
 */
class Tje_alertonmultistore extends Module
{
    public function __construct()
    {
        $this->name          = 'tje_alertonmultistore';
        $this->tab           = 'administration';
        $this->version       = '1.0.0';
        $this->author        = 'Eddy';
        $this->need_instance = 0;
        $this->bootstrap     = true;

        parent::__construct();

        $this->displayName            = $this->l('Display alert on multistore');
        $this->description            = $this->l('Display alert on multistore');
        $this->confirmUninstall       = $this->l('Are you want to uninstall this module ?');
        $this->ps_versions_compliancy = array('min' => '1.7.7.0', 'max' => _PS_VERSION_);
    }

    /**
     * function install
     * @return bool
     */
    public function install()
    {
        return parent::install() && $this->registerHook('backOfficeHeader');
    }

    /**
     * function uninstall
     * @return bool
     */
    public function uninstall()
    {
        return parent::uninstall();
    }

    /**
     * function hookBackOfficeHeader
     */
    public function hookBackOfficeHeader()
    {
        if (in_array($this->context->controller->controller_name, ['AdminProducts'])) {
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
        }
    }
}