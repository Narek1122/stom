
@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('style/document.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="document">
        <div class="document_02">
            <h1 class="titl_document">Документы</h1>
            <p class="document_text">Вы можете заполнить документы онлайн и вам останется только подписать их приведите в клинику это сэкономит то 15 минут перед визитом к врачу.</p>
               <a href="{{ route('treaty') }}"><button class="document_btn">Заполнить договор</button></a>


             <div class="document_box">
                <a href="{{ route('register') }}"> <h2>Договор на оказание стоматологических услуг</h2></a>
                 <p>Подписывается при первом посещении клиентом старше 18 лет.</p>
             </div>

            <div class="document_box">
                <h2>Договор на оказание стоматологических услуг несовершеннолетнему</h2>
                <p>Подписывается при первом посещении клиники официальным представителем несовершеннолетнего клиента.</p>
            </div>
            <div class="document_box">
                <h2>Анкета здоровья пациента</h2>
                <p>Заполняется перед первым приёмом врача стоматолога клиентом старше 18 лет.</p>
            </div>
            <div class="document_box">
                <h2>Информированное добровольное согласие на медицинское вмешательство</h2>
                <p>Подписывается клиентом старше 18 лет или официальным представителем несовершеннолетнего клиентов перед первым посещением врача стоматолога.</p>
            </div>
        </div>
        <div class="document_04">
            <h2 class="header_doqument">Ознакомиться с документами</h2>
            <a href="">
             <div class="document_download">
                 <div class="download_img">
                     <img src="{{ asset('images/pdf.png') }}">
                 </div>
                 <div class="download_text">
                     <p>правила поведения пациентов</p>
                 </div>
             </div>
            </a>
          <a href="files/documents/2.docx">
             <div class="document_download">
                 <div class="download_img">
                     <img src="{{ asset('images/pdf.png') }}">
                 </div>
                 <div class="download_text">
                     <p>анкета о состоянии здоровья ребёнка</p>
                 </div>
             </div>
          </a>
          <a href="files/documents/1.docx">
             <div class="document_download">
                 <div class="download_img">
                     <img src="{{ asset('images/pdf.png') }}">
                 </div>
                 <div class="download_text">
                     <p>Доверенность от родителей ребенка для представителя</p>
                 </div>
             </div>
          </a>
           <a href="files/documents/Договор_на_оказание_платных_медицинских_услуг_двусторон_с_физ_лицом (Исправления 01.04.2022).docx">
             <div class="document_download">
                 <div class="download_img">
                     <img src="{{ asset('images/pdf.png') }}">
                 </div>
                 <div class="download_text">
                     <p>информированное согласие на комплекс обследований</p>
                 </div>
             </div>
           </a>
            <a href="files/documents/1.docx">
             <div class="document_download">
                 <div class="download_img">
                     <img src="{{ asset('images/pdf.png') }}">
                 </div>
                 <div class="download_text">
                     <p>положение о гарантиях</p>
                 </div>
             </div>
            </a>
            <a href="#">
             <div class="document_download">
                 <div class="download_img">
                     <img src="{{ asset('images/pdf.png') }}">
                 </div>
                 <div class="download_text">
                     <p>правила оказания платных медицинских услуг</p>
                 </div>
             </div>
            </a>
            <a href="#">
             <div class="document_download">
                 <div class="download_img">
                     <img src="{{ asset('images/pdf.png') }}">
                 </div>
                 <div class="download_text">
                     <p>правила эксплуатации результатов стоматологических услуг</p>
                 </div>
             </div>
            </a>
          <a href="#">
             <div class="document_download">
                 <div class="download_img">
                     <img src="{{ asset('images/pdf.png') }}">
                 </div>
                 <div class="download_text">
                     <p>согласие на совершение сделки несовершеннолетние</p>
                 </div>
             </div>
          </a>
        </div>

    </div>
</div>

@endsection
