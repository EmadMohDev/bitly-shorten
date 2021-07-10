<?php
namespace  EmadMohDev\BitlyShorten; 
use Illuminate\Support\ServiceProvider;

class BitlyServiceProvider extends ServiceProvider {


    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/bitlyconfig.php' => config_path('bitlyconfig.php'),
        ],"bitlyconfig");  // the last parameter used for tag when make vender publish
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/bitlyconfig.php', 'bitlyconfig'
        );
    }
      
    
}