<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\TitlsPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends ModelResource<TitlsPage>
 */
class TitlsPageResource extends ModelResource
{
    protected string $model = TitlsPage::class;

    protected string $title = 'Редактирование Title и Description страниц';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Ссылка страницы', 'page_url'),
            Text::make('Title', 'page_title'),
            Textarea::make('Description', 'page_description'),
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
                Text::make('Ссылка страницы', 'page_url')->hint('Например: /reviews'),
                Text::make('Title', 'page_title'),
                Textarea::make('Description', 'page_description'),
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
            Text::make('Ссылка страницы', 'page_url')->hint('Например: /reviews'),
            Text::make('Title', 'page_title'),
            Textarea::make('Description', 'page_description'),
        ];
    }

    /**
     * @param TitlsPage $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
