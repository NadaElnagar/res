<?php

namespace App\Http\Reposiotries;

use App\Models\User;

class UserReposiotries
{
    public function create($data,$imageName)
    {
        $user = new User();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->image_path = uploadImage('users',$data['image']);
        return $user->save();
    }
}
