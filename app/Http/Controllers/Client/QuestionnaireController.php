<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionnaireReq;
use App\Services\ClientService;

class QuestionnaireController extends Controller
{

    protected $clientServ;
    function __construct(ClientService $clientServ)
    {
        $this->clientServ = $clientServ;

    }

      /**
     * Display a Questionnaire.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(int $id)
    {
        return view('questionnaire');
    }


    /**
     * Store Questionnaire.
     * @param  int  $id
     * @param  \Illuminate\Http\QuestionnaireReq  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionnaireReq $request,int $id)
    {
        $this->clientServ->storeQuestionnaires($request->validated(),$id);
        return redirect()->route('treaty')->with('message','успех');
    }

    /**
     * From Admin Get Questionnaire.
     * @param  int  $id
     * @param  int  $num
     * @return \Illuminate\View\View
     */
    public function getQuest($id,$num)
    {
        $quest = $this->clientServ->find($id)
        ->questionnaires()
        ->with(['answers' =>function($q) use ($num){
            return $q->where('type',$num);
        }])->get();
        
        return view('admin.client.questionnaire.questionnaire' . $num,compact('quest'));
    }
}


