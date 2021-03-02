<div class="container">
  @foreach($data as $el)
    <div style="display: none;">
      @if($el->landmark)  @else {{ $el->landmark = "Нет" }} @endif
      @if($el->street) {{ $el->street }} @else {{ $el->street = "Нет" }} @endif
      @if($el->number) {{ $el->number }} @else {{ $el->number = "Нет" }} @endif
      @if($el->conditions) {{ $el->conditions }} @else {{ $el->conditions = "Нет" }} @endif
      @if($el->price) {{ $el->price }} @else {{ $el->price = "Нет" }} @endif
      @if($el->agent) {{ $el->agent }} @else {{ $el->agent = "Нет" }} @endif
      @if($el->sellers_name) {{ $el->sellers_name }} @else {{ $el->sellers_name = "Нет" }} @endif
      @if($el->phone) {{ $el->phone }} @else {{ $el->phone = "Нет" }} @endif
      @if($el->description) {{ $el->description }} @else {{ $el->description = "Нет" }} @endif
      @if($el->size) {{ $el->size }} @else {{ $el->size = "Нет" }} @endif
      @if($el->facade) {{ $el->facade }} @else {{ $el->facade = "Нет" }} @endif
      @if($el->percentage) {{ $el->percentage }} @else {{ $el->percentage = "Нет" }} @endif
      @if($el->gas) {{ $el->gas }} @else {{ $el->gas = "Нет" }} @endif
      @if($el->sewerage) {{ $el->sewerage }} @else {{ $el->sewerage = "Нет" }} @endif
      @if($el->slope) {{ $el->slope }} @else {{ $el->slope = "Нет" }} @endif
      @if($el->floors) {{ $el->floors }} @else {{ $el->floors = "Нет" }} @endif
      @if($el->rooms) {{ $el->rooms }} @else {{ $el->rooms = "Нет" }} @endif
      @if($el->square) {{ $el->square }} @else {{ $el->square = "Нет" }} @endif
      @if($el->livingSquare) {{ $el->livingSquare }} @else {{ $el->livingSquare = "Нет" }} @endif
      @if($el->kitchen) {{ $el->kitchen }} @else {{ $el->kitchen = "Нет" }} @endif
      @if($el->wall) {{ $el->wall }} @else {{ $el->wall = "Нет" }} @endif
      @if($el->roof) {{ $el->roof }} @else {{ $el->roof = "Нет" }} @endif
      @if($el->year) {{ $el->year }} @else {{ $el->year = "Нет" }} @endif
      @if($el->yard) {{ $el->yard }} @else {{ $el->yard = "Нет" }} @endif
      @if($el->layout) {{ $el->layout }} @else {{ $el->layout = "Нет" }} @endif
      @if($el->balcony) {{ $el->balcony }} @else {{ $el->balcony = "Нет" }} @endif
      @if($el->numberFlat) {{ $el->numberFlat }} @else {{ $el->numberFlat = "Нет" }} @endif
      @if($el->typeHouse) {{ $el->typeHouse }} @else {{ $el->typeHouse = "Нет" }} @endif
    </div>
    <div class="hline">
      <div class="row firstLine">
        <div class="col">
          <h2>
            @if(substr($fullID, 0, 1) == 1) Дом
            @elseif(substr($fullID, 0, 1) == 2) Квартира
            @elseif(substr($fullID, 0, 1) == 3) Участок
            @endif
            № {{ $fullID }}
          </h2>
        </div>
      </div>
      <div class="row firstLine">
        <div class="col-md-3">
          <h3>{{ $el->square }}</h3><br>
          Общая площадь:
        </div>
        <div class="col-md-3">
          <h3>{{ $el->rooms }}</h3><br>
          Кол-во комнат:
        </div>
        <div class="col-md-3">
          <h3>{{ $el->size }}</h3><br>
          Площадь участка:
        </div>
        <div class="col-md-3">
          <h3>{{ $el->price }}</h3><br>
          Цена:
        </div>
      </div>

      <div class="row firstLine">
        <div class="col-md-12" align="center">
          Описание:<br>
          <textarea name="description" rows="8" cols="80">{{ $el->description }}</textarea>
        </div>
      </div>

      <div class="row firstLine">
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Район:</div>
            <div class="col-7 fontVariable">{{ $el->landmark }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Улица:</div>
            <div class="col-7 fontVariable">{{ $el->street }}</div>
          </div>
        </div>
      </div>

      <div class="row firstLine">
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Номер дома:</div>
            <div class="col-7 fontVariable">{{ $el->number }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Состояние:</div>
            <div class="col-7 fontVariable">{{ $el->conditions }}</div>
          </div>
        </div>
      </div>

      <div class="row firstLine">
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Дата создания:</div>
            <div class="col-7 fontVariable">{{ $el->created_at }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Дата изменения:</div>
            <div class="col-7 fontVariable">{{ $el->updated_at }}</div>
          </div>
        </div>
      </div>

      <div class="row firstLine">
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Имя продавца:</div>
            <div class="col-7 fontVariable">{{ $el->sellers_name }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Телефон:</div>
            <div class="col-7 fontVariable">{{ $el->phone }}</div>
          </div>
        </div>
      </div>

      <div class="row firstLine">
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Агент:</div>
            <div class="col-7 fontVariable">{{ $el->agent }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-5 fontStatic">Статус:</div>
            <div class="col-7 fontVariable">{{ $el->status }}</div>
          </div>
        </div>
      </div>
    </div>









  @endforeach
</div>
