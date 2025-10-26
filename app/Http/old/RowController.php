<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Row;
use App\Models\Col;

class RowController extends Controller
{

    public function store($formId, $sectionId) {
        
        $row = new Row();
       
        $row->section_id = $sectionId;
        $row->save();
        
        $col = new Col();
        $col->row_id = $row->id;
        $col->class="col";
        $col->save();
        
        return redirect("/forms/$formId");
        
    }
}
