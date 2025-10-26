<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Section;

class SectionController extends Controller
{
    
    public function create($formId) {
        
        return view("components.section");
        
    }
   

    public function store($formId) {
        
        $section = new Section;
        
        $section->name = request()->name;
        $section->form_id = $formId;
        $section->save();
        
        return redirect("/forms/$formId");
        
    }
    
}
