<?php

namespace App\Http\Reposiotries;

use App\Models\Task;

class TaskReposiotries
{
    public function create($data)
    {
        return Task::create([
            'title'=>$data['title'],
            'description'=>$data['description']
        ]);
    }

    public function delete($id)
    {
        return Task::where('id',$id)->delete();
    }

    public function list()
    {
        return Task::paginate(10);
    }

    public function get($id)
    {
        return Task::find($id);
    }

    public function update($data,$id)
    {
        return Task::where('id',$id)->update([
            'title'=>$data['title'],
            'description'=>$data['description']
        ]);
    }

}
