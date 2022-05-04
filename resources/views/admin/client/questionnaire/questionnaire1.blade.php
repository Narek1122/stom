@extends('admin.client.questionnaire.app')


@section('content')
    <section class="container">
        <div class="anketa">
          <div class="input_box">
            <p>Цель обследования</p>
            <input class="input_text" type="text" disabled value="{{$quest[0]['purpose_survey']}}">
            
          </div>
            <p>Как вы оцениваете состояние Вашего здоровья</p>
            <div class="rate">
               <div class="us_click">
                <p>Отличное</p>
                <input type="checkbox" disabled @if($quest[0]['state_of_health'] == 'Отличное') checked @endif>
               </div>
               <div class="us_click">
                <p>хорошее</p>
                <input type="checkbox" disabled @if($quest[0]['state_of_health'] == 'хорошее') checked @endif>
               </div>
               <div class="us_click">
                <p>нармалина</p>
                <input type="checkbox" disabled @if($quest[0]['state_of_health'] == 'нармалина') checked @endif>
               </div>
               <div class="us_click">
                <p>плоха</p>
                <input type="checkbox" disabled @if($quest[0]['state_of_health'] == 'плоха') checked @endif>
               </div>
            </div>
        </div>

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

        <!-- ------------------------------------------- -->

        

        <div class="user_message">
            <h1 class="user_hed">ЗАПИШИТЕ ЛЮБУЮ ИНФОРМАЦИЮ О СОСТОЯНИИ ВАШЕГО ЗДОРОВЬЯ, КОТОРУЮ СЧИТАЕТЕ ВАЖНОЙ:</h1>
            <h1 class="user_hed">
                СПИСОК МЕДИКАМЕНТОВ, ПРЕПАРАТОВ, ВИТАМИНОВ, ДОБАВОК, КОТОРЫЕ ВЫ ПРИНИМАЕТЕ
                </h1>

            <div class="userbox">
                <div class="box">
                    <p>Название лекарства</p>
                    <div class="box_itm" style="word-wrap:break-word; display:inline-block;">
                        {{$quest[0]['name_medicine']}}
                    </div>
                </div>
                <div class="box">
                    <p>Цель приема</p>
                    <div class="box_itm" style="word-wrap:break-word; display:inline-block;">
                        {{$quest[0]['purpose_admission']}}
                    </div>
                </div>
            </div>
           
       

        </div>

       
    </section>
@endsection