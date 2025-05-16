<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\MasterService;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Fields\Relationships\HasMany;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<MasterService>
 */
class Master_ServiceResource extends ModelResource
{
    protected string $model = MasterService::class;

    protected string $title = 'Привязка мастеров и услуг';
    protected function filters(): iterable
    {
        return [
            BelongsTo::make('Фильтровать по мастеру', 'master', 'full_name',MasterResource::class)->nullable(),
        ];
    }
    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Мастер', 'master','full_name', MasterResource::class)->required(),
            BelongsTo::make('Услуга', 'service', 'name',ServiceResource::class)->required(),
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
                BelongsTo::make('Выберите мастера', 'master','full_name', MasterResource::class)->required()->searchable(),
                BelongsTo::make('Выберите услугу', 'service', 'name',ServiceResource::class)->required()->searchable(),
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
            BelongsTo::make('Мастер', 'master','full_name', MasterResource::class)->required()->searchable(),
            BelongsTo::make('Услуга', 'service', 'name',ServiceResource::class)->required()->searchable(),

        ];
    }

    /**
     * @param Master_Service $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
