<?php
require_once(__DIR__ . "/helpers/bem.php");
require_once(__DIR__ . "/helpers/svg.php");

$bem = new BemBlock('neotron-header');
$svg = new Svg('neotron-header');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>Neotron</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="neotron-container <?= $bem ?>">
    <div class="<?= $bem->setEl('logo') ?>">
        <?= $svg->setSvg('logo') ?>
    </div>
    <nav class="<?= $bem->setEl('nav') ?>">
        <ul class="<?= $bem->setEl('nav-links')  ?>">
            <li class="<?= $bem->setEl('nav-link')  ?>">
                <a href="#">
                    Главная
                </a>
            </li>
            <li class="<?= $bem->setEl('nav-link')  ?>">
                <a href="#">
                    О компании
                </a>
            </li>
            <li class="<?= $bem->setEl('nav-link')  ?>">
                <a href="#">
                    Продукция
                </a>
            </li>
            <li class="<?= $bem->setEl('nav-link')  ?>">
                <a href="#">
                    Покупателям
                </a>
            </li>
            <li class="<?= $bem->setEl('nav-link')  ?>">
                <a href="#">
                    Контакты
                </a>
            </li>
        </ul>
    </nav>

    <ul class="<?= $bem->setEl('lang-selector') ?>">
        <li class="<?= $bem->setEl('lang-item')->setMod('active') ?>">
            Ru
        </li>
        <li class="<?= $bem->setEl('lang-item')  ?>">
            En
        </li>
    </ul>

    <ul class="<?= $bem->setEl('contacts')  ?>">
        <li class="<?= $bem->setEl('contacts-item')->setMod('mail')  ?>">
            <a href="mailto:mail@neotron.ru">
                mail@neotron.ru
            </a>
        </li>
        <li class="<?= $bem->setEl('contacts-item')->setMod('number')  ?>">
            <a href="tel:+7999300-0035">
                +7 (999) 300-0035
            </a>
        </li>
    </ul>
</header>