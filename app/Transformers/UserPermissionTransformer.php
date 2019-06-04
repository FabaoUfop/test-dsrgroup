<?php

namespace ManagerMembers\Transformers;

use League\Fractal\TransformerAbstract;
use ManagerMembers\Models\UserPermission;

/**
 * Class UserPermissionTransformer.
 *
 * @package namespace ManagerMembers\Transformers;
 */
class UserPermissionTransformer extends TransformerAbstract
{
    /**
     * Transform the UserPermission entity.
     *
     * @param \ManagerMembers\Models\UserPermission $model
     *
     * @return array
     */
    public function transform(UserPermission $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
