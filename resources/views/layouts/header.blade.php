<div id="stars"></div>
<div id="stars2"></div>
<br>
<br>
<br>
<div class="logo">
    <b>Sveg<span>i</span>n</b>
    <br>
    <b>C<span>r</span>aft</b>
</div>
<br>
<br>
<!--NavBar-->
<center>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <a href="/"><img src="{{asset('img/1px.png')}}" class="home-icon" title="главная"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <a href="/threads"><img src="{{asset('img/1px.png')}}" class="forum-icon"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <a href="/donat"><img src="{{asset('img/1px.png')}}" class="donat-icon"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <a href="/faq"><img src="{{asset('img/1px.png')}}" class="info-icon"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-6 col-xl-2 dropdown">
            @if (auth()->check())
                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img style="border-radius: 50%; width: 100px !important; margin-top: 70px;" class="figure-img"
                             src="{{\Illuminate\Support\Facades\Storage::url(auth()->user()->avatar)}}" width="150px"
                             height="100px">
                    </a>
                    <div class="dropdown-menu login-dark intro neon blue text-center" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/profile/{{auth()->id()}}">Профиль</a>
                        <a class="dropdown-item" href="/logout">Выйти</a>
                    </div>
                @else
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img src="{{asset('img/1px.png')}}" class="user-icon">
                    </a>
                    <div class="dropdown-menu login-dark intro neon blue" aria-labelledby="dropdownMenuLink" style="padding-bottom: 0px; padding-top: 0px; ">
                        <form method="post" action="{{ route('login') }}" style="padding-bottom: 20px;">
                            @csrf
                            <div class="form-group">
                                <input class="form-control neon blue" type="text" name="name" placeholder="Ник" style="background-color: #0d0121; color: white; border-radius: 10px;"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control neon blue" type="password" name="password" placeholder="Пароль" style="background-color: #0d0121; color: white; border-radius: 10px;">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block neon gren" type="submit" style="background-color: #02fd1e80; border: none; border-radius: 10px;">Войти</button>
                                <div class="text-center pt-3">
                                    <a class="text-white" href="/register" style="color: white;">Регистрация</a>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
            <div class="col-sm-6 col-md-4 col-lg-6 col-xl-2">
                <a href="#"><img src="{{asset('img/1px.png')}}" class="yt-icon"></a>
            </div>
        </div>
    </div>
</center>
<!--EndNavBar-->