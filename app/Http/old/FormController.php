<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Node;
use Illuminate\Contracts\View\View;

class FormController extends Controller
{
    

    
    
    public  function store() {
        
        $node = new Node;
        $node->save();
        
        $form = new Form;
        $form->save();
        
        $form->node()->save($node);
        
        $id = $node->id;
        
        return redirect("/nodes/$id");
        
    }
    
    public  function edit($id) {
        
        $form = Form::find($id);
        
        return view("components.form", [
            "form" => $form
        ]);
        
    }
    
}
