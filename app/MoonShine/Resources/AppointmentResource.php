<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\DateRange;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Appointment>
 */
class AppointmentResource extends ModelResource
{
    protected string $model = Appointment::class;

    protected string $title = 'Онлайн записи';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Адресс', 'salon', 'address',SalonResource::class)->required(),
            Text::make('ФИО', 'client_name')->required(),
            Text::make('Телефон', 'phone')->required(),
            Text::make('E-mail', 'email'),
            Text::make('Комментарий', 'comment'),
            BelongsToMany::make('Услуги', 'service', 'name')->relatedLink(),
            BelongsTo::make('Мастер', 'master', 'full_name',MasterResource::class)->required(),
            Date::make('Дата и время', 'appointment_datetime')
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
                BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class)->required(),
                Text::make('Фамилия Имя Отчество', 'client_name')->required(),
                Text::make('Телефон', 'phone')->required(),
                Text::make('E-mail', 'email'),
                Text::make('Комментарий к записи', 'comment'),
                BelongsTo::make('Мастер', 'master', 'full_name',MasterResource::class)->required(),


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
            BelongsTo::make('Адресс салона', 'salon', 'address',SalonResource::class)->required(),
            Text::make('Фамилия Имя Отчество', 'client_name')->required(),
            Text::make('Телефон', 'phone')->required(),
            Text::make('E-mail', 'email'),
            Text::make('Комментарий к записи', 'comment'),

            BelongsTo::make('Мастер', 'master', 'full_name',MasterResource::class)->required(),
            BelongsToMany::make('Услуги', 'service', 'name')->inLine(', '),

        ];
    }

    /**
     * @param Appointment $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
    protected function filters(): iterable
    {
        return [
            BelongsTo::make('Мастер', 'master', 'full_name',MasterResource::class),
            DateRange::make('Дата записи', 'appointment_datetime'),
        ];
    }
}
