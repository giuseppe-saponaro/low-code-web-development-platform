<?php

namespace App\View\Components\Apps;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class AppsList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Collection $apps
        )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.apps.apps-list');
    }
}
