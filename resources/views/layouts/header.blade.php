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
                <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <img src="{{asset('img/1px.png')}}" class="user-icon">
                </a>
                <div class="dropdown-menu login-dark neon purp" aria-labelledby="dropdownMenuLink">
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Ник"/>
                        </div>
                        <div class="form-group"><input class="form-control" type="password" name="password"
                                                       placeholder="Пароль"/></div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-6 col-xl-2">
                <a href="#"><img src="{{asset('img/1px.png')}}" class="yt-icon"></a>
            </div>
        </div>
    </div>
</center>
<!--EndNavBar-->