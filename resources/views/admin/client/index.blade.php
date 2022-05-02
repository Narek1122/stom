@extends('layouts.app', ['title' => __('Clients')])

@section('content')
<div class="container ">
    <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Surname') }}</th>
                    <th>{{ __('Patronymic') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('DOB') }}</th>
                    <th>{{ __('Phone Number') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(isset($clients))
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client['name'] }}</td>
                        <td>{{ $client['surname'] }}</td>
                        <td>{{ $client['patronymic'] }}</td>
                        <td>{{ $client['email'] }}</td>
                        <td>{{ $client['dob'] }}</td>
                        <td>{{ $client['phone_number'] }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary text-white" href="{{ route('client.show',$client['id']) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('client.destroy',$client['id']) }}" method="POST">
                                @csrf
                                @method('delete')
                             <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                             </button>
                            </form>
                        </td>
                    </tr>
                     @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
