<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">App Semana i</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Desayunos<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" >
                        <li>{!! link_to('suggestions/create' , 'Ingresar desayuno',null) !!}</li>
                        <li>{!! link_to('suggestions' , 'Platillos',null) !!}</li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Comidas<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" >
                        <li>{!! link_to('suggestions/create' , 'Ingresar Comida',null) !!}</li>
                        <li>{!! link_to('suggestions' , 'Comidas',null) !!}</li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cenas<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" >
                        <li>{!! link_to('suggestions/create' , 'Ingresar cena',null) !!}</li>
                        <li>{!! link_to('suggestions' , 'Cenas',null) !!}</li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (!Auth::guest())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{!! Auth::user()->name !!} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

