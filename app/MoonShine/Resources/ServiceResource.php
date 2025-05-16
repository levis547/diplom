<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Service>
 */
class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Добавление услуг';

    protected function filters(): iterable
    {
        return [
            BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class),
        ];
    }
    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение услуги', 'image_path'),
            BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class)->required(),
            Text::make('Название услуги', 'name')->required(),
            Select::make('Зал', 'room')->options([
                'Женский зал' =>'Женский зал',
                'Мужской зал' =>'Мужской зал',
                'Ногтевая студия' => 'Ногтевая студия',

            ])->required(),
            Text::make('Цена', 'price')->required(),
            Text::make('Длительность услуги', 'duration')->required(),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Image::make('Изображение услуги', 'image_path'),
                BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class)->required(),
                Text::make('Название услуги', 'name')->required(),
                Select::make('Зал', 'room')->options([
                    'Женский зал' =>'Женский зал',
                    'Мужской зал' =>'Мужской зал',
                    'Ногтевая студия' => 'Ногтевая студия',

                ])->required(),
                BelongsTo::make('Категория услуги', 'category', 'name', ServicesCategoryResource::class)->required(), // 'category' - это метод связи в модели Service
                Text::make('Цена', 'price')->required(),
                Text::make('Длительность услуги', 'duration')->required(),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Image::make('Изображение услуги', 'image_path'),
            BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class)->required(),
            Text::make('Название услуги', 'name')->required(),
            Select::make('Зал', 'room')->options([
                'Женский зал' =>'Женский зал',
                'Мужской зал' =>'Мужской зал',
                'Ногтевая студия' => 'Ногтевая студия',

            ])->required(),
            BelongsTo::make('Категория услуги', 'category', 'name', ServicesCategoryResource::class)->required(), // 'category' - это метод связи в модели Service
            Text::make('Цена', 'price')->required(),
            Text::make('Длительность услуги', 'duration')->required(),
        ];
    }

    /**
     * @param Service $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
