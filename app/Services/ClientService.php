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
        return Client::find($id);
    }

    public function store($data)
    {
        $cl = Client::create($data);

        $cl->address()->create($data['registration']);
        $data['residence']['type'] = 'residence';
        $cl->address()->create($data['residence']);

        return $cl;
    }
}
