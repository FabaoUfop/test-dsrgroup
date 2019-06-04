<?php

namespace ManagerMembers\Repositories;

use ApiLimp\Presenters\UserPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use ManagerMembers\Repositories\UserPermissionRepository;
use ManagerMembers\Models\UserPermission;
use ManagerMembers\Validators\UserPermissionValidator;

/**
 * Class UserPermissionRepositoryEloquent.
 *
 * @package namespace ApiLimp\Repositories;
 */
class UserPermissionRepositoryEloquent extends BaseRepository implements UserPermissionRepository
{
    protected $skipPresenter = true;

    public function findWherePermission($id,$idUser)
    {
        return $this->model->where('permission_id',$id)->where('user_id',$idUser)->get();
    }
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserPermission::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

   public function presenter(){
        return UserPresenter::class;
   }
}
