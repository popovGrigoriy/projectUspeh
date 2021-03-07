<div class="container">
  <form action="{{ route('addObjectPost') }}" method="post">
    @csrf
    <div class="form-group">
      <div class="row">
        <h2 align = "center">Добавление Квартиры</h2>
      </div>
      <hr>

        <input type="hidden" name="type" value="Квартира">

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="landMark">Район:</label> </div>
            <div class="col-md-7">
              <select name = "landMark" >
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
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="street">Улица:</label> </div>
            <div class="col-md-7"> <input type="text" name="street" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="number">Номер дома:</label> </div>
            <div class="col-md-7"> <input type="text" name="number" value=""><br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="numberFlat">Номер квартиры:</label> </div>
            <div class="col-md-7"> <input type="text" name="numberFlat" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="square">Общая площадь:</label> </div>
            <div class="col-md-7"> <input type="text" name="square" value="" size = "15">кв.м.<br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="livingSquare">Жилая площадь:</label> </div>
            <div class="col-md-7"> <input type="text" name="livingSquare" value="" size = "15">кв.м.<br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="kitchen">Площадь кухни:</label> </div>
            <div class="col-md-7"> <input type="text" name="kitchen" value="" size = "15">кв.м.<br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="rooms">Количество комнат:</label> </div>
            <div class="col-md-7"> <input type="text" name="rooms" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="floor">Этаж:</label> </div>
            <div class="col-md-7"> <input type="text" name="floor" value=""><br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="typeHouse">Тип дома:</label> </div>
            <div class="col-md-7">
              <select name="typeHouse">
                <option value="">Не указанно</option>
                <option>Панельный</option>
                <option>Кирпичный</option>
                <option>Сайдинг</option>
                <option>Газоблок</option>
                <option>Оштукатуренный</option>
                <option>Шелеванный</option>
                <option>Саман+Кирпич</option>
                <option>Канадская технология</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="conditions">Состояние:</label> </div>
            <div class="col-md-7">
              <select name="conditions">
                <option value="">Не указанно</option>
                <option>Строй вариант</option>
                <option>Чистовая отделка</option>
                <option>Жилое</option>
                <option>Хорошее</option>
                <option>Отличное</option>
                <option>Требуется кап.ремонт</option>
                <option>Требуется косметич.ремонт</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="balcony">Балкон:</label> </div>
            <div class="col-md-7">
              <select name="balcony">
                <option value="">Не указанно</option>
                <option>Нет</option>
                <option>Застеклен</option>
                <option>Незастеклен</option>
                <option>2 и более</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="layout">Планировка:</label> </div>
            <div class="col-md-7">
              <select name="layout">
                <option value="">Не указанно</option>
                <option>Улучшенная</option>
                <option>Хрущевка</option>
                <option>Комуналка</option>
                <option>Бабочка</option>
                <option>сталинка</option>
                <option>Современная</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="agent">Агент:</label> </div>
            <div class="col-md-7"> <input type="text" name="agent" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="sellers_name">Имя продовца:</label> </div>
            <div class="col-md-7"> <input type="text" name="sellers_name" value=""><br> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-5"> <label for="phone">Телефон продовца:</label> </div>
            <div class="col-md-7"> <input type="text" name="phone" value=""><br> </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <label for="description">Описание:</label>
          <br>
          <textarea name="description" rows="3" cols="60"></textarea>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col"> <label for="price">Цена:</label> </div>
        <div class="col"> <input type="text" name="price" value="" size = "11">Тыс.руб.<br> </div>
      </div>
      <hr>

      <div class="row">
        <div class="col">
          <input class = "btn btn-success" type="submit" name="btn_submit" value="Добавить">
        </div>
      </div>
    </div>
  </form>
</div>
