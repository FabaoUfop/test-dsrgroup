<?php

namespace ManagerMembers\Transformers;

use League\Fractal\TransformerAbstract;
use ManagerMembers\Models\Permission;

/**
 * Class PermissionTransformer.
 *
 * @package namespace Pedidos\Transformers;
 */
class PermissionTransformer extends TransformerAbstract
{
    /**
     * Transform the Permission entity.
     *
     * @param \ManagerMembers\Models\Permission $model
     *
     * @return array
     */
    public function transform(Permission $model)
    {
        return [
            'id'         => (int) $model->id,
            'name' => $model->name,
            'label' => $model->label,
            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
