<?php
/*
  Template Name: Главная
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
  <script defer src="script.js"></script>
  <link href="https://fonts.cdnfonts.com/css/euclid-circular-a" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/helveticaneuecyr-2" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <!-- Header  -->
  <header class="header">
    <div class="container">
      <div class="header_burger">
        <div class="burger">
          <span></span>
        </div>
      </div>
      <div class="header_block">
        <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>./img/logo.png" alt="logo" /></a>
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
            <a href="http://vk.com/malstrim" target="_blank"><img class="menu_icon_vk" src="<?= get_template_directory_uri(); ?>./img/VK1.svg" alt="vk" /></a>
            <a href="http://t.me/vie_est_vita" target="_blank"><img class="menu_icon_tl" src="<?= get_template_directory_uri(); ?>./img/TЛ.svg" alt="telegram" /></a>
          </div>
        </div>
        <div class="header_icon">
          <img class="header_icon_telephone" onmouseover="icon_over()" onmouseout="icon_out()" src="<?= get_template_directory_uri(); ?>./img/Трубка.svg" alt="telephone" />
          <a href="http://vk.com/malstrim" target="_blank"><img class="header_icon_vk" src="<?= get_template_directory_uri(); ?>./img/VK1.svg" alt="vk" /></a>
          <a href="http://t.me/vie_est_vita" target="_blank"><img class="header_icon_telegram" src="<?= get_template_directory_uri(); ?>./img/TЛ.svg" alt="telegram" /></a>
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
              <img src="<?= get_template_directory_uri(); ?>./img/tel.svg" alt="" />
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="modal_telephone_1">
              <img src="<?= get_template_directory_uri(); ?>./img/tel.svg" alt="" />
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
              <img class="modal_window_img" src="<?= get_template_directory_uri(); ?>./img/модальное окно 2.png" alt="" />
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
                  <img src="<?= get_template_directory_uri(); ?>./img/+.svg" onclick="show()" alt="" />
                </div>

                

                <p class="modal_form_text">
                  Отправьте заявку и мы перезвоним Вам в ближайшее время и
                  поможем подобрать поход
                </p>
                <div class="modal_application">
                  <img src="<?= get_template_directory_uri(); ?>./img/туристМод.svg" alt="турист" />
                  <div class="modal_application_label">
                    <p><label for="">Ваше имя:</label></p>
                    <input class="modal_application_input" type="text" name="name" placeholder="Введите ваше имя" />
                  </div>
                </div>
                <div class="modal_application">
                  <img src="<?= get_template_directory_uri(); ?>./img/телефон.svg" alt="телефон" />
                  <div class="modal_application_label">
                    <p><label for="">Телефон:</label></p>
                    <input class="modal_application_input" type="text" name="name" placeholder="+ 7 (978) 798-58-72" />
                  </div>
                </div>
                <div class="modal_application_checkbox">
                  <input type="checkbox" class="modal_application_input_checkbox" />
                  <p>
                    Я согласен с <span>условиями передачи информации</span>
                  </p>
                </div>
                <button class="modal_form_btn" type="submit">
                  Отправить
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>




      <div class="header_box">
        <div class="header_box_title_img">
          <div class="header_box_title">
            <h1>
              Походы по <br />
              Крыму и Кавказу
            </h1>
          </div>
          <div class="header_block_description">
            <div class="header_block_img">
              <img src="<?= get_template_directory_uri(); ?>./img/Карта.png" alt="Карта" />
              <p>Маршруты по всему Крыму</p>
            </div>
            <div class="header_block_img">
              <img src="<?= get_template_directory_uri(); ?>./img/Турист.png" alt="Карта" />
              <p>Пешие туры на Кавказ</p>
            </div>
            <div class="header_block_img">
              <img src="<?= get_template_directory_uri(); ?>./img/Гора.png" alt="Карта" />
              <p>Восхождение на Эльбрус</p>
            </div>
          </div>
        </div>
        <div class="header_box_link">
          <a href="<?php get_template_directory_uri(); ?>./расписание">Маршруты</a>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 185">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,181.3C960,181,1200,139,1320,117.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>
  </header>
  <!-- ---------------------->

  <!-- Наши походы  -->
  <section class="hiking_advantages">
    <div class="container">
      <h2>Нас выбирают, потому что:</h2>
      <div class="hiking_block">
        <div class="hiking_img">
          <img src="<?= get_template_directory_uri(); ?>./img/Веселые.png" alt="cheerful" />
          <p>
            В наших походах Вам не нужно ни о чем беспокоиться, мы обо всем
            позаботимся за Вас
          </p>
        </div>
        <div class="hiking_point"></div>
        <div class="hiking_img">
          <img src="<?= get_template_directory_uri(); ?>./img/Безопасные.png" alt="Safe" />
          <p>
            Каждый наш поход проходит под чутким руководством специалистов
          </p>
        </div>
        <div class="hiking_point"></div>
        <div class="hiking_img">
          <img src="<?= get_template_directory_uri(); ?>./img/Вкусные.png" alt="Tasty" />
          <p>
            У нас разнообразные виды отдыха и даже маршруты с шашлыком и дикой
            лесной баней
          </p>
        </div>
        <div class="hiking_point"></div>
        <div class="hiking_img">
          <img src="<?= get_template_directory_uri(); ?>./img/Круглогодичные.png" alt="season" />
          <p>
            В Крымских и Кавказских горах только проверенные тропы и самые
            красивые пейзажи
          </p>
        </div>
      </div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide hiking_slider">
            <img src="<?= get_template_directory_uri(); ?>./img/Веселые.png" alt="Веселые" />
            <p>
              В наших походах Вам не нужно ни о чем беспокоиться, мы обо всем
              позаботимся за Вас
            </p>
          </div>
          <div class="swiper-slide hiking_slider">
            <img src="<?= get_template_directory_uri(); ?>./img/Безопасные.png" alt="Безопасные" />
            <p>
              Каждый наш поход проходит под чутким руководством специалистов
            </p>
          </div>
          <div class="swiper-slide hiking_slider">
            <img src="<?= get_template_directory_uri(); ?>./img/Вкусные.png" alt="Вкусные" />
            <p>
              У нас разнообразные виды отдыха и даже маршруты с шашлыком и
              дикой лесной баней
            </p>
          </div>
          <div class="swiper-slide hiking_slider">
            <img src="<?= get_template_directory_uri(); ?>./img/Круглогодичные.png" alt="Круглогодичные" />
            <p>
              В Крымских и Кавказских горах только проверенные тропы и самые
              красивые пейзажи
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- -------------------- -->

    <!-- Наши преимущества -->
    <div class="container">
      <h2>Только для Вас</h2>
      <div class="advantages_block">
        <div class="advantages_img">
          <img src="<?= get_template_directory_uri(); ?>./img/Vector.svg" alt="" />
          <p>Скидка новому клиенту</p>
        </div>
        <div class="advantages_img">
          <img src="<?= get_template_directory_uri(); ?>./img/Vector (1).svg" alt="" />
          <p>Индивидуальные туры</p>
        </div>
        <div class="advantages_img_none">
          <img src="<?= get_template_directory_uri(); ?>./img/Vector (2).svg" alt="" />
          <p>Быстрая обратная связь</p>
        </div>
        <div class="advantages_img">
          <img src="<?= get_template_directory_uri(); ?>./img/Vector (3).svg" alt="" />
          <p>Походы для любых возрастов</p>
        </div>
        <div class="advantages_img">
          <img src="<?= get_template_directory_uri(); ?>./img/Vector (4).svg" alt="" />
          <p>Лучшие фотографии</p>
        </div>
        <div class="advantages_img_none">
          <img src="<?= get_template_directory_uri(); ?>./img/Vector (5).svg" alt="" />
          <p>Психологические тренинги</p>
        </div>
      </div>
    </div>
  </section>
  <!-- --------------  -->

  <!-- Крым  -->
  <section class="caucasus_section">
    <div class="caucasus_fon_top"></div>
    <div class="caucasus_fon_center">
      <div class="container">
        <div class="caucasus_header">
          <div class="caucasus_header_title">Крым</div>
          <div class="nav_caucasus">
            <ul class="tabs">
              <li data-tab="1" class="tab_header active">Однодневные</li>
              <li data-tab="2" class="tab_header">с ночевкой</li>
              <li data-tab="3" class="tab_header">Экстрим</li>
              <li data-tab="4" class="tab_header">
                психологический интенсив
              </li>
            </ul>
          </div>
        </div>

        <div data-tab-content="1" class="caucasus active">
          <div class="caucasus_desc">
            <div class="caucasus_subtitle_img">
              <img src="<?= get_template_directory_uri(); ?>./img/svg-crimea.svg" alt="" />
            </div>

            <div class="caucasus_subtitle">
              <ul>
                Однодневный поход – это прекрасная возможность отдохнуть на
                свежем лесном, горном и морском воздухе. Крым богат красивыми
                пешими маршрутами, которые мы проводим каждую неделю. Виды на
                Чёрное море, на дикие лесные ущелья, на глубокие каньоны и
                бескрайние просторы плато. Долина, немножко тихой воды и луч
                заката — самые простые вещи, самые обыкновенные, самые
                дорогие.
              </ul>
            </div>
          </div>
          <div class="caucasus_img">
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_oneday_1.png" alt="" />
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_oneday_2.png" alt="" />
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_oneday_3.png" alt="" />
          </div>
        </div>

        <div data-tab-content="2" class="caucasus">
          <div class="caucasus_desc">
            <div class="caucasus_subtitle_img">
              <img src="<?= get_template_directory_uri(); ?>./img/svg-crimea.svg" alt="" />
            </div>

            <div class="caucasus_subtitle">
              Поход с ночевкой - это увлекательное путешествие по горной
              местности Крыма с ночевками в палатке, разговорами у костра,
              совместное приготовление пищи и сбор дров, обустройство своего
              жилища для удобного и комфортного отдыха на сказочной природе.
              Это когда вместе с душевной компанией встречаешь солнышко из
              морской глади и вечером вместе его провожаешь.
            </div>
          </div>
          <div class="caucasus_img">
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_night_1.png" alt="" />
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_night_2.png" alt="" />
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_night_3.png" alt="" />
          </div>
        </div>

        <div data-tab-content="3" class="caucasus">
          <div class="caucasus_desc">
            <div class="caucasus_subtitle_img">
              <img src="<?= get_template_directory_uri(); ?>./img/svg-crimea.svg" alt="" />
            </div>

            <div class="caucasus_subtitle">
              Экстрим туры в Крыму - это самое яркое, красочное и видовое
              путешествие, которое Вы можете себе позволить. С нашими опытными
              инструкторами любой человек сможет попробовать себя в такой
              активной деятельности. Обучим, проведем инструктаж, дадим все
              необходимое снаряжение, лишь бы Ваши эмоции остались на высоте.
              Для нас дороги Ваши впечатления.
            </div>
          </div>
          <div class="caucasus_img">
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_extream_1.png" alt="" />
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_extream_2.png" alt="" />
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_extream_3.png" alt="" />
          </div>
        </div>

        <div data-tab-content="4" class="caucasus">
          <div class="caucasus_desc">
            <div class="caucasus_subtitle_img">
              <img src="<?= get_template_directory_uri(); ?>./img/svg-crimea.svg" alt="" />
            </div>
            <div class="caucasus_subtitle">
              Наша команда проводит семинары на природе, они для тех, кто
              вступил на путь самопознания и саморазвития, желает изменить
              своё восприятие, оздоровить и разгрузить психику, проработать
              внутренние проблемы, разобраться в себе и перезагрузить свою
              жизнь, посетить места силы и уникальные места крымской природы.
              С Вами буду работать опытный психотерапевт и опытный проводник.
            </div>
          </div>
          <div class="caucasus_img">
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_psycho_1.png" alt="" />
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_psycho_2.png" alt="" />
            <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Rectangle_psycho_3.png" alt="" />
          </div>
        </div>
        <div class="caucasus_button">
          <div class="caucasus_btn_routes">
            <a href="<?php get_template_directory_uri(); ?>./расписание">Маршруты</a>
          </div>
          <div class="caucasus_btn_record">
            <a href="#" onclick="show()">Записаться</a>
          </div>
        </div>
      </div>
      <div class="caucasus_fon_bottom"></div>
    </div>
  </section>
  <!-- -----------------  -->

  <!-- Индивидуальные туры  -->
  <section class="tours">
    <div class="container">
      <div class="Individual_tours">
        <div class="Individual_tours_img_block">
          <div class="Individual_tours_img_top">
            <img src="<?= get_template_directory_uri(); ?>./img/Фото 1.png" alt="Фото из похода " />
            <img src="<?= get_template_directory_uri(); ?>./img/Фото 2.png" alt="Фото из похода " />
          </div>
          <div class="Individual_tours_img_bottom">
            <img src="<?= get_template_directory_uri(); ?>./img/3.png" alt="Фото из похода " />
          </div>
        </div>
        <div class="Individual_tours_content">
          <div class="Individual_tours_text">
            <div class="Individual_tours_title">Индивидуальные туры</div>
            <div class="Individual_tours_desc">
              Если Вы ограничены во времени или хотите посетить определенное
              место с семьей или лично, то у нас есть услуга индивидуальных
              туров, где Вы сами назначаете Гиду время и место. Отправьте
              заявку на вашего личного гида сейчас, потому что в любую
              следующую минуту он может быть в походе.
            </div>
            <div class="Individual_tours_text_img">
              <img src="<?= get_template_directory_uri(); ?>./img/4.png" alt="Фото" />
            </div>
            <div class="Individual_tours_text_bottom">
              Так же Вы можете найти нас в Вконтакте или в Телеграме.
            </div>
          </div>
          <div class="Individual_tours_contacts">
            <div class="Individual_tours_icon">
              <a href="http://vk.com/malstrim" target="_blank"><img class="Individual_tours_icon_vk" src="<?= get_template_directory_uri(); ?>./img/vk.svg" alt="" /></a>
              <a href="http://t.me/vie_est_vita" target="_blank"><img class="Individual_tours_icon_tl" src="<?= get_template_directory_uri(); ?>./img/tl.svg" alt="" /></a>
              <a class="Individual_tours_icon_button" href="#" onclick="show()">Заявка</a>
            </div>
            <div class="Individual_tours_phones">
              <div class="Individual_tours_phones_1">
                <img src="<?= get_template_directory_uri(); ?>./img/tel.svg" alt="" />
                <p>+7(978) 798-58-72</p>
              </div>
              <div class="Individual_tours_phones_1">
                <img src="<?= get_template_directory_uri(); ?>./img/tel.svg" alt="" />
                <p>+7(978) 529-35-87</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -----------------------------------  -->

  <!-- Кавказ  -->
  <section class="caucasus_section">
    <div class="caucasus_fon_top"></div>
    <div class="caucasus_fon_center">
      <div class="container">
        <div class="caucasus_header">
          <div class="nav_caucasus">
            <ul class="tabs">
              <li data-tab="1" class="tab_header active">
                восхождение на эльбрус
              </li>
              <li data-tab="2" class="tab_header">архыз</li>
              <li data-tab="3" class="tab_header">осетия</li>
              <li data-tab="4" class="tab_header">адыгея</li>
            </ul>
          </div>
          <div class="caucasus_header_title">Кавказ</div>
        </div>

        <div class="caucasus_tab">
          <div data-tab-content="1" class="caucasus active">
            <div class="caucasus_desc">
              <div class="caucasus_subtitle">
                <ul>
                  <p>На Эльбрус нужно ехать, чтобы:</p>
                  <li>Побывать на высочайшей вершине Европы!</li>
                  <li>Встретить рассвет над Главным кавказским хребтом!</li>
                  <li>
                    Лично постоять на леднике, где произошло сражение за
                    Эльбрус.
                  </li>
                  <li>Попробовать уникальную кавказскую кухню.</li>
                  <p>Все это возможно с нашей командой.</p>
                </ul>
              </div>
              <div class="caucasus_subtitle_img">
                <img src="<?= get_template_directory_uri(); ?>./img/кавказ гора.png" alt="" />
              </div>
            </div>
            <div class="caucasus_img">
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Эльбрус 1.png" alt="" />
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Эльбрус 2.png" alt="" />
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/Эльбрус 3.png" alt="" />
            </div>
          </div>

          <div data-tab-content="2" class="caucasus">
            <div class="caucasus_desc">
              <div class="caucasus_subtitle">
                Дорогие туристы, мы можем сказать наверняка, что Архыз - это
                одно из самых прекрасных мест на нашем материке, бесконечное
                количество горных озер, волшебный лес, бурные водопады и реки,
                разнообразная флора и фауна. А представьте жить в данном месте
                несколько дней и дышать свежем воздухом и набераться
                энергетикой дикой природы?
              </div>
              <div class="caucasus_subtitle_img">
                <img src="<?= get_template_directory_uri(); ?>./img/кавказ гора.png" alt="" />
              </div>
            </div>
            <div class="caucasus_img">
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/архыз 1.png" alt="" />
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/архыз 2.png" alt="" />
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/архыз 3.png" alt="" />
            </div>
          </div>

          <div data-tab-content="3" class="caucasus">
            <div class="caucasus_desc">
              <div class="caucasus_subtitle">
                Вы когда нибудь мечтали попариться в горячих природных
                источниках с видом на одну из самых высоких вершин Европы -
                Казбек? Мы предлагаем Вам тур с посещением
                достопримечательностей Северной Осетии, подойдем ближе к
                леднику Майли и Колка, поваляемся в радоновых ваннах, пройдем
                красивую долину вдоль реки Геналдон. И все это за один
                насыщенный поход.
              </div>
              <div class="caucasus_subtitle_img">
                <img src="img/кавказ гора.png" alt="" />
              </div>
            </div>
            <div class="caucasus_img">
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/осетия 1.png" alt="" />
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/осетия 2.png" alt="" />
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/осетия 3.png" alt="" />
            </div>
          </div>

          <div data-tab-content="4" class="caucasus">
            <div class="caucasus_desc">
              <div class="caucasus_subtitle">
                Наша команда предлагает красивый тур по Адыгее в мае, а именно
                по маршруту Большой и Малый Тхач, самое популярное место для
                туристов, любителей увидеть лес как в русской сказке,
                множество деревянных хижин в лесу, экстремальные броды, бурные
                реки и бурые - медведи (будем осторожны)! И все это в мае,
                когда еще нет скопления туристов желающих посмотреть на это
                чудо.
              </div>
              <div class="caucasus_subtitle_img">
                <img src="<?= get_template_directory_uri(); ?>./img/кавказ гора.png" alt="" />
              </div>
            </div>
            <div class="caucasus_img">
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/адыгея 1.png" alt="" />
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/адыгея 2.png" alt="" />
              <img class="caucasus_img_elbrus" src="<?= get_template_directory_uri(); ?>./img/адыгея 3.png" alt="" />
            </div>
          </div>
        </div>

        <div class="caucasus_button">
          <div class="caucasus_btn_routes">
            <a href="<?php get_template_directory_uri(); ?>./расписание">Маршруты</a>
          </div>
          <div class="caucasus_btn_record">
            <a href="#" onclick="show()">Записаться</a>
          </div>
        </div>
      </div>
      <div class="caucasus_fon_bottom"></div>
    </div>
  </section>
  <!-- ---------------------------------------  -->

  <!-- Наши лучшие фотографии  -->
  <section class="photo">
    <div class="container">
      <div class="photo_title">Наши лучшие фотографии</div>
      <div class="photo_img_block">
        <div class="photo_img">
          <img class="photo_img_wrap" src="<?= get_template_directory_uri(); ?>./img/Ледник Майли.png" alt="" />
          <img class="photo_img_inner" src="<?= get_template_directory_uri(); ?>./img/Ледник Майли(текст).png" alt="" />
        </div>
        <div class="photo_img">
          <img class="photo_img_wrap" src="<?= get_template_directory_uri(); ?>./img/Осетия.png" alt="" />
          <img class="photo_img_inner" src="<?= get_template_directory_uri(); ?>./img/Осетия(текст).png" alt="" />
        </div>
      </div>
      <div class="photo_img_block">
        <div class="photo_img">
          <img class="photo_img_wrap" src="<?= get_template_directory_uri(); ?>./img/Крым.png" alt="" />
          <img class="photo_img_inner" src="<?= get_template_directory_uri(); ?>./img/Крым (текст).png" alt="" />
        </div>
        <div class="photo_img">
          <img class="photo_img_wrap" src="<?= get_template_directory_uri(); ?>./img/Архыз, река Псыш.png" alt="" />
          <img class="photo_img_inner" src="<?= get_template_directory_uri(); ?>./img/Архыз, река Псыш(тест).png" alt="" />
        </div>
      </div>
      <div class="photo_img_block">
        <div class="photo_img">
          <img class="photo_img_wrap" src="<?= get_template_directory_uri(); ?>./img/Осетия, на Крестах.png" alt="" />
          <img class="photo_img_inner" src="<?= get_template_directory_uri(); ?>./img/Осетия, на Крестах(текст).png" alt="" />
        </div>
        <div class="photo_img">
          <img class="photo_img_wrap" src="<?= get_template_directory_uri(); ?>./img/Архыз, Орленок.png" alt="" />
          <img class="photo_img_inner" src="<?= get_template_directory_uri(); ?>./img/Архыз, Орленок(текст).png" alt="" />
        </div>
      </div>

      <!-- Галерея  -->

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide photo_img_gallery_clide">
            <div class="photo_img_gallery">
              <img class="photo_img_wrap_gallery" src="<?= get_template_directory_uri(); ?>./img/Ледник Майли.png" alt="" />
              <img class="photo_img_inner_gallery" src="<?= get_template_directory_uri(); ?>./img/Ледник Майли(текст).png" alt="" />
            </div>
          </div>
          <div class="swiper-slide photo_img_gallery_clide">
            <div class="photo_img_gallery">
              <img class="photo_img_wrap_gallery" src="<?= get_template_directory_uri(); ?>./img/Осетия.png" alt="" />
              <img class="photo_img_inner_gallery" src="<?= get_template_directory_uri(); ?>./img/Осетия(текст).png" alt="" />
            </div>
          </div>
          <div class="swiper-slide photo_img_gallery_clide">
            <div class="photo_img_gallery">
              <img class="photo_img_wrap_gallery" src="<?= get_template_directory_uri(); ?>./img/Крым.png" alt="" />
              <img class="photo_img_inner_gallery" src="<?= get_template_directory_uri(); ?>./img/Крым (текст).png" alt="" />
            </div>
          </div>
          <div class="swiper-slide photo_img_gallery_clide">
            <div class="photo_img_gallery">
              <img class="photo_img_wrap_gallery" src="<?= get_template_directory_uri(); ?>./img/Архыз, река Псыш.png" alt="" />
              <img class="photo_img_inner_gallery" src="<?= get_template_directory_uri(); ?>./img/Архыз, река Псыш(тест).png" alt="" />
            </div>
          </div>
          <div class="swiper-slide photo_img_gallery_clide">
            <div class="photo_img_gallery">
              <img class="photo_img_wrap_gallery" src="<?= get_template_directory_uri(); ?>./img/Осетия, на Крестах.png" alt="" />
              <img class="photo_img_inner_gallery" src="<?= get_template_directory_uri(); ?>./img/Осетия, на Крестах(текст).png" alt="" />
            </div>
          </div>
          <div class="swiper-slide photo_img_gallery_clide">
            <div class="photo_img_gallery">
              <img class="photo_img_wrap_gallery" src="<?= get_template_directory_uri(); ?>./img/Архыз, Орленок.png" alt="" />
              <img class="photo_img_inner_gallery" src="<?= get_template_directory_uri(); ?>./img/Архыз, Орленок(текст).png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!--------------------- -->
      <div class="photo_subtitle">
        <a href="http://vk.com/malstrim" target="_blank">
          Посмотреть<span>&nbsp больше &nbsp </span> фотографий Вы можете на
          нашей странице Вконтакте</a>
        <a href="http://vk.com/malstrim" target="_blank" class="photo_subtitle_link">vk.com/malstrim</a>
        <a href="http://vk.com/malstrim" target="_blank"><img class="photo_subtitle_link_vk" src="<?= get_template_directory_uri(); ?>./img/VK white.svg" alt="" /></a>
      </div>
    </div>
  </section>
  <!-- -------------------------------------  -->

  <!-- Отзывы  -->
  <section class="reviews">
    <h5>Отзывы</h5>
    <div class="buttons">
      <button class="controls" id="previous">
        <img src="<?= get_template_directory_uri(); ?>./img/Кнопка лево.png" alt="previou" />
      </button>
      <button class="controls" id="pause">
        <img src="<?= get_template_directory_uri(); ?>./img/Кнопка.png" alt="pause" />
      </button>
      <button class="controls" id="next">
        <img src="<?= get_template_directory_uri(); ?>./img/Кнопка право.png" alt="next" />
      </button>
    </div>

    <div class="container">
      <ul id="slides">
        <li class="slide showing">
          <div class="review">
            <div class="avatar">
              <img src="<?= get_template_directory_uri(); ?>./img/ava1.png" alt="r1" />
            </div>
            <div>
              <p class="text-review">
                <span class="text-review-span">Мировита Феоктистова</span>
                Маршрут полный контрастов, событий и эмоций). Неожиданные
                встречи, таинственные пещеры, опьяняющие цветущим разнотравьем
                предгорья... Мы даже несколько буков успели пересадить
                подальше от тропы)) Маршрут очень красивый, гид Максим - очень
                внимательный, терпеливый и всегда позитивный. С ним интересно
                и очень спокойно. Если в поход по Крыму- то только с Мальстрим
              </p>
            </div>
          </div>
        </li>
        <li class="slide">
          <div class="review">
            <div class="avatar">
              <img src="<?= get_template_directory_uri(); ?>./img/ava2.png" alt="r2" />
            </div>
            <div>
              <p class="text-review">
                <span class="text-review-span">Алена Олейник</span>
                Первый раз ходила в поход с Мальстримом и подучила массу
                положительных впечатлений. От интересного маршрута. От
                неординарных людей. От захватывающих историй. От впечатляющего
                опыта. От замечательного чувства юмора. От дружеской
                атмосферы. Такие редкие составляющие и все в одном походе.
                Ребята, вы огромные молодцы! я теперь ваш клиент надолго.
              </p>
            </div>
          </div>
        </li>
        <li class="slide">
          <div class="review">
            <div class="avatar">
              <img src="<?= get_template_directory_uri(); ?>./img/ava3.png" alt="r3" />
            </div>
            <div>
              <p class="text-review">
                <span class="text-review-span">Наталья Иванюк</span>
                Спасибо команде! очень приятно впечатлена ответственностью
                организаторов и вниманием к каждому участнику! С удовольствием
                еще пойду с Мальстрим наслаждаться творением природы! Желаю
                команде всего самого наилучшего и всегда оставаться такими
                веселыми!
              </p>
            </div>
          </div>
        </li>
        <li class="slide">
          <div class="review">
            <div class="avatar">
              <img src="<?= get_template_directory_uri(); ?>./img/ava4.png" alt="r4" />
            </div>
            <div>
              <p class="text-review">
                <span class="text-review-span">Сургей Тимофеев</span>
                Супер маршрут! Супер проводник! Супер компания!в общем все
                мега супер!
              </p>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <script src="./script.js"></script>
    <div class="mobil">
      <p>посмотреть можно здесь</p>
      <a href="#"><img src="<?= get_template_directory_uri(); ?>./img/VK_logo.jpg" alt="VK" class="logo" /></a>
    </div>

    <div class="photo_subtitle photo_subtitle_new">
      <a href="http://vk.com/malstrim" target="_blank">
        Посмотреть<span>&nbsp больше &nbsp </span> отзывов Вы можете на нашей
        странице Вконтакте</a>
      <a href="http://vk.com/malstrim" target="_blank" class="photo_subtitle_link">vk.com/malstrim</a>
      <a href="http://vk.com/malstrim" target="_blank"><img class="photo_subtitle_link_vk" src="<?= get_template_directory_uri(); ?>./img/VK white.svg" alt="" /></a>
    </div>

    <!-- <div class="text">
        <p>Посмотреть больше отзывов Вы можете на нашей странице ВКонтакте</p>
        <a href="#"><img src="img/VK_logo.jpg" alt="VK" class="logo" /></a>
      </div> -->
  </section>
  <!-- --------------------------------------  -->

  <!-- footer  -->
  <footer>
    <div class="footer_svg"></div>
    <div class="footer">
      <!-- Логотип -->
      <div class="footer_div">
        <div class="img_logo">
          <a href="index.html"><img src="<?= get_template_directory_uri(); ?>././img/logo.png" alt="logo" /></a>
        </div>

        <p class="footer_p" style="margin-top: 20px">
          Крымская, туристическая организация, для любителей активного отдыха
          на природе
        </p>
        <div class="img_decor" style="margin-top: 20px">
          <img src="<?= get_template_directory_uri(); ?>././img/decor.png" alt="logo" style="width: 230px; height: 90px" />
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
          <img src="<?= get_template_directory_uri(); ?>././img/phone_on.png" alt="fone" />
          <a class="footer_a_fone" href="#">+7(978)798-58-72</a>
        </div>
        <div class="footer_div_fone">
          <img src="<?= get_template_directory_uri(); ?>././img/phone_on.png" alt="fone" />
          <a class="footer_a_fone" href="#">+7(978)529-35-87</a>
        </div>
        <div>
          <p class="footer_p">
            <b>Подпишитесь</b> на&nbsp;нас в&nbsp;социальных сетях
            и&nbsp;будьте в&nbsp;курсе всех планирующихся мероприятий
            в&nbsp;Мальстриме.
          </p>
        </div>
        <div class="footer_div_socseti">
          <div class="footer_div_socseti_VK">
            <a href="http://vk.com/malstrim" target="_blank" rel="noopener noreferrer">
              <img src="<?= get_template_directory_uri(); ?>././img/VK0.png" alt="VK" style="padding-top: 9px; padding-left: 5px" />
            </a>
          </div>
          <div class="footer_div_socseti_Telegram">
            <a href="http://t.me/vie_est_vita" target="_blank" rel="noopener noreferrer">
              <img src="<?= get_template_directory_uri(); ?>././img/Telegram.png" alt="Telegram" style="padding-top: 9px; padding-left: 5px" />
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