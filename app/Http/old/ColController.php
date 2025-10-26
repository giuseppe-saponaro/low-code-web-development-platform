<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Col;

class ColController extends Controller
{

    
    public function store($formId, $sectionId, $rowId, $colId) {
        
        
        $prev = Col::find($colId);
        $next = Col::where("prev_col", "=", $colId)->first();
        
        $col = new Col;
        
        $col->row_id = $rowId;
        $col->class = "col";      
        $col->prev_col = $colId;
        $col->save();
        
        if ($next) {
            $next->prev_col = $col->id;
            $next->save();
        }

        
        return redirect("/forms/$formId");
        
    }
    
    public function update($formId, $sectionId, $rowId, $colId) {
        
        $col = Col::find($colId);
        
        $col->class = request()->class;
        $col->save();
        
        return redirect("/forms/$formId");
        
    }
    
}
