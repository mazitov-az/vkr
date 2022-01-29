<div class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
    <span class="fs-4"><font style="vertical-align: inherit; margin-left: 20px;"><font style="vertical-align: inherit;">Расчет массы кабеля</font></font></span>
  </a>

  <ul class="nav nav-pills" style="margin-right: 20px;">
    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active" aria-current="page"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Главная</font></font></a></li>
      @guest
        @if (Route::has('register'))
          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Регистрация</font></font></a></li>
        @endif

        @if (Route::has('login'))
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Вход</font></font></a></li>
        @endif

      @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{ __('Выйти') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
      @endguest
  </ul>
</div>