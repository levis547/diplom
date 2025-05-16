<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\ActionButton;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use MoonShine\Contracts\UI\ActionButtonContract;
/**
 * @extends ModelResource<Review>
 */
class ReviewResource extends ModelResource
{
    protected string $model = Review::class;

    protected string $title = 'Отзывы';



    protected function filters(): iterable
    {
        return [
            Select::make('Статус', 'status')
                ->options([
                    'На рассмотрении' => 'На рассмотрении',
                    'Опубликовано' => 'Опубликовано',
                    'Отклонено' => 'Отклонено',
                ])

        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('ФИО', 'full_name'),
            Number::make('Рейтинг', 'rating')->min(1)->max(5)->stars(),
            Text::make('Текст отзыва', 'comment'),
            Text::make('Статус', 'status'),


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
                Text::make('ФИО', 'full_name'),
                Number::make('Рейтинг', 'rating')->min(1)->max(5)->stars(),
                Text::make('Текст отзыва', 'comment'),
                Select::make('Статус', 'status')
                    ->options([
                        'На рассмотрении' => 'На рассмотрении',
                        'Опубликован' => 'Опубликован',
                        'Отменен' => 'Отменен',
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
            Text::make('ФИО', 'full_name'),
            Number::make('Рейтинг', 'rating')->min(1)->max(5)->stars(),
            Text::make('Текст отзыва', 'comment'),
            Select::make('Статус', 'status')
                ->options([
                    'На рассмотрении' => 'На рассмотрении',
                    'Опубликован' => 'Опубликован',
                    'Отменен' => 'Отменен',
                ])
        ];
    }

    /**
     * @param Review $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
