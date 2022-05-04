@extends('layout.app')

@section('css')
@endsection
@section('content')
<div class="container">
    <div class="the_user">
      <h1 class="user_header">О нашей клинике</h1>
      <div class="user_text">
        <p>-Оказываем стоматологическую помощь с 2004 года</p>
        <p class="p-1">-Принимаем детей и взрослых</p>
        <p class="p-1">-Лечение под наркозом и седацией</p>
        <p class="p-1">-Лечение под микроскопом</p>
        <p class="p-1">
          -Собственная зуботехническая лаборатория. Её наличие позволяет
          выполнять работу в значительно меньшие
        </p>
        <p>сроки и по более низким ценам</p>
        <p class="p-1">-Бесплатные парковочные места перед входом</p>
        <p class="p-1">
          -Современные и качественные материалы, инструменты, оборудование.
          Подробнее об оснащении нашей клиники
        </p>
        <p>можно ознакомиться по ссылке ниже</p>
      </div>
    </div>
  </div>

  <!-- ----------------------------------------------------------------------------------------------- -->

  <div class="container">
    <div class="the_user">
      <h1 class="user_header">Наши услуги</h1>
      <div class="doctor_text">
        <div class="tip_text">
          <a href="#"> <p>Детская стоматология</p></a>
          <a href="#"><p>Терапевтическая стоматология</p></a>
          <a href="#"> <p>Профессиональная гигиена</p></a>
          <a href="#"><p>Oртодонтия</p></a>
        </div>
        <div class="tip_text">
          <a href="#"><p>Хирургическая стоматология</p></a>
          <a href="#"><p>Ортопедическая стоматология</p></a>
          <a href="#"><p>Отбеливание</p></a>
        </div>
      </div>
      <button class="btn"><a href="{{ route('equipment') }}">Оснащениие</a></button>
    </div>
  </div>

  <!-- ------------------------------------------------- -->

  <div class="container">
    <div class="Specialists">
      <h1 class="user_header">Команда</h1>

      <div class="team">

          <div class="team_box filters-nav" cardIndex="0" onclick="openModalFn('0')">
            <img class="team_img" id="cardImage" src="images/kalinina1.jpg" />
            <h2 class="team_titl" id="cardName">Калинина Софья</h2>
            <h2 class="team_titl">Алексеевна</h2>
            <p class="team_text">Детский стоматолог</p>
          </div>


          <div class="team_box filters-nav" cardIndex="1" onclick="openModalFn('1')">
            <img class="team_img" id="cardImage" src="images/manohina2.jpg" />
            <h2 class="team_titl" id="cardName">Манохина Татьяна</h2>
            <h2 class="team_titl">Михайловна</h2>
            <p class="team_text">Детский стоматолог</p>
          </div>


          <div class="team_box filters-nav" cardIndex="2" onclick="openModalFn('2')">
            <img class="team_img" id="cardImage" src="images/savostina3.png" />
            <h2 class="team_titl" id="cardName">Савостина Елена</h2>
            <h2 class="team_titl">Владимировна</h2>
            <p class="team_text">Стоматолог-терапевт</p>
          </div>


          <div class="team_box filters-nav" cardIndex="3" onclick="openModalFn('3')">
            <img class="team_img" id="cardImage" src="images/chetvertkova4.jpg" />
            <h2 class="team_titl" id="cardName">Четверткова Елена</h2>
            <h2 class="team_titl">Валерьевна</h2>
            <p class="team_text">Стоматолог-терапевт-ортопед</p>
          </div>


          <div class="team_box filters-nav" cardIndex="4" onclick="openModalFn('4')">
            <img class="team_img" id="cardImage" src="images/magomedova5.png" />
            <h2 class="team_titl" id="cardName">Котанова Христина</h2>
            <h2 class="team_titl">Константиновна</h2>
            <p class="team_text">Стоматолог-терапевт</p>
          </div>


          <div class="team_box filters-nav" cardIndex="5" onclick="openModalFn('5')">
            <img class="team_img" id="cardImage" src="images/kolesov6.png" />
            <h2 class="team_titl" id="cardName">Колесов Олег</h2>
            <h2 class="team_titl">Юрьевич</h2>
            <p class="team_text">Хирург-имплантолог Кандидат Медицинских Наук </p>
          </div>

      </div>
    </div>
  </div>
@endsection