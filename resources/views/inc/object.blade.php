<h3>Найдено</h3>
@isset($data)
@foreach($data as $el)
  <div class="alert alert-info">
    <div class="row">
      <div class="col">
        <p>{{ $el->id }}</p>
      </div>
      <div class="col">
        <p>{{ $el->landmark }}</p>
      </div>
      <div class="col">
        <p>{{ $el->street }}</p>
      </div>
      <div class="col">
        <p>{{ $el->number }}</p>
      </div>
      <div class="col">
        <p>{{ $el->floors }}</p>
      </div>
      <div class="col">
        <p>{{ $el->typeHouse }}</p>
      </div>
      <div class="col">
        <p>{{ $el->rooms }}</p>
      </div>
      <div class="col">
        <p>{{ $el->square }}</p>
      </div>
      <div class="col">
        <p>{{ $el->conditions }}</p>
      </div>
      <div class="col">
        <p>{{ $el->price }}</p>
      </div>
      <div class="col">
        <p>{{ $el->agent }}</p>
      </div>
      <div class="col">
        <p>{{ $el->phone }}</p>
      </div>

    </div>
  </div>
@endforeach
@endisset
@isset($data2)
@if($data2 != null)
@foreach($data2 as $el)
  <div class="alert alert-info">
    <div class="row">
      <div class="col">
        <p>{{ $el->id }}</p>
      </div>
      <div class="col">
        <p>{{ $el->landmark }}</p>
      </div>
      <div class="col">
        <p>{{ $el->street }}</p>
      </div>
      <div class="col">
        <p>{{ $el->number }}</p>
      </div>
      <div class="col">
        <p>{{ $el->floors }}</p>
      </div>
      <div class="col">
        <p>{{ $el->typeHouse }}</p>
      </div>
      <div class="col">
        <p>{{ $el->rooms }}</p>
      </div>
      <div class="col">
        <p>{{ $el->square }}</p>
      </div>
      <div class="col">
        <p>{{ $el->conditions }}</p>
      </div>
      <div class="col">
        <p>{{ $el->price }}</p>
      </div>
      <div class="col">
        <p>{{ $el->agent }}</p>
      </div>
      <div class="col">
        <p>{{ $el->phone }}</p>
      </div>

    </div>
  </div>
@endforeach
@endif
@endisset
@isset($data3)
@foreach($data3 as $el)
  <div class="alert alert-info">
    <div class="row">
      <div class="col">
        <p>{{ $el->id }}</p>
      </div>
      <div class="col">
        <p>{{ $el->landmark }}</p>
      </div>
      <div class="col">
        <p>{{ $el->street }}</p>
      </div>
      <div class="col">
        <p>{{ $el->number }}</p>
      </div>
      <div class="col">
        <p>{{ $el->floors }}</p>
      </div>
      <div class="col">
        <p>{{ $el->typeHouse }}</p>
      </div>
      <div class="col">
        <p>{{ $el->rooms }}</p>
      </div>
      <div class="col">
        <p>{{ $el->square }}</p>
      </div>
      <div class="col">
        <p>{{ $el->conditions }}</p>
      </div>
      <div class="col">
        <p>{{ $el->price }}</p>
      </div>
      <div class="col">
        <p>{{ $el->agent }}</p>
      </div>
      <div class="col">
        <p>{{ $el->phone }}</p>
      </div>

    </div>
  </div>
@endforeach
@endisset
