<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\App;

class ResourceController extends Controller
{

    public function index(App $app) {

        return view("components.resources.resources", [
            "app" => $app
        ]);

    }


    public function store(App $app) {

        $resource = new Resource;
        $resource->name = request()->name;
        $resource->app_id = $app->id;
        $resource->save();

        return redirect("/apps/$app->id/resources");

    }


    public  function edit(Resource $resource) {

        return view("components.resources.resources", [
            "selectedResource" => $resource,
            "app" => $resource->app
        ]);

    }

    public  function update(Resource $resource) {


        $resource->name = request()->name;
        $resource->save();

        return redirect("/resources/$resource->id");

    }

    public function delete(Resource $resource) {

        foreach ($resource->fields as $field) {

            $field->withType->delete();

            $field->delete();

        }

        $resource->delete();

        $app = $resource->app;

        return redirect("/apps/$app->id/resources");

    }

}
