<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller{

    protected $user_service ;

    public function __construct(UserService $userservice){

        $this->user_service = $userservice;

    }

    public function users(){
        return $this->user_service->getUsers();
    }

    public function user_name($name){
        return $this->user_service->getUser($name);
    }

    public function store(Request $request){
        
        return $this->user_service->createUser($request);
    }


}