<?php

namespace ManagerMembers\Repositories;

use Illuminate\Http\Request;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface MemberRepositoryInterface
 * @package namespace ApiLimp\Repositories;
 */
interface MemberRepositoryInterface extends RepositoryInterface
{
    public function index();
    public function find($id);
    public function store(Request $request);
    public function update($id,Request $request);
    public function destroy($id);

}
