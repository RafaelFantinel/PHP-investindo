<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Auth;

class DashboardController extends Controller
{
    private $repository;
    private $validator;
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
}

public function auth(Request $request){
    $data = [
        'email' => $request->get('username'),
        'password' =>$request->get('password')
    ];
    
    try {
        Auth::attempt($data, false);
        return redirect()->route('user.dashboard');
    } catch (Exception $e) {
        return $e->getMessage();
    }
    }
    public function index(){
        return "index logado";
    }
}
