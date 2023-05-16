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
    <link rel="stylesheet" href="404.css">
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
          <a href="index.html"><img src="img/logo.png" alt="logo" /></a>
          <nav class="nav">
            <ul>
              <li><a href="index.html">Главная</a></li>
              <li><a href="schedule.html">Расписание</a></li>
              <li><a href="reminder.html">Памятка туристу</a></li>
              <li><a href="about.html">О нас</a></li>
            </ul>
          </nav>
          <div class="menu">
            <img
              class="menu_img"
              src="img/+.svg"
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
              <img src="img/tube  white.svg" alt="telephone" />
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="menu_tel">
              <img src="img/tube  white.svg" alt="telephone" />
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="menu_icon">
              <a  href="http://vk.com/malstrim" target="_blank"><img class="menu_icon_vk" src="img/VK1.svg" alt="vk"/></a>
              <a href="http://t.me/vie_est_vita" target="_blank"><img  class="menu_icon_tl" src="img/TЛ.svg" alt="telegram"/></a>
            </div>
          </div>
          <div class="header_icon">
            <a href=""
              ><img
                class="header_icon_telephone"
                src="img/tube  white.svg"
                alt="telephone"
            /></a>
            <a href="http://vk.com/malstrim" target="_blank"
              ><img class="header_icon_vk" src="img/VK white.svg" alt="vk"
            /></a>
            <a href="http://t.me/vie_est_vita" target="_blank"
              ><img
                class="header_icon_telegram"
                src="img/Telegramwhite.svg"
                alt="telegram"
            /></a>
          </div>
          <div class="header_link">
            <a href="#" onclick="show()">В поход !</a>
          </div>
        </div>
        <div class="modal_form_active modal_close">
          <div class="modal_window_window">
          <div class="modal_window">
            <div class="modal_img_1" >
              <img class="modal_window_img" src="img/модальное окно.png" alt="">
              <div class="modal_form_p">
                <p>Отдыхай правильно</p>
              </div>
            </div>
            <!-- <div class="modal_img_2">
              <img src="img/+.svg" onclick="show()"alt="">
            </div> -->
          <div class="modal_form">
            <form action="">
              <div class="modal_img_2">
                <img src="img/+.svg" onclick="show()"alt="">
              </div>
              <p class="modal_form_text">Отправьте заявку и мы перезвоним Вам в ближайшее время и поможем подобрать поход</p>
              <div class="modal_application">
                <img src="img/туристМод.svg" alt="турист">
                <div class="modal_application_label">
                <p><label for="">Ваше имя:</label></p>
                <input class="modal_application_input" type="text" name="name" placeholder="Введите ваше имя">
              </div>
              </div>
              <div class="modal_application">
                <img src="img/телефон.svg" alt="телефон">
                <div class="modal_application_label">
                <p><label for="">Телефон:</label></p>
                <input class="modal_application_input" type="text" name="name" placeholder ="+ 7 (978) 798-58-72">
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

    <!-- 404 -->
    <section class="mistake">
      <div class="container">
          <div class="mistake_block">
          <div class="mistake_block_img">
              <img src="img/404_палатка.png" alt="">
          </div>
          <div class="mistake_block_content">
              <div class="mistake_block_content_title">404</div>
              <div class="mistake_block_content_subtitle">
                  <p>Такой страницы нет.</p>
                  <p>Вы можете вернуться на <a href="index.html"> главную</a> страницу.</p>
              </div>


          <div class="mistake_block_icon">
              <div class="mistake_block_icon_map">
                  <img src="img/404_карта.svg" alt="">
                  <p>Маршруты по всему Крыму</p>
              </div>
              <div class="mistake_block_icon_map">
                  <img src="img/404_турист.svg" alt="">
                  <p>Пешие туры на Кавказ</p>
              </div>
              <div class="mistake_block_icon_map">
                  <img src="img/404_гора.svg" alt="">
                  <p>Восхождение на Эльбрус</p>
              </div>
          </div>
      </div>
      </div>
  </div>
</section>
    <!-- --------------------  -->

    <!-- footer  -->
    <footer>
      <div class="footer_svg"></div>
      <div class="footer">

        <!-- Логотип -->
        <div class="footer_div">
          <div class="img_logo">
            <a href="index.html"><img src="./img/logo.png" alt="logo" /></a>
          </div>

          <p class="footer_p" style="margin-top: 20px">
            Крымская, туристическая организация, для любителей активного отдыха на
            природе
          </p>
          <div class="img_decor" style="margin-top: 20px">
            <img
              src="./img/decor.png"
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
          <a class="footer_h4" href="index.html" style="margin-top: 20px">Главная</a>
          <li><a class="footer_a" href="schedule.html">Расписание</a></li>
          <li><a class="footer_a" href="reminder.html">Памятка туристу</a></li>
          <li><a class="footer_a" href="about.html">О&nbsp;нас</a></li>
        </div>
        <!-- Контакты -->
        <div class="footer_div">
          <h3 class="footer_h3_Cont">Контакты</h3>
          <div class="footer_div_fone" style="margin-top: 20px">
            <img src="./img/phone_on.png" alt="fone" />
            <a class="footer_a_fone" href="#">+7(978)798-58-72</a>
          </div>
          <div class="footer_div_fone">
            <img src="./img/phone_on.png" alt="fone" />
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
              <a
                href="http://vk.com/malstrim"
                target="_blank"
                rel="noopener noreferrer"
              >
                <img
                  src="./img/VK0.png"
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
                  src="./img/Telegram.png"
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
  </body>
</html>
