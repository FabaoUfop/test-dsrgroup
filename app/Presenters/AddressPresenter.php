<?php

namespace ManagerMembers\Presenters;

use ManagerMembers\Transformers\AddressTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AddressPresenter.
 *
 * @package namespace ManagerMembers\Presenters;
 */
class AddressPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AddressTransformer();
    }
}
