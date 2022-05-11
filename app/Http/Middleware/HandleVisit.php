<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Jobs\HandleVisitJob;
use Closure;
use Illuminate\Http\Request;

class HandleVisit
{
    public function handle(Request $request, Closure $next)
    {
        dispatch(new HandleVisitJob(
            $this->buildUrl($request->getScheme(), $request->getHost(), $request->path()), now()->toDateTimeString()));

        return $next($request);
    }

    private function buildUrl(string $schema, string $host, string $path): string
    {
        return $schema . '://' . $host . '/' . $path;
    }
}
