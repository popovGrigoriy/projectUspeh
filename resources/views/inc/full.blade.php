<div class="container">
@foreach($data as $el)
  <div class="row">
    <div class="col">
      <p>id объекта:{{ $fullID }}</p>
    </div>
    <div class="col">
      <p>Район: {{ $el->landmark }}</p>
    </div>
    <div class="col">
      <p>Улица: {{ $el->street }}</p>
    </div>
    <div class="col">
      <p>Номер дома: {{ $el->number }}</p>
    </div>
    <div class="col">
      <p>Состояние: {{ $el->conditions }}</p>
    </div>
    <div class="col">
      <p>Цена: {{ $el->price }} Тыс.руб.</p>
    </div>
    <div class="col">
      <p>Агент: {{ $el->agent }}</p>
    </div>
    <div class="col">
      <p>Имя продовца: {{ $el->sellers_name }}</p>
    </div>
    <div class="col">
      <p>Телефон: {{ $el->phone }}</p>
    </div>
    <div class="col">
      <p>Описание: {{ $el->description }}</p>
    </div>
    <div class="col">
      <p>Дата обовления: {{ $el->updated_at }}</p>
    </div>
    <div class="col">
      <p>Дата создания: {{ $el->created_at }}</p>
    </div>
    <div class="col">
      <p>
        Статус:
        @if($el->status == 1) Актуально
        @else Неактуально
        @endif
       </p>
    </div>
    @if(!isset($el->balcony))
      <div class="col">
        <p>Размер участка:{{ $el->size }}</p>
      </div>
      <div class="col">
        <p>Фасад: {{ $el->facade }}</p>
      </div>
      <div class="col">
        <p>Доля: {{ $el->percentage }}</p>
      </div>
      <div class="col">
        <p>Газ: {{ $el->gas }}</p>
      </div>
      <div class="col">
        <p>Канализация: {{ $el->sewerage }}</p>
      </div>
      <div class="col">
        <p>Уклон: {{ $el->slope }}</p>
      </div>
      @if(isset($el->yard))
        <div class="col">
          <p>Количество этажей:{{ $el->floors }}</p>
        </div>
        <div class="col">
          <p>Количество комнат: {{ $el->rooms }}</p>
        </div>
        <div class="col">
          <p>Общая площадь: {{ $el->square }}</p>
        </div>
        <div class="col">
          <p>Жилая площадь: {{ $el->livingSquare }}</p>
        </div>
        <div class="col">
          <p>Площадь кухни: {{ $el->kitchen }}</p>
        </div>
        <div class="col">
          <p>Стены: {{ $el->wall }}</p>
        </div>
        <div class="col">
          <p>Крыша: {{ $el->roof }}</p>
        </div>
        <div class="col">
          <p>Год постройки: {{ $el->year }}</p>
        </div>
        <div class="col">
          <p>Двор?: {{ $el->yard }}</p>
        </div>
      @endif
    @endif
    @if(isset($el->balcony))
      <div class="col">
        <p>Количество этажей:{{ $el->floors }}</p>
      </div>
      <div class="col">
        <p>Количество комнат: {{ $el->rooms }}</p>
      </div>
      <div class="col">
        <p>Общая площадь: {{ $el->square }}</p>
      </div>
      <div class="col">
        <p>Жилая площадь: {{ $el->livingSquare }}</p>
      </div>
      <div class="col">
        <p>Площадь кухни: {{ $el->kitchen }}</p>
      </div>
      <div class="col">
        <p>Планировка: {{ $el->layout }}</p>
      </div>
      <div class="col">
        <p>Балкон?: {{ $el->balcony }}</p>
      </div>
      <div class="col">
        <p>Номер квартиры: {{ $el->numberFlat }}</p>
      </div>
      <div class="col">
        <p>Тип дома: {{ $el->typeHouse }}</p>
      </div>
    @endif
  </div>
@endforeach
</div>
