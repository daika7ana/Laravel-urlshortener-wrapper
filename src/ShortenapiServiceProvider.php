<?php 

namespace Daika7ana\Shortenapi;

use Illuminate\Support\ServiceProvider;

class ShortenapiServiceProvider extends ServiceProvider 
{   
  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = true;

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function boot() 
  {
      $this->publishes([
          __DIR__.'/config/config.php' => config_path('shortenapi.php'),
      ], 'config');
  }
  
  public function register()
   {
      $this->app->make(Shortenapi::class);
  }
}
