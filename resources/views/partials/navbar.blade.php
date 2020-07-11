
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav nav-pills">
            <li class=" nav-item ">
              <a class="nav-link {{  setActive('home') }}" href="{{route('home')}}">@lang('Home')</a>
            </li>
              <li class=" nav-item">
              <a class="nav-link  {{  setActive('quien-soy') }}"href="{{route('quien-soy')}}">Quien Soy</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{  setActive('agregar.index') }}" href="{{route('agregar.index')}}">Portafolio</a>
              </li>
            <li class="nav-item ">
                <a class="nav-link {{  setActive('contacto') }}" href="{{route('contacto')}}">Contacto</a>
            </li>
            @guest
             <li class="nav-item" >
                <a  class="nav-link {{  setActive('login') }}" href="{{route('login')}}">Login</a>
            </li>
            @else
            <li class="nav-item ">
                <a class="nav-link {{  setActive('logout') }}"   id="logout"  href="#"
                onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            </li>
            @endguest
          </ul>
        </div>
    </div>
      </nav>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
