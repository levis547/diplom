<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Salon;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Range;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Salon>
 */
class SalonResource extends ModelResource
{
    protected string $model = Salon::class;

    protected string $title = 'Добавление салона';

    /**
     * @return list<FieldContract>
     */

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение ', 'image_path')->sortable(),
            Text::make('Адресс', 'address')->required()->hint('Например: г. Курган, ул. Ленина, 56'),
            Text::make('Телефон', 'phone')->mask('(9999) 99-99-99')->required()->hint('Например: (0000) 00-00-00'),
            Text::make('Рабочее время', 'work_time')->required()->hint('Например: ежедневно с 8:00 до 21:00'),
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
                Image::make('Изображение', 'image_path')->dir('assets/salons'),
                Text::make('Адресс', 'address')->required()->hint('Например: г. Курган, ул. Ленина, 56'),
                Text::make('Телефон', 'phone')->mask('(9999) 99-99-99')->required()->hint('Например: (0000) 00-00-00'),
                Text::make('Рабочее время', 'work_time')->required()->hint('Например: ежедневно с 8:00 до 21:00'),
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
            Image::make('Изображение', 'image_path')->sortable(),
            Text::make('Адресс', 'address')->required()->hint('Например: г. Курган, ул. Ленина, 56'),
            Text::make('Телефон', 'phone')->mask('(9999) 99-99-99')->required()->hint('Например: (0000) 00-00-00'),
            Text::make('Рабочее время', 'work_time')->required()->hint('Например: ежедневно с 8:00 до 21:00'),
        ];
    }

    /**
     * @param Salon $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
