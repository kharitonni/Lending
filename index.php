<?php
    if(isset($_POST[info])){ /*Проверяем, есть ли данные в поле с name=info*/
        $info = $_POST[info]; /*Создаем переменную info со значением, введеном в поле с name=info*/
        if(mail('nick_khariton@mail.ru',
                'Новое сообщение с web-страницы',
                'Добрый день!'.\n.
                'Ниже представлен текст обращения пользователя'.\n.$info
                )){  /*Проверяем, успешно ли отправлено письмо*/
            echo('Сообщение отправлено! Ответим как можно скорее') 
        }           /*Эхо - команда для вывода сообщения*/
        else{
            echo('Видимо, произошла ошибка :( Проверьте подключение к интернету)')
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IE:wght@100..400&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <title>Сайт портфолио</title>
</head>

<body>
    <header class="header">
    
    <div class="logo">
        <a href="URL">
            <img src="images/favicon.ico" height=50px alt="логотип">
        </a>
    </div>
        
    <nav class="nav">
        <a href="#about">Обо мне</a></li>
        <a href="#experience">Опыт работы</a></li>
        <a href="#education">Образование</a></li>
        <a href="#contacts">Контакты</a></li>
    </nav>   
      
    </header>
    
    <div class="about">
        <img src="images/ava.jpg" class="circular-image">
        <div class="aboutText">
            <h3>Немного о себе</h3>
            Английский киноактёр, кинорежиссёр, сценарист, композитор, продюсер и монтажёр. Создал один из самых знаменитых образов мирового кино — образ бродяги Чарли, появившийся в короткометражных комедиях, поставленных на поток в 1910-е годы на киностудии «Кистоун».
        </div>
        
    </div>

    <div class="contacts">
        
        <br><br><br><br><br><br><br><br>
        Контакты
        <br>
        <a href="tel:+7 (999) 888-77-66">+7 (999) 888-77-66</a>
        <br><br><br><br><br><br>
        
        <form method=post class="center">
            <input type=text name=info>
            
             <input type=submit   value=Отправить>
        </form>
        <br><br><br><br><br><br><br><br>
        
        <a href="https://yandex.ru/maps/?um=constructor%3Aee6ba67cb627647687db62e6551d907b8471f3d0fe0305b01feb6ae2e0f68bc4&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3Aee6ba67cb627647687db62e6551d907b8471f3d0fe0305b01feb6ae2e0f68bc4&amp;width=500&amp;height=400&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
    </div>
<div id="preloader">
    <img src="images/preloader.gif" >
</div>

</body>

<script src="JS/script.js"></script>
</html>

