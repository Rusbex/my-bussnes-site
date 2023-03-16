<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive free template 404 for you website">
    <meta name="author" content="BootstrapTema">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <title>@yield('title')</title>
</head>
<style>
    h1{
        font-size: 150px;
        margin: 20px;
        color: #4d63dd;
    }
    h2{
        margin: 20px;
        margin-bottom: 60px;
    }
    a{
        color: white;
    }
    button{
        width: 70%;
    }
</style>
<body style="background-image: url('img/back-fot.png');">
<!-- Preloader -->
<section class="contact-section section-padding">
    <div class="section-title-one container" style="justify-content: center;
    display: grid; text-align: center">
        <h1>@yield('message')</h1>
        <h2>Опс походу... что-то пошло не так</h2>
        <p>Прошу сообщить об ошибке или вернутся на главную страницу</p>
        <a href="{{route('home')}}"><button class="theme_button" style="border-radius: 10px;">На главную</button></a>
        <a href="https://api.whatsapp.com/send?phone=87786205167&text=Добрый день, у меня возникла ошибка 404 (напишите в результате каких действий появилась ошибка)" target="_blank" >
            <button class="theme_button" style="border-radius: 10px;">Сообщить об ошибке</button></a>

    </div>
</section>
</body>
</html>
