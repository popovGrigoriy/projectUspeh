@extends('verstka.app')

@section('title-block')Добавление объекта@endsection

@section('content')
@if($object == 1)
  @include('inc.updateHouse')
@endif
@if($object == 2)
  @include('inc.updateFlat')
@endif
@if($object == 3)
  @include('inc.updateLandPlot')
@endif
@endsection
