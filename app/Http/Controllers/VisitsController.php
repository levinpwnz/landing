<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Clients\Contracts\ClientContract;
use Illuminate\View\View;

class VisitsController
{
    public function index(ClientContract $client): View
    {
        $visits = $client->send('VisitsController', 'showAllVisits');

        return view('welcome', [
            'visits' => paginatorFromArray($visits, 2)
                ->withPath('activity')
        ]);
    }
}
