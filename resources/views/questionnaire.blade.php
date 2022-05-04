<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/anketa.css')}}">
    <title>Document</title>
</head>
<body>
    <form action="{{route('storeQuestionnaire',request()->id)}}" method="POST">
        @csrf
    <section class="container">
        <div class="anketa">
          <div class="input_box">
            <p>Цель обследования</p>
            <input class="input_text" type="text" name="purpose_survey">
            
          </div>
            <p>Как вы оцениваете состояние Вашего здоровья</p>
            <div class="rate">
               <div class="us_click">
                <p>Отличное</p>
                <input type="radio" name="state_of_health" value="Отличное">
               </div>
               <div class="us_click" >
                <p>хорошее</p>
                <input type="radio" name="state_of_health" value="хорошее">
               </div>
               <div class="us_click">
                <p>нармалина</p>
                <input type="radio" name="state_of_health" value="нармалина">
               </div>
               <div class="us_click" >
                <p>плоха</p>
                <input type="radio" name="state_of_health" value="плоха">
               </div>
            </div>
        </div>

       
        {{-- <a class="anketa_btn" href="./anketa-2/anketa2.html"> Next</a> --}}
        <!-- ---------------------- -->
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
                 <tr>
                     <td> Находитесь ли Вы в настоящее время под наблюдением врача?
                        Если “Да”, то укажите причину:
                         </td>
                     <td> <input type="radio" name="questionnaire[Находитесь ли Вы в настоящее время под наблюдением врача?Если “Да”, то укажите причину:]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Находитесь ли Вы в настоящее время под наблюдением врача?Если “Да”, то укажите причину:]" value="0"></td>
                 </tr>
                 <tr>
                     <td>Посещаете ли Вы в настоящее время какие-либо процедуры</td>
                     <td> <input type="radio" name="questionnaire[Посещаете ли Вы в настоящее время какие-либо процедуры]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Посещаете ли Вы в настоящее время какие-либо процедуры]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Если Вы лечитесь в настоящее время (лечились ранее) или имеете информацию (подозреваете) о наличии у Вас следующих заболеваний и состояний, дайте краткое описание:</td>
                     <td> <input type="radio" name="questionnaire[Если Вы лечитесь в настоящее время (лечились ранее) или имеете информацию (подозреваете) о наличии у Вас следующих заболеваний и состояний, дайте краткое описание:]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Если Вы лечитесь в настоящее время (лечились ранее) или имеете информацию (подозреваете) о наличии у Вас следующих заболеваний и состояний, дайте краткое описание:]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Ревматизм, ревматические поражения сердца, шумы (боли) в сердце, пороки сердца</td>
                     <td> <input type="radio" name="questionnaire[Ревматизм, ревматические поражения сердца, шумы (боли) в сердце, пороки сердца]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Ревматизм, ревматические поражения сердца, шумы (боли) в сердце, пороки сердца]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Инфаркт миокарда, стенокардия, аритмия, хирургические вмешательства на сердце, кардиостимулятор</td>
                     <td> <input type="radio" name="questionnaire[Инфаркт миокарда, стенокардия, аритмия, хирургические вмешательства на сердце, кардиостимулятор]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Инфаркт миокарда, стенокардия, аритмия, хирургические вмешательства на сердце, кардиостимулятор]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Желудочно-кишечные заболевания</td>
                     <td> <input type="radio" name="questionnaire[Желудочно-кишечные заболевания]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Желудочно-кишечные заболевания]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Повышенное (пониженное) кровяное давление</td>
                     <td> <input type="radio" name="questionnaire[Повышенное (пониженное) кровяное давление]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Повышенное (пониженное) кровяное давление]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Повышенная кровоточивость, анемия, гемофилия (не свертываемость крови), переливания крови, заболевания крови</td>
                     <td> <input type="radio" name="questionnaire[Повышенная кровоточивость, анемия, гемофилия (не свертываемость крови), переливания крови, заболевания крови]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Повышенная кровоточивость, анемия, гемофилия (не свертываемость крови), переливания крови, заболевания крови]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Астма, туберкулез, сезонная аллергия, аллергические реакции на антибиотики </td>
                     <td> <input type="radio" name="questionnaire[Астма, туберкулез, сезонная аллергия, аллергические реакции на антибиотики]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Астма, туберкулез, сезонная аллергия, аллергические реакции на антибиотики]" value="0"></td>
                 </tr>
                 <tr>
                     <td>Болеутоляющие препараты, местные анестетики и другие лекарства </td>
                     <td> <input type="radio" name="questionnaire[Болеутоляющие препараты, местные анестетики и другие лекарства]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Болеутоляющие препараты, местные анестетики и другие лекарства]" value="0"></td>
                 </tr>
                 <tr>
                     <td>Доброкачественные, злокачественные опухоли, радиологическое лечение, химиотерапия, наблюдение онколога</td>
                     <td> <input type="radio" name="questionnaire[Доброкачественные, злокачественные опухоли, радиологическое лечение, химиотерапия, наблюдение онколога]" value="1" required required></td>
                     <td> <input type="radio" name="questionnaire[Доброкачественные, злокачественные опухоли, радиологическое лечение, химиотерапия, наблюдение онколога]" value="0"></td>
                 </tr>
                 <tr>
                     <td>Диабет, повышенный сахар крови, прием сахароснижающих препаратов</td>
                     <td> <input type="radio" name="questionnaire[Диабет, повышенный сахар крови, прием сахароснижающих препаратов]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire[Диабет, повышенный сахар крови, прием сахароснижающих препаратов]" value="0"></td>
                 </tr>
                 
                
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
                    <div class="box_itm">
                        <textarea name="name_medicine" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="box">
                    <p>Цель приема</p>
                    <div class="box_itm">
                        <textarea name="purpose_admission" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
            {{-- <div class="anketa_btn2">
                <a class="anketa_btn" href="./anketa-2/anketa2.html"> Next</a>
            </div> --}}
       

        </div>

       
    </section>

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
                 <tr>
                     <td> Гепатит, желтуха, заболевания печени, желчного пузыря </td>
                     <td> <input type="radio" name="questionnaire2[Гепатит, желтуха, заболевания печени, желчного пузыря]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Гепатит, желтуха, заболевания печени, желчного пузыря]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Заболевания почек и мочевыводящих путей, затрудненное мочеиспускание, диализ</td>
                     <td> <input type="radio" name="questionnaire2[Заболевания почек и мочевыводящих путей, затрудненное мочеиспускание, диализ]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Заболевания почек и мочевыводящих путей, затрудненное мочеиспускание, диализ]" value="0"></td>
                 </tr>
                 <tr>
                     <td>Заболевание щитовидной железы, гормонотерапия</td>
                     <td> <input type="radio" name="questionnaire2[Заболевание щитовидной железы, гормонотерапия]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Заболевание щитовидной железы, гормонотерапия]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Паралич, парез, конвульсии, обмороки, потеря сознания, головокружения, обмороки, судороги</td>
                     <td> <input type="radio" name="questionnaire2[Паралич, парез, конвульсии, обмороки, потеря сознания, головокружения, обмороки, судороги]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Паралич, парез, конвульсии, обмороки, потеря сознания, головокружения, обмороки, судороги]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Артрит, заболевания позвоночника и костей, остеопороз</td>
                     <td> <input type="radio" name="questionnaire2[Артрит, заболевания позвоночника и костей, остеопороз]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Артрит, заболевания позвоночника и костей, остеопороз]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Венерические заболевания или СПИД, гепатит</td>
                     <td> <input type="radio" name="questionnaire2[Венерические заболевания или СПИД, гепатит]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Венерические заболевания или СПИД, гепатит]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Проводилось ли исследование на ВИЧ:
                        Если «Да», то каков результат:        положительный            отрицательный
                       </td>
                     <td> <input type="radio" name="questionnaire2[Проводилось ли исследование на ВИЧ: Если «Да», то каков результат: положительный отрицательный]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Проводилось ли исследование на ВИЧ: Если «Да», то каков результат: положительный отрицательный]" value="0"></td>
                 </tr>
                 <tr>
                     <td>  Аппаратное лечение височно-нижнечелюстного сустава, брекеты, каппы</td>
                     <td> <input type="radio" name="questionnaire2[Аппаратное лечение височно-нижнечелюстного сустава, брекеты, каппы]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Аппаратное лечение височно-нижнечелюстного сустава, брекеты, каппы]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Имеются ли у Вас другие проблемы со здоровьем о которых Вам известно?
                        Если “Да”, то какие:
                       </td>
                     <td> <input type="radio" name="questionnaire2[Имеются ли у Вас другие проблемы со здоровьем о которых Вам известно? Если “Да”, то какие:]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Имеются ли у Вас другие проблемы со здоровьем о которых Вам известно? Если “Да”, то какие:]" value="0"></td>
                 </tr>
                 <tr>
                     <td>Для женщин: Вы беременны, подозреваете беременность или кормите ребенка?</td>
                     <td> <input type="radio" name="questionnaire2[Для женщин: Вы беременны, подозреваете беременность или кормите ребенка?]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Для женщин: Вы беременны, подозреваете беременность или кормите ребенка?]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Наблюдались ли у Вас когда-либо в прошлом аллергические реакции, продолжительное кровотечение, какие-либо другие осложнения во время или после стоматологического и общего лечения?
                        Если “Да”, то какие:
                        </td>
                     <td> <input type="radio" name="questionnaire2[Наблюдались ли у Вас когда-либо в прошлом аллергические реакции, продолжительное кровотечение, какие-либо другие осложнения во время или после стоматологического и общего лечения? Если “Да”, то какие:]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Наблюдались ли у Вас когда-либо в прошлом аллергические реакции, продолжительное кровотечение, какие-либо другие осложнения во время или после стоматологического и общего лечения? Если “Да”, то какие:]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Наличие болей и щелканье в нижнечелюстном суставе</td>
                     <td> <input type="radio" name="questionnaire2[Наличие болей и щелканье в нижнечелюстном суставе]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Наличие болей и щелканье в нижнечелюстном суставе]" value="0"></td>
                 </tr>
                 <tr>
                     <td> Кровоточивость десен при чистке зубов (периодическая, постоянная)</td>
                     <td> <input type="radio" name="questionnaire2[Кровоточивость десен при чистке зубов (периодическая, постоянная)]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Кровоточивость десен при чистке зубов (периодическая, постоянная)]" value="0"></td>
                 </tr>
                     <td> Появление герпеса «простуды» на губах с периодичностью _____в год</td>
                     <td> <input type="radio" name="questionnaire2[Появление герпеса «простуды» на губах с периодичностью _____в год]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Появление герпеса «простуды» на губах с периодичностью _____в год]" value="0"></td>
                 </tr>
                     <td> Бруксизм (ночное скрежетание зубов)</td>
                     <td> <input type="radio" name="questionnaire2[Бруксизм (ночное скрежетание зубов)]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Бруксизм (ночное скрежетание зубов)]" value="0"></td>
                 </tr>
                     <td> Периодическое появление язв в полости рта</td>
                     <td> <input type="radio" name="questionnaire2[Периодическое появление язв в полости рта]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Периодическое появление язв в полости рта]" value="0"></td>
                 </tr>
                     <td> Чувствую запах изо рта</td>
                     <td> <input type="radio" name="questionnaire2[Чувствую запах изо рта]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Чувствую запах изо рта]" value="0"></td>
                 </tr>
                     <td> Вредные привычки (курение, прием алкоголя и наркотических средств)</td>
                     <td> <input type="radio" name="questionnaire2[Вредные привычки (курение, прием алкоголя и наркотических средств)]" value="1" required></td>
                     <td> <input type="radio" name="questionnaire2[Вредные привычки (курение, прием алкоголя и наркотических средств)]" value="0"></td>
                 </tr>
                
             </table>
        </div>
    </div>
    <button class="anketa_btn">
        Save
    </button>
    </form>
</body>
</html>