<form method="POST" action="/registration">
  @csrf
  <div class="row">
    <div class="col">
      <label for="login">Логин</label>
    </div>
    <div class="col">
      <input type="text" class="form-control" id="login" name="login">
      @error('login')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col">
      <label for="role">Роль</label>
    </div>
    <div class="col">
      <select class="form-control" id="role" name="role">
        <option value="agent">Агент</option>
        <option value="admin">Admin</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <label for="password">Пароль</label>
    </div>
    <div class="col">
      <input type="password" class="form-control" id="password" name="password">
      @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>  
    <div class="col">
      <label for="password">Повторите пароль</label>
    </div>
    <div class="col">
      <input type="password" class="form-control" id="password2" name="password2">
      @error('password2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <br>
    <button type="submit" class="btn btn-primary w-100">Зарегистрировать</button>
  </form>
