<form class="" action="{{ route('findFilterObject') }}" method="post" autocomplete="off">
@csrf
  <div class="form-group">
    <div class="row">
      <div class="col">
        <label for="typeObject">Что ищем?</label>
      </div>
      <div class="col">
        <select class="form-control form-control-sm" id="typeObject" name="typeObject" aria-required="true" onChange="Selected(this)">
          <option value="1">Дома</option>
          <option value="2">Квартиры</option>
          <option value="3">Участки</option>
        </select>
      </div>
    </div>
    <hr>




    <div id='1' style='display: block;'>

      <div class="row">
        <div class="col">
          <label for="landmarkHouses">Район</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="landmarkHouses" name="landmarkHouses">
            <option value = ''>Любой</option>
            <option>СЖМ</option>
            <option>ЗЖМ</option>
            <option>ВЖМ</option>
            <option>РДВС</option>
            <option>Центр</option>
            <option>Красныйсад</option>
            <option>Гайдарапос.</option>
            <option>Наливная</option>
            <option>Азовский</option>
            <option>Соленоеозеро</option>
            <option>Залесье</option>
            <option>Овощной</option>
            <option>Солнечный</option>
            <option>ПЧЛ</option>
            <option>Вет.личебница</option>
            <option>Авиагородок</option>
            <option>Авиаторовсквер</option>
          </select>
        </div>
      </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="price">Цена</label>
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="от" name="priceHousesMin" id="priceHousesMin">
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="до" name="priceHousesMax" id="priceHousesMax">
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="streetHouses">Улица</label>
          </div>
          <div class="col">
            <input class="form-control" type="text" placeholder="Улица" name="streetHouses" id="streetHouses">
          </div>
        </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="floorsHouses">Этажность</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="floorsHousesMin" id="floorsHousesMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="floorsHousesMax" id="floorsHousesMax">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="sizeHouses">Размер участка</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="sizeHousesMin" id="sizeHousesMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="sizeHousesMax" id="sizeHousesMax">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="squareHousesMin">Площадь дома</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="squareHousesMin" id="squareHousesMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="squareHousesMax" id="squareHousesMax">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="roomsHouses">Кол-во комнат</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="roomsHousesMin" id="roomsHousesMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="roomsHousesMax" id="roomsHousesMax">
        </div>
      </div>
      <hr>

      <button type="submit" class="btn btn-primary w-100">Искать</button>

    </div>





    <div id='2' style='display: none;'>
      <div class="row">
        <div class="col">
          <label for="landmarkFlat">Район</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="landmarkFlat" name="landmarkFlat">
            <option value = ''>Любой</option>
            <option>СЖМ</option>
            <option>ЗЖМ</option>
            <option>ВЖМ</option>
            <option>РДВС</option>
            <option>Центр</option>
            <option>Красныйсад</option>
            <option>Гайдарапос.</option>
            <option>Наливная</option>
            <option>Азовский</option>
            <option>Соленоеозеро</option>
            <option>Залесье</option>
            <option>Овощной</option>
            <option>Солнечный</option>
            <option>ПЧЛ</option>
            <option>Вет.личебница</option>
            <option>Авиагородок</option>
            <option>Авиаторовсквер</option>
          </select>
        </div>
      </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="price">Цена</label>
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="от" name="priceFlatMin" id="priceFlatMin">
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="до" name="priceFlatMax" id="priceFlatMax">
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="streetFlat">Улица</label>
          </div>
          <div class="col">
            <input class="form-control" type="text" placeholder="Улица" name="streetFlat" id="streetFlat">
          </div>
        </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="floorsFlat">Этаж</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="floorsFlatMin" id="floorsFlatMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="floorsFlatMax" id="floorsFlatMax">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="roomsFlat">Кол-во комнат</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="roomsFlatMin" id="roomsFlatMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="roomsFlatMax" id="roomsFlatMax">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="squareFlatMin">Площадь квартиры</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="squareFlatMin" id="squareFlatMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="squareFlatMax" id="squareFlatMax">
        </div>
      </div>
      <hr>

      <button type="submit" class="btn btn-primary w-100">Искать</button>
  </div>





    <div id='3' style='display: none;'>
      <div class="row">
        <div class="col">
          <label for="landmarkLand_plots">Район</label>
        </div>
        <div class="col">
          <select class="form-control form-control-sm" id="landmarkLand_plots" name="landmarkLand_plots">
            <option value = ''>Любой</option>
            <option>СЖМ</option>
            <option>ЗЖМ</option>
            <option>ВЖМ</option>
            <option>РДВС</option>
            <option>Центр</option>
            <option>Красныйсад</option>
            <option>Гайдарапос.</option>
            <option>Наливная</option>
            <option>Азовский</option>
            <option>Соленоеозеро</option>
            <option>Залесье</option>
            <option>Овощной</option>
            <option>Солнечный</option>
            <option>ПЧЛ</option>
            <option>Вет.личебница</option>
            <option>Авиагородок</option>
            <option>Авиаторовсквер</option>
          </select>
        </div>
      </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="priceLand_plots">Цена</label>
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="от" name="priceLand_plotsMin" id="priceLand_plotsMin">
          </div>
          <div class="col">
            <input class="form-control form-control-sm" type="text" placeholder="до" name="priceLand_plotsMax" id="priceLand_plotsMax">
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col">
            <label for="streetLand_plots">Улица</label>
          </div>
          <div class="col">
            <input class="form-control" type="text" placeholder="Улица" name="streetLand_plots" id="streetLand_plots">
          </div>
        </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="sizeLand_plots">Размер участка</label>
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="от" name="sizeLand_plotsMin" id="sizeLand_plotsMin">
        </div>
        <div class="col">
          <input class="form-control form-control-sm" type="text" placeholder="до" name="sizeLand_plotsMax" id="sizeLand_plotsMax">
        </div>
      </div>
      <hr>

      <button type="submit" class="btn btn-primary w-100">Искать</button>
    </div>


  </div>

</form>
<script type="text/javascript">
  function Selected(a) {
    var label = a.value;

    if (label==1) {
      document.getElementById("1").style.display='block';
      document.getElementById("2").style.display='none';
      document.getElementById("3").style.display='none';

    } else if (label==2) {
      document.getElementById("1").style.display='none';
      document.getElementById("2").style.display='block';
      document.getElementById("3").style.display='none';

    } else if (label==3) {
      document.getElementById("1").style.display='none';
      document.getElementById("2").style.display='none';
      document.getElementById("3").style.display='block';

    }

  }
</script>
