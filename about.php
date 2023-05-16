<?php
  /*
    Template Name: О нас
  */
?>

<?php wp_head(  ); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php
        if(is_404()){
          echo 'Ошибка 404';
        }else{
          the_title();
        }
      ?>
    </title>
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>./css/ about.css" />
    <link
      href="https://fonts.cdnfonts.com/css/euclid-circular-a"
      rel="stylesheet"
    />
    <link
      href="https://fonts.cdnfonts.com/css/helveticaneuecyr-2"
      rel="stylesheet"
    />

  </head>
  <body>
    <header class="header_about">
      <div class="container">
        <div class="header_burger">
          <div class="burger">
            <span></span>
          </div>
        </div>
        <div class="header_block">
          <a href="<?php get_template_directory_uri(  );?>./ index.php"><img src="<?= get_template_directory_uri(  );?>./img/logo.png" alt="logo" /></a>
          <nav class="nav">
            <?php
              wp_nav_menu( [
                'theme_location' => 'top',
                'container' => '',
                'menu_class' => '',
                'menu_id' => '',
              ] );
            ?>
          </nav>
          <div class="menu">
            <img
              class="menu_img"
              src="<?= get_template_directory_uri(  );?>./img/+.svg"
              onclick="menu_img_close()"
              alt=""
            />
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
              <img src="<?= get_template_directory_uri(  );?>./img/tube  white.svg" alt="telephone" />
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="menu_tel">
              <img src="<?= get_template_directory_uri(  );?>./img/tube  white.svg" alt="telephone" />
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="menu_icon">
              <a href="http://vk.com/malstrim" target="_blank"
                ><img class="menu_icon_vk" src="<?= get_template_directory_uri(  );?>./img/VK1.svg" alt="vk"
              /></a>
              <a href="http://t.me/vie_est_vita" target="_blank"
                ><img class="menu_icon_tl" src="<?= get_template_directory_uri(  );?>./img/TЛ.svg" alt="telegram"
              /></a>
            </div>
          </div>
          <div class="header_icon">
            <img class="header_icon_telephone" onmouseover="icon_over()" onmouseout="icon_out()" src="<?= get_template_directory_uri(  );?>./img/tube  white.svg" alt="telephone"/>
            <a href="http://vk.com/malstrim" target="_blank"
              ><img class="header_icon_vk" src="<?= get_template_directory_uri(  );?>./img/VK white.svg" alt="vk"
            /></a>
            <a href="http://t.me/vie_est_vita" target="_blank"
              ><img
                class="header_icon_telegram"
                src="<?= get_template_directory_uri(  );?>./img/Telegramwhite.svg"
                alt="telegram"
            /></a>
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
                <img src="<?= get_template_directory_uri(  );?>./img/tel.svg" alt="" />
                <p>+7(978) 798-58-72</p>
              </div>
              <div class="modal_telephone_1">
                <img src="<?= get_template_directory_uri(  );?>./img/tel.svg" alt="" />
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
                <img
                  class="modal_window_img"
                  src="<?= get_template_directory_uri(  );?>./img/модальное окно 2.png"
                  alt=""
                />
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
                    <img src="<?= get_template_directory_uri(  );?>./img/+.svg" onclick="show()" alt="" />
                  </div>
                  <p class="modal_form_text">
                    Отправьте заявку и мы перезвоним Вам в ближайшее время и
                    поможем подобрать поход
                  </p>
                  <div class="modal_application">
                    <img src="<?= get_template_directory_uri(  );?>./img/туристМод.svg" alt="турист" />
                    <div class="modal_application_label">
                      <p><label for="">Ваше имя:</label></p>
                      <input
                        class="modal_application_input"
                        type="text"
                        name="name" placeholder="Введите ваше имя"
                      />
                    </div>
                  </div>
                  <div class="modal_application">
                    <img src="<?= get_template_directory_uri(  );?>./img/телефон.svg" alt="телефон" />
                    <div class="modal_application_label">
                      <p><label for="">Телефон:</label></p>
                      <input
                        class="modal_application_input"
                        type="text"
                        name="name" placeholder ="+ 7 (978) 798-58-72"
                      />
                    </div>
                  </div>
                  <div class="modal_application_checkbox">
                    <input
                      type="checkbox"
                      class="modal_application_input_checkbox"
                    />
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
      </div>
    </header>

    <!-- О нас  -->
    <!-- Контакты Мальстрим -->
    <section class="about">
      <div class="container">
        <div class="about_content">
          <div class="about_sidebar">
            <div class="about_sidebar_title">Контакты</div>
            <div class="about_sidebar_phones">
              <div class="about_sidebar_phones_1">
                <img
                  class="about_sidebar_phones_img"
                  src="<?= get_template_directory_uri(  );?>./img/tel.svg"
                  alt="иконка телефон"
                />
                <p class="about_sidebar_phones_tel">+7(978) 798-58-72</p>
              </div>
              <div class="about_sidebar_phones_1">
                <img
                  class="about_sidebar_phones_img"
                  src="<?= get_template_directory_uri(  );?>./img/tel.svg"
                  alt="иконка телефон"
                />
                <p class="about_sidebar_phones_tel">+7(978) 529-35-87</p>
              </div>
            </div>
            <div class="about_sidebar_icon">
              <a href="http://vk.com/malstrim" target="_blank"
                ><img
                  class="about_sidebar_icon_vk"
                  src="<?= get_template_directory_uri(  );?>./img/VK white.svg"
                  alt="иконка vk"
              /></a>
              <a
                href="http://vk.com/malstrim"
                target="_blank"
                class="about_sidebar_icon_link"
                >vk.com/malstrim</a
              >
            </div>
            <div class="about_sidebar_icon">
              <a href="http://t.me/vie_est_vita" target="_blank"
                ><img
                  class="about_sidebar_icon_tl"
                  src="<?= get_template_directory_uri(  );?>./img/Telegramwhite.svg"
                  alt="иконка телеграмм"
              /></a>
              <a
                href="http://t.me/vie_est_vita"
                target="_blank"
                class="about_sidebar_icon_link"
                >t.me/malstrim</a
              >
            </div>
            <div class="about_sidebar_text">День рождения Мальстрим</div>
            <div class="about_sidebar_subtitle">01 апреля 2019 год</div>
          </div>
          <div class="about_text">
            <div class="about_text_title">Мальстрим</div>
            <div class="about_text_desc">
              Мальстрим - команда опытных инструкторов-проводников пешеходного
              туризма. Мы организовываем яркие и незабываемые путешествия по
              Крымскому полуострову круглый год, а также проводим летние и
              майские туры по Кавказу и восхождение на Эльбрус. С нами Вы можете
              отправиться в походы и активные туры по самым разнообразным
              маршрутам, встретить рассветы и проводить солнце на горных
              вершинах, совершить спуск в пещеры и многое другое. Наши походы
              подходят как детям так и взрослым, каждый поход имеет свою
              сложность и особенность. Все гиды нашей команды имеют определенную
              квалификацию и могут помочь любому человеку подготовиться даже в
              самый сложный поход.
            </div>
            <p class="about_text_desc_p">
              Будьте осторожны: водоворот путешествий может поглотить Вас!
            </p>
            <img class="about_text_img" src="<?= get_template_directory_uri( );?>./img/Фото 1 о нас.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Наши гиды -->
    <section class="guides" style="background-image: url('<?= get_template_directory_uri(  );?>./img/Фон о нас.png');">
      <div class="container">
        <div class="guides_title">Наши гиды</div>
        <div class="guides_block">
          <div class="guides_block_top">
            <div class="guides_instructor">
              <img
                class="guides_instructor_img"
                src="<?= get_template_directory_uri(  );?>./img/Максим.png"
                alt="Инструктор Максим"
              />
              <img
                class="guides_instructor_fon"
                src="<?= get_template_directory_uri(  );?>./img/Фон 4.png"
                alt="Фон"
              />
              <div class="guides_instructor_name">Максим</div>
              <div class="guides_instructor_desc">
                Инструктор проводник пешеходного туризма по Крыму. Специалист в
                рекреационно-оздоровительных мероприятиях.
              </div>
            </div>
            <div class="guides_instructor">
              <img
                class="guides_instructor_img"
                src="<?= get_template_directory_uri(  );?>./img/Светозар.png"
                alt="Инструктор Светозар"
              />
              <img
                class="guides_instructor_fon"
                src="<?= get_template_directory_uri(  );?>./img/Фон 4.png"
                alt="Фон"
              />
              <div class="guides_instructor_name">Светозар</div>
              <div class="guides_instructor_desc">
                Психолог, главный организатор интенсива «Перезагрузка» и
                «Пробуждение»
              </div>
            </div>
          </div>

          <div class="guides_block_bottom">
            <div class="guides_instructor">
              <img
                class="guides_instructor_img"
                src="<?= get_template_directory_uri(  );?>./img/Дарья.png"
                alt="Инструктор Дарья"
              />
              <img
                class="guides_instructor_fon"
                src="<?= get_template_directory_uri(  );?>./img/Фон 4.png"
                alt="Фон"
              />
              <div class="guides_instructor_name">Дарья</div>
              <div class="guides_instructor_desc">
                Инструктор проводник пешеходного туризма по Крыму и Кавказу.
                Специалист в рекреационно-оздоровительных мероприятиях.
              </div>
            </div>
            <div class="guides_instructor">
              <img
                class="guides_instructor_img"
                src="<?= get_template_directory_uri(  );?>./img/Роман.png"
                alt="Инструктор Роман"
              />
              <img
                class="guides_instructor_fon"
                src="<?= get_template_directory_uri(  );?>./img/Фон 4.png"
                alt="Фон"
              />
              <div class="guides_instructor_name">Роман</div>
              <div class="guides_instructor_desc">
                Инструктор проводник пешеходного туризма по Крыму и Кавказу.
                Опытный альпинист и организатор туров восхождений на Эльбрус и
                треков к базовому лагерю Эвереста.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="guides_svg_1" style="background-image: url('<?= get_template_directory_uri();?>. /img/Фон 2.png');"></div>
    <div class="guides_svg_2" style="background-image: url('<?=get_template_directory_uri();?>. /img/фон 3.png');"></div>
    <div class="guides_fon" style="background-color: #132C33"></div>
    <div class="guides_svg_5" style="background-image: url('<?= get_template_directory_uri();?>. /img/фон 5.png');"></div>

    <!-- Наши заслуги -->
    <section class="merits">
      <div class="container">
        <div class="merits_title">Наши заслуги</div>
        <div class="merits_block">
          <div class="merits_aside_top">
            <div class="merits_aside_wrap">
              <img src="<?= get_template_directory_uri(  );?>./img/иконка 1.png" alt="иконка диплом" />
              <div class="merits_aside_wrap_text">
                Высшее образование в сфере спортивного туризма, предоставляющие
                право на ведения профессион. деятельности в данной сфере,<a
                  href=""
                >
                  просмотр документов.</a
                >
              </div>
            </div>
            <div class="merits_aside_wrap">
              <img src="<?= get_template_directory_uri(  );?>./img/иконка 2.png" alt="иконка диплом" />
              <div class="merits_aside_wrap_text">
                Дипломы с присвоением квалификации: инструктор проводник,
                сопровождение туристов при занятиях пешеходным туризмом,<a
                  href=""
                >
                  просмотр документов.</a
                >
              </div>
            </div>
          </div>
          <div class="merits_aside_bottom">
            <div class="merits_aside_wrap">
              <img
                class="merits_aside_wrap_icon_black"
                src="<?= get_template_directory_uri(  );?>./img/иконка 3.png"
                alt="иконка диплом"
              />
              <div class="merits_aside_wrap_text_black">
                Пятикратные восходители на самую высокую гору Европы -
                <span> Эльбрус (5642м).</span> Участники восхождения на гору
                <span>Казбек (5033м).</span> Участники восхождения на самую
                высокую гору Алтая - <span> Белуху (4506м).</span>
              </div>
            </div>
            <div class="merits_aside_wrap">
              <img src="<?= get_template_directory_uri(  );?>./img/иконка 4.png" alt="иконка диплом" />
              <div class="merits_aside_wrap_text">
                Наши гиды имеют <a href=""> сертификаты и грамоты</a> по
                спортивному туризму, являются участниками многочисленных
                соревнований по спортивному туризму, ориентированию и т.,
                принимали участие в судействе различных соревнований.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ---------------  -->

    <!-- footer  -->
    <footer>
      <div class="footer_svg"></div>
      <div class="footer">
        <!-- Логотип -->
        <div class="footer_div">
          <div class="img_logo">
            <a href="index.html"><img src="<?= get_template_directory_uri(  );?>././img/logo.png" alt="logo" /></a>
          </div>

          <p class="footer_p" style="margin-top: 20px">
            Крымская, туристическая организация, для любителей активного отдыха
            на природе
          </p>
          <div class="img_decor" style="margin-top: 20px">
            <img
              src="<?= get_template_directory_uri(  );?>././img/decor.png"
              alt="logo"
              style="width: 230px; height: 90px"
            />
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
          <a class="footer_h4" href="index.html" style="margin-top: 20px"
            >Главная</a
          >
          <li><a class="footer_a" href="schedule.html">Расписание</a></li>
          <li><a class="footer_a" href="reminder.html">Памятка туристу</a></li>
          <li><a class="footer_a" href="about.html">О&nbsp;нас</a></li>
        </div>
        <!-- Контакты -->
        <div class="footer_div">
          <h3 class="footer_h3_Cont">Контакты</h3>
          <div class="footer_div_fone" style="margin-top: 20px">
            <img src="<?= get_template_directory_uri(  );?>././img/phone_on.png" alt="fone" />
            <a class="footer_a_fone" href="#">+7(978)798-58-72</a>
          </div>
          <div class="footer_div_fone">
            <img src="<?= get_template_directory_uri(  );?>././img/phone_on.png" alt="fone" />
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
              <a
                href="http://vk.com/malstrim"
                target="_blank"
                rel="noopener noreferrer"
              >
                <img
                  src="<?= get_template_directory_uri(  );?>././img/VK0.png"
                  alt="VK"
                  style="padding-top: 9px; padding-left: 5px"
                />
              </a>
            </div>
            <div class="footer_div_socseti_Telegram">
              <a
                href="http://t.me/vie_est_vita"
                target="_blank"
                rel="noopener noreferrer"
              >
                <img
                  src="<?= get_template_directory_uri(  );?>././img/Telegram.png"
                  alt="Telegram"
                  style="padding-top: 9px; padding-left: 5px"
                />
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
    <?php wp_footer(  ); ?>
  </body>
</html>
