<?php

namespace App\Http\Controllers\Backend;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SkillsController\Store;

class SkillsController extends BackEndController
{
    public function __construct(Skill $model){
        parent::__construct($model);
    }
        
    protected function filter($rows){
        if(request()->has('name') && request()->get('name') != ''){
            $rows = $rows->where('name', request()->get('name'));
        }
        return $rows;
    }

    public function store(Store $request){
        
        $this->model->create($request->all());

        return redirect('dashboard/skills');

    }

    public function update($id, Store $request){
        $row = $this->model->findOrFail($id);
    
        $row->update($request->all());
        return redirect('dashboard/skills');
    }
}
