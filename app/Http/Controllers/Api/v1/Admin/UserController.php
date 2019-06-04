<?php


namespace ManagerMembers\Http\Controllers\Api\v1\Admin;

use ManagerMembers\Http\Controllers\Controller;
use ManagerMembers\Repositories\UserRepository;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * @var \Repositories\UserRepository
     */
    private $userRepository;

    public function index()
    {
        return $this->userRepository->skipPresenter(false)->all();
    }

    public function authenticated(){
        $user = \Auth::guard('api')->user();
        return $this->userRepository->skipPresenter(false)->find($user->id);
    }


}
