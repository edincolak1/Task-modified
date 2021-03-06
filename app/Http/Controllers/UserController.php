<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Services\UserInterface;
use App\User;
use App\Services\UserService;
use App\Exceptions\ResourceNotFoundException;

class UserController extends ApiController
{

    protected $userservice;

    public function __construct(UserInterface $userservice)
    {
        $this->userservice = $userservice;
    }

    public function index()
    {     
        $user = $this->userservice->index();
         
        return $this->showAll($user);
    }

    public function show($id)
    {
       
       $user = $this->userservice->read($id);
 
       if(!$user){
        throw new ResourceNotFoundException;
       }
        return $this->showOne($user);
 
    }
    

}
