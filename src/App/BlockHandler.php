<?php


namespace Hasan\GbUp\App;

class BlockHandler
{
    use \Hasan\GbUp\App\Traits\Singleton;

    public function init()
    {

        add_action('init', [$this, 'register_blocks']);
    }


    public function register_blocks()
    {

        // register blocks here
        // register_block_type()

        register_block_type(GB_UP_PATH . 'blocks/build/heading');
        register_block_type(GB_UP_PATH . 'blocks/build/card');
    }

}