<h3>Найдено</h3>
@foreach($data as $el)
  <div class="alert alert-info">
    <div class="row">
      <div class="col">
        <h2>
          @if(substr($fullID, 0, 1) == 1) Дом
          @elseif(substr($fullID, 0, 1) == 2) Квартира
          @elseif(substr($fullID, 0, 1) == 3) Участок
          @endif
        </h2>
      </div>
    </div>

    <div class="row square">
      <div class="col-md-2">Район</div>
      <div class="col-md-2">Улица</div>
      <div class="col-md-1">Дом</div>
      <div class="col-md-1">Цена</div>
      <div class="col-md-1">Состояние</div>
      <div class="col-md-2">Описание</div>
      <div class="col-md-2">Изменено</div>
      <div class="col-md-1">Статус</div>
    </div>
    <div class="row square">
      <div class="col-md-2">{{ $el->landmark }}</div>
      <div class="col-md-2">{{ $el->street }}</div>
      <div class="col-md-1">{{ $el->number }}</div>
      <div class="col-md-1">{{ $el->price }}</div>
      <div class="col-md-1">{{ $el->conditions }}</div>
      <div class="col-md-2">{{ $el->description }}</div>
      <div class="col-md-2">{{ $el->updated_at }}</div>
      <div class="col-md-1">
         @if($el->status == 1) Актуально
          @else Неактуально
          @endif
      </div>
    </div>
    <div class="row" align = "right">
      <form action="{{ route('findObject', ['searchId' => $fullID, 'full' => true])}}" method="post">
        @csrf
        <input type="submit" class="btn btn-warning" value="Подробнее">
      </form>
    </div>
  </div>
@endforeach
