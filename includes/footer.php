<footer class="footer">
    <div class="footer-container">

        <div class="footer-column">
            <h3>О нас</h3>

            <a href="pages/about.php">Сколько лет на рынке</a>
            <a href="pages/about.php">Откуда поставщики</a>
        </div>

        <div class="footer-column">
            <h3>Помощь</h3>

            <a href="pages/products.php">Наш каталог</a>
        </div>

        <div class="footer-column">
            <h3>Где мы ещё есть</h3>

            <a href="#">Instagram</a>
        </div>
    </div>

    <?php
    $date = new DateTimeImmutable('today');

    $nextnewyear = new DateTimeImmutable(
            ($date->format('Y') + 1) . '-01-01'
    );

    $daysleft = $date->diff($nextnewyear)->days;
    ?>

    <div class="footer-date">
        <p>Сейчас: <?= $date->format('d.m.Y') ?></p>
        <p>До Нового года: <?= $daysleft ?> дней</p>
    </div>
</footer>

</div>


</body>

</html>
