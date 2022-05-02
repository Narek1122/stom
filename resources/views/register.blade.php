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

  <section class="container">
    <div class="general_information">
        <div class="form--ttl">
            <span>Общие сведения</span>
            <span class="responsive"></span>
        </div>
      <div class="general_box">
        <div class="general_itm">
          <div class="input_div class1">
            <input type="text" placeholder="Фамилия *"/>
          </div>
          <div class="input_div class1">
              <input type="text" placeholder="Имя *" />
          </div>
          <div class="input_div class1">
            <input type="text" placeholder="Отчество *" />
          </div>
        </div>
        <div class="general_itm">
          <div class="input_div class2">
            <input type="date" placeholder="Дата рождения * " />
          </div>
          <div class="input_div class2">
            <input type="number" placeholder="Телефон *" />
          </div>
          <div class="input_div class1">
            <input type="email" placeholder="E-mail" />
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
          <input type="text" placeholder="Серия *" />
        </div>
        <div class="input_div class4">
            <input type="text" placeholder="Номер *" />
          </div>
        <div class="input_div class5">
          <input type="messenger" placeholder="Кем выдан *" />
        </div>
        <div class="input_div class4">
          <input type="text" placeholder="Дата выдачи *" />
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
          <input type="text" placeholder="Город *" />
        </div>
        <div class="input_div class1">
            <input type="text" placeholder="Улица *" />
          </div>
        <div class="input_div class6">
          <input type="messenger" placeholder="Дом *" />
        </div>
        <div class="input_div class6">
          <input type="text" placeholder="Корпус" />
        </div>
        <div class="input_div class6">
          <input type="text" placeholder="Кв." />
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
          <input type="text" placeholder="Город *" />
        </div>
        <div class="input_div class1">
            <input type="text" placeholder="Улица *" />
          </div>
        <div class="input_div class6">
          <input type="messenger" placeholder="Дом *" />
        </div>
        <div class="input_div class6">
          <input type="text" placeholder="Корпус" />
        </div>
        <div class="input_div class6">
          <input type="text" placeholder="Кв." />
        </div>
      </div>
      <div class="blue_btn">
          <button class="btn_footer">Перейти к анкете</button>
      </div>
    </div>
  </div>
  </section>
@endsection
@section('js')
<script src="{{ asset('js/register.js') }}"></script>
@endsection
