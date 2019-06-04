<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use ManagerMembers\Repositories\MemberRepository;


class MemberTest extends TestCase
{
    private $memberRepository;

    public function __construct(MemberRepository $memberRepository)
    {
        $this->$memberRepository = $memberRepository;
    }
    public function testFalse()
    {
        $response = $this->getAll('/api/v1/admin/members');
        $response->assertStatus(404);

    }
    public function testTrue()
    {
        $response = $this->getAll('/api/v1/admin/members');
        $response->assertStatus(200);

    }
    public function testTrue()
    {
        $response = $this->get('/api/v1/admin/member/{id}');
        $member = $this->memberRepository->get('1');
        $response->assertStatus(200);

    }
    public function testTrue(Request $request)
    {
        $response = $this->store('/api/v1/admin/member');
        $member = $this->memberRepository->store($request);
        $response->assertStatus(200);

    }
    public function testTrue($id)
    {
        $response = $this->store('/api/v1/admin/member/{id}');
        $member = $this->memberRepository->destroy('1');
        $response->assertStatus(200);

    }


}
