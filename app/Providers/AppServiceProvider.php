<?php

namespace App\Providers;

use App\Models\Pessoa;
use App\Policies\pessoapolicy;
use App\Policies\PessoaPolicy as PoliciesPessoaPolicy;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
}
