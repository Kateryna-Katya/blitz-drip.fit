<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Образовательная платформа нового поколения</title>
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2245%22 fill=%22none%22 stroke=%22%2300f2ff%22 stroke-width=%228%22/><path d=%22M30 50 L45 65 L70 35%22 fill=%22none%22 stroke=%22%2300f2ff%22 stroke-width=%228%22 stroke-linecap=%22round%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Montserrat:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="bg-canvas" id="bg-canvas"></div>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <span class="logo__icon"><i data-lucide="zap"></i></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#features" class="nav__link">Технологии</a></li>
                    <li><a href="./#about" class="nav__link">О платформе</a></li>
                    <li><a href="./#courses" class="nav__link">Программы</a></li>
                    <li><a href="./#faq" class="nav__link">Вопросы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-reveal>Legal Documents</span>
            <h1 class="section-title" data-reveal>Политика использования <br> <span class="text-gradient">файлов cookie</span></h1>

            <div class="legal-content">
                <p class="lead-text" data-reveal>
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <div class="legal-block" data-reveal>
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных (текстовый файл),
                        который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. Это позволяет платформе 
                        <strong><?= $domainTitle ?></strong> «помнить» ваши действия и предпочтения 
                        (например, логин, язык, настройки региона Франция и другие параметры) 
                        в течение определенного времени.
                    </p>
                </div>

                <div class="legal-block" data-reveal>
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                        следующим категориям:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют перемещаться по страницам <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт.
                        </li>
                        <li>
                            <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках обучения.
                        </li>
                        <li>
                            <strong>Маркетинговые:</strong> Используются для доставки объявлений, соответствующих вашим интересам в странах ЕС.
                        </li>
                    </ul>
                </div>

                <div class="legal-block" data-reveal>
                    <h2>Зачем мы используем файлы cookie?</h2>
                    <ul class="legal-list">
                        <li>Обеспечение стабильной и безопасной работы платформы.</li>
                        <li>Анализ пользовательского поведения для оптимизации курсов.</li>
                        <li>Персонализация контента для пользователей в Европе.</li>
                        <li>Предоставление релевантных маркетинговых материалов.</li>
                    </ul>
                </div>

                <div class="legal-block" data-reveal>
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако, обратите
                        внимание: отключение строго необходимых cookie может привести к
                        некорректной работе некоторых функций.
                    </p>
                </div>

                <div class="contact-info-block" data-reveal>
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <div class="contact-data-grid">
                        <div class="contact-data-item">
                            <i data-lucide="mail"></i>
                            <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                        </div>
                        <div class="contact-data-item">
                            <i data-lucide="phone"></i>
                            <a href="tel:+33189483465">+33 1 89 48 34 65</a>
                        </div>
                        <div class="contact-data-item">
                            <i data-lucide="map-pin"></i>
                            <span>15 Rue de la Paix, 75002 Paris, France</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#home" class="logo logo--footer">
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">Инновационная технология обучения, меняющая правила игры в образовании.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#features">Технологии</a></li>
                    <li><a href="./#about">О платформе</a></li>
                    <li><a href="./#courses">Программы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+33189483465">+33 1 89 48 34 65</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>15 Rue de la Paix, 75002 Paris, France</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>© 2026 <?= $domainTitle ?>. Платформа уже доступна в Европе.</p>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="cookie-accept" class="btn btn--primary">Принять</button>
        </div>
    </div>
    
    <div class="mobile-menu" id="mobile-menu">
        <nav class="mobile-nav">
            <ul class="mobile-nav__list">
                <li><a href="./#home" class="mobile-nav__link">Главная</a></li>
                <li><a href="./#features" class="mobile-nav__link">Технологии</a></li>
                <li><a href="./#about" class="mobile-nav__link">О платформе</a></li>
                <li><a href="./#courses" class="mobile-nav__link">Программы</a></li>
                <li><a href="./#faq" class="mobile-nav__link">Вопросы</a></li>
                <li><a href="./#contact" class="mobile-nav__link btn btn--primary">Связаться</a></li>
            </ul>
        </nav>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>