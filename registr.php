<?php
session_start();

if(isset($_SESSION["status"]) && $_SESSION["status"]==="eror"){
 ?>
   <p style="font-size: 20px; color: red;">Учотные даные зянаты</p>
<?php
}
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

    <title></title>
</head>
<body>
  
  <div class="container" id="container">
          <div class="form-container sign-in-container">
              <form action="user/registr.php" method="post">
                  <h1>Регистрация</h1>
                  <div class="social-container">
                      <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                  <span>или используйте свой E-mail для регистрации</span>
                  <input type="text" placeholder="Name" name="name" />
                  <input type="email" placeholder="Email" name="email" />
                  <input type="password" placeholder="Password" name="pass" />
                  <button name="send" >Зарегистрироваться</button>
              </form>
          </div>
          <div class="form-container sign-up-container">
              <form action="user/login.php" method="post">
                  <h1>Авторизация</h1>
                  <div class="social-container">
                      <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                  <span>или используйте свой аккаунт</span>
             
                  <input type="email" placeholder="Email" name="email"/>
                  <input type="password" placeholder="Password" name="pass"/>
                  <a href="user/reset.php">Забыли пароль?</a>
                  <button name="send">Вход</button>
              </form>
          </div>
          <div class="overlay-container">
              <div class="overlay">
                  <div class="overlay-panel overlay-left">
                      <h1>Добро пожаловать!</h1>
                      <p>Чтобы оставаться на связи с нами, пожалуйста, войдите в систему с вашей личной информацией</p>
                      <button class="ghost" id="signIn">Регистратсия</button>
                  </div>
                  <div class="overlay-panel overlay-right ">
                      <h1>Привет, Друг!</h1>
                      <p>Введите свои личные данные и начните путешествие вместе с нами</p>
                      <button class="ghost" id="signUp">Авторизация</button>
                  </div>
              </div>
          </div>
      </div>
      <script src="script/script.js"></script>
</body>
</html>

<?php

?>