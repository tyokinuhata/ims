<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Auth;

/**
 * ブレードのディレクティブ拡張のサービスプロバイダ
 *
 * Class BladeServiceProvider
 * @package App\Providers
 */
class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // adminかどうか
        Blade::directive('admin', function ($type) {
            return "<?php if ($type === 'admin'): ?>";
        });

        Blade::directive('endadmin', function () {
            return "<?php endif; ?>";
        });

        // employeeかどうか
        Blade::directive('employee', function ($type) {
            return "<?php if ($type === 'employee'): ?>";
        });

        Blade::directive('endemployee', function () {
            return "<?php endif; ?>";
        });

        // sellerかどうか
        Blade::directive('seller', function ($type) {
            return "<?php if ($type === 'seller'): ?>";
        });

        Blade::directive('endseller', function () {
            return "<?php endif; ?>";
        });

        // customerかどうか
        Blade::directive('customer', function ($type) {
            return "<?php if ($type === 'customer'): ?>";
        });

        Blade::directive('endcustomer', function () {
            return "<?php endif; ?>";
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
