<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Мир ароматов</title>
    <meta name="description" content="Сайт проект">
    <meta name="author" content="Борина Вероника">
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="logo-verh">
        <div class="logotip">
            <img src="../assets/images/Логотип.png" alt="Логотип">

        </div>
    </div>

    <div class="icon-nav">
        <div class="pill-icon">

            <div class="nav-item">
                <img src="../assets/images/избранное.png" alt="Избранное">
                <span>Избранное</span>
            </div>

            <div class="nav-item">
                <img src="../assets/images/корзина.png" alt="Корзина">
                <span>Корзина</span>
            </div>

            <div class="nav-item">
                <img src="../assets/images/экспорт.png" alt="Помощь">
                <span>Помощь</span>
            </div>


        </div>
    </div>
    <header>
        <nav id="navigation">
            <div id="nav-container">
                <a href="../index.php" target="parent" class="nav-btn">Главная</a>
                <a href="about.php" target="parent" class="nav-btn">О нас</a>
                <a href="products.php" target="parent" class="nav-btn">Каталог</a>
                <a href="sale.php" target="parent" class="nav-btn">Акции</a>
                <a href="registration.php" target="parent" class="nav-btn">Вход/Регистрация</a>
            </div>
        </nav>
    </header>


    <div class="vhod-container">
        <h1 class="vhod-title">Мир Ароматов</h1>
        <section class="form-section">

            <h2 class="vhod-nis">Вход/Регистрация</h2>
            <form class="group">
                <p>
                    <label>Фамилия: <input type="text" required placeholder="Обязательное поле"></label>
                </p>
                <p>
                    <label>Имя: <input type="text" required placeholder="Обязательное поле"></label>
                </p>
                <p>
                    <label>Отчество: <input type="text" required placeholder="Не обязательное поле"></label>
                </p>

                <p>
                    <label>Email: <input type="email" required placeholder="user@gmail.com"></label>
                </p>
                <p class="gender-choice">
                    <label>Укажите пол:</label>
                    <label class="radio-label"><input type="radio" name="experience" value="woman"> Женщина
                    </label>
                    <label class="radio-label"> <input type="radio" name="experience" value="men"> Мужчина</label>
                </p>
                <p>
                    <label>Телефон: <input type="text" required placeholder="+7( ___ ) ___ - __ - __"></label>
                </p>
                <p>
                    <label>Возраст: <input type="number" min="18" max="100" value="20"></label>
                </p>
                <div class="btn-vhod-one">
                    <a href="../index.php" class="btn-vhod-link">Регистрация</a>
                </div>

            </form>
        </section>

    </div>
    <footer class="footer">
        <div class="footer-container">

            <div class="footer-column">
                <h3>О нас</h3>

                <a href="about.php">Сколько лет на рынке</a>
                <a href="about.php">Откуда поставщики</a>
            </div>

            <div class="footer-column">
                <h3>Помощь</h3>

                <a href="products.php">Наш каталог</a>
            </div>

            <div class="footer-column">
                <h3>Где мы ещё есть</h3>

                <a href="#">Instagram</a>
            </div>



        </div>
    </footer>
</body>

</html>