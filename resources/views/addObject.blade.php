@extends('verstka.app')

@section('title-block')Добавление объекта@endsection

@section('content')
@if($_GET['object'] == 1)
  @include('inc.addHouse')
@endif
@if($_GET['object'] == 2)
  @include('inc.addFlat')
@endif
@if($_GET['object'] == 3)
  @include('inc.landPlot')
@endif
@endsection
