<?php


namespace ManagerMembers\Services;

use Doctrine\DBAL\Query\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use ManagerMembers\Repositories\MemberRepository;

class MemberService
{
    private $memberRepository;

    public function __construct(MemberRepository $memberRepository)
    {
        $this->$memberRepository = $memberRepository;
    }

    /**
     * @author Fabio Carvalho
     * @return bool|\Illuminate\Http\JsonResponse
     */
    public function getAll(){
        $members = $this->memberRepository->getAll();
        try{
            if(count($members >0)){
                return \response()->json($members , Response:: HTTP_ACCEPTED);
        }else{
                return \response()->json($members , Response::HTTP_BAD_REQUEST);
        }
        }catch (QueryException $exception){
            return response()>json_encode(['error'=>'Erro de Conexao com banco'],status:Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
    public function get($id){
        $member = $this->memberRepository->get($id);
        try{
            if(count($member >0)){
                return \response()->json($member , Response::HTTP_ACCEPTED);
            }else{
                return \response()->json(null , Response::HTTP_BAD_REQUEST);
            }
        }catch (QueryException $exception){
            return response()>json_encode(['error'=>'Erro de Conexao com banco'],status:Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function store(Request $request){
        $validator = Validator::make(
            $request->all(),[
                'nome' => 'required | max:191 ',
                'data_nascimento' => 'required | date_format: Y-m-d',
                'cpf'=> 'required' | 'max:18',
                'rg' => 'required' | 'max:18',
                'email' => 'required' | 'max:191',
                'whatsapp' => | 'max:191'
                ]
        );

        if($validator->fails()){
            return response()->json($validator->erros(),Response::HTTP_BAD_REQUEST);
        }
            try{
                $member = $this->memberRepository->store($request);
                return \response()->json($member, Response::HTTP_ACCEPTED);
            }catch (QueryException $exception){
                return response()>json_encode(['error'=>'Erro de Conexao com banco'],status:Response::HTTP_INTERNAL_SERVER_ERROR);
            }

    }

    public function update($id,Request $request){
        $validator = Validator::make(
            $request->all(),[
                'nome' => 'required | max:191 ',
                'data_nascimento' => 'required | date_format: Y-m-d',
                'cpf'=> 'required' | 'max:18',
                'rg' => 'required' | 'max:18',
                'email' => 'required' | 'max:191',
                'whatsapp' => | 'max:191'
                ]
        );

        if($validator->fails()){
            return response()->json($validator->erros(),Response::HTTP_BAD_REQUEST);
        }
        try{
            $member = $this->memberRepository->update($id, $request);
            return \response()->json($member, Response::HTTP_ACCEPTED);
        }catch (QueryException $exception){
            return response()>json_encode(['error'=>'Erro de Conexao com banco'],status:Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function destroy($id){
        try{
            $member = $this->memberRepository->destroy($id);
            return \response()->json(null, Response::HTTP_ACCEPTED);
        }catch (QueryException $exception){
            return response()>json_encode(['error'=>'Erro de Conexao com banco'],status:Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

}
