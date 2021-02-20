<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <title>Вход</title>
</head>
<body>

  <div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">

        <div class="row bg-white shadow-sm">

           <div class="col border rounded p-4">
            <h3 class="text-center mb-4">Вход</h3>
            <form method="POST" action="{{ route('loggin') }}">
              @csrf
                <div class="form-group">
                  <label for="login">Логин</label>
                  <input type="text" class="form-control" name="login" id="login">
                  @error('login')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Пароль</label>
                  <input type="password" class="form-control" name="password" id="password">
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Войти</button>
              </form>
           </div>
        </div>
    </div>
</body>
</html>
