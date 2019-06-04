<?php

namespace ManagerMembers\Transformers;

use League\Fractal\TransformerAbstract;
use ManagerMembers\Models\Address;
use ManagerMembers\Models\Member;
use ManagerMembers\Models\User;

/**
 * Class MemberTransformer
 * @package namespace ApiLimp\Transformers;
 */
class MemberTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['user','address'];

    /**
     * Transform the \Member entity
     * @param Member $model
     *
     * @return array
     */
    public function transform(Member $model)
    {
        return [
            'id'    => (int) $model->id,
            'user_id'=>(int) $model->user_id,
            'nome'  => $model->nome,
            'sobrenome' =>$model->sobrenome,
            'pai' =>$model->pai,
            'mae'=>$model->mae,
            'img_profile' =>$model->img_profile,
            'data_nascimento'=>$model->data_nascimento,
            'cpf' =>$model->cpf,
            'rg'=>$model-> rg,
            'email'=>$model->email,
            'whatsapp' =>$model->whatsapp,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

    /**
     * @param User $model
     * @return \League\Fractal\Resource\Item|null
     */
    public function includeUser(Member $model){
        if(!$model->user)
        {
            return null;
        }else{
            return $this->item($model->user, new UserTransformer());
        }
    }
    public function includeAddress(Address $model)
    {
        if (!$model->address) {
            return null;
        } else {
            return $this->item($model->address, new AddressTransformer());
        }
    }




}
