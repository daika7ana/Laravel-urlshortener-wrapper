<?php 

namespace Daika7ana\Shortenapi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ShortenapiServiceProvider extends ServiceProvider 
{   
  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function boot() {
      $this->publishes([
          __DIR__.'/config/config.php' => config_path('shortenapi.php'),
      ], 'config');
      AliasLoader::getInstance()->alias('Shortenapi', 'Daika7ana\Shortenapi\Facades\Shortenapi');
  }
  
  public function register() {
      $this->app->singleton(Shortenapi::class);
  }
}
