<?php
//регистрация
require_once 'db.php';
$link = mysqli_connect("127.0.0.1", "root", "123", "vladik");
if (isset($_POST['do_signup']))
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

 $result = mysqli_query($link, "INSERT INTO `users`(`id`, `login`, `email`, `password`) VALUES (NULL, '$login','$email','$password')"); 
?>
<?php 
//логин
require_once 'db.php';
 $link = mysqli_connect("127.0.0.1", "root", "123", "vladik");
session_start();
$login=$_POST['login'];
$password=$_POST['password'];
if (isset($_POST['submit']))
{
    $q= mysqli_query ($link, "SELECT * FROM `users` WHERE 'login'='$login'");
    $r= mysqli_fetch_array($q);
    
    if($password == $r['password'])
    {
        echo "Hello, ".$r['login'];
    }
     else 
     {
        echo "Whoops";
     }
}


?>
  
<!DOCTYPE html>
<html>
    <head>
        <title>Лендинговая страница</title>
        <link href="lol.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    <head>
    <body>
        <div class="head">
            <div class="iconforsymbol"><a class="symbol" href="/"><img src="https://x-lines.ru/letters/i/cyrillicscript/0914/000000/40/0/me.png"/>
            <div class="continueofsymbol"><p>adnicaDrop.ru</p></div>
            </div></a>
            <div id="zatemnenie">
                <div id="okno">
                
                        <div class="content">
                            <h1><strong>Account login</strong></h1>

                            <form action="index.php" method="POST">
                            
                             <input class="input-wrap" type="text" name="login" placeholder="Username" required></br>
                            
                            <input class="input-wrap" type="password" placeholder="Password" required>

                           <div class="slovo"> <a class="forgot" href=""><strong>Forgot Password?</strong></a></div>
                            
                            <p class="SUBMIT"> <button type="submit" value="Войти" name="submit">Enter</button></p>
 
                            </form>
                            
                    </div>
                    
                 <br>
                  <a href="index.php" class="close">Х</a>
                </div>
              </div>
               
    <?php  
    /*if ()
            {
                echo '<div class="login" style="display: none" ><a href="#zatemnenie">Login</a></div> ';
                echo '<div class="registration" style="display: none"><a href="#zatemnenie2">Registration</a></div>';
            } else
            {
                echo 'Hello '. $_POST['login'];
                echo '<div class="logout" style="display: black"><a href="/">Logout</a></div>'
            }
    */
           ?>  
            <div class="login"><a href="#zatemnenie">Login</a></div>
            <div class="registration"><a href="#zatemnenie2">Registration</a></div>

            <div id="zatemnenie2">
                <div id="okno2">
                
                        <div class="content">
                            <h1><strong>Registration</strong></h1>

                            <form action="index.php" method="POST">
                            
                             <input class="input-wrap" type="text" name="login" placeholder="Name"  required></br>

                                <input class="input-wrap" type="password" placeholder="Password" name="password"  required></br>
                             
                            <input class="input-wrap" type="text" placeholder="Email" name="email" required></br>
                        
                             <button class="SUBMIT2" type="submit" value="Registration" name="do_signup">Registration</button>
                             </form>

                    </div>
                    
                 <br>
                  <a href="index.php" class="close">Х</a>
                </div>
              </div>

             <div class="headertext">
                 <p class="message"><h1>Устал от ширпотреба в интвентаре?</br>
                      Не можешь найти хороший сайт с кейсами, на котором можно окупиться?</br>
                       Тогда тебе к нам</h1></p>
             </br>
                <p><h2>У нас есть все, что тебе нравится, и даже больше!</h2></p>
             </div>
             
        </div>
        <div class="main">
           <div class="points">
               <p><h2>У нас вы можете найти</h2></p>
            <ul>
                <li>Полный рандом</li>
                <li>Высокая окупаемость</li>
                <li>Быстрый вывод</li>
                <li>Различные промокоды</li>
                <li>Пополнение баланса скинами</li>
            </ul>
           </div>
            <div class="dan"><img src="case.jpg"></div>
            <div class="don"><img src="m4.png" width="300px"></div>
           <div class="sometext">
               <p>
                   Мы новый проект, который хочет влететь в эту сферу с двух ног.
                   Мы можем быть конкурентно способны с топовыми проектами.
                   Мы постоянно улучшаем работу сайта и добавляем различные плюшки для пользователей.
                   Переходи по ссылке и пополняй свой инвентарь крутыми скинами!
                   Регистрируйся для закрытого бета-тестирования и получи что-нибудь вкусненькое
                    Счастье доступно каждому
               </p>
           </div>

        </div>
        <div class="footer">
            <div class="smth"><h1><p>У нас нет как такового офиса, но по по адресу Санкт-Петербург, улица Пушкина, дом Калатушкина вы найдете ровно ничего</p></h1></div>
        
        <div class="kontakti">
            <div class="kontakt"><h2>Наши контакты</h2></div>
            <ul class="round">
                <li class="beda1"><a href="https://mail.ru">E-mail: stupid@mail.ru</a></li>
                <li class="beda2"><a href="https://vk.com">Vk: zhopahackera</a></li>
                <li class="beda3"><a href="https://telegram.org">Telegram: poka</a></li>
                <li class="beda4"><a href="https://www.instagram.com/?hl=ru">Instagram: unknown</a></li>
            </ul>
        </div>

        </div>
    </body>
</html>
