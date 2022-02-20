<?php

namespace App\Http\Services;
use App\Http\Repositories\UserRepository;


class UserService{

    protected $userRepository;

    public function __construct(UserRepository $user){
        $this->userRepository = $user;
    }

    public function getUsers(){
        return $this->userRepository->getUsers();
    }

    public function getUser($name){
        
        $user = $this->userRepository->getUser($name);

        if (!$user) {
            return json_encode(['error' => 'not fund']);
        }

        return $user;
    }

    public function createUser($request){
        $user  = [];
        $user['name'] = $request->name;
        $user['email'] = $request->email; 
        

        return $this->userRepository->create($user);
    }
}