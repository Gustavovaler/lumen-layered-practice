<?php

namespace App\Http\Repositories;
use App\Models\User;

class UserRepository{

    protected $userModel;

    public function __construct(User $user){
        $this->userModel = $user;
    }

    public function getUsers(){
        return User::all();
    }

    public function getUser($name){

        return User::where('name', $name)->first();
    }

    public function create($user){
        //return $user;
        $u = new User();
        $u->name = $user['name'];
        $u->email =  $user['email'];
        $u->save();
        
        return $u;
    }
}