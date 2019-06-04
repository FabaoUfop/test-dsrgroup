<?php

namespace ManagerMembers\Transformers;

use League\Fractal\TransformerAbstract;

use ManagerMembers\Models\Address;
use ManagerMembers\Models\Member;

/**
 * Class MemberTransformer
 * @package namespace ApiLimp\Transformers;
 */
class AddressTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['member_id'];

    /**
     * Transform the \Address entity
     * @param Address $model
     *
     * @return array
     */
    public function transform(Address $model)
    {
        return [
            'id'    => (int) $model->id,
            'member_id'=>(int) $model->member_id,
            'street'  => $model->street ,
            'number'  => $model->number,
            'complement' => $model->complement,
            'neighborhood'=> $model->neighborhood,
            'city' => $model->city,
            'state' => $model->state,
            'postal_code'  => $model->postal_code
        ];
    }
    public function includeMember(Address $model){
        if(!$model->member)
        {
            return null;
        }else{
            return $this->item($model->member, new MemberTransformer());
        }
    }





}
