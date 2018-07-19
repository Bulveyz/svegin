@extends('layouts.app')

@section('content')
    <section class="intro neon blue">
        <div class="container faq" style="color: white;">
            <h1>Всего 3 простых шага</h1>
            <h2>чтобы начать играть на наших серверах</h2>
        </div>
    </section>

    <div style="float: left; text-align: left; color: white; width: 558px; padding-top: 15px; padding-left: 15px; padding-right: 15px;    padding-bottom: 15px; margin-bottom: 0px; margin-top: 100px;" class="intro neon blue "  data-aos="fade-up-right">
    <h3>1. Регистрация</h3> На всех наших серверах используется собственная система авторизации, поэтому Вам необходимо сначала создать  аккаунт. <br><br>
    1.Ознакомьтесь с правилами сервера.<br><br>
    2.Пройдите регистрацию.<br><br>
    3.При желании Вы можете установить скин. Для этого авторизуйтесь на сайте, затем перейдите в личный кабинет.
        <br><br>
        <a class="btn btn-block neon blue" href="/register" style="background-color: #0d0121">Регистрация</a>
    </div>
    <div style="float: right; text-align: left; color: white; width: 558px; padding-top: 15px; padding-left: 15px; padding-right: 15px; padding-bottom: 15px; " class="intro neon blue gg-1"  data-aos="fade-up-left">
    <h3>2. Загрузка лаунчера</h3> Для игры на наших серверах потребуется специальный клиент, настроенный под наши сервера. Лаунчер поможет вам его загрузить и запустить. Никаких модификаций на клиент устанавливать самостоятельно не нужно.<br><br>
    <a href="#">Загрузить лаунчер (*.exe)Только Windows</a><br><a href="#">Загрузить лаунчер (*.jar)Кроссплатформенный.</a><br><br>
    Загрузите лаунчер, введите свой логин и пароль (указанные при регистрации) и запустите игру.
    </div>
    <div style="float: left; text-align: left; color: white; width: 558px; padding-top: 15px; padding-left: 15px; padding-right: 15px; padding-bottom: 15px; margin-bottom: 100px;" class="intro neon blue gg-1 "  data-aos="fade-up-right">
    <h3>3. Играть</h3> Когда все предыдущие этапы пройдены, Вы можете начать играть на наших серверах. В выборе сервера для игры вам поможет ссылка "Наши сервера". <br><br>Приглашайте своих друзей. Вместе играть будет интереснее :)
    </div>

    
@endsection