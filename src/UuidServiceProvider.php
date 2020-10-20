<?php

namespace Rollswan\Uuid;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;

class UuidServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blueprint::macro('uuid', function (string $columnName = 'uuid') {
            return $this->uuid($columnName)->primary();
        });
    }
}
