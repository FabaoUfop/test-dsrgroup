<?php

namespace ManagerMembers\Http\Controllers;


use ManagerMembers\Services\MemberService;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    private $memberService;
    public function __construct(Member $memberService)
    {
        $this->memberService = $memberService;
    }

    /**
     * @author Fabio Carvalho
     * @return bool|\Illuminate\Http\JsonResponse
     */
    public function getAll(){
        return $this->memberService->getAll();

    }
    public function get($id){
        return $this->memberService->get($id);

    }

    public function store(Request $request){
        return $this->memberService->store($request);

    }
    public function update($id,Request $request){
        return $this->memberService->update($id, $request);

    }

    public function destroy($id){
        return $this->memberService->destroy($id);

    }


}
