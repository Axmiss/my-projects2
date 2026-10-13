<?php
$title = 'Регистрация';
$base ='../';
require __DIR__ . '/../includes/header.php';
?>


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
<?php require __DIR__ . '/../includes/footer.php'; ?>