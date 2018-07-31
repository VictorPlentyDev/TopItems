<?php
/**
 * Created by PhpStorm.
 * User: externaldev
 * Date: 31/07/2018
 * Time: 16:29
 */

namespace TopItems\Providers;

use Plenty\Plugin\ServiceProvider;

class TopItemsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(TopItemsServiceProvider::class);
    }
}