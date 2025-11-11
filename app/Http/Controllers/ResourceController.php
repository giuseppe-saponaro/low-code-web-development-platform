<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\App;
use App\Utilities\HtmlNodeTypes;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{

    public function index() {

        $resources = Resource::all();

        return view("components.resources.resources", [
            "resources" => $resources
        ]);

    }


    public function store() {

        request()->validate([
            "name" => "required|string|max:250|unique:resources,name"
        ]);

        $resource = new Resource;
        $resource->name = request()->name;
        $resource->save();

        return redirect("/resources");

    }


    public  function edit(Resource $resource) {

        $resources = Resource::all();

        return view("components.resources.resources", [
            "selectedResource" => $resource,
            "resources" => $resources
        ]);

    }

    public  function update(Resource $resource) {

        request()->validate([
            "name" => "required|string|max:250|unique:resources,name,$resource->id"
        ]);

        $resource->name = request()->name;
        $resource->save();

        return redirect("/resources/$resource->id");

    }

    public function delete(Resource $resource) {

        DB::transaction(function () use ($resource) {

            foreach ($resource->fields as $field) {

                foreach ($field->allValues as $value) {

                    $value->withValue->delete();

                    $value->delete();

                }

                foreach (HtmlNodeTypes::getValues() as $valueClass) {

                    $bindedNodesRel = $field->bindedNodes($valueClass["class"]);
                    if ($bindedNodesRel) {

                        $bindedNodes = $field->bindedNodes($valueClass["class"])->get();
                        foreach ($bindedNodes as $bindedNode) {


                            $bindedNode->node->delete();

                            $bindedNode->delete();

                        }
                    }
                }

                if ($field->withType) {

                    $field->withType->delete();

                }


                $field->delete();

            }

            $resource->delete();


        });

        return redirect("/resources");

    }

}
