<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
                [
                    'id' => 1,
                    'name' => 'Apple',
                    'category' => 'Fruits'
                ],
                [
                    'id' => 2,
                    'name' => 'Brocolli',
                    'category' => 'Vegetables'
                ],
                [
                    'id' => 3,
                    'name' => 'Spam',
                    'category' => 'Canned Food'
                ]
            ];
            return new ProductService($products);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('productKey', 'abc123');
    }
}