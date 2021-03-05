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
            <a class="dropdown-item" href="javascript:;" onclick="document.getElementById('objectValue').value = 1; document.getElementById('wayOnAdd').submit()">Дом</a>
            <a class="dropdown-item" href="javascript:;" onclick="document.getElementById('objectValue').value = 2; document.getElementById('wayOnAdd').submit()">Квартиру</a>
            <a class="dropdown-item" href="javascript:;" onclick="document.getElementById('objectValue').value = 3; document.getElementById('wayOnAdd').submit()">Участок</a>
            <form class="" action="{{ route('addObject') }}" id="wayOnAdd" method="post" style="display: none;">
              @csrf
              <input type="hidden" name="object" id="objectValue" value="">
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">Выход</a>
        </li>
      </ul>
      <form class="form-group my-2 my-md-0" action="{{ route('findObject') }}" method="post">
        @csrf
        <div class="row">
          <div class="col pr-0">
            <input type="text" name="searchId" id="searchId" class="form-control form-control-sm pr-0 mr-0 sm-2 mb-1 widthInput" placeholder="Поиск по ID">
            <input type="text" name="searchPhone" id="searchPhone" class="form-control form-control-sm pr-0 mr-0 sm-2 widthInput" placeholder="Поиск по Телефону">
          </div>
          <div class="col-3 pl-0">
            <button type="submit" name="button" class="btn btn-outline-success my-2 my-sm-2 ">Найти</button>
          </div>
        </div>

        @error('searchId')
        <div class="alert alert-danger my-2 my-md-0">{{ $message }}</div>
        @enderror
      </form>
    </div>
  </div>
</nav>
