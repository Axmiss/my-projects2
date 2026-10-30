<?php
$title = 'Главная';
require __DIR__ . '/includes/header.php';

ob_start();
$texts = [
        'Откройте для себя ароматы, которые подчёркивают ваше настроение и стиль. Лёгкие,
                        свежие
                        или
                        насыщенные — каждый из них
                        создан, чтобы оставить приятное впечатление и стать частью ваших воспоминаний.',
];
function colorWords($text)
{
    $words = explode(' ', $text);
    $result = '';
    foreach ($words as $i => $word) {
        if (($i + 1) % 2 == 0) {
            $color = '#B22222';
        } else {
            $color = '#DB7093';
        }
        $result .= '<span style="color:' . $color . '">' . $word . '</span> ';
    }
    return $result;
}

?>
    <div class="ecran-content <?= $theme ?>" >

        <div class="ecran-verh">

            <h2 class="ecran-title <?= $theme ?>">Мир Ароматов</h2>
            <p class="ecran-niz <?= $theme ?>">У каждого мгновения есть свой запах.
                Позвольте ему остаться с вами.</p>



            <div class="ecran-buttons">
                <div class="div-dtn-kat">
                    <a href="pages/products.php" class="btn-kat">За покупками</a>
                </div>
                <a href="pages/registration.php" class="btn-vhod">Войти</a>
            </div>
        </div>
        <div class="ecran-image">
            <img src="assets/images/девушка с флаконом.png" alt="Парфюм">
        </div>
    </div>


    <div class="title-pered">
        <h1>Знакомство!</h1>
    </div>

    <div class="onas-ram">
        <div class="onas">

            <div class="onas-imagis">
                <img src="assets/images/духи.png" alt="Духи">
            </div>

            <div class="onas-text">
                <h2 class="onas-title">Рады видеть вас!</h2>
                <p class="onas-niz"> <?php foreach ($texts as $t) { ?>
                <p class="onas-niz"><?= colorWords($t) ?></p>
                <?php }; ?>
                <h3 class="onas-kal">О качестве</h3>
                <p class="kal-niz1">Мы предлагаем только тщательно подобранные ароматы, отличающиеся стойкостью и
                    гармонией.
                    Каждый из
                    них проходит отбор,
                    чтобы вы получили лучшее.</p>
                <h3 class="onas-kal2">О разнообразии</h3>
                <p class="kal-niz2">В нашей коллекции собраны ароматы разных направлений — от свежих и цветочных до
                    тёплых и
                    древесных.
                </p>
            </div>

        </div>
    </div>
    <div class="title-pered">
        <h1>Наши Предложения!</h1>
    </div>

    <div class="ackia">
        <div class="ackia-podl">
            <div class="banner">

                <div class="left">
                    <div class="ackia-imeges">
                        <img src="assets/images/духи в акции.png" alt="Парфюм">
                    </div>


                    <div class="promo-banner">

                        <div class="bell">
                            <img src="assets/images/bell.png" alt="колокол">
                        </div>

                        <div class="discount-text">
                            При покупке двух флаконов 50 мл —
                            сертификат 1500Р на следующую покупку, для
                            всех новых покупателей
                        </div>

                    </div>



                </div>

                <div class="pink">
                    <div class="right">

                        <div class="title">
                            Твой почерк
                            <br> в мире ароматов
                        </div>

                        <div class="subtitle">
                            Не следуй правилам.<br>
                            Создавай их.
                        </div>
                        <div class="div-dtn-kat div-dtn-kat-center">
                            <a href="pages/products.php" class="btn-kat">За покупками</a>
                        </div>

                        <div class="footer-info">
                            <div class="avatar-group">
                                <img src="https://i.pravatar.cc/100?u=1" alt="u1">
                                <img src="https://i.pravatar.cc/100?u=2" alt="u2">
                                <img src="https://i.pravatar.cc/100?u=3" alt="u3">
                                <img src="https://i.pravatar.cc/100?u=4" alt="u4">
                            </div>

                            <div class="stars">

                                <div class="reviews-text">2845+ отзывов!</div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>



        </div>
    </div>

    </div>
    <div class="resultat">
        Количество гласных букв: <b><!--GLAS--></b><br>
        Количество слов: <b><!--COLVO--></b>
    </div>
<?php require __DIR__ . '/includes/footer.php'; ?>
<?php
$page = ob_get_clean();
$text = strip_tags($page);

$ccc = 0;
$lower = mb_strtolower($text);
foreach (mb_str_split('аеёиоуыэюя') as $v) {
    $ccc += mb_substr_count($lower, $v);
}

$textsss = preg_split('/\s+/u', trim($text), -1, PREG_SPLIT_NO_EMPTY);
$textxcolvo = count($textsss);

echo str_replace(['<!--GLAS-->', '<!--COLVO-->'], [$ccc, $textxcolvo], $page);
?>