<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<section id="head" class="head">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav>
                        <ul class="menu">
                            <li><a href="#head">About</a></li>
                            <li><a href="#obzor">Обзор рынка</a></li>
                            <li><a href="#work">Принципы</a></li>
                            <li><a href="#proect_creator">Команда</a></li>
                            <li><a href="#footer">Контакты</a></li>
                        </ul>
                        <a href="javascript:;" class="lang">
                            <?php if(Yii::$app->request->get('lng')=='ru' || Yii::$app->request->get('lng') == null) { ?>
                                <span class="display_lang">Ru</span>
                            <?php } ?>
                            <?php if(Yii::$app->request->get('lng')=='en') { ?>
                                <span class="display_lang">Eng</span>
                            <?php } ?>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="select-lang">
                            <li><a href="/ru">Ru</a></li>
                            <li><a href="/en">Eng</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row mid-row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="logo">
                        <img src="img/logo.png" alt="">
                    </div>
                    <p><span>Doctor Smart</span> - инновационная экосистема на базе <br>
                        блокчейн, открывающая полный цикл возможностей<br>
                        в области поддержания и укрепления здоровья.<br>
                        Мгновенная связь с авторитетными врачами,<br>
                        диетологами и фитнес-тренерами со всего мира.
                    </p>
                    <p>
              <span>Доставляем здоровье в любое время,<br>
              в любом месте!</span>
                    </p>
                </div>
            </div>
            <div id="obzor" class="row bot-row">
                <div class="col-lg-6 col-md-6 left-col">
                    <p class="usd-val">Объем рынка*, млрд USD</p>
                    <img class="img-responsive" src="img/graf.png" alt="">
                    <span>*Источник Becker's Healthcare</span>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4>Рынок телемедицинских услуг</h4>
                    <p>
                        Около 400 млн человек по всему миру не имеют
                        доступа к<br> основным медицинским услугам. Более 100
                        млн человек<br> ежегодно испытывают существенные
                        финансовые<br> трудности из-за высокой стоимости услуг>
                        здравоохранения.</p>
                    <p>Ежедневно в мире более 70 млн человек посещают
                        врачей<br> для консультации. При этом от 40% до 70%
                        посещений на<br> самом деле не требуют физического
                        визита и в будущем<br> могут быть заменены удаленными
                        онлайн консультациями.*</p>
                    <span class="ist-world-bank">*Источник The World Bank</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="work" class="work">
    <div class="overlay1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Принципы работы</h3>
                    <p>Doctor Smart призван вывести качество цифровой медицины в мире на новый уровень<br>
                        и сделать ее по-настоящему доступной для каждого, кто нуждается в помощи здесь и сейчас.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="box">
                        <img src="img/w1.png" alt="">
                        <p>Скорость</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="box">
                        <img src="img/w2.png" alt="">
                        <p>Качество</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="box">
                        <img src="img/w3.png" alt="">
                        <p>Празрачность</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="box">
                        <img src="img/w4.png" alt="">
                        <p>Доступность</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="garant" class="garant">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1">
                <h3>Гарантия опыта</h3>
                <p>Doctor Smart создается в тесном сотрудничестве с клиникой ОАО «Медицина». Это многопрофильный
                    медицинский<br> центр международного уровня с безусловной гарантией доверия и высочайшей репутацией
                    в медицинском мире. В<br> клинике «Медицина» предоставляется полный спектр медицинской помощи по 69
                    медицинским направлениям,</p>
                <p>Это первая клиника в России, аккредитованная множеством самых престижных международных комиссий
                    по<br> качеству медицинской помощи.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1">
                <p class="serts_head">Награды и сертификаты</p>
            </div>
        </div>
        <div class="row sert">
            <div class="col-lg-2 col-lg-offset-2 col-md-2"><img src="img/sert1.png" alt=""></div>
            <div class="col-lg-2 col-md-2"><img src="img/sert2.png" alt=""></div>
            <div class="col-lg-2 col-md-2"><img src="img/sert3.png" alt=""></div>
            <div class="col-lg-2 col-md-2"><img src="img/sert4.png" alt=""></div>
            <div class="col-lg-2 col-md-2"><img src="img/sert5.png" alt=""></div>
        </div>
    </div>
</section>
<section id="service" class="service">
    <div class="overlay1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Сервисы контроля качества</h3>
                    <p>Мы не просто гарантируем любому оперативную онлайн-консультацию в области здоровья, мы
                        открываем<br> доступ к международному опыту авторитетных врачей и публично подтверждаем качество
                        рекомендаций<br> наших специалистов. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="box">
                        <img src="img/s1.png" alt="">
                        <p>Сертификация <br>
                            докторов</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="box">
                        <img src="img/s2.png" alt="">
                        <p>Система проверки<br>
                            качества<br>
                            рекомендаций</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="box">
                        <img src="img/s3.png" alt="">
                        <p>Система контроля<br>
                            рекомендованных<br>
                            лекарственных<br>
                            препаратов</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="box">
                        <img src="img/s4.png" alt="">
                        <p>Электронная история<br>
                            болезни</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="proect_creator" class="proect_creator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Основатели проекта</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box">
                    <div class="round1"></div>
                    <p>Павел Г. Ройтберг<br>
                        <span>Основатель Doctor Smart.</span></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="left-box">
                    <div class="box">
                        <div class="round2"></div>
                        <p>Владимир Н. Никольский
                            <br>
                            <span>Основатель Doctor Smart</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Команда проекта</h3>
                <h4>Профессионалы индустрии</h4>
            </div>
        </div>
        <div class="row top-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box1">
                    <div class="round round1"></div>
                    <p>Олег Григорян
                    </p>
                    <span>
              Руководитель проектов мобильного департамента в HeadHunter, в прошлом РП в игровой индустрии с опытом руководства разработкой более 8 лет. Работал над проектом с аудиторией более 75 миллионов пользователей.
              Сертифицированный agile professional (KMP-1, ICP, ICP-ATF).
            </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box2">
                    <div class="round round2"></div>
                    <p>Вячеслав Потёмкин</p>
                    <span>
              Руководитель проектов мобильного департамента в HeadHunter, в прошлом РП в игровой индустрии с опытом руководства разработкой более 8 лет. Работал над проектом с аудиторией более 75 миллионов пользователей.
              Сертифицированный agile professional (KMP-1, ICP, ICP-ATF).
              </span>
                </div>
            </div>
        </div>
        <div class="row bottom-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box3">
                    <div class="round round3"></div>
                    <p>Кирилл Кекер</p>
                    <span>
            Руководитель проектов мобильного департамента в HeadHunter, в прошлом РП в игровой индустрии с опытом руководства разработкой более 8 лет. Работал над проектом с аудиторией более 75 миллионов пользователей.
            Сертифицированный agile professional (KMP-1, ICP, ICP-ATF).
            </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="left-box">
                    <div class="box box4">
                        <div class="round round4"></div>
                        <p>Шархун Ольга</p>
                        <span>
            Специализация: Терапевт, гастроэнтеролог, врач общей практики. Член Российской гастроэнтерологической ассоциации, Член Научного общества гастроэнтерологов России, Член европейской ассоциации по изучению печени (EASL). Неоднократно принимала участие в российских и международных конференциях.
            Общий медицинский стаж работы - 18 лет. В 1998 г. защитила кандидатскую диссертацию.Соавтор монографии «Метаболический синдром». Автор ряда методических разработок. Проходила стажировку в Университете Айовы, а также в г. Мюнстер (Германия).
            </span>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="edviser" class="edviser">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Эдвайзеры проекта</h3>
                <h4>Мы собрали профессионалов со всего мира для участия в нашем проект</h4>
            </div>
        </div>
        <div class="row top-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box1">
                    <div class="round round1"></div>
                    <p>Ройтберг Григорий Ефимович
                        <span></span>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box2">
                    <div class="round round2"></div>
                    <p>Румянцев Александр Григорьевич
                        <span></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row bottom-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box3">
                    <div class="round round3"></div>
                    <p>Пушкарь Дмитрий Юрьевич
                        <span></span>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="left-box">
                    <div class="box box4">
                        <div class="round round4"></div>
                        <p>Дмитрий Хан<br>
                            Сооснователь первой Российской частной<br>
                            космической компании Даурия Аэроспейс.
                            <span></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-row_2">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box5">
                    <div class="round round5"></div>
                    <p>Чернев Сергей Петрович
                        <span></span>
                    </p>
                </div>
            </div>
        </div>
</section>
<section id="welcome" class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="left-box">
                    <h4>Приглашаем в свою команду!</h4>
                    <p>Мы приглашаем присоединяться к нашему<br> проекту тех, кому не безразлична идея<br> использования самых передовых технологий<br> для оказания медицинской помощи людям.</p>
                    <p class="mid-p"> - Маркетологи <br>
                        - Переводчики<br>
                        - Специалисты по технологии блокчейн<br>
                        - Региональные представители <br>
                        - Волонтеры<br>
                    </p>
                    <p>Давайте объединим наши усилия для<br> формирования нового рынка и стандартов<br> телемедицинских услуг в мире!</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="right-box">
                    <img class="img-responsive" src="img/bottom-doctor.jpg" alt="">
                    <a href="#form1" class="pop btn send">Пишите нам</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Контакты</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 emal">
                <span>email</span>
                <p>mail@email.com</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 phone">
                <span>телефон</span>
                <p>7(XXX) XXX-XX-XX</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 address">
                <span>адрес</span>
                <p>улица, дом, офис</p>
            </div>
        </div>
    </div>
</footer>


<div class="hidden">
    <form id="form1" class="feedback">
        <h3>Связь с разработчиками</h3>
        <input type="text" name="Name" placeholder="Ваше имя" required class="name"><br>
        <input type="text" name="E-mail" placeholder="Ваши контакты" required class="contacts"><br>
        <input type="text" name="Subject" placeholder="Тема" required class="theme"><br>
        <textarea name="massage" class="text" placeholder="Сообщение"></textarea><br>
        <button class="send_massage_btn">Отправить</button>
    </form>
</div>

