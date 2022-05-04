@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('style/register.css') }}" />
@endsection
@section('content')
<section class="container">
    <div class="header">
      <div class="title_top">
        <h1>РЕГИСТРАЦИОННЫЕ ДАННЫЕ</h1>
        <div class="off">
          <div class="off_itm off_left"></div>
          <div class="off_itm off_right"></div>
        </div>
      </div>
      <div class="buttom_box">
        <div class="buttom">
          <button
            class="btn_itm btn_smol"
            id="btn_smol"
            onclick="tog('btn_big',this)"
          >
            ЛЕЧУСЬ САМ
          </button>
          <button
            class="btn_itm btn_big"
            id="btn_big"
            onclick="tog('btn_smol',this)"
          >
            ЛЕЧИТСЯ РЕБЕНОК
          </button>
        </div>
        <p>Поля, отмеченные звездочкой (*), обязательны для заполнения</p>
      </div>
    </div>
  </section>
  <!-- header---------------------------------------------------------- -->

  <form action="{{ route('client.store') }}" method="POST">
    @csrf
    <input type="text" hidden name="type" id="typeInp">
    <section class="container">
    <div class="general_information">
        <div class="form--ttl">
            <span>Общие сведения</span>
            <span class="responsive"></span>
        </div>
      <div class="general_box">
        <div class="general_itm">
          <div class="input_div class1">
            <input type="text" placeholder="Фамилия *" name="surname"/>
          </div>
          <div class="input_div class1">
              <input type="text" placeholder="Имя *" name="name"/>
          </div>
          <div class="input_div class1">
            <input type="text" placeholder="Отчество *" name="patronymic"/>
          </div>
        </div>
        <div class="general_itm">
          <div class="input_div class2">
            <input type="date" placeholder="Дата рождения * " name="dob"/>
          </div>
          <div class="input_div class2">
            <input type="number" placeholder="Телефон *" name="phone_number"/>
          </div>
          <div class="input_div class1">
            <input type="email" placeholder="E-mail" name="email"/>
          </div>
        </div>
      </div>
    </div>
    <div class="general_information">
      <div class="form--ttl">
          <span>ПАСПОРТНЫЕ ДАННЫЕ</span>
          <span class="responsive"></span>
      </div>
    <div class="general_box">
      <div class="general_itm">
        <div class="input_div class3">
          <input type="text" placeholder="Серия *" name="passport_series"/>
        </div>
        <div class="input_div class4">
            <input type="text" placeholder="Номер *" name="passport_number"/>
          </div>
        <div class="input_div class5">
          <input type="messenger" placeholder="Кем выдан *" name="passport_issued"/>
        </div>
        <div class="input_div class4">
          <input type="date" placeholder="Дата выдачи *" name="passport_d_issue"/>
        </div>
      </div>

    </div>
  </div>
  <div class="general_information">
      <div class="form--ttl">
          <span>АДРЕС РЕГИСТРАЦИИ</span>
          <span class="responsive"></span>
      </div>
    <div class="general_box">
      <div class="general_itm">
        <div class="input_div class4">
          <input type="text" placeholder="Город *" name="registration[city]"/>
        </div>
        <div class="input_div class1">
            <input type="text" placeholder="Улица *" name="registration[street]"/>
          </div>
        <div class="input_div class6">
          <input type="messenger" placeholder="Дом *" name="registration[house]"/>
        </div>
        <div class="input_div class6">
          <input type="text" placeholder="Корпус" name="registration[frame]"/>
        </div>
        <div class="input_div class6">
          <input type="text" placeholder="Кв." name="registration[quarter]"/>
        </div>
      </div>

    </div>
  </div>
  <div class="general_information">
      <div class="form--ttl">
          <span>АДРЕС ПРОЖИВАНИЯ</span>
          <span class="responsive"></span>
      </div>
      <div class="checkbox">
          <input type="checkbox" id="check">
          <label for="check"> Совпадает с местом регистрации</label>

      </div>
    <div class="general_box">
      <div class="general_itm">
        <div class="input_div class4">
          <input type="text" placeholder="Город *" name="residence[city]"/>
        </div>
        <div class="input_div class1">
            <input type="text" placeholder="Улица *" name="residence[street]"/>
          </div>
        <div class="input_div class6">
          <input type="messenger" placeholder="Дом *" name="residence[house]"/>
        </div>
        <div class="input_div class6">
          <input type="text" placeholder="Корпус" name="residence[frame]"/>
        </div>
        <div class="input_div class6">
          <input type="text" placeholder="Кв." name="residence[quarter]"/>
        </div>
      </div>
      <div class="blue_btn">
          <button class="btn_footer">Перейти к анкете</button>
      </div>
    </div>
  </div>
  </section>
  </form>
  
@endsection
@section('js')
<script src="{{ asset('js/register.js') }}"></script>
@endsection
