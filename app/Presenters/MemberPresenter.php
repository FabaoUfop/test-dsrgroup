<?php

namespace ManagerMembers\Presenters;

use ManagerMembers\Transformers\MemberTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MemberPresenter.
 *
 * @package namespace ManagerMembers\Presenters;
 */
class MemberPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MemberTransformer();
    }
}
