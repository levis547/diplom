<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Portfolio>
 */
class PortfolioResource extends ModelResource
{
    protected string $model = Portfolio::class;

    protected string $title = 'Портфолио';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'image'),
            Text::make('ФИО', 'full_name'),
            Text::make('E-mail', 'email'),
            Text::make('Описание', 'description'),

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
                Image::make('Изображение', 'image'),
                Text::make('ФИО', 'full_name'),
                Text::make('E-mail', 'email'),
                Text::make('Описание', 'description'),
                Select::make('Статус', 'status')
                    ->options([
                        'На рассмотрении' => 'На рассмотрении',
                        'Опубликован' => 'Опубликован',
                        'Отменен' => 'Отменен',  // исправил значение с "Отклонен" на "Отменен"
                    ])

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
            Image::make('Изображение', 'image'),
            Text::make('ФИО', 'full_name'),
            Text::make('E-mail', 'email'),
            Text::make('Описание', 'description'),
            Select::make('Статус', 'status')
                ->options([
                    'На рассмотрении' => 'На рассмотрении',
                    'Опубликован' => 'Опубликован',
                    'Отменен' => 'Отменен',
                ])

        ];
    }

    /**
     * @param Portfolio $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
