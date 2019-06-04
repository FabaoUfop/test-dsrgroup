<?php

namespace ManagerMembers\Presenters;

use ManagerMembers\Transformers\PermissionTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PermissionPresenter.
 *
 * @package namespace Pedidos\Presenters;
 */
class PermissionPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PermissionTransformer();
    }
}
