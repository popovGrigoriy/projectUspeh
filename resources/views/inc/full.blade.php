<div class="container">
  @foreach($data as $el)
    <div style="display: none;">
      @if($el->status == 1) {{$status = "Актуально"}}
       @else {{$status = "Неактуально"}}
       @endif
      {{ $type = substr($fullID,0,1) }}
      @if($el->landmark)  @else {{ $el->landmark = "Не указанно" }} @endif
      @if($el->street) {{ $el->street }} @else {{ $el->street = "Не указанно" }} @endif
      @if($el->number) {{ $el->number }} @else {{ $el->number = "Не указанно" }} @endif
      @if($el->conditions) {{ $el->conditions }} @else {{ $el->conditions = "Не указанно" }} @endif
      @if($el->price) {{ $el->price }} @else {{ $el->price = "Не указанно" }} @endif
      @if($el->agent) {{ $el->agent }} @else {{ $el->agent = "Не указанно" }} @endif
      @if($el->sellers_name) {{ $el->sellers_name }} @else {{ $el->sellers_name = "Не указанно" }} @endif
      @if($el->phone) {{ $el->phone }} @else {{ $el->phone = "Не указанно" }} @endif
      @if($el->description) {{ $el->description }} @else {{ $el->description = "Не указанно" }} @endif
      @if($el->size) {{ $el->size }} @else {{ $el->size = "Не указанно" }} @endif
      @if($el->facade) {{ $el->facade }} @else {{ $el->facade = "Не указанно" }} @endif
      @if($el->percentage) {{ $el->percentage }} @else {{ $el->percentage = "Не указанно" }} @endif
      @if($el->gas) {{ $el->gas }} @else {{ $el->gas = "Не указанно" }} @endif
      @if($el->sewerage) {{ $el->sewerage }} @else {{ $el->sewerage = "Не указанно" }} @endif
      @if($el->slope) {{ $el->slope }} @else {{ $el->slope = "Не указанно" }} @endif
      @if($el->floors) {{ $el->floors }} @else {{ $el->floors = "Не указанно" }} @endif
      @if($el->rooms) {{ $el->rooms }} @else {{ $el->rooms = "Не указанно" }} @endif
      @if($el->square) {{ $el->square }} @else {{ $el->square = "Не указанно" }} @endif
      @if($el->livingSquare) {{ $el->livingSquare }} @else {{ $el->livingSquare = "Не указанно" }} @endif
      @if($el->kitchen) {{ $el->kitchen }} @else {{ $el->kitchen = "Не указанно" }} @endif
      @if($el->wall) {{ $el->wall }} @else {{ $el->wall = "Не указанно" }} @endif
      @if($el->roof) {{ $el->roof }} @else {{ $el->roof = "Не указанно" }} @endif
      @if($el->year) {{ $el->year }} @else {{ $el->year = "Не указанно" }} @endif
      @if($el->yard) {{ $el->yard }} @else {{ $el->yard = "Не указанно" }} @endif
      @if($el->layout) {{ $el->layout }} @else {{ $el->layout = "Не указанно" }} @endif
      @if($el->balcony) {{ $el->balcony }} @else {{ $el->balcony = "Не указанно" }} @endif
      @if($el->numberFlat) {{ $el->numberFlat }} @else {{ $el->numberFlat = "Не указанно" }} @endif
      @if($el->typeHouse) {{ $el->typeHouse }} @else {{ $el->typeHouse = "Не указанно" }} @endif
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
      <div class="row firstLine topPar">
        <div class="col-md-3">
          @if($type == 2 || $type == 1)
          <h3>{{ $el->square }}</h3><br>
          Общая площадь
          @else
          <h3>{{ $el->facade }}</h3><br>
          Фасад
          @endif
        </div>
        <div class="col-md-3">
          @if($type == 2 || $type == 1)
          <h3>{{ $el->rooms }}</h3><br>
          Кол-во комнат
          @else
          <h3>{{ $el->price }}</h3><br>
          Цена
          @endif
        </div>
        <div class="col-md-3">
          @if($type == 3 || $type == 1)
          <h3>{{ $el->size }}</h3><br>
          Площадь участка
          @else
          <h3>{{ $el->floors }}</h3><br>
          Этаж
          @endif
        </div>
        <div class="col-md-3">
          @if($type == 2 || $type == 1)
          <h3>{{ $el->price }}</h3><br>
          Цена
          @else
          <h3>{{ $status }}</h3><br>
          Статус
          @endif
        </div>
      </div>

      <div class="row firstLine">
        <div class="col-md-12" align="center">
          Описание:<br>
          <form action="{{ route('updateDescription') }}" method="post">
            @csrf
            <input type="hidden" name="searchId" value="{{$fullID}}">
            <textarea name="description" id="description" rows="4" cols="80" disabled>{{ $el->description }}</textarea><br>
            <button type="button" id="btn1" name="button" class="btn btn-warning" onclick="document.getElementById('description').removeAttribute('disabled'); document.getElementById('submit').removeAttribute('disabled');(this).style.display ='none';document.getElementById('btn2').style.display = 'inline';">Изменить</button>
            <button type="button" id="btn2" name="button" class="btn btn-warning" onclick="document.getElementById('description').setAttribute('disabled', 'disabled'); document.getElementById('submit').setAttribute('disabled', 'disabled');(this).style.display = 'none';document.getElementById('btn1').style.display = 'inline';" style="display:none;">Отменить</button>
            <input class="btn btn-success" id="submit" type="submit" name="submit" value="Сохранить" disabled>
          </form>
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
            <div class="col-7 fontVariable">{{ $status }}</div>
          </div>
        </div>
      </div>

      @if($type == 3 || $type == 1)
        <div class="row firstLine">
          <div class="col-md-6">
            <div class="row">
              <div class="col-5 fontStatic">Площадь участка:</div>
              <div class="col-7 fontVariable">{{ $el->size }}</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-5 fontStatic">Фасад:</div>
              <div class="col-7 fontVariable">{{ $el->facade }}</div>
            </div>
          </div>
        </div>
        <div class="row firstLine">
          <div class="col-md-6">
            <div class="row">
              <div class="col-5 fontStatic">Газ:</div>
              <div class="col-7 fontVariable">{{ $el->gas }}</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-5 fontStatic">Канализация:</div>
              <div class="col-7 fontVariable">{{ $el->sewerage }}</div>
            </div>
          </div>
        </div>
        <div class="row firstLine">
          <div class="col-md-6">
            <div class="row">
              <div class="col-5 fontStatic">Доля:</div>
              <div class="col-7 fontVariable">{{ $el->percentage }}</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-5 fontStatic">Уклон:</div>
              <div class="col-7 fontVariable">{{ $el->slope }}</div>
            </div>
          </div>
        </div>

        @if($type == 1)
          <div class="row firstLine">
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 fontStatic">Кол-во этажей:</div>
                <div class="col-7 fontVariable">{{ $el->floors }}</div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 fontStatic">Кол-во комнат:</div>
                <div class="col-7 fontVariable">{{ $el->rooms }}</div>
              </div>
            </div>
          </div>
          <div class="row firstLine">
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 fontStatic">Общая площадь:</div>
                <div class="col-7 fontVariable">{{ $el->square }}</div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 fontStatic">Жилая площадь:</div>
                <div class="col-7 fontVariable">{{ $el->livingSquare }}</div>
              </div>
            </div>
          </div>
          <div class="row firstLine">
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 fontStatic">Площадь кухни:</div>
                <div class="col-7 fontVariable">{{ $el->kitchen }}</div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 fontStatic">Год постройки:</div>
                <div class="col-7 fontVariable">{{ $el->year }}</div>
              </div>
            </div>
          </div>
          <div class="row firstLine">
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 fontStatic">Стены:</div>
                <div class="col-7 fontVariable">{{ $el->wall }}</div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 fontStatic">Крыша:</div>
                <div class="col-7 fontVariable">{{ $el->roof }}</div>
              </div>
            </div>
          </div>








        @endif
      @endif

    </div>
    <form class="" action="{{ route('updateData') }}" method="post">
      @csrf
      <input type="hidden" name="searchId" value="{{$fullID}}">
      <input class="btn btn-danger" type="submit" name="btnUpdateAll" value="Отредактировать">
    </form>
  @endforeach
</div>
