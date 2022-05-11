<?php

declare(strict_types=1);

namespace App\Clients\Contracts;

interface ClientContract
{
    public function send(string $controller, string $method, array $data = []): mixed;
}
