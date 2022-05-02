@extends('layout.app')


@section('content')
<div class="container">
    <div class="header">
        <div class="whole_document">
            <div class="from_the_visit">
                <div class="from_the_visit_text">
                    <p>Заполнить</p>
                    <p>документы перед</p>
                    <p>первым визитом</p>
                </div>
                <div class="text_secondary">
                    <div class="yellow">
                       <i> Онлайн</i>
                    </div>
                    <div class="yellow_img">
                        <img src="{{ asset('images/flag.svg') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="box_text">
            <p> Пожалуйста, внесите данные в форму. <br>
                Документы будут полностью готовы к вашему приезду в клинику.</p>
                <p> <b>Важно!</b> На первый визит с несовершеннолетним обязательно должны прийти <br> родители или законные представители (опекуны, усыновители или попечители).</p>
                <p>Необходимо принести оригиналы документов: паспорт законного представителя и <br> паспорт или свидетельство о рождении ребенка/ постановление органов опеки/ <br>
                    свидетельство о государственной регистрации акта усыновления ст. 125 СК РФ</p>
        </div>
    </div>
</div>


<form action="{{ route('client.store') }}" method="POST">
    @csrf
  <div class="container">
      <div class="user_login_div">
        <div class="user_login">
            <span class="user_title">Ваши данные (Данные родителя)</span>

               <div class="user_login_box">
                  <div class="user_login_input">
                      <label for="">Фамилия</label>
                      <input type="text" name="surname">
                      @if ($errors->has('surname'))
                       <span class="invalid-feedback" style="display: block;" role="alert">
                          <strong>{{ $errors->first('surname') }}</strong>
                       </span>
                      @endif
                  </div>
                  <div class="user_login_input">
                      <label for="">Имя</label>
                      <input type="text" name="name">
                      @if ($errors->has('name'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                         <strong>{{ $errors->first('name') }}</strong>
                      </span>
                     @endif
                  </div>
                  <div class="user_login_input">
                      <label for="">Отчество</label>
                      <input type="text" name="patronymic">
                      @if ($errors->has('patronymic'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                         <strong>{{ $errors->first('patronymic') }}</strong>
                      </span>
                     @endif
                  </div>
               </div>
               <div class="user_login_box">
                  <div class="user_login_input">
                      <label for="">Дата рождения</label>
                      <input type="date" name="dob">
                      @if ($errors->has('dob'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                         <strong>{{ $errors->first('dob') }}</strong>
                      </span>
                     @endif
                  </div>
                  <div class="user_login_input">
                      <label for="">Почта</label>
                      <input type="email" name="email">
                      @if ($errors->has('email'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                         <strong>{{ $errors->first('email') }}</strong>
                      </span>
                     @endif
                  </div>
                  <div class="user_login_input">
                      <label for="">Ваш телефон</label>
                      <input type="number" name="phone_number">
                      @if ($errors->has('phone_number'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                         <strong>{{ $errors->first('phone_number') }}</strong>
                      </span>
                     @endif
                  </div>
               </div>

        </div>
        <div class="user_login">
          <span class="user_title">Паспортные данные</span>
          <div class="user_chckbox">
              <input type="checkbox" name="foreign_passport" value="1">
              <span>Паспорт иностранного образца</span>
          </div>

             <div class="user_login_box">
                <div class="user_login_input">
                    <label for="">Серия</label>
                    <input type="text" name="passport_series">
                    @if ($errors->has('passport_series'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                         <strong>{{ $errors->first('passport_series') }}</strong>
                      </span>
                     @endif
                </div>
                <div class="user_login_input  user_login_input_2">
                    <label for="">Номер</label>
                    <input type="number" name="passport_number">
                    @if ($errors->has('passport_number'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                         <strong>{{ $errors->first('passport_number') }}</strong>
                      </span>
                     @endif
                </div>

             </div>
             <div class="user_login_box">
                <div class="user_login_input  user_login_input_2">
                    <label for="">Выдан</label>
                    <input type="text" name="passport_issued">
                    @if ($errors->has('passport_issued'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                       <strong>{{ $errors->first('passport_issued') }}</strong>
                    </span>
                   @endif
                </div>
                <div class="user_login_input">
                    <label for="">Дата выдачи</label>
                    <input type="date" name="passport_d_issue">
                    @if ($errors->has('passport_d_issue'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                       <strong>{{ $errors->first('passport_d_issue') }}</strong>
                    </span>
                   @endif
                </div>

             </div>
      </div>
      <div class="user_login">
        <span class="user_title">Адрес регистрации</span>


           <div class="user_login_box">
              <div class="user_login_input">
                  <label for="">город</label>
                  <input type="text" name="registration[city]">
              </div>
              <div class="user_login_input  user_login_input_2">
                  <label for="">улица</label>
                  <input type="text" name="registration[street]">
              </div>

           </div>
           <div class="user_login_box">
              <div class="user_login_input">
                  <label for="">дом</label>
                  <input type="text" name="registration[house]">
              </div>
              <div class="user_login_input">
                  <label for="">корп./стр.</label>
                  <input type="text" name="registration[frame]">
              </div>
              <div class="user_login_input">
                  <label for="">кв.</label>
                  <input type="text" name="registration[quarter]">
              </div>

           </div>
    </div>
    <div class="user_login">
        <span class="user_title">Адрес проживания</span>
        <div class="user_chckbox">
            <input type="checkbox">
            <span>совпадает с адресом регистрации</span>
        </div>

           <div class="user_login_box">
              <div class="user_login_input">
                  <label for="">город</label>
                  <input type="text" name="residence[city]">
              </div>
              <div class="user_login_input  user_login_input_2">
                  <label for="">улица</label>
                  <input type="text" name="residence[street]">
              </div>

           </div>
           <div class="user_login_box">
              <div class="user_login_input">
                  <label for="">дом</label>
                  <input type="text" name="residence[house]">
              </div>
              <div class="user_login_input">
                  <label for="">корп./стр.</label>
                  <input type="text" name="residence[frame]">
              </div>
              <div class="user_login_input">
                  <label for="">кв.</label>
                  <input type="text" name="residence[quarter]">
              </div>

           </div>
    <button class="user_btn">Далее</button>
    </div>
      </div>
</form>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('style/treaty.css') }}" />
@endsection
