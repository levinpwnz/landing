<?php

namespace App\Providers;

use App\Clients\Contracts\ClientContract;
use App\Clients\JsonRpcClient;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ClientContract::class, JsonRpcClient::class);
    }

    public function boot()
    {

    }
}
