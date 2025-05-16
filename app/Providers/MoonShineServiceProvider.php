<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\SalonResource;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\MasterResource;
use App\MoonShine\Resources\Master_ServiceResource;
use App\MoonShine\Resources\AppointmentResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\TitlsPageResource;
use App\MoonShine\Resources\PortfolioResource;
use App\MoonShine\Resources\ServicesCategoryResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     * @param ColorManager $colors
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config,  ColorManagerContract $colors,): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                SalonResource::class,
                ServiceResource::class,
                MasterResource::class,
                Master_ServiceResource::class,
                AppointmentResource::class,
                ReviewResource::class,
                TitlsPageResource::class,
                PortfolioResource::class,
                ServicesCategoryResource::class,
            ])
            ->pages([
                ...$config->getPages(),

            ]);


        $colors->background('#482712');
        $colors->primary('#482712');

        $colors->bulkAssign([
            'background' => '72, 39, 18',   // #482712
            'primary'    => '72, 39, 18',   // #482712
            'accent'     => '166, 130, 93', // #A6825D (если нужно поменять местами — просто скажи)

            'dark' => [
                'DEFAULT' => '72, 39, 18',
                50 => '158, 132, 110',
                100 => '146, 121, 101',
                200 => '134, 109, 91',
                300 => '121, 97, 81',
                400 => '108, 85, 70',
                500 => '96, 72, 59',
                600 => '84, 60, 48',
                700 => '72, 48, 36',
                800 => '60, 36, 24',
                900 => '48, 24, 12',
            ],
        ]);


    }


}
