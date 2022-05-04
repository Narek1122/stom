@extends('layouts.app')

@section('content')
@if(isset($client))
<div class="container">
    <div class="card">
        <div class="text-center">
            <div class="row">
                <div class="col-sm">
                     
                         <a href="{{route('adminGetQuestionnaire',[$id,1])}}">
                            Анкета 1
                         </a>
                     
                </div>
                <div class="col-sm">
                    
                        <a href="{{route('adminGetQuestionnaire',[$id,2])}}">
                            Анкета 2
                         </a>
                     
                </div>
         </div>
         </div>
        <div class="text-center bg-primary btn">
            <h1 class="text-white">{{ $client['type'] }}</h1>
         </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $client['name'] }}</li>
        <li class="list-group-item">{{ $client['surname'] }}</li>
        <li class="list-group-item">{{ $client['patronymic'] }}</li>
        <li class="list-group-item">{{ $client['patronymic'] }}</li>
        <li class="list-group-item">{{ $client['email'] }}</li>
        <li class="list-group-item">{{ $client['dob'] }}</li>
        <li class="list-group-item">{{ $client['phone_number'] }}</li>
        <li class="list-group-item">{{ $client['passport_series'] }}</li>
        <li class="list-group-item">{{ $client['passport_number'] }}</li>
        <li class="list-group-item">{{ $client['passport_issued'] }}</li>
        <li class="list-group-item">{{ $client['passport_d_issue'] }}</li>

    </ul>
    @if(isset($client['address']))
    @foreach ($client['address'] as $address)
    <div class="text-center bg-primary btn">
       <h1 class="text-white">{{ __($address['type']) }}</h1>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $address['city'] }}</li>
        <li class="list-group-item">{{ $address['street'] }}</li>
        <li class="list-group-item">{{ $address['house'] }}</li>
        <li class="list-group-item">{{ $address['frame'] }}</li>
        <li class="list-group-item">{{ $address['quarter'] }}</li>
    </ul>
    @endforeach
    @endif
        <div class="card-body">
    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    <form action="{{ route('client.destroy',$client['id']) }}" method="POST">
        @csrf
        @method('delete')
     <button class="btn btn-sm btn-danger">
        <i class="fa fa-trash" aria-hidden="true"></i>
     </button>
    </form>
        </div>
    </div>
</div>
@endif
@endsection
