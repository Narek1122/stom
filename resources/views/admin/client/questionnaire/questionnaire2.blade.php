@extends('admin.client.questionnaire.app')


@section('content')
<div class="container">
     <div class="table_box">
         <div class="on_oof">
             <div class="on">
                 <p>ДА</p>
             
             </div>
             <div class="off">
                 <p>НЕТ</p> 
             </div>
         </div>
 
         <table class="table">
          @foreach($quest[0]['answers'] as $data)
          <tr>
              <td>{{$data['purpose_survey']}}</td>
              <td> <input type="checkbox" disabled @if($data['answer'] == 1) checked @endif></td>
              <td> <input type="checkbox" disabled @if($data['answer'] == 0) checked @endif></td>
          </tr>
          @endforeach
      </table>
     </div>
 </div>
@endsection