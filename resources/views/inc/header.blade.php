<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a href="#" class="navbar-brand"> <img src="img/logo2m.jpg"> </a>
    <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="/home" class="nav-link">Главная</a>
        </li>
        <li class="nav-item">
          <a href="/registration" class="nav-link">Регистрация</a>
        </li>
        <li class="nav-item">
          <a href="/object" class="nav-link">Обьекты</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id = "addObject" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Добавить объект</a>
          <div class="dropdown-menu" aria-labelledby="addObject">
            <a class="dropdown-item" href="{{ route('addObject', ['object' => 1]) }}">Дом</a>
            <a class="dropdown-item" href="{{ route('addObject', ['object' => 2]) }}">Квартиру</a>
            <a class="dropdown-item" href="{{ route('addObject', ['object' => 3]) }}">Участок</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">Выход</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-md-0" action="{{ route('findObject') }}" method="post">
        @csrf
        <input type="text" name="searchId" id="searchId" class="form-control mr-sm-2" placeholder="Поиск по ID">
        <button type="submit" name="button" class="btn btn-outline-success my-2 my-sm-2">Найти</button>
      </form>
    </div>
  </div>
</nav>
