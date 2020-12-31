<?php

if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );

require_once( 'application/third_party/Smarty-3.1.18/libs/Smarty.class.php' );

class Smartyci extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $config =& get_config();

        $this->caching = 1;
        $this->setTemplateDir( 'application/views' );
        $this->setCompileDir( 'application/third_party/Smarty-3.1.18/templates_c' );
        $this->setConfigDir( 'application/third_party/Smarty-3.1.18/configs' );
        $this->setCacheDir( 'application/cache' );
    }

    //if specified template is cached then display template and exit, otherwise, do nothing.
    public function useCached( $tpl, $cacheId = null )
    {
        if ( $this->isCached( $tpl, $cacheId ) )
        {
            $this->display( $tpl, $cacheId );
            exit();
        }
    }
}
