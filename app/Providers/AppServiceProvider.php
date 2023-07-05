<?php

namespace App\Providers;

use App\Models\Person;
use App\Services\Greet;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Greet::class, fn () => new Greet());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive("hello", fn ($exp) => "<?php echo 'Hello '. $exp; ?>");
       
        Blade::stringable(Person::class, fn (Person $person) => "$person->name : $person->address");
    }
}
