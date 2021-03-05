@extends('verstka.app')

@section('title-block')Добавление объекта@endsection

@section('content')
@if($_POST['object'] == 1)
  @include('inc.addHouse')
@endif
@if($_POST['object'] == 2)
  @include('inc.addFlat')
@endif
@if($_POST['object'] == 3)
  @include('inc.landPlot')
@endif
@endsection
