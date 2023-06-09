<?php

declare(strict_types=1);

namespace JuCloud\LaravelOrganization\Facades;

use Illuminate\Support\Facades\Facade;
use JuCloud\EasyOrganization\Provider\Tianyancha;
use JuCloud\EasyOrganization\Provider\Qichacha;
use JuCloud\EasyOrganization\Provider\Qixin;

class EasyOrganization extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'organization.tianyancha';
    }

    /**
     * Return the facade accessor.
     *
     * @return Tianyancha
     */
    public static function tianyancha(): Tianyancha
    {
        return app('organization.tianyancha');
    }

    /**
     * Return the facade accessor.
     *
     * @return Qichacha
     */
    public static function qichacha(): Qichacha
    {
        return app('organization.qichacha');
    }

    /**
     * Return the facade accessor.
     *
     * @return Qixin
     */
    public static function qixin(): Qixin
    {
        return app('organization.qixin');
    }
}
