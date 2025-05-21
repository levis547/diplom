<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Appointment;
use Carbon\Carbon;
use MoonShine\Apexcharts\Components\LineChartMetric;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Flex;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Layout\LineBreak;
use MoonShine\UI\Components\Metrics\Wrapped\Metric;
use MoonShine\UI\Components\Metrics\Wrapped\ValueMetric;

#[\MoonShine\MenuManager\Attributes\SkipMenu]

class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function getTitle(): string
    {
        return $this->title ?: 'Рабочая область';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
	{
		return [
            LineChartMetric::make('Количество записей по дням')
                ->line([
                    'Записи' => Appointment::query()
                        ->selectRaw('COUNT(*) as count, DATE(created_at) as date')
                        ->groupBy('date')
                        ->get()
                        ->mapWithKeys(function ($item) {
                            return [
                                Carbon::parse($item->date)->format('d.m.Y') => $item->count,
                            ];
                        })
                        ->toArray(),
                ]),
            LineBreak::make(),
            Grid::make([
                Column::make([
                    ValueMetric::make('Общее количество записей')
                        ->value(Appointment::count()),
                ],
                    colSpan: 6),
                Column::make([
                    ValueMetric::make('Количество записей за текущий месяц')
                        ->value(Appointment::whereMonth('created_at', now()->month)
                            ->whereYear('created_at', now()->year)
                            ->count()), // Количество записей за текущий месяц
                ],
                colSpan: 6),
            ]),
        ];
	}
}
