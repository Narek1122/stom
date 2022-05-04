<?php
namespace App\Services;
use App\Models\Client\Client;

class ClientService
{
    public function index($q = null)
    {
        $data = Client::with('registration_address','residence_address');
        if($q){
        $data = $data->where('name','like',$q);
        }

        return $data->get();
    }

    public function find(int $id)
    {
        return Client::findOrFail($id);
    }

    public function store($data)
    {
        $cl = Client::create($data);

        $cl->address()->create($data['registration']);
        $data['residence']['type'] = 'residence';
        $cl->address()->create($data['residence']);

        return $cl;
    }

    public function storeQuestionnaires($data,$id)
    {
       $client = $this->find($id);
       $quest = $client->questionnaires()->create($data);
       if(isset($data['questionnaire'])){
            foreach($data['questionnaire'] as $key => $val){
                $quest->answers()->create(['purpose_survey' => $key,'answer' => $val]);
            }
       }

       if(isset($data['questionnaire2'])){
        foreach($data['questionnaire2'] as $key => $val){
            $quest->answers()->create(['purpose_survey' => $key,'answer' => $val,'type' => 2]);
        }
   }
    }
}
