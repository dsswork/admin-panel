<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        return view('admin.index');
    }

    public function onOff(Request $request) {
        $modelClass = "App\\Models\\".$request->model;
        $model = new $modelClass();
        $object = $model->find($request->id);
        $show = $object->show;
        $object->update(['show' => !$show]);

        return ['old' => $show, 'new' => $object->show];
    }

    public function destroy(Request $request) {
        $modelClass = "App\\Models\\".$request->model;
        $model = new $modelClass();
        $object = $model->find($request->id);
        $object->delete();
        return back()->with(['message' => $request->model.' was deleted', 'type' => 'danger']);;
    }

    public function sort(Request $request)
    {

        $modelClass = "App\\Models\\".$request->model;
        $model = new $modelClass();

        $updateArray = [];
        foreach($request->sort as $sort => $id) {
            $updateArray[] = ['id' => $id, 'sort' => $sort];
        }

        \Batch::update($model, $updateArray, 'id');

        return response()->json(['status' => 'sorted']);

    }
}
