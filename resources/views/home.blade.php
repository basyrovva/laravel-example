<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel1</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <label for="">ЛОГОТИП</label>
        <ul>
            <li><a href="welcome.blade.php">Главная</a></li>
            <li><a href="array.blade.php">Массивы</a></li>
        </ul>
    </header>
    <main>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto eos quis accusantium, excepturi, voluptas in sunt nemo praesentium architecto ducimus iure. Magni sequi cum, vel ad ipsum perspiciatis molestiae facilis?
    </p>
    <img src="{{ Vite::asset('resources/images/image2.jpeg') }}">
    <img src="../images/image4.jpg" alt="">
    <img src="../images/image5.jpg" alt="">
    <br><br>
   <div class="container">
  
   </div>
    </main>
    <footer>
        <p>Басырова Гузалия Руслановна</p>
    </footer>
</body>
</html>