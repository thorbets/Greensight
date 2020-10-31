<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="static/css/style.css">
  <link rel="stylesheet" href="static/css/bootstrap.min.css">
  <script src="static/js/jquery-3.5.1.min.js"></script>
  <script src="static/js/bootstrap.min.js"></script>
  <script src="form.js"></script>
  <title>Форма регистрации</title>
</head>

<body>
  <div class="container mt-4">
    <h1>Форма регистрации</h1>
    <div id="response" style="color:red"></div>
    <form id="regform" action="/check.php" method="post">
      <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" /><br>
      <input type="text" class="form-control" name="surname" id="surname" placeholder="Введите фамилию" /><br>
      <input type="email" class="form-control" name="email" id="email" placeholder="Введите email" /><br>
      <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" /><br>
      <input type="password" class="form-control" name="password2" id="password2" placeholder="Подтвердите пароль" /><br>
      <button type="submit" name="do_signup" id="breg" class="btn btn-success" formnovalidate>Зарегистрироваться</button>
    </form>
    <div id="registered" style="color:green" >Успешная регистрация</div>
  </div>
</body>

</html>