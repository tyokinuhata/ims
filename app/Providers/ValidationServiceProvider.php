<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Validators\ExtensionValidator;

/**
 * バリデーション拡張のサービスプロバイダ
 *
 * Class ValidationServiceProvider
 * @package App\Providers
 */
class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['validator']->resolver(function ($translator, array $data, array $rules, array $messages, array $customAttributes) {
            return new ExtensionValidator($translator, $data, $rules, $messages, $customAttributes);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
