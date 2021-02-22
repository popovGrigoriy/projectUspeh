<h3>Найдено</h3>
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
