<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\PortfolioResource;
use App\Models\Appointment;
use App\Models\Review;
use App\MoonShine\Resources\AppointmentResource;
use App\MoonShine\Resources\Master_ServiceResource;
use App\MoonShine\Resources\MasterResource;
use App\MoonShine\Resources\SalonResource;
use App\MoonShine\Resources\ServiceResource;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};
use MoonShine\MenuManager\MenuDivider;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\TitlsPageResource;
use App\MoonShine\Resources\ServicesCategoryResource;



final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuDivider::make(),
            MenuItem::make('Салоны', SalonResource::class)->icon('building-storefront'),
            MenuDivider::make(),
            MenuItem::make('Услуги', ServiceResource::class)->icon('clipboard'),
            MenuDivider::make(),
            MenuItem::make('Категории услуг', ServicesCategoryResource::class),
            MenuDivider::make(),
            MenuItem::make('Мастера', MasterResource::class)->icon('users'),
            MenuDivider::make(),
            MenuItem::make('Онлайн записи', AppointmentResource::class)->icon('clipboard-document-list')->badge(fn() => Appointment::countAppointments()),
            MenuDivider::make(),
            MenuItem::make('Отзывы', ReviewResource::class)->icon('chat-bubble-bottom-center-text')->badge(fn() => Review::countReviews()),
            MenuDivider::make(),
            MenuItem::make('Портфолио', PortfolioResource::class)->icon('camera'),
            MenuDivider::make(),
            MenuGroup::make('Настройки', [
                MenuItem::make('Titls и descriptions', TitlsPageResource::class),
            ])->icon('cog-6-tooth'),

        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);
        $colorManager->background('#482712');
        $colorManager->primary('#482712');
        $colorManager->bulkAssign([

            'background' => '166, 130, 93', // A6825D
            'accent' => '72, 39, 18',       // 482712
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

    public function build(): Layout
    {
        return parent::build();
    }
    protected function getFooterMenu(): array
    {
        return [];
    }
    protected function getFooterCopyright(): string
    {
        return '';
    }

}
