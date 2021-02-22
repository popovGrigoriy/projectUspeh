@extends('verstka.app')

@section('title-block')Добавление объекта@endsection

@section('content')
  <form action="#">
    <label for="object">Объект:</label>
    <input type="text" name="object" value="Дом"><br>
    <label for="landmark">Район:</label>
    <select>
      <option>СЖМ</option>
      <option>ВЖМ</option>
      <option>ЗЖМ</option>
      <option>Центр</option>
      <option>РДВС</option>
      <option>Наливная</option>
      <option>Авиагородок</option>
      <option>Гайдара</option>
    </select>
    <br>
    <label for="street">Улица:</label>
    <input type="text" name="street" value=""><br>
    <label for="number">Номер дома:</label>
    <input type="text" name="number" value=""><br>
    <label for="conditions">Состояние:</label>
    <input type="text" name="conditions" value=""><br>
    <label for="size">Площадь участка:</label>
    <input type="text" name="size" value="">сот.<br>
    <label for="year">Год постройки:</label>
    <input type="text" name="year" value=""><br>
    <label for="percentage">Доля?:</label>
    <input type="text" name="percentage" value=""><br>
    <label for="square">Общая площадь:</label>
    <input type="text" name="square" value="">кв.м.<br>
    <label for="squareLiving">Жилая площадь:</label>
    <input type="text" name="squareLiving" value="">кв.м.<br>
    <label for="kitchen">Площадь кухни:</label>
    <input type="text" name="kitchen" value="">кв.м.<br>
    <label for="rooms">Колиество комнат:</label>
    <input type="text" name="rooms" value=""><br>
    <label for="wall">Материал стен:</label>
    <input type="text" name="wall" value=""><br>
    <label for="roof">Материал крышы:</label>
    <input type="text" name="roof" value=""><br>
    <label for="floors">Количество этажей:</label>
    <input type="text" name="floors" value=""><br>
    <label for="yard">Двор:</label>
    <input type="text" name="yard" value=""><br>
    <label for="facade">Ширина фасада:</label>
    <input type="text" name="facade" value=""><br>
    <label for="gas">Газ?:</label>
    <input type="text" name="gas" value=""><br>
    <label for="sewerage">Канализация:</label>
    <input type="text" name="sewerage" value=""><br>
    <label for="slope">Уклон участка:</label>
    <input type="text" name="slope" value="">градусов<br>
    <label for="description">Описание:</label>
    <textarea name="description" rows="3" cols="60"></textarea>
    <br>
    <label for="price">Цена:</label>
    <input type="text" name="price" value="">Тыс.руб.<br>
    <label for="agent">Агент:</label>
    <input type="text" name="agent" value=""><br>
    <label for="sellers_name">Имя продовца:</label>
    <input type="text" name="sellers_name" value=""><br>
    <label for="phone">Телефон продовца:</label>
    <input type="text" name="phone" value=""><br>

  </form>
@endsection
