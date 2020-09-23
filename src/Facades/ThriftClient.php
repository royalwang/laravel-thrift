<?php

namespace Royalcms\Laravel\Thrift\Facades;

use Illuminate\Support\Facades\Facade;
use Royalcms\Laravel\Thrift\Contracts\ThriftClient as BaseThriftClient;

/**
 * @see \Royalcms\Laravel\Thrift\Contracts\ThriftClient
 */
class ThriftClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseThriftClient::class;
    }
}
