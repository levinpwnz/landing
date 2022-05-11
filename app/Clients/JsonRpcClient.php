<?php

declare(strict_types=1);

namespace App\Clients;

use App\Clients\Contracts\ClientContract;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Http;

class JsonRpcClient implements ClientContract
{
    public function send(string $controller, string $method, array $data = []): array
    {
        return Http::withHeaders(['Content-Type' => 'application/json'])
            ->baseUrl(config('services.activity.url'))
            ->post(config('services.activity.method'), [
                RequestOptions::JSON => [
                    'jsonrpc' => 2,
                    'controller' => $controller,
                    'method' => $method,
                    'params' => $data
                ]
            ])->json();
    }
}
