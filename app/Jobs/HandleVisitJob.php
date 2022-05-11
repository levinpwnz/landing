<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Clients\Contracts\ClientContract;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;

class HandleVisitJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;

    public function __construct(private string $url, private string $time)
    {
    }

    public function handle(ClientContract $client)
    {
        $client->send('VisitsController', 'handleVisit', [
            'url' => $this->url,
            'time' => $this->time
        ]);
    }
}
