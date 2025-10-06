<?php


namespace Hasan\GbUp;

use Hasan\GbUp\App\BlockHandler;

if (!defined('ABSPATH')) {
    exit;
}


class GbUp
{
    use \Hasan\GbUp\App\Traits\Singleton;
    public function init()
    {
        add_action('plugins_loaded', [$this, 'plugins_loaded']);
    }


    public function plugins_loaded()
    {


        $this->includes();
        $this->register_hooks();
    }

    public function includes()
    {

        BlockHandler::instance()->init();
    }


    public function register_hooks()
    {
    }

}

