<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\FieldTypes\StringField;
use App\Models\Node;
use App\Models\Nodes\HtmlForm;
use App\Models\Nodes\HtmlList;
use App\Models\Resource;
use App\Models\App;
use App\Utilities\FieldTypes;
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

                    //$bindedNodesRel = $field->bindedNodes($valueClass["class"]);
                    if (isset($valueClass["is-input"]) && $valueClass["is-input"]) {

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

    public function createTemplate1() {

        $uniqueId = uniqid();

        $resource1 = new Resource();
        $resource1->name = "Resource-$uniqueId";
        $resource1->save();

        $field1 = new Field();
        $field1->name = "Field1";
        $field1->resource_id = $resource1->id;
        $field1->save();

        $stringField1 = new StringField();
        $stringField1->save();
        $stringField1->field()->save($field1);


        $field2 = new Field();
        $field2->name = "Field2";
        $field2->resource_id = $resource1->id;
        $field2->save();

        $stringField2 = new StringField();
        $stringField2->save();
        $stringField2->field()->save($field2);

        return redirect("/resources");

    }




    public function createTemplate2() {

        $uniqueId = uniqid();

        $resource1 = new Resource();
        $resource1->name = "Resource-$uniqueId";
        $resource1->save();

        $field1 = new Field();
        $field1->name = "Field1";
        $field1->resource_id = $resource1->id;
        $field1->save();

        $stringField1 = new StringField();
        $stringField1->save();
        $stringField1->field()->save($field1);


        $field2 = new Field();
        $field2->name = "Field2";
        $field2->resource_id = $resource1->id;
        $field2->save();

        $stringField2 = new StringField();
        $stringField2->save();
        $stringField2->field()->save($field2);


        $field3 = new Field();
        $field3->name = "Field3";
        $field3->resource_id = $resource1->id;
        $field3->save();

        $stringField3 = new StringField();
        $stringField3->save();
        $stringField3->field()->save($field3);


        $field4 = new Field();
        $field4->name = "Field4";
        $field4->resource_id = $resource1->id;
        $field4->save();

        $stringField4 = new StringField();
        $stringField4->save();
        $stringField4->field()->save($field4);

        return redirect("/resources");

    }




    public function createTemplate3() {

        $uniqueId = uniqid();

        $resource1 = new Resource();
        $resource1->name = "Resource-$uniqueId";
        $resource1->save();

        $field1 = new Field();
        $field1->name = "Field1";
        $field1->resource_id = $resource1->id;
        $field1->save();

        $stringField1 = new StringField();
        $stringField1->save();
        $stringField1->field()->save($field1);


        $field2 = new Field();
        $field2->name = "Field2";
        $field2->resource_id = $resource1->id;
        $field2->save();

        $stringField2 = new StringField();
        $stringField2->save();
        $stringField2->field()->save($field2);


        $field3 = new Field();
        $field3->name = "Field3";
        $field3->resource_id = $resource1->id;
        $field3->save();

        $stringField3 = new StringField();
        $stringField3->save();
        $stringField3->field()->save($field3);


        $field4 = new Field();
        $field4->name = "Field4";
        $field4->resource_id = $resource1->id;
        $field4->save();

        $stringField4 = new StringField();
        $stringField4->save();
        $stringField4->field()->save($field4);



        $field5 = new Field();
        $field5->name = "Field5";
        $field5->resource_id = $resource1->id;
        $field5->save();

        $stringField5 = new StringField();
        $stringField5->save();
        $stringField5->field()->save($field5);


        $field6 = new Field();
        $field6->name = "Field6";
        $field6->resource_id = $resource1->id;
        $field6->save();

        $stringField6 = new StringField();
        $stringField6->save();
        $stringField6->field()->save($field6);

        return redirect("/resources");

    }

    public function autoCreateNodes(Resource $resource) {

        $uniqueId = uniqid();

        DB::transaction(function() use ($uniqueId, $resource) {

            $formNode = new Node();
            $formNode->name = "Form-$uniqueId";
            $formNode->save();

            $form = new HtmlForm();
            $form->save();
            $form->node()->save($formNode);

            $listNode = new Node();
            $listNode->name = "List-$uniqueId";
            $listNode->save();

            $list = new HtmlList();
            $list->binding_id = $form->id;
            $list->save();
            $list->node()->save($listNode);

            foreach ($resource->fields as $index => $field) {

                $newNode = new Node();
                $newNode->parent_id = $formNode->id;
                $newNode->name = $field->name;
                $newNode->label = $field->name;
                $newNode->save();

                $defaultHtmlComponent = null;
                $type = FieldTypes::getSectedFieldType($field);
                if ($type) {
                    if (isset(FieldTypes::getValues()[$type]["default-html-component"])) {
                        $defaultHtmlComponent = FieldTypes::getValues()[$type]["default-html-component"];
                    }
                }

                if ($defaultHtmlComponent) {

                    $newDefaultHtmlComponent = new $defaultHtmlComponent;
                    $newDefaultHtmlComponent->binding_id = $field->id;
                    $newDefaultHtmlComponent->save();
                    $newDefaultHtmlComponent->node()->save($newNode);
                }


            }

        });

        return redirect("/nodes");


    }

}
