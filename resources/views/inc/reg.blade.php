<form method="POST" action="/registration">
  @csrf
    <div class="form-group">
      <label for="login">Логин</label>
      <input type="text" class="form-control" id="login" name="login">
      @error('login')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Пароль</label>
      <input type="password" class="form-control" id="password" name="password">
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Повторите пароль</label>
      <input type="password" class="form-control" id="password2" name="password2">
      @error('password2')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary w-100">Зарегистрировать</button>
  </form>
