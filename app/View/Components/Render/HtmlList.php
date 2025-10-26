<?php

namespace App\View\Components\Render;

use App\Models\HtmlSharingSelect;
use App\Models\HtmlSelect;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;
use App\Utilities\FieldTypes;
use App\Models\Invite;
use App\Models\Row;
use App\Models\Sharing;
use App\Models\Node as NodeModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HtmlList extends Component
{

    public $rows;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public NodeModel $selectedNode
        )
    {

        $filteringNode = $this->selectedNode->html->defaultFilterBinding;

        if ($filteringNode) {

            if ($filteringNode->html_type === HtmlSharingSelect::class) {

                $filterValue = Cookie::get("sharing_id");
                $this->rows = $this->selectedNode->html->binding->filteredRows($filterValue);
            } else if ($filteringNode->html_type === HtmlSelect::class) {

                $filterValue = Request::query("parent_row_id");
                $this->rows = $this->selectedNode->html->binding->filteredRows($filterValue);
            } else {
                $this->rows = $this->selectedNode->html->binding->rows;
            }

        } else {


            $this->rows = $this->selectedNode->html->binding->rows;

        }





    }






    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.render.html-list');
    }
}
