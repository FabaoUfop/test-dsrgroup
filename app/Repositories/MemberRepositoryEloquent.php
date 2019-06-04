<?php

namespace ManagerMembers\Repositories;

use Illuminate\Http\Request;
use ManagerMembers\Presenters\MemberPresenter;
use ManagerMembers\Repositories\MemberRepositoryInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use ManagerMembers\Models\Member;


/**
 * Class MemberRepositoryInterfaceEloquent
 * @package namespace ApiLimp\Repositories;
 */
class MemberRepositoryInterfaceEloquent extends BaseRepository implements MemberRepositoryInterface
{
    protected $skipPresenter = true;
    /**
     * Specify Model class name
     *
     * @return string
     */
    private $model;

    public function __construct(Member $member){
        $this->model->$member;
    }
    /**
     * @author Fabio
     *
     */
    public function getAll(){
        return $this->model->getAll();
    }
    public function get$id){
        return $this->model->get($id);
    }
    public function store(Request $request){
        return $this->model->store($request->all());
    }
    public function update($id,Request $request){
        return $this->model->find($id)->update($request->all());
    }
    public function destroy($id){
        return $this->model->find($id)->destroy();
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function presenter()
    {
        return MemberPresenter::class;
    }
}
