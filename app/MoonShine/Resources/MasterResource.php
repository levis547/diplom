<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Query\Builder;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\QueryTags\QueryTag;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use MoonShine\Laravel\Fields\Relationships;
/**
 * @extends ModelResource<Master>
 */
class MasterResource extends ModelResource
{
    protected string $model = Master::class;

    protected string $title = 'Добавление мастеров';
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
            Image::make('Аватар мастера', 'image_path'),
            BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class)->required(),
            Text::make('Фамилия Имя Отчество', 'full_name'),
            Text::make('Специализация', 'specialization'),
            Relationships\BelongsToMany::make('Услуги', 'services', 'name', ServiceResource::class)->onlyCount(),
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
                Image::make('Аватар мастера', 'image_path'),
                BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class)->required(),
                Text::make('Фамилия Имя Отчество', 'full_name'),
                Text::make('Специализация', 'specialization'),
                Relationships\BelongsToMany::make('Услуги', 'services', 'name', ServiceResource::class)->selectMode(),
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
            Image::make('Аватар мастера', 'image_path'),
            BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class)->required(),
            Text::make('Фамилия Имя Отчество', 'full_name'),
            Text::make('Специализация', 'specialization'),
            Relationships\BelongsToMany::make('Услуги', 'services', 'name', Service::class)->selectMode(),

        ];
    }

    /**
     * @param Master $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
