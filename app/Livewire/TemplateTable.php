<?php

namespace App\Livewire;

use App\Models\Template;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;


class TemplateTable extends LivewireTableComponent
{
    protected $model = Template::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPageName('Template-table');
        $this->setDefaultSort('id', 'asc');
        $this->setColumnSelectStatus(false);
        $this->setQueryStringStatus(false);
        $this->resetPage('Template-table');

        $this->setThAttributes(function (Column $column) {
            if ($column->isField('used_count')) {
                return [
                    'class' => 'd-flex justify-content-center',
                ];
            }

            return [];
        });
    }
    public function columns(): array
    {
        return [
            Column::make(__('messages.common.name'), 'name')
                ->view('vcards.templates.columns.name')
                ->sortable()->searchable(function ($query, $searchTerm) {
                    $templateNames = [
                        1 => 'Simple Contact',
                        2 => 'Executive Profile',
                        3 => 'Clean Canvas',
                        4 => 'Professional',
                        5 => 'Corporate Connect',
                        6 => 'Modern Edge',
                        7 => 'Business Beacon',
                        8 => 'Corporate Classic',
                        9 => 'Corporate Identity',
                        10 => 'Pro Network',
                        11 => 'Portfolio',
                        12 => 'Gym',
                        13 => 'Hospital',
                        14 => 'Event Management',
                        15 => 'Salon',
                        16 => 'Lawyer',
                        17 => 'Programmer',
                        18 => 'CEO/CXO',
                        19 => 'Fashion Beauty',
                        20 => 'Culinary Food Services',
                        21 => 'Social Media',
                        22 => 'Dynamic vcard',
                        23 => 'Consulting Services',
                        24 => 'School Templates',
                        25 => 'Social Services',
                        26 => 'Retail E-commerce',
                        27 => 'Pet Shop',
                        28 => 'Pet Clinic',
                        29 => 'Marriage',
                        30 => 'Taxi Service',
                        31 => 'Handyman Services',
                    ];

                    $matchingIds = array_keys(array_filter(
                        array_map('strtolower', $templateNames),
                        fn($name) => strpos($name, strtolower($searchTerm)) !== false
                    ));

                    $query->whereIn('id', $matchingIds)->orWhereRaw('1 = 0');
                }),
            Column::make(__('messages.vcards_template.used_count'), 'id')
                ->view('vcards.templates.columns.count'),
        ];
    }

    public function builder(): Builder
    {
        return Template::with(['vcards', 'media'])->select('templates.*');
    }
    public function placeholder()
    {
        return view('lazy_loading.without-listing-skelecton');
    }
}
