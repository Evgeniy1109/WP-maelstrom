<?php
/*
Template Name: Расписание
*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php
        if (is_404()) {
            echo 'Ошибка 404';
        } else {
            the_title();
        }
        ?>
    </title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="reminder.css" />
    <script defer src="reminder.js"></script>
    <script defer src="script.js"></script>
    <link href="https://fonts.cdnfonts.com/css/euclid-circular-a" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/helveticaneuecyr-2" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body>



    <header class="header_reminder">
        <div class="container">
            <div class="header_burger">
                <div class="burger">
                    <span></span>
                </div>
            </div>
            <div class="header_block">
                <a href="index.html"><img src="<?= get_template_directory_uri(); ?>./img/logo.png" alt="logo" /></a>
                <nav class="nav">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => '',
                        'menu_class' => '',
                        'menu_id' => '',
                    ]);
                    ?>
                </nav>
                <div class="menu">
                    <img class="menu_img" src="<?= get_template_directory_uri(); ?>./img/+.svg" onclick="menu_img_close()" alt="" />
                    <ul>
                        <li class="menu_link"><a href="index.html">Главная</a></li>
                        <li class="menu_link"><a href="schedule.html">Расписание</a></li>
                        <li class="menu_link">
                            <a href="reminder.html">Памятка туристу</a>
                        </li>
                        <li class="menu_link"><a href="about.html">О нас</a></li>
                    </ul>
                    <button class="menu_btn" type="submit" onclick="show()">
                        Заявка
                    </button>
                    <div class="menu_tel">
                        <img src="<?= get_template_directory_uri(); ?>./img/tube  white.svg" alt="telephone" />
                        <p>+7(978) 798-58-72</p>
                    </div>
                    <div class="menu_tel">
                        <img src="<?= get_template_directory_uri(); ?>./img/tube  white.svg" alt="telephone" />
                        <p>+7(978) 798-58-72</p>
                    </div>
                    <div class="menu_icon">
                        <a href="http://vk.com/malstrim" target="_blank"><img class="menu_icon_vk" src="img/VK1.svg" alt="vk" /></a>
                        <a href="http://t.me/vie_est_vita" target="_blank"><img class="menu_icon_tl" src="img/TЛ.svg" alt="telegram" /></a>
                    </div>
                </div>
                <div class="header_icon">
                    <img class="header_icon_telephone" onmouseover="icon_over()" onmouseout="icon_out()" src="<?= get_template_directory_uri(); ?>./img/tube  white.svg" alt="telephone" /></a>
                    <a href="http://vk.com/malstrim" target="_blank"><img class="header_icon_vk" src="<?= get_template_directory_uri(); ?>./img/VK white.svg" alt="vk" /></a>
                    <a href="http://t.me/vie_est_vita" target="_blank"><img class="header_icon_telegram" src="<?= get_template_directory_uri(); ?>./img/Telegramwhite.svg" alt="telegram" /></a>
                </div>
                <div class="header_link">
                    <a href="#" onclick="show()">В поход !</a>
                </div>
            </div>
            <!-- Модальное окно с телефонами -->
            <div class="modal_telephone_window modal_telephone_close">
                <div class="modal_telephone_wrap">
                    <div class="modal_telephone">
                        <div class="modal_telephone_1">
                            <img src="<?= get_template_directory_uri(); ?>./img/tel.svg" alt="">
                            <p>+7(978) 798-58-72</p>
                        </div>
                        <div class="modal_telephone_1">
                            <img src="<?= get_template_directory_uri(); ?>./img/tel.svg" alt="">
                            <p>+7(978) 529-35-87</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- --------------------------  -->
            <div class="modal_form_active modal_close">
                <div class="modal_window_window">
                    <div class="modal_window">
                        <div class="modal_img_1">
                            <img class="modal_window_img" src="<?= get_template_directory_uri(); ?>./img/модальное окно 2.png" alt="">
                            <div class="modal_form_p">
                                <p>Мы ждет тебя в нашу команду!</p>
                            </div>
                        </div>
                        <!-- <div class="modal_img_2">
                <img src="img/+.svg" onclick="show()"alt="">
              </div> -->
                        <div class="modal_form">
                            <form action="">
                                <div class="modal_img_2">
                                    <img src="<?= get_template_directory_uri(); ?>./img/+.svg" onclick="show()" alt="">
                                </div>
                                <p class="modal_form_text">Отправьте заявку и мы перезвоним Вам в ближайшее время и
                                    поможем подобрать
                                    поход</p>
                                <div class="modal_application">
                                    <img src="<?= get_template_directory_uri(); ?>./img/туристМод.svg" alt="турист">
                                    <div class="modal_application_label">
                                        <p><label for="">Ваше имя:</label></p>
                                        <input class="modal_application_input" type="text" name="name" placeholder="Введите ваше имя">
                                    </div>
                                </div>
                                <div class="modal_application">
                                    <img src="<?= get_template_directory_uri(); ?>./img/телефон.svg" alt="телефон">
                                    <div class="modal_application_label">
                                        <p><label for="">Телефон:</label></p>
                                        <input class="modal_application_input" type="text" name="name" placeholder="+ 7 (978) 798-58-72">
                                    </div>
                                </div>
                                <div class="modal_application_checkbox">
                                    <input type="checkbox" class="modal_application_input_checkbox">
                                    <p> Я согласен с <span>условиями передачи информации</span></p>
                                </div>
                                <button class="modal_form_btn" type="submit">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- Регион -->
    <div class="region">
        <div class="container">
            <div class="region_items">
                <div class="region_list">
                    <p class="region_list_title">Выберите регион</p>
                    <button data-tab-region="1" type="button" class="btn active">Крым</button>
                    <button data-tab-region="2" type="button" class="btn">Кавказ</button>
                </div>
            </div>

            <div data-tab-region-content="1" class="product_card active">


                <div class="сrimea_desc">
                    <p data-tab="1" class="сrimea_desc_list active">Однодневные</p>
                    <div class="сrimea_desc_list_point"></div>
                    <p data-tab="2" class="сrimea_desc_list">С ночевкой</p>
                    <div class="сrimea_desc_list_point"></div>
                    <p data-tab="3" class="сrimea_desc_list">Экстрим</p>
                    <div class="сrimea_desc_list_point"></div>
                    <p data-tab="4" class="сrimea_desc_list">Психологический интенсив</p>
                </div>



                <div data-tab-content="1" class="crimea_product_card_tours active">

                    <?php
                    $loop = CFS()->get('card');
                    foreach ($loop as $row) {
                    ?>
                        <div class="crimea_card">
                            <div class="crimea_card_img">
                                <img src="<?= $row['card_img']; ?>" alt="" width='178px'>
                            </div>
                            <div class="crimea_card_desc">
                                <p class="crimea_card_desc_data">
                                    <?= $row['card_data']; ?>
                                </p>
                                <p class="crimea_card_desc_title">
                                    <?= $row['card_title']; ?>
                                </p>
                                <p class="crimea_card_desc_subtitle">
                                    <?= $row['card_subtitle']; ?>
                                </p>
                                <p class="crimea_card_desc_price">
                                    <?= $row['card_price']; ?>
                                </p>

                                <section class="schedule_modal_close" id="schedule_modal" style="background-image: url('<?= get_template_directory_uri(); ?>./img/Расписание-фон.jpg');">
                                    <div class="container">
                                        <img class="img_vector" onclick="schedule_modal_close()" src="<?= get_template_directory_uri(); ?>./img/Vector.png" alt="">
                                        <p class="schedule_modal_title">
                                            <?= $row['modal_window_title']; ?>
                                        </p>
                                        <div class="schedule_modal_box">
                                            <div class="schedule_modal_box_desc">
                                                <div class="schedule_modal_box_top_footer">
                                                    <div class="schedule_modal_box_top">
                                                        <p class="schedule_modal_box_string">Сложность: <span><img src="<?= $row['modal_сomplexity_img']; ?>"><?= $row['modal_сomplexity_description']; ?></span>
                                                        </p>
                                                        <p class="schedule_modal_box_string">Километраж: <img src="<?= $row['modal_distance_img']; ?>" alt=""><?= $row['modal_distance_description']; ?></p>
                                                    </div>
                                                    <div class="schedule_modal_box_footer">
                                                        <p class="schedule_modal_box_string">Гиды: <img src="<?= $row['modal_guides_img']; ?>" alt=""><?= $row['modal_guides_description']; ?></p>
                                                        <p class="schedule_modal_box_string">Цена: <img src="<?= $row['modal_price_img']; ?>" alt=""><?= $row['modal_price_description']; ?></p>
                                                    </div>
                                                </div>
                                                <p class="schedule_modal_box_text">
                                                    <?= $row['modal_text']; ?>
                                                </p>
                                                <button type="button" class="schedule_modal_box_btn" onclick="show()">Записаться</button>
                                            </div>
                                            <div class="schedule_modal_box_gallary">
                                                <img class="schedule_modal_box_img" src="<?= $row['modal_img']; ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <button type="button" class="crimea_card_desc_btn" id="btn">Подробнее</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>

                <div data-tab-content="2" class="crimea_product_card_tours">

                    <?php
                    $loop = CFS()->get('night_card');
                    foreach ($loop as $row) {
                    ?>
                        <div class="crimea_card">
                            <div class="crimea_card_img">
                                <img src="<?= $row['card_img']; ?>" alt="" width='178px'>
                            </div>
                            <div class="crimea_card_desc">
                                <p class="crimea_card_desc_data">
                                    <?= $row['card_data']; ?>
                                </p>
                                <p class="crimea_card_desc_title">
                                    <?= $row['card_title']; ?>
                                </p>
                                <p class="crimea_card_desc_subtitle">
                                    <?= $row['card_subtitle']; ?>
                                </p>
                                <p class="crimea_card_desc_price">
                                    <?= $row['card_price']; ?>
                                </p>
                                <button type="button" class="crimea_card_desc_btn">Подробнее</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div data-tab-content="3" class="crimea_product_card_tours">

                    <?php
                    $loop = CFS()->get('extreme_card');
                    foreach ($loop as $row) {
                    ?>
                        <div class="crimea_card">
                            <div class="crimea_card_img">
                                <img src="<?= $row['card_img']; ?>" alt="" width='178px'>
                            </div>
                            <div class="crimea_card_desc">
                                <p class="crimea_card_desc_data">
                                    <?= $row['card_data']; ?>
                                </p>
                                <p class="crimea_card_desc_title">
                                    <?= $row['card_title']; ?>
                                </p>
                                <p class="crimea_card_desc_subtitle">
                                    <?= $row['card_subtitle']; ?>
                                </p>
                                <p class="crimea_card_desc_price">
                                    <?= $row['card_price']; ?>
                                </p>
                                <button type="button" class="crimea_card_desc_btn">Подробнее</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>

                <div data-tab-content="4" class="crimea_product_card_tours">

                    <?php
                    $loop = CFS()->get('intensive_card');
                    foreach ($loop as $row) {
                    ?>
                        <div class="crimea_card">
                            <div class="crimea_card_img">
                                <img src="<?= $row['card_img']; ?>" alt="" width='178px'>
                            </div>
                            <div class="crimea_card_desc">
                                <p class="crimea_card_desc_data">
                                    <?= $row['card_data']; ?>
                                </p>
                                <p class="crimea_card_desc_title">
                                    <?= $row['card_title']; ?>
                                </p>
                                <p class="crimea_card_desc_subtitle">
                                    <?= $row['card_subtitle']; ?>
                                </p>
                                <p class="crimea_card_desc_price">
                                    <?= $row['card_price']; ?>
                                </p>
                                <button type="button" class="crimea_card_desc_btn">Подробнее</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>

                <div class="region_footer">
                    <p>При вашем первом походе с Мальстрим, <span> скидка 15% </span>от указанных цен</p>
                    <p>Если Вам не подошел ни один из походов, мы можем провести <span>индивидуальный тур</span>
                        индивидуальный
                        тур в любую точку Крыма и в любое время.</p>
                    <button type="button" class="region_footer_btn" onclick="show()">Заявка</button>
                </div>
            </div>


            <div data-tab-region-content="2" class="product_card">

                <?php
                $loop = CFS()->get('сaucasus_card');
                foreach ($loop as $row) {
                ?>
                    <div class="crimea_card">
                        <div class="crimea_card_img">
                            <img src="<?= $row['card_img']; ?>" alt="" width='178px'>
                        </div>
                        <div class="crimea_card_desc">
                            <p class="crimea_card_desc_data">
                                <?= $row['card_data']; ?>
                            </p>
                            <p class="crimea_card_desc_title">
                                <?= $row['card_title']; ?>
                            </p>
                            <p class="crimea_card_desc_subtitle">
                                <?= $row['card_subtitle']; ?>
                            </p>
                            <p class="crimea_card_desc_price">
                                <?= $row['card_price']; ?>
                            </p>
                            <button type="button" class="crimea_card_desc_btn">Подробнее</button>
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="region_footer">
                    <p>При вашем первом походе с Мальстрим, <span> скидка 15% </span>от указанных цен</p>
                    <p>Если Вам не подошел ни один из походов, мы можем провести <span>индивидуальный тур</span>
                        индивидуальный
                        тур в любую точку Крыма и в любое время.</p>
                    <button type="button" class="region_footer_btn" onclick="show()">Заявка</button>
                </div>




            </div>


        </div>
    </div>
    <!-- ---------------------  -->


    <!-- footer  -->
    <footer>
        <div class="footer_svg"></div>
        <div class="footer">

            <!-- Логотип -->
            <div class="footer_div">
                <div class="img_logo">
                    <a href="index.html"><img src="<?= get_template_directory_uri(); ?>/./img/logo.png" alt="logo" /></a>
                </div>

                <p class="footer_p" style="margin-top: 20px">
                    Крымская, туристическая организация, для любителей активного отдыха на
                    природе
                </p>
                <div class="img_decor" style="margin-top: 20px">
                    <img src="<?= get_template_directory_uri(); ?>/./img/decor.png" alt="logo" style="width: 230px; height: 90px" />
                </div>
            </div>
            <!-- Услуги -->
            <div class="footer_div">
                <h3 class="footer_h3">Услуги</h3>
                <a class="footer_h4" href="#" style="margin-top: 20px">Крым</a>
                <li><a class="footer_a" href="#">Однодневные походы </a></li>
                <li><a class="footer_a" href="#">Походы с&nbsp;ночевкой</a></li>
                <li><a class="footer_a" href="#">Экстримальные походы</a></li>
                <li><a class="footer_a" href="#">Психологический интенсив</a></li>

                <a class="footer_h4" href="#">Кавказ</a>
                <li><a class="footer_a" href="#">Восхождение на&nbsp;Эльбрус</a></li>
                <li><a class="footer_a" href="#">Треккинг по&nbsp;Адыгее</a></li>
                <li><a class="footer_a" href="#">Треккинг по&nbsp;Архызу</a></li>
                <li><a class="footer_a" href="#">Треккинг по&nbsp;Асетии</a></li>
            </div>
            <!-- Меню -->
            <div class="footer_div_menu">
                <h3 class="footer_h3">Меню</h3>
                <a class="footer_h4" href="index.html" style="margin-top: 20px">Главная</a>
                <li><a class="footer_a" href="schedule.html">Расписание</a></li>
                <li><a class="footer_a" href="reminder.html">Памятка туристу</a></li>
                <li><a class="footer_a" href="about.html">О&nbsp;нас</a></li>
            </div>
            <!-- Контакты -->
            <div class="footer_div">
                <h3 class="footer_h3_Cont">Контакты</h3>
                <div class="footer_div_fone" style="margin-top: 20px">
                    <img src="<?= get_template_directory_uri(); ?>/./img/phone_on.png" alt="fone" />
                    <a class="footer_a_fone" href="#">+7(978)798-58-72</a>
                </div>
                <div class="footer_div_fone">
                    <img src="<?= get_template_directory_uri(); ?>/./img/phone_on.png" alt="fone" />
                    <a class="footer_a_fone" href="#">+7(978)529-35-87</a>
                </div>
                <div>
                    <p class="footer_p">
                        <b>Подпишитесь</b> на&nbsp;нас в&nbsp;социальных сетях и&nbsp;будьте
                        в&nbsp;курсе всех планирующихся мероприятий в&nbsp;Мальстриме.
                    </p>
                </div>
                <div class="footer_div_socseti">
                    <div class="footer_div_socseti_VK">
                        <a href="http://vk.com/malstrim" target="_blank" rel="noopener noreferrer">
                            <img src="<?= get_template_directory_uri(); ?>/./img/VK0.png" alt="VK" style="padding-top: 9px; padding-left: 5px" />
                        </a>
                    </div>
                    <div class="footer_div_socseti_Telegram">
                        <a href="http://t.me/vie_est_vita" target="_blank" rel="noopener noreferrer">
                            <img src="<?= get_template_directory_uri(); ?>/./img/Telegram.png" alt="Telegram" style="padding-top: 9px; padding-left: 5px" />
                        </a>
                    </div>
                </div>
                <div class="footer_div_zayvka">
                    <a class="footer_button_z" href="#" onclick="show()">Заявка</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ------------------------------  -->

    <?php wp_footer(); ?>


</body>

</html>