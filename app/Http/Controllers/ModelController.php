<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

abstract class ModelController extends Controller
{

    private function find($id)
    {
        return $this->getModel()::find($id);
    }

    public function index()
    {
        return $this->getModel()::all();
    }

    public function store(Request $request)
    {
        $model = $this->getModel()::create($request->all());
        $this->updateRelationships($request, $model);
        $model->push();
        return response()->json($model, 201);
    }

    public function show($id)
    {
        return $this->find($id);
    }

    public function update(Request $request, $id)
    {
        $model = $this->find($id);
        $model->update($request->all());
        $this->updateRelationships($request, $model);
        $model->push();
        return response()->json($model, 201);
    }

    private function updateRelationships(Request $request, Model &$model)
    {
        foreach ($model->getRelations() as $rname => $rvalue) {
            if (!($request->{$rname})) {
                continue;
            }
            $relation = $model->{$rname}();
            $rtype = get_class($relation);
            switch ($rtype) {
                case 'Illuminate\Database\Eloquent\Relations\BelongsTo':
                    $relation->associate($rvalue::find($request->{$rname}['id']));
                    break;
                case 'Illuminate\Database\Eloquent\Relations\BelongsToMany':
                    $relation->sync(collect($request->$rname)->pluck('id'));
                    break;
                case 'Illuminate\Database\Eloquent\Relations\HasOne':
                    # code...
                    break;
                case 'Illuminate\Database\Eloquent\Relations\HasMany':
                    # code...
                    break;
                default:
                    # code...
                    break;
            }
        }
    }

    public function destroy($id)
    {
        $$this->find($id)->delete();
        return response()->json(null, 204);
    }

    abstract function getModel();
}
