<?php

namespace ManagerMembers\Repositories;

use ManagerMembers\Presenters\UserPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use ManagerMembers\Repositories\UserRepository;
use ManagerMembers\Models\User;
use ManagerMembers\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace ApiLimp\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    protected $skipPresenter = true;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
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
        return UserPresenter::class;
    }
}
