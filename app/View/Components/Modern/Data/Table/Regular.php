<?php

namespace App\View\Components\Modern\Data\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Dynamic\Resource\Table as ResourceTable;

class Regular extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ResourceTable $resource)
    {
        $resource->resourcing();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modern.data.table.regular', [
            'paginator' => $this->resource->paginator,
            'all' => $this->resource->all,
        ]);
    }
}
