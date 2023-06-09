<?php

declare(strict_types=1);

namespace JuCloud\LaravelOrganization;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
use JuCloud\EasyOrganization\EasyOrganization;

class ServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
    /**
     * Boot the service.
     *
     * @author support <support@jujiang.biz>
     */
    public function boot()
    {
        if ($this->app instanceof Application && $this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__).'/config/easy-organization.php' => config_path('easy-organization.php'), ],
                'laravel-organization'
            );
        }

        if ($this->app instanceof LumenApplication) {
            $this->app->configure('organization');
        }
    }

    /**
     * Register the service.
     *
     * @author support <support@jujiang.biz>
     *
     * @throws \JuCloud\Organization\Exception\ContainerException
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/easy-organization.php', 'organization');

        EasyOrganization::config(config('organization'));

        $this->app->singleton('organization.tianyancha', function () {
            return EasyOrganization::tianyancha();
        });

        $this->app->singleton('organization.qichacha', function () {
            return EasyOrganization::qichacha();
        });

        $this->app->singleton('organization.qixin', function () {
            return EasyOrganization::qixin();
        });

    }

    /**
     * Get services.
     *
     * @author support <support@jujiang.biz>
     *
     * @return array
     */
    public function provides()
    {
        return ['organization.tianyancha', 'organization.qichacha', 'organization.qixin'];
    }
}
