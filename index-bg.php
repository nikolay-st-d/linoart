<?php
$title = 'Студио за графичен дизайн и уеб програмиране';
$description = 'В студио Линоарт ние изработваме уникални уеб-сайтове с най-съвременни технологии и няколко програмни езика. Предлагаме също графичен дизайн и рекламна фотография';
$lang = 'bg';
$canonical_url = 'https://www.linoart.com/index-bg.php';
include "includes/head.php";
echo '<body>';
include "includes/header-bg.php";
?>
<main>
    <section id="main" class="main">
        <div class="main_left">
            <h2>Студио Линоарт</h2>
            <p>Ние сме малка компания, специализирана в изработката на <strong>custom уеб-сайтове</strong>,
                <strong>графичен дизайн</strong> и <strong>рекламна фотография</strong>. 
                Работим също по проекти, свързани с онлайн търговия и SEO на съществуващи сайтове.</p>
        </div>
        <div class="main_right">
            <img src="images/top_1.jpg" width="210" height="200" alt="Linoart Ltd."
                title="Web development and graphic design studio based in Bulgaria">
        </div>
    </section>

    <section id="profile" class="animation-left">
        <div class="main_left">
            <h2>Фирмен профил</h2>
            <p>Линоарт ЕООД е основана през 2005 г. със седалище в град Сливен, като студио за графичен дизайн и
                рекламна фотография.
                През 2007 г. започнахме да предлагаме и услуги, свързани с уеб-програмиране.
            <p>Работим с български и с чуждестранни клиенти.
                В последните години се занимаваме предимно с програмиране, с акцент върху уеб-технологиите.</p>
        </div>
        <div class="main_right">
            <img src="images/top_2.jpg" width="272" height="200" alt="Linoart Ltd. - company profile"
                title="Linoart - Bulgaria, company profile">
        </div>
    </section>

    <section id="activities" class="animation-left">
        <div class="main_left">
            <h2>Дейности</h2>
            <h3>Последни проекти</h3>
            <p class="projects">
                <a target="_blank" rel="nofollow" href="https://www.sefobg.com" title="Сейфетин Шекеров Сефо - скулптор">Сефо<i
                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <a target="_blank" rel="nofollow" href="https://www.han.jeravna.com" title="Къща за гости хаджи Вълчевия хан - Жеравна">х. Вълчевия хан<i 
                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <a target="_blank" rel="nofollow" href="https://www.gmmetaldetectors.com" title="Golden Mask корпоративен уеб сайт">Golden Mask<i
                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <a target="_blank" href="https://www.goldenmaskdetectors.com" title="Онлайн магазин на Golden Mask metal detectors">GMD<i
                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <a target="_blank" rel="nofollow" href="https://www.svetinikola.jeravna.com" title="Къща за гости Св. Никола - Жеравна">Св. Никола<i
                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <a target="_blank" rel="nofollow" href="https://www.jeravna.com" title="Официален портал на село Жеравна">Жеравна<i
                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </p>
            <h3>Технологичен стак</h3>
            <p>Python/Django, JavaScript/React, PHP/MySQL, CSS, HTML, Git, Photoshop, Illustrator, InDesign</p>
        </div>
        <div class="main_right">
            <img src="images/top_3.jpg" width="250" height="203" alt="Linoart Ltd. activities"
                title="Activities of the Linoart company">
        </div>
    </section>

    <section id="contact" class="animation-left">
        <div class="main_left">
            <h2>Контакти</h2>
            <p><i class="fa-regular fa-envelope"></i> studio<i class="fa-regular fa-at"></i>linoart.com</p>
            <p><i class="fa-solid fa-phone"></i> <a target="_blank" href="tel:+359878713500">+359 87 871 35 00</a></p>
            <p><i class="fa-brands fa-whatsapp"></i> <a target="_blank" href="https://wa.me/359898562598">+359 89 856 25
                    98</a></p>
        </div>
        <div class="main_right">
            <img src="images/top_4.jpg" width="250" height="170" alt="Contact the Linoart Ltd. stuff"
                title="Contact Linoart studio">
        </div>
    </section>
</main>
<?php include "includes/footer-bg.php"; ?>
<script type="text/javascript" src="javascript/animations.js"></script>
</body>

</html>