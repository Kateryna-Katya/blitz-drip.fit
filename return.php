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
            <span class="section-tag" data-reveal>Payment & Refunds</span>
            <h1 class="section-title" data-reveal>Политика <br> <span class="text-gradient">возврата средств</span></h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent" data-reveal>
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей в рамках законодательства ЕС.
                    </p>
                </div>

                <h2 data-reveal>Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card" data-reveal>
                        <div class="refund-card__icon"><i data-lucide="file-text"></i></div>
                        <h3>Несоответствие программе</h3>
                        <p>Если содержание материалов существенно отличается от заявленного плана обучения на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card" data-reveal>
                        <div class="refund-card__icon"><i data-lucide="settings"></i></div>
                        <h3>Технические проблемы</h3>
                        <p>Критические ошибки на платформе <strong><?= $fullDomain ?></strong>, которые не были устранены нашей поддержкой в течение 72 часов.</p>
                    </div>
                    <div class="refund-card" data-reveal>
                        <div class="refund-card__icon"><i data-lucide="timer"></i></div>
                        <h3>Период охлаждения</h3>
                        <p>Вы имеете право на отказ в течение 14 дней с момента оплаты при условии, что обучение еще не было начато.</p>
                    </div>
                </div>

                <div class="procedure-block" data-reveal>
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span class="step-num">1</span> Письмо на <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span class="step-num">2</span> Тема письма: «Запрос на возврат средств»</div>
                        <div class="step-mini"><span class="step-num">3</span> Укажите данные: ФИО, Email и название программы</div>
                        <div class="step-mini"><span class="step-num">4</span> Подробное описание причины вашего запроса</div>
                    </div>
                </div>

                <div class="legal-block" data-reveal>
                    <h2>Сроки и способ возврата</h2>
                    <p>
                        После одобрения вашего запроса, возврат денежных средств будет
                        произведен в течение <strong>7–14 рабочих дней</strong>. Средства возвращаются
                        тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                        зависит от регламента вашего банка во <strong>Франции</strong> или стране вашего пребывания в Европе.
                    </p>
                </div>

                <div class="warning-block-refund" data-reveal>
                    <div class="warning-block-refund__header">
                        <i data-lucide="shield-alert"></i>
                        <h2>Исключения и ограничения</h2>
                    </div>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li>Вы уже просмотрели или скачали более 50% учебных материалов программы.</li>
                        <li>Технические проблемы вызваны на стороне пользователя (несовместимое ПО, слабое соединение).</li>
                        <li>Нарушение правил внутреннего распорядка платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-info-block" data-reveal>
                    <h2>Служба поддержки</h2>
                    <p>По всем финансовым вопросам и за консультациями по возвратам обращайтесь к нашим специалистам:</p>
                    <div class="contact-data-grid">
                        <div class="contact-data-item">
                            <i data-lucide="mail"></i>
                            <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                        </div>
                        <div class="contact-data-item">
                            <i data-lucide="phone"></i>
                            <a href="tel:+33189483465">+33 1 89 48 34 65</a>
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