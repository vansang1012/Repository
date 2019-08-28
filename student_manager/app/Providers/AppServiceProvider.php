<?php

namespace App\Providers;

use App\Http\Repository\Contracts\StudentRepositoryInterface;
use App\Http\Repository\Eloquent\StudentEloquentRepository;
use App\Http\Service\Impl\StudentService;
use App\Http\Service\StudentServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StudentRepositoryInterface::class,
            StudentEloquentRepository::class
        );
        $this->app->singleton(StudentServiceInterface::class,
            StudentService::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
