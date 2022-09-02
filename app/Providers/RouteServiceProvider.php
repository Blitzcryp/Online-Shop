<?php

namespace App\Providers;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->group(["prefix" => "api", "middleware" => "api"], function() {

        });

        $this->group(["prefix" => "", "middleware" => "web"], function() {
            $this->get("/", HomepageController::class)->name("homepage");
            $this->get("/events", EventsController::class)->name("events");
            $this->get("/volunteer", VolunteerController::class)->name("volunteer");

            $this->group(["middleware" => ["auth:sanctum", config("jetstream.auth_session"), "verified"]], function() {
                $this->get("/dashboard", DashboardController::class)->name("dashboard");
            });
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
