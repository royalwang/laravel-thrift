<?php

namespace Royalcms\Laravel\Thrift;

use Illuminate\Support\ServiceProvider;

class ThriftServiceProvider extends ServiceProvider
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
    public function register()
    {
        $this->app->singleton('Royalcms\Laravel\Thrift\Contracts\ThriftServer', 'Royalcms\Laravel\Thrift\ThriftServerImpl');
        $this->app->singleton('Royalcms\Laravel\Thrift\Contracts\ThriftClient', 'Royalcms\Laravel\Thrift\ThriftClientImpl');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Royalcms\Laravel\Thrift\Contracts\ThriftServer', 'Royalcms\Laravel\Thrift\Contracts\ThriftClient'];
    }
}
