<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/header.css" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=Your API key&lang=en_US" type="text/javascript">
    </script>
    <script src="js/yandex_map.js">
    </script>
    @yield('css')    
    <title>Стомалина</title>
</head>
<body>
<div class="slider__2" id="modal">
      <div class="Content">
        <div class="clider_header">
          <p id="doctor-name">Веселов Григорий Владимирович</p>
          <p class="slider_x" id="slider_x">x</p>
        </div>
        <div class="doctor">
          <div class="doctor_img">
            <img id="doctor-img" src="images/veselov-1.jpeg" />
          </div>
          <div class="doctor_text">
            Веселов Григорий Владимирович ОБРАЗОВАНИЕ 2016- МГМСУ имени А.И.
            Евдокимова, врач стоматолог общей практики , диплом с отличием
            2014-2015-Интернатура по специальностям детская стоматология,
            эндодонтия и ортодонтия . Университет города Ниццы Софии Антиполис,
            Франция, город Ницца 2018-Ординатура детская челюстно-лицевая
            хирургия, МГМСУ имени А.И. Евдокимова 2018-Ординтура детская
            стоматология, МГМСУ имени А.И. Евдокимова 2021-Аспирантура Кафедра
            детской челюстно-лицевой хирургии, МГМСУ имени А.И. Евдокимова
          </div>
        </div>
        <button class="slider_btn" id="slider_btn">Close</button>
      </div>
    </div>
    <header class="header">
      <nav class="navbar">
        <a href="{{route('welcome')}}" class="nav_branding"
          ><img src="images/logo .png" alt="logo"
        /></a>
        <ul class="nav_menu">
          <li class="nav_item">
            <a href="{{route('welcome')}}" class="nav_link">Главная</a>
          </li>
          <li class="nav_item">
            <a href="{{route('documents')}}" class="nav_link">Документы</a>
          </li>
          <li class="nav_item">
            <a href="{{route('equipment')}}" class="nav_link">Оснащениие</a>
          </li>
          <li class="nav_item">
            <a href="{{route('treaty')}}" class="nav_link">Услуги</a>
          </li>
          <li class="nav_item">
            <a href="#" class="nav_link">Команда</a>
          </li>
          <li class="nav_item">
            <a href="#" class="nav_link">Контакты</a>
          </li>
          <li class="nav_item">
            <a href="#" class="nav_link">Портфолио </a>
          </li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
      <!-- slider------------------------- -->

      <div class="slider">
        <div class="slide active">
          <img src="images/photo3.png" />
          <div class="info">
            <p>Принимаем детей и взрослых</p>
            <p>Лечение под наркозом и седацией</p>
            <p>Лечение под микроскопом</p>
            <button class="btn"><a href="{{route('equipment')}}">Оснащениие</a></button>
          </div>
        </div>
        <div class="slide">
          <img src="images/photo2.png" />
          <div class="info">
            <p>Принимаем детей и взрослых</p>
            <p>Лечение под наркозом и седацией</p>
            <p>Лечение под микроскопом</p>
            <button class="btn"><a href="{{route('equipment')}}">Оснащениие</a></button>
          </div>
        </div>
        <div class="slide">
          <img src="images/photo1.png" />
          <div class="info">
            <p>Принимаем детей и взрослых</p>
            <p>Лечение под наркозом и седацией</p>
            <p>Лечение под микроскопом</p>
            <button class="btn"><a href="{{route('equipment')}}">Оснащениие</a></button>
          </div>
        </div>
        <div class="slide">
          <img src="images/photo4.png" />
          <div class="info">
            <p>Принимаем детей и взрослых</p>
            <p>Лечение под наркозом и седацией</p>
            <p>Лечение под микроскопом</p>
            <button class="btn"><a href="{{route('equipment')}}">Оснащениие</a></button>
          </div>
        </div>
<div class="a">

  <div class="navigation">
    <i class="fa fa-chevron-left prev-btn"></i>
    <i class="fa fa-chevron-right next-btn"></i>
  </div>
  <div class="navigation-visibility">
    <div class="slide-icon active"></div>
    <div class="slide-icon"></div>
    <div class="slide-icon"></div>
    <div class="slide-icon"></div>
  </div>
</div>
      </div>

      <div class="lin"></div>
    </header>    
@yield('content')

@yield('js')

<div id="map" style="width: 100%; height: 400px"></div>



<div class="footer-div"></div>
    

    <script src="js/script.js"></script>
</body>
</html>