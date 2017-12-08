<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<section id="head" class="head sectio">
    <div class="scroll_hidden">
        <div class="container scroll_menu">
            <ul class="menu">
                <li><a href="#head">О сервисе</a></li>
                <li><a href="#obzor">Обзор рынка</a></li>
                <li><a href="#work">Принципы</a></li>
                <li><a href="#proect_creator">Команда</a></li>
                <li><a href="#footer">Контакты</a></li>
            </ul>
            <a href="javascript:;" class="lang">
                <?php if($user_language == 'ru') { ?>
                    <span class="display_lang">
                  <img src="img/blank.gif" class="flag flag-ru " alt="Russian" />
              </span>
                <?php } ?>
                <?php if($user_language == 'en') { ?>
                    <span class="display_lang">
                  <img src="img/blank.gif" class="flag flag-us" alt="Usa" />
              </span>
                <?php } ?>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <ul class="select-lang">
                <?php if($user_language == 'ru') { ?>
                    <li><a href="/en"><img src="img/blank.gif" class="flag flag-us" alt="Usa" /></a></li>
                    </span>
                <?php } ?>
                <?php if($user_language == 'en') { ?>
                    <li><a href="/ru"><img src="img/blank.gif" class="flag flag-ru " alt="Russian" /></a></li>
                    </span>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav>
                        <div id="menu-button" role="button" title="sweet hamburger">
                            <div class="hamburger">
                                <div class="inner"></div>
                            </div>
                        </div>
                        <div class="mob-nav">
                            <ul class="mob-menu">
                                <li><a href="#head">О сервисе</a></li>
                                <li><a href="#obzor">Обзор рынка</a></li>
                                <li><a href="#work">Принципы</a></li>
                                <li><a href="#proect_creator">Команда</a></li>
                                <li><a href="#footer">Контакты</a></li>
                            </ul>
                            <a href="javascript:;" class="lang_mob">
                                <?php if($user_language == 'ru') { ?>
                                    <span class="display_lang_mob">
                              <img src="img/blank.gif" class="flag flag-ru " alt="Russian" />
                          </span>
                                <?php } ?>
                                <?php if($user_language == 'en') { ?>
                                    <span class="display_lang_mob">
                              <img src="img/blank.gif" class="flag flag-us" alt="Usa" />
                          </span>
                                <?php } ?>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="select-lang-mob">
                                <?php if($user_language == 'ru') { ?>
                                    <li><a href="/en"><img src="img/blank.gif" class="flag flag-us" alt="Usa" /></a></li>
                                <?php } ?>
                                <?php if($user_language == 'en') { ?>
                                    <li><a href="/ru"><img src="img/blank.gif" class="flag flag-ru" alt="Russian" /></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row mid-row">
                <div class="col-lg-6 col-md-6 col-sm-9 col-sm-offset-1">
                    <div class="logo">
                        <img src="img/logo.png" alt="">
                    </div>
                    <p><span class="docSmart"> Doctor Smart </span>- инновационная экосистема цифровых услуг в области здравоохранения на базе блокчейн и смарт-контрактов, открывающая полный цикл возможностей в области поддержания и укрепления здоровья и увеличения продолжительности жизни.</p>
                    <p>Платформа, обеспечивающая мгновенную связь с авторитетными врачами, психологами, диетологами, ветеринарами и фитнес тренерами со всего мира.
                    </p>
                    <p>
              <span class="bottom_span">Доставляем здоровье в любое время,<br>
              в любом месте!</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="obzor" class="obzor sectio">
    <div class="container">
        <div class="row bot-row">
            <div class="col-lg-12">
                <h4>Рынок интернет услуг в области здоровья</h4>
            </div>
        </div>
        <div class="row bot-row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>Человек должен жить до 140 лет, это заложено в его днк. Но нарушение сна, неправильное питание, стрессы и отсутствие своевременной медицинской помощи - враги нашего долголетия. </p>
                <p>Почему мы не всегда следим за своим здоровьем? Чаще ввиду отсутствия времени и удобного доступа к основным велнес и медицинским услугам, а также по причине того, что устоявшаяся система ввиду своей бюрократической сложности приводит к завышенной стоимости услуг.</p>

                <span><span class="docSmart">Doctor Smart</span>  изменит устоявшийся ход вещей.</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p><span class="docSmart">Doctor Smart</span> предоставляет услуги широкого спектра, в котором одним из блоков являются телемедицинские услуги. Мировой рынок традиционных амбулаторных услуг к 2022 году составит более $3,3** трлн.</p>
                <p> Согласно исследованию McKinsey 60% амбулаторных очных приемов могут быть оказаны удаленно и впоследствии заменены онлайн-услугами. Если добавить рынок удаленных консультаций психологов, диетологов, ветеринаров и фитнес тренеров, то потенциал мирового рынка интернет услуг в области здоровья может достигнуть более $2 трлн к 2022 году.</p>
                <span class="grandview">Источник: grandviewresearch.com</span>
            </div>
        </div>
        <!-- <div class="row bot-row">
          <div class="col-lg-6 col-md-6 left-col">
            <p class="usd-val">Объем рынка*, млрд USD</p>
            <img class="img-responsive" src="img/graf.png" alt="">
            <span>*Источник Becker's Healthcare</span>

          </div>
          <div class="col-lg-6 col-md-6">
            <h4>Рынок телемедицинских услуг</h4>
            <p>Человек должен жить до 140 лет, это заложено в его днк. Но нарушение сна, неправильное питание, стрессы и отсутствие своевременной медицинской помощи - враги нашего долголетия.</p>
            <p>Почему мы не всегда следим за своим здоровьем? Чаще ввиду отсутствия времени и удобного доступа к основным медицинским услугам, а также по причине завышенной стоимости услуг здравоохранения.
            Doctor Smart может изменить устоявшийся ход вещей.</p>
            <span class="ist-world-bank">*Источник The World Bank</span>
          </div>
        </div> -->
    </div>
</section>
<section id="work" class="work sectio">
    <div class="overlay1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Принципы работы</h3>
                    <p>На первом этапе <span class="docSmart">Doctor Smart</span> планирует сфокусироваться на задачах объединения специалистов для предоставления комплексных услуг по здоровью, создав необходимый базис  для развития комплексной экосистемы.
                    </p>
                    <p><span class="docSmart">Doctor Smart</span> призван предложить высокотехнологичное решение, способное вывести качество предоставление услуг в области здоровья населения на новый уровень и сделать здоровье по-настоящему доступным для каждого. Для этого мы выделили 4 принципа, которых будет придерживаться наш продукт:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box">
                        <img src="img/w1.png" alt="">
                        <p>Скорость</p>
                        <div class="desc">
                            <h5>Скорость:</h5>
                            <span>Соединение с нужным<br>
                   специалистом меньше,<br>
                   чем за 1 минуту,<br>
                   круглосуточно,<br>
                   без выходных</span>
                        </div>
                        <div class="mob-view">
                            <h5>Скорость:</h5>
                            <span>Соединение с нужным
                   специалистом меньше,
                   чем за 1 минуту,
                   круглосуточно,
                   без выходных</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box">
                        <img src="img/w2.png" alt="">
                        <p>Качество</p>
                        <div class="desc">
                            <h5>Качество:</h5>
                            <span>Обязательная система<br>
                    сетритификации специалистов<br>
                    и инновационная<br>
                    система проверки<br>
                    качества<br>
                    рекомендаций</span>
                        </div>
                        <div class="mob-view">
                            <h5>Качество:</h5>
                            <span>Обязательная система
                    сетритификации специалистов
                    и инновационная
                    система проверки
                    качества
                    рекомендаций</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box">
                        <img src="img/w3.png" alt="">
                        <p>Прозрачность</p>
                        <div class="desc flipInY">
                            <h5>Прозрачность:</h5>
                            <span>Открытая история<br>
                   сертификации <br>
                   специалистов и<br>
                   прозрачные финансовые<br>
                   расчеты через<br>
                   smart-контракты</span>
                        </div>
                        <div class="mob-view">
                            <h5>Прозрачность:</h5>
                            <span>Открытая история
                   сертификации
                   специалистов и
                   прозрачные финансовые
                   расчеты через
                   smart-контракты</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box">
                        <img src="img/w4.png" alt="">
                        <p>Доступность</p>
                        <div class="desc flipInY">
                            <h5>Доступность:</h5>
                            <span>Стоимость<br>
                  консультаций <br>
                  в 2 раза ниже,<br>
                  чем при обычном<br>
                  визите</span>
                        </div>
                        <div class="mob-view">
                            <h5>Доступность:</h5>
                            <span>Стоимость
                  консультаций
                  в 2 раза ниже,
                  чем при обычном
                  визите</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="garant" class="garant sectio">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1 col-xs-offset-0">
                <h3>Подтверждение опыта</h3>
                <p><span class="docSmart">Doctor Smart</span> используется технологии искусственного интеллекта, наработки которого используются в клинике ОАО «Медицина». Это многопрофильный медицинский центр международного образца с высочайшим уровнем доверия и репутации в медицинском мире. В клинике «Медицина» предоставляется полный спектр медицинской помощи по 69 медицинским направлениям. Это первая клиника в России, аккредитованная множеством самых престижных международных комиссий по качеству медицинской помощи.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1">
                <p class="serts_head">Награды и сертификаты</p>
            </div>
        </div>
        <div class="row sert">
            <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-6"><img class="sert1" src="img/sert1.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img class="sert2" src="img/sert2.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img class="sert3" src="img/sert3.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img class="sert4" src="img/sert4.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img class="sert5" src="img/sert5.png" alt=""></div>
        </div>
    </div>
</section>
<section id="service" class="service sectio">
    <div class="overlay1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Сервисы контроля качества</h3>
                    <p>Мы не просто предоставляем любому оперативную онлайн-консультацию в области здоровья,<br> велнеса, фитнеса и диетологии. Мы открываем доступ к международному опыту <br>авторитетнейших специалистов и публично подтверждаем их качество.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box first_box">
                        <img src="img/s1.png" alt="">
                        <p>Сертификация <br>
                            специалистов</p>
                        <div class="desc">
                            <span>Обязательная сертификация специалистов для работе в системе, разработанная при участии авторитетных врачей со всего мира. Благодаря использованию технологии блокчейн данные о сертификации открыты для всех пользователей и не могут быть подделаны.</span>
                        </div>
                        <div class="mob-view">
                            <h5>Сертификация специалистов :</h5>
                            <span>Обязательная сертификация специалистов для работе в системе, разработанная при участии авторитетных врачей со всего мира. Благодаря использованию технологии блокчейн данные о сертификации открыты для всех пользователей и не могут быть подделаны.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box">
                        <img src="img/s2.png" alt="">
                        <p>Система проверки<br>
                            качества<br>
                            рекомендаций</p>
                        <div class="desc">
                            <span class="check_system">Встроенные алгоритмы первичной проверки рекомендаций на соответствие международным стандартам здравоохранения и дополнительная выборочная проверка специалистами высшей категории.</span>
                        </div>
                        <div class="mob-view">
                            <h5>Система проверки качества рекомендаций</h5>
                            <span class="check_system">Встроенные алгоритмы первичной проверки рекомендаций на соответствие международным стандартам здравоохранения и дополнительная выборочная проверка специалистами высшей категории.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box">
                        <img src="img/s3.png" alt="">
                        <p>Система контроля<br>
                            рекомендованных<br>
                            лекарственных<br>
                            препаратов</p>
                        <div class="desc">
                  <span class="control_system">Автоматизированная технология проверки рекомендованных лекарственных препаратов на предмет соответствия заявленной проблеме, медкарте пациента и взаимодействия с другими препаратами, реализованная с использованием технологий искусственного интеллекта.
                  </span>
                        </div>
                        <div class="mob-view">
                            <h5>Система контроля рекомендованных  лекарственных  препаратов </h5>
                            <span class="control_system">Запатентованная автоматизированная технология проверки рекомендованных ЛС на предмет соответствия заявленной проблеме, медкарте клиента и взаимодействия с другими препаратами.
                  </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box">
                        <img src="img/s4.png" alt="">
                        <p>Электронная история<br>
                            болезни</p>
                        <div class="desc">
                  <span>Создание единой электронной медкарты клиента с использованием технологий криптошифрования, содержащей историю обращений, рекомендаций, данные с подключенных спортивных трекеров и загруженных в систему результатов анализов.
                  </span>
                        </div>
                        <div class="mob-view">
                            <h5>Электронная история
                                болезни</h5>
                            <span>Создание единой электронной медкарты клиента с использованием технологий криптошифрования, содержащей историю обращений, рекомендаций, данные с подключенных спортивных трекеров и загруженных в систему результатов анализов.
                  </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="proect_creator" class="proect_creator sectio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Основатель проекта</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 hover_section">
                <div class="box">
                    <div class="round1"></div>
                    <p>Павел Г. Ройтберг<br>
                        <span>Основатель</span></p>
                    <div class="desc">
                        <h5>Павел Г. Ройтберг<br>
                            <span>Основатель Doctor Smart</span></h5>
                        <span>Основатель ЗАО Цифровые Миры, член совета директоров в ОАО "Медицина", докладчик множества международных конференций. Участник Leadership in Healthcare в Harvard University TChang School. Более 20 лет опыта в разработке программного обеспечения для здравоохранения. Создал облачную историю болезни Smart Medicina (2014) и полнофункциональную экспертную медицинскую систему поддержки принятия решений (2015), систему контроля назначенных лекарственных препаратов (2015) и портала для пациентов Chirp.Ru (2017). Кандидат Экономических Наук с диссертацией на тему перевода наличного денежного оборота в цифровую форму (2003).</span>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-6 hover_section">
              <div class="left-box">
               <div class="box">
              <div class="round2"></div>
              <p>Владимир Н. Никольский
                <br>
                <span>Основатель</span></p>
                <div class="desc">
                    <h5>Владимир Н. Никольский<br>
                      <span>Основатель Doctor Smart.</span></h5>
                      <span class="right_doc">Операционный директор Mail.Ru Group с 2013 года. В Mail.ru работает с 2009 года, был вице президентом игрового направления. До прихода в Mail.ru был генеральным директором Astrum Online Entertainment, игровой холдинг объединивший наиболее крупные игровые компании России (2007-2009) и генеральным директором и сооснователем компании IT Territory, занимавшейся онлайн играми (2004-2007). Закончил Ивановский Энергетический университет.
                      </span>
                  </div>
            </div> -->
        </div>
    </div>
    </div>
    </div>
</section>
<section id="team" class="team sectio" data-hash="teams">
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
                    <p>Олег Григорян<br>
                        Генеральный директор
                    </p>
                    <div class="desc">
                        <h5>Олег Григорян</h5>
                        <span>
                Закончил Московскую Государственную Социальную Академию. С 2009 года занимал руководящие позиции в крупнейших компаниях автоиндустрии. Имеет богатый опыт управления большими структурами со сложными партнерскими отношениями. Разработал и организовал клиентскую службу в представительстве Jaguar Land Rover Russia.
                </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box2">
                    <div class="round round2"></div>
                    <p>Вячеслав Потёмкин<br>Руководитель по продукту</p>
                    <div class="desc">
                        <h5>Вячеслав Потёмкин</h5>
                        <span>Руководитель проектов мобильной и web разработки с опытом более девяти лет. Перешел в команду Doctor Smart из HeadHunter, где руководил проектами мобильного департамента. В прошлые годы управлял разработкой и запуском нескольких десятков игровых проектов. Работал над продуктом с аудиторией более 75 миллионов пользователей, изданным в 42 странах.
              Сертифицированный agile professional (KMP, ICP, ICP-ATF), опытный scrum-master и фасилитатор
              </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box3">
                    <div class="round round3"></div>
                    <p>Кирилл Кекер<br>Системный архитектор</p>
                    <div class="desc">
                        <h5>Кирилл Кекер</h5>
                        <span>Сооснователь стартапа "Tele.Live", сертифицированный преподаватель курсов по оборудованию MikroTik. 8 лет опыта в сфере Телекоммуникаций фиксированной и мобильной связи.
              Докладчик конференции MUM 2015. Архитектор проекта "Открытие.Life" (2017). Инвестиционной платформы ООО "Инвестиционные Семинары" (2015).
              </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="left-box">
                    <div class="box box4">
                        <div class="round round4"></div>
                        <p>Шархун Ольга<br>Врач-консультант</p>
                        <div class="desc">
                            <h5>Шархун Ольга</h5>
                            <span>Терапевт, гастроэнтеролог, врач общей практики. Член Российской гастроэнтерологической ассоциации, Член Научного общества гастроэнтерологов России, Член европейской ассоциации по изучению печени (EASL). Неоднократно принимала участие в российских и международных конференциях. Общий медицинский стаж работы - 18 лет. В 1998 году защитила кандидатскую диссертацию. Соавтор монографии «Метаболический синдром». Автор ряда методических разработок. Проходила стажировку в Университете Айовы, а также в г. Мюнстер (Германия).
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="edviser" class="edviser sectio" data-hash="edvisers">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Эдвайзеры проекта</h3>
                <h4>Мы собрали профессионалов со всего мира для участия в нашем проекте</h4>
            </div>
        </div>
        <div class="row top-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box1">
                    <div class="round round1"></div>
                    <p>Ройтберг Григорий Ефимович</p>
                    <div class="desc">
                        <h5>Ройтберг Григорий Ефимович</h5>
                        <span>
               Президент ОАО «Медицина», доктор медицинских наук<br>
                Академик Российской Академии Наук, заведующий кафедрой терапии и семейной медицины РНИМУ, заслуженный врач РФ, лауреат премии Правительства РФ в области образования.<br>
                В 1990 г. создал клинику АО «Медицина».<br>
                В 2005 г. избран членом-корреспондентом РАМН.
                В 2014 г. избран действительным членом РАН.<br>
                21 декабря 2010 г. по распоряжению Председателя Правительства Российской Федерации В.В. Путина профессору Г.Е.Ройтбергу присуждена премия Правительства Российской Федерации в области образования и присвоено звание «Лауреат премии Правительства Российской Федерации в области образования».

              </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box2">
                    <div class="round round2"></div>
                    <p>Румянцев Александр Григорьевич</p>
                    <div class="desc">
                        <h5>Румянцев Александр Григорьевич</h5>
                        <span>
                Профессор, доктор медицинских наук
                Советский и российский врач-педиатр, академик РАН и РАМН, генеральный директор ФГБУ «Национальный медицинский исследовательский центр детской гематологии, онкологии и иммунологии им. Дмитрия Рогачева» Минздрава России. Почётный профессор кафедры онкологии, гематологии и лучевой терапии ФГБОУ ВО РНИМУ им. Н.И.Пирогова. Главный внештатный детский специалист-гематолог Минздрава России. Президент Национального общества детских гематологов и онкологов, член Президиума РАН (с 2017).
              </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-row">
            <!-- <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="box box3">
                <div class="round round3"></div>
                <p>Пушкарь Дмитрий Юрьевич</p>
                <div class="desc">
                  <h5>Пушкарь Дмитрий Юрьевич</h5>
                  <span>
                      Профессор, доктор медицинских наук
                      Главный внештатный специалист уролог, член-корреспондент РАН, заслуженный врач РФ, заслуженный деятель науки РФ. Заведующий кафедрой урологии Московского государственного медико-стоматологического университета. Первый отечественный специалист, который регулярно приглашается для выступлений и показательных операций в ведущие клиники Европы и США. Является автором более 1000 научных работ, 40 монографий.
                  </span>
                </div>
              </div>
            </div> -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box5">
                    <div class="round round5"></div>
                    <p>Чернев Сергей Петрович</p>
                    <div class="desc">
                        <h5>Чернев Сергей Петрович</h5>
                        <span>Заместитель генерального директора по информационным технологиям ООО «Киберплат»
              Доктор технических наук, Магистр физико-математических наук, преподаватель. Более 17 лет занимается разработкой и внедрением продуктов на базе распределенных систем. С 2005 до 2009 года занимал должность Технического директора GIGAFONE, где отвечал за разработку.
              </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="left-box">
                    <div class="box box4">
                        <div class="round round4"></div>
                        <p>Дмитрий Хан</p>
                        <div class="desc">
                            <h5>Дмитрий Хан</h5>
                            <span>Сооснователь первой Российской частной космической компании Даурия Аэроспейс
                  Более 20 лет предпринимательской деятельности в области высоких технологий, био и космических технологий. Он является сооснователем первой Российской частной космической компании Даурия Аэроспейс. Соучредитель инвестиционного фонда Rostock Biotech One, фокусирующемся на биотехнологических решениях в интересах продления жизни человека, медицинских проблемах старения, а также проблемах лечения онкозаболеваний. Дмитрий имеет богатый опыт в области инвестиционной банковской деятельности, слияний и поглощений на рынке телекома и ИТ. Дмитрий обучался по международной программе Управление устойчивым развитием, Sustainability Challenge Foundation, имеет опыт международного сотрудничества и совместных предприятий. Он занимается ультра-марафоном и является мастером восточных единоборств.
                  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-row_2">

        </div>
</section>
<section id="welcome" class="welcome sectio" data-hash="welcomes">
    <div class="container">
        <div class="row">
            <div class="col-lg-5  col-md-5 col-sm-6 flex-row">
                <div class="left-box">
                    <h4>Приглашаем в свою команду!</h4>
                    <p>Мы приглашаем присоединяться к нашему проекту   тех, кому не безразлична идея использования самых передовых технологий для оказания медицинской помощи людям, которые остро в ней нуждаются. </p>
                    <p class="mid-p"> - Маркетологи <br>
                        - Переводчики<br>
                        - Специалисты по технологии блокчейн<br>
                        - Региональные представители <br>
                        - Волонтеры<br>
                    </p>
                    <p>Давайте объединим наши усилия для<br>формирования нового рынка и мировых стандартов<br> предоставления цифровых услуг для поддержания<br> и укрепления здоровья, увеличения продолжительности жизни!</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-6">
                <div class="right-box">
                    <img class="img-responsive" src="img/bottom-doctor.jpg" alt="">
                    <a href="#form1" class="pop btn send">Пишите нам</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="footer sectio" data-hash="footers">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Контакты</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 emal">
                <ul class="contacts">
                    <li><a href="mailto:info@doctorsmart.team">
                            <img src="img/mail.svg" alt=""><br>
                            <span>info@doctorsmart.team</span>
                        </a></li>
                    <!-- <li><a href="javascript:;">
                      <img src="img/tel.svg" alt=""><br>
                      <span>7(XXX) XXX-XX-XX</span>
                    </a></li> -->
                    <li><a href="javascript:;">
                            <img src="img/address_1.svg" alt=""><br>
                            <span>2-й Тверской-Ямской переулок, д.10 </span>
                        </a></li>
                </ul>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">
                <ul class="social_icons">
                    <li><a href="https://t.me/doctor_smart" target="_blank"><img src="img/telegram.svg" alt=""></a></li>
                    <li><a href="https://www.facebook.com/Doctor-Smart-294801964343401/" target="_blank"><img src="img/facebook.svg" alt=""></a></li>
                    <li><a href="https://www.linkedin.com/company/13590576/" target="_blank"><img src="img/linkdin.svg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div id="myModal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Ваше сообщение отправлено</p>
    </div>
</div>
<!-- <div id="snackbar"><span class="docSmart">Doctor Smart</span> uses cookies and similar  technologies on its websites. By continuing your browsing after being presented with the cookie information you consent to such use. <span class="close_snack">&times;</span><br>
<a href="" class="learn_more">Learn more</a>
</div> -->

<div class="hidden">
    <button id="myBtn">open</button>
    <form id="form1" class="feedback">
        <h3>Пишите нам</h3>
        <input type="hidden" class="choose-language" value='ru'><br>

        <input type="text" name="Name" placeholder="Ваше имя" required class="name"><br>
        <input type="text" name="E-mail" placeholder="Ваши контакты" required class="contacts"><br>
        <input type="text" name="Subject" placeholder="Тема" required class="theme"><br>
        <textarea name="massage" class="text" placeholder="Сообщение" required></textarea><br>
        <div class="g-recaptcha col-lg-offset-2" data-sitekey="6LcUuzsUAAAAABjamv96ZxkOf6nIl3FKYiOYA9XX"></div>
        <button class="send_massage_btn">Отправить</button>
    </form>
</div>