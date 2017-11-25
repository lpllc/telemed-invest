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
                <a href="javascript:;" class="visible-xs mob_burger">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
                <div class="mob-nav">
                  <ul class="mob-menu">
                  <li><a class="close-menu" href="javascript:;"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                  <li><a href="#head">О сервисе</a></li>
                  <li><a href="#obzor">Обзор рынка</a></li>
                  <li><a href="#work">Принципы</a></li>
                  <li><a href="#proect_creator">Команда</a></li>
                  <li><a href="#footer">Контакты</a></li>
                </ul>
                    <a href="javascript:;" class="lang_mob">
                        <?php if($user_language == 'ru') { ?>
                            <span class="display_lang_mob">Ru</span>
                        <?php } ?>
                        <?php if($user_language == 'en') { ?>
                            <span class="display_lang_mob">Eng</span>
                        <?php } ?>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>


                  
                <ul class="select-lang-mob">
                  <li><a href="/ru">Ru</a></li>
                  <li><a href="/en">Eng</a></li>
                </ul>
                </div>
                <ul class="menu">
                  <li><a href="#head">О сервисе</a></li>
                  <li><a href="#obzor">Обзор рынка</a></li>
                  <li><a href="#work">Принципы</a></li>
                  <li><a href="#proect_creator">Команда</a></li>
                  <li><a href="#footer">Контакты</a></li>
                </ul>

                  <a href="javascript:;" class="lang">
                        <?php if($user_language == 'ru') { ?>
                            <span class="display_lang">Ru</span>
                        <?php } ?>
                        <?php if($user_language == 'en') { ?>
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
            <div class="col-lg-6 col-md-6 col-sm-9 col-sm-offset-1">
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
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="box">
                <img src="img/w2.png" alt="">
                <p>Качество</p>
                <div class="desc">
                  <h5>Качество:</h5>
                  <span>Обязательная система<br>
                    сертификации врачей<br> 
                    и инновационная<br>
                    система проверки<br>
                    качества<br>
                    рекомендаций</span>
                </div>
                <div class="mob-view">
                  <h5>Качество:</h5>
                  <span>Обязательная система
                    сертификации врачей
                    и инновационная
                    система проверки
                    качества
                    рекомендаций</span>
                </div>
            </div>
          </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="box">
                <img src="img/w3.png" alt="">
                <p>Празрачность</p>
                <div class="desc">
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
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="box">
                <img src="img/w4.png" alt="">
                <p>Доступность</p>
                <div class="desc">
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
    <section id="garant" class="garant">
      <div class="container">
        <div class="row">
          <div class="col-lg-11 col-lg-offset-1 col-xs-offset-0">
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
          <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-6"><img src="img/sert1.png" alt=""></div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img src="img/sert2.png" alt=""></div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img src="img/sert3.png" alt=""></div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img src="img/sert4.png" alt=""></div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img src="img/sert5.png" alt=""></div>
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
                <div class="desc">
                  <span>Обязательная сертификация специалистов для работе в системе, разработанная при участии авторитетных врачей со всего мира. Благодаря использованию технологии блокчейн данные о сертификации становятся открыты для всех пользователей и не могут быть подделаны.</span>
                </div>
                <div class="mob-view">
                  <h5>Сертификация докторов :</h5>
                  <span>Обязательная сертификация специалистов для работе в системе, разработанная при участии авторитетных врачей со всего мира. Благодаря использованию технологии блокчейн данные о сертификации становятся открыты для всех пользователей и не могут быть подделаны.</span>
                </div>
            </div>
          </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="box">
                <img src="img/s2.png" alt="">
                <p>Система проверки<br> 
                    качества<br>
                    рекомендаций</p>
                <div class="desc">
                  <span class="check_system">Встроенные алгоритмы первичной проверки рекомендаций на соответствие международным стандартам здравоохранения и дополнительная выборочная проверка рекомендаций врачами высшей категории.</span>
                </div>
                <div class="mob-view">
                  <h5>Система проверки качества рекомендаций</h5>
                  <span class="check_system">Встроенные алгоритмы первичной проверки рекомендаций на соответствие международным стандартам здравоохранения и дополнительная выборочная проверка рекомендаций врачами высшей категории.</span>
                </div>
            </div>
          </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="box">
                <img src="img/s3.png" alt="">
                <p>Система контроля<br> 
                    рекомендованных<br> 
                    лекарственных<br> 
                    препаратов</p>
                <div class="desc">
                  <span class="control_system">Запатентованная автоматизированная технология проверки рекомендованных ЛС 
                  на предмет соответствия заявленной проблеме,  медкарте пациента и взаимодействия 
                  с другими препаратами.
                  </span>
                </div>
                <div class="mob-view">
                  <h5>Система контроля рекомендованных  лекарственных  препаратов </h5>
                  <span class="control_system">Запатентованная автоматизированная технология проверки рекомендованных ЛС 
                  на предмет соответствия заявленной проблеме,  медкарте пациента и взаимодействия 
                  с другими препаратами.
                  </span>
                </div>
            </div>
          </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="box">
                <img src="img/s4.png" alt="">
                <p>Электронная история<br> 
                    болезни</p>
                <div class="desc">
                  <span>Создание единой электронной медкарты пациента с использованием технологий криптошифрования, содержащей историю обращений, рекомендаций, данные 
                  с подключенных спортивных трекеров и загруженных в систему результатов анализов. 
                  </span>
                </div>
                <div class="mob-view">
                  <h5>Электронная история
                    болезни</h5>
                  <span>Создание единой электронной медкарты пациента с использованием технологий криптошифрования, содержащей историю обращений, рекомендаций, данные 
                  с подключенных спортивных трекеров и загруженных в систему результатов анализов. 
                  </span>
                </div>

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
              <div class="desc">
                  <h5>Павел Г. Ройтберг<br>
                  <span>Основатель Doctor Smart.</span></h5>
                  <span>Основатель ЗАО Цифровые Миры, член совета директоров в ОАО "Медицина", докладчик множества международных конференций. Участник Leadership in Healthcare в Harvard University TChang School. Более 20 лет опыта в разработке программного обеспечения для здравоохранения. Создал облачную историю болезни Smart Medicina (2014) и полнофункциональную экспертную медицинскую систему поддержки принятия решений (2015), систему контроля назначенных лекарственных препаратов (2015) и портала для пациентов Chirp.Ru (2017). Кандидат Экономических Наук с диссертацией на тему перевода наличного денежного оборота в цифровую форму (2003).</span>
                </div>
          </div>
        </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="left-box">
             <div class="box">
            <div class="round2"></div>
            <p>Владимир Н. Никольский
              <br>
              <span>Основатель Doctor Smart</span></p>
              <div class="desc">
                  <h5>Владимир Н. Никольский<br>
                    <span>Основатель Doctor Smart.</span></h5>
                    <span class="right_doc">Операционный Директор Mail.Ru(Russia).Присоединился к Mail.Ru Group как вице президент по Онлайн Играм в 2009 году и стал Операционным Директором Mail.Ru (Russia) в 2013г. До этого был генеральным директором холдинга онлайн игр - Astrum Online Entertainment (с 2007г по 2009г) который впоследствии стал частью Mail.Ru Group, и со-основателем и генеральным директором компании IT Territory занимавшейся онлайн играми (с 2004 г. до 2007 г). 
                    </span>
                </div>
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
            <div class="desc">
              <h5>Олег Григорян</h5>
              <span>
                Закончил Московскую Государственную Социальную Академию. С 2009 года занимал руководящие позиции в крупнейших компаниях автоиндустрии. Имеет богатый опыт управления большими структурами со сложными партнерскими отношениями. Разработал и организовал клиентскую службу в представительстве Jaguar Land Rover Russia. Генеральный директор проекта Doctor Smart.
                </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="box box2">
            <div class="round round2"></div>
            <p>Вячеслав Потёмкин</p>
              <div class="desc">
              <h5>Вячеслав Потёмкин</h5>
              <span>Руководитель проектов мобильного департамента в HeadHunter, в прошлом РП в игровой индустрии с опытом руководства разработкой более 8 лет. Работал над проектом с аудиторией более 75 миллионов пользователей.
              Сертифицированный agile professional (KMP-1, ICP, ICP-ATF).</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row bottom-row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="box box3">
            <div class="round round3"></div>
            <p>Кирилл Кекер</p>
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
            <p>Шархун Ольга</p>
            <div class="desc">
              <h5>Шархун Ольга</h5>
              <span>
                Специализация: Терапевт, гастроэнтеролог, врач общей практики. Член Российской гастроэнтерологической ассоциации, Член Научного общества гастроэнтерологов России, Член европейской ассоциации по изучению печени (EASL). Неоднократно принимала участие в российских и международных конференциях.
                Общий медицинский стаж работы - 18 лет. В 1998 г. защитила кандидатскую диссертацию.Соавтор монографии «Метаболический синдром». Автор ряда методических разработок. Проходила стажировку в Университете Айовы, а также в г. Мюнстер (Германия). 
              </span>
            </div>
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
            <p>Ройтберг Григорий Ефимович</p>
            <div class="desc">
              <h5>Ройтберг Григорий Ефимович</h5>
              <span>
                CEO & Founder of JSC MEDICINE
                Президент ОАО «Медицина». Доктор медицинских наук, профессор, академик Российской Академии Наук, заведующий кафедрой терапии и семейной медицины РНИМУ, заслуженный врач РФ, лауреат премии Правительства РФ в области образования.
                В 1990 г. создал клинику АО «Медицина».
                В 2005 г. Григорий Ефимович избран членом-корреспондентом РАМН.
                В 2014 г. Григорий Ефимович избран действительным членом РАН.
                21 декабря 2010 г. по распоряжению Председателя Правительства Российской Федерации В.В. Путина профессору Г.Е. Ройтбергу присуждена премия Правительства Российской Федерации 2010 года в области образования и присвоено звание «Лауреат премии Правительства Российской Федерации в области образования».
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
                Советский и российский врач-пердиатр, академик РАН и РАМН, доктор медицинских наук, профессор, генеральный директор ФГБУ «Национальный медицинский исследовательский центр детской гематологии, онкологии и иммунологии им. Дмитрия Рогачева» Минздрава России. Почётный профессор кафедры онкологии, гематологии и лучевой терапии ФГБОУ ВО РНИМУ им. Н.И.Пирогова. Главный внештатный детский специалист-гематолог Минздрава России. Президент Национального общества детских гематологов и онкологов, член Президиума РАН (с 2017).
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row bottom-row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="box box3">
            <div class="round round3"></div>
            <p>Пушкарь Дмитрий Юрьевич</p>
            <div class="desc">
              <h5>Пушкарь Дмитрий Юрьевич</h5>
              <span>
                  Главный внештатный специалист уролог, доктор медицинских наук, профессор, член-корреспондент РАН, заслуженный врач РФ, заслуженный деятель науки РФ. Заведующий кафедрой урологии Московского государственного медико-стоматологического университета. Первый отечественный специалист, который регулярно приглашается для выступлений и показательных операций в ведущие клиники Европы и США. Является автором более 1000 научных работ, 40 монографий.
              </span>
            </div>
          </div>
        </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="left-box">
             <div class="box box4">
            <div class="round round4"></div>
            <p><br>
              Сооснователь первой Российской частной<br> 
              космической компании Даурия Аэроспейс.</p>
            <div class="desc">
              <h5>Дмитрий Хан</h5>
              <span>
                Сооснователь первой Российской частной космической компании Даурия Аэроспейс.
                Более 20 лет предпринимательской деятельности в области высоких технологий, био и космических технологий. Он является сооснователем первой Российской частной космической компании Даурия Аэроспейс. Соучредитель инвестиционного фонда Rostock Biotech One, фокусирующемся на биотехнологических решениях в интересах продления жизни человека, медицинских проблемах старения, а также проблемах лечения онкозаболеваний. Дмитрий имеет богатый опыт в области инвестиционной банковской деятельности, слияний и поглощений на рынке телекома и ИТ. Дмитрий обучался по международной программе Управление устойчивым развитием, Sustainability Challenge Foundation, имеет опыт международного сотрудничества и совместных предприятий. Он занимается ультра-марафоном и является мастером восточных единоборств. 
              </span>
            </div>
          </div>
            </div>
          </div>
        </div>
         <div class="row bottom-row_2">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="box box5">
            <div class="round round5"></div>
            <p>Чернев Сергей Петрович</p>
            <div class="desc">
              <h5>Чернев Сергей Петрович</h5>
              <span>
                Доктор технических наук, Магистр физико-математических наук, преподаватель. Более 17 лет занимается разработкой и внедрением продуктов на базе распределенных систем.
                С 2005 до 2009 года занимал должность Технического директора GIGAFONE, где отвечал за разработку инновационной мобильной рекламной платформы.
                Последние 8 лет является заместителем генерального директора по информационным технологиям ООО «Киберплат».
              </span>
            </div>
          </div>
        </div>
        </div>
    </section>
    <section id="welcome" class="welcome">
      <div class="container">
        <div class="row">
          <div class="col-lg-5  col-md-5 col-sm-6 flex-row">
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
          <div class="col-lg-7 col-md-7 col-sm-6">
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
        <input type="hidden" class="choose-language" value='ru'><br>

        <input type="text" name="Name" placeholder="Ваше имя" required class="name"><br>
        <input type="text" name="E-mail" placeholder="Ваши контакты" required class="contacts"><br>
        <input type="text" name="Subject" placeholder="Тема" required class="theme"><br>
        <textarea name="massage" class="text" placeholder="Сообщение" required></textarea><br>
        <button class="send_massage_btn">Отправить</button>
    </form>
</div>