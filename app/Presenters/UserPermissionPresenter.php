<?php

namespace ManagerMembers\Presenters;

use ManagerMembers\Transformers\UserPermissionTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserPermissionPresenter.
 *
 * @package namespace ManagerMembers\Presenters;
 */
class UserPermissionPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserPermissionTransformer();
    }
}
