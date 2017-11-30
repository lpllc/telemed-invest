<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="section-wrapper">
    <section id="head" class="head sectio" data-hash="heads">
        <div class="scroll_hidden">
            <div class="container scroll_menu">
                <ul class="menu">
                    <li><a href="#head">About Service</a></li>
                    <li><a href="#obzor">Market Review</a></li>
                    <li><a href="#work">How it work</a></li>
                    <li><a href="#proect_creator">Team</a></li>
                    <li><a href="#footer">Contacts</a></li>
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
                            <a href="javascript:;" class="visible-xs mob_burger">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                            <div class="mob-nav">
                                <ul class="mob-menu">
                                    <li><a class="close-menu" href="javascript:;"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                                    <li><a href="#head">About Service</a></li>
                                    <li><a href="#obzor">Market Review</a></li>
                                    <li><a href="#work">How it work</a></li>
                                    <li><a href="#proect_creator">Team</a></li>
                                    <li><a href="#footer">Contacts</a></li>
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
                            <!-- <ul class="menu">
                              <li><a href="#head">About Service</a></li>
                              <li><a href="#obzor">Market Review</a></li>
                              <li><a href="#work">How it work</a></li>
                              <li><a href="#proect_creator">Team</a></li>
                              <li><a href="#footer">Contacts</a></li>
                            </ul>
                            <a href="javascript:;" class="lang"> <span class="display_lang">Ru</span><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="select-lang">
                              <li><a href="javascript:;">Ru</a></li>
                              <li><a href="javascript:;">Eng</a></li>
                            </ul> -->
                        </nav>
                    </div>
                </div>
                <div class="row mid-row mid-row-eng">
                    <div class="col-lg-6 col-md-6 col-sm-9 col-sm-offset-1">
                        <div class="logo">
                            <img src="img/logo.png" alt="">
                        </div>
                        <p><span class="docSmart">Doctor Smart</span> is the ground-braking ecosystem based
                            on a blockchain. The system offers a full range
                            of opportunities in the field of health maintenance and strengthening, including immediate access to highly qualified doctors, nutrition experts and fitness coaches from all over the world.</p>
                        <p>
                            <span class="bottom_span">We bring health anytime,<br> anywhere!</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="obzor" class="obzor sectio" data-hash="obzors">
        <div class="container">
            <div class="row bot-row">
                <div class="col-lg-12">
                    <h4></h4>
                </div>
            </div>
            <div class="row bot-row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p>The ability to live up to 140 is inscribed in human DNA. But what prevents him from living so long?</p>
                    <p>First of all, the human being himself. The sleep disorder, lack of vital substances in nutrition, stress and delays in medical help are the worst enemies of our longevity. </p>
                    <span><span class="docSmart">Doctor Smart</span> the blockchain ecosystem is designed to solve these problems.</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p><span class="docSmart">Doctor Smart</span> provides wide range of services including telehealth care. The World Market of traditional outpatient services can make more than $3,2 * trillion by 2021. Up to 60% of outpatient appointments can be delivered online and subsequently can be replaced with online healthcare services. It means the potential of the Global Telehealth  Services Market in comparable period will reach $1,92 trillion.</p>
                    <span class="grandview grandview_eng">Source: grandviewresearch.com</span>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-6 left-col">
              <p class="usd-val">Market volume* (USD, Billion)</p>
              <img class="img-responsive" src="img/graf.png" alt="">
              <span>*Source: Becker's Healthcare</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h4></h4>
              <p>
              The ability to live up to 140 is inscribed in human DNA. But what prevents him from living so long?</p>
               <p>- First of all, the human being himself. The sleep disorder, lack of vital substances in nutrition, stress and delays in medical help are the worst enemies of our longevity.</p>
              <p><span>Doctor Smart</span>, the blockchain ecosystem is designed to solve these problems</p>
              <p></p>
              <span class="ist-world-bank">*Source The World Bank</span>
            </div> -->
        </div>
    </section>
    <section id="work" class="work sectio" data-hash="works">
        <div class="overlay1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>GUIDELINES FOR WORKING</h3>
                        <p><span class="docSmart">Doctor Smart</span> first priority is to put a highly competent team together for providing comprehensive telehealth services, having framed the essential basis for complex ecosystem development.</p>
                        <p>We designed <span class="docSmart">Doctor Smart</span> to raise the quality of the world digital medicine to a new level and<br> make the medical assistance actually available to everyone who needs it here and now.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                        <div class="box">
                            <img src="img/w1.png" alt="">
                            <p>Quick response</p>
                            <div class="desc">
                                <h5>Quick response:</h5>
                                <span>connect the expert<br> you need less<br> than in 1 minute;<br> our experts are<br> available 24 hours<br> 7 days a week.</span>
                            </div>
                            <div class="mob-view">
                                <h5>Quick response:</h5>
                                <span>connect the expert you need less than in 1 minute; our experts are available 24 hours 7 days a week.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                        <div class="box">
                            <img src="img/w2.png" alt="">
                            <p>High quality</p>
                            <div class="desc">
                                <h5>High quality:</h5>
                                <span> only certified<br> doctors and innovative<br> Quality Check <br>System for doctor’s<br> recommendations.</span>
                            </div>
                            <div class="mob-view">
                                <h5>High quality:</h5>
                                <span> High quality: only certified doctors and innovative Quality Check System for doctor’s recommendations.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                        <div class="box">
                            <img src="img/w3.png" alt="">
                            <p>Transparency</p>
                            <div class="desc">
                                <h5>Transparency</h5>
                                <span>you can easily<br> browse our experts’<br> certification lists;<br> billing is made via<br> smart contracts</span>
                            </div>
                            <div class="mob-view">
                                <h5>Transparency:</h5>
                                <span>you can easily browse our experts’ certification lists; billing is made via smart contracts</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                        <div class="box">
                            <img src="img/w4.png" alt="">
                            <p>Reasonable price</p>
                            <div class="desc">
                                <h5>Reasonable price</h5>
                                <span>The consultation<br> fee is twice lower,<br> than average<br> visit price.</span>
                            </div>
                            <div class="mob-view">
                                <h5>Reasonable price:</h5>
                                <span>The consultation fee is twice lower, than average visit price.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="garant" class="garant sectio" data-hash="garants">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-lg-offset-1 col-xs-offset-0">
                    <h3>SERVICE QUALITY CONFIRMATION</h3>
                    <p><span class="docSmart">Doctor Smart</span>  is being developed in close cooperation with “Meditsina Clinic”, JSC. This world class multy-field medical center has an absolute vote of confidence and impeccable record in the medical world. “Meditsina”, JCS provides a full range of health care in 69 medical fields.
                        This is the first Russian clinic accredited by the most prestigious international commissions on medical care quality.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 col-lg-offset-1">
                    <p class="serts_head">“Meditsina Clinic” Awards & Certificates:</p>
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
    <section id="service" class="service sectio" data-hash="proect_creators">
        <div class="overlay1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>QUALITY CONTROL SERVICES</h3>
                        <p>We provide speedy health care online, and make the best international experience of authoritative<br> doctors accessible, besides we publicly confirm our services quality.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                        <div class="box">
                            <img src="img/s1.png" alt="">
                            <p>Certification of<br>the experts</p>
                            <div class="desc">
                                <span>The mandatory certification of the <span class="docSmart">Doctor Smart</span> experts was developed with the assistance of leading specialists from all over the world. Due to a blockchain technology doctors’ certification data can't be forged and are available for all users.</span>
                            </div>
                            <div class="mob-view">
                                <h5>Certification of the experts :</h5>
                                <span>The mandatory certification of the <span class="docSmart">Doctor Smart</span> experts was developed with the assistance of leading specialists from all over the world. Due to a blockchain technology doctors’ certification data can't be forged and are available for all users.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                        <div class="box">
                            <img src="img/s2.png" alt="">
                            <p>Doctor’s<br> recommendation<br> monitoring system</p>
                            <div class="desc">
                                <span class="check_system">The built-in algorithm of primary verification helps to make sure that doctor’s recommendations meet the international standards of health care. Besides additional random checking of the recommendations is implemented by highly qualified experts.</span>
                            </div>
                            <div class="mob-view">
                                <h5>Doctor’s recommendation monitoring system</h5>
                                <span class="check_system">The built-in algorithm of primary verification helps to make sure that doctor’s recommendations meet the international standards of health care. Besides additional random checking of the recommendations is implemented by highly qualified experts.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                        <div class="box">
                            <img src="img/s3.png" alt="">
                            <p>The monitoring system of prescribed medicines</p>
                            <div class="desc">
                  <span class="control_system">The patented automated technology helps to verify if prescribed medicine comply with the stated diagnosis and patient’s Electronic Medical Records. Besides, the technology enables us to detect interaction with other therapies.

                  </span>
                            </div>
                            <div class="mob-view">
                                <h5>The monitoring system of prescribed medicines</h5>
                                <span class="control_system">The patented automated technology helps to verify if prescribed medicine comply with the stated diagnosis and patient’s Electronic Medical Records. Besides, the technology enables us to detect interaction with other therapies.
                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                        <div class="box">
                            <img src="img/s4.png" alt="">
                            <p>Electronic Medical<br>Records</p>
                            <div class="desc">
                  <span>We created unified Electronic Medical Records platform using cryptographic encryption techniques. Such Electronic Medical Records provide data on patient’s applications and doctors’ recommendations history, as well as data from connected sports trackers and test results loaded to the system

                  </span>
                            </div>
                            <div class="mob-view">
                                <h5>Electronic Medical Records</h5>
                                <span>We created unified Electronic Medical Records platform using cryptographic encryption techniques. Such Electronic Medical Records provide data on patient’s applications and doctors’ recommendations history, as well as data from connected sports trackers and test results loaded to the system

                  </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="proect_creator" class="proect_creator sectio" data-hash="proect_creators">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>DOCTOR SMART FOUNDERS</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 hover_section">
                    <div class="box">
                        <div class="round1"></div>
                        <p>Pavel Roytberg<br>
                            <span>Founder</span></p>
                        <div class="desc">
                            <h5>Pavel Roytberg<br>
                                <span>Founder Doctor Smart.</span></h5>
                            <span>Digital Worlds, CJSC founder, the board member of “Meditsina”, JSC, the speaker for great number of international conferences, “Leadership in Healthcare in Harvard University TChang School” participant.
                  Mr. Roytberg gained more than 20 years of experience in software development for the health care industry. He created “Smart Medicina” (2014), the Electronic Medical Records system, and the full-function expert Medical Decision Support System (2015), Monitoring System for Prescribed Medicines (2015) as well as Chirp.Ru, website for patients (2017). Pavel G. Roytberg, is holder of PhD in Economics, Dissertation Theme is “Information technologies of a cash monetary turn” (2003).
                  </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hover_section">
                    <div class="left-box">
                        <div class="box">
                            <div class="round2"></div>
                            <p>Vladimir Nikolsky
                                <br>
                                <span>Founder Doctor Smart</span></p>
                            <div class="desc">
                                <h5>Vladimir Nikolsky<br>
                                    <span>Founder Doctor Smart.</span></h5>
                                <span class="right_doc">Operating Officer, Mail.Ru Group, since 2013.He joined Mail.Ru Group as the vice-president of Online Games Department in 2009. Mr. Nikolsky operated as CEO for Astrum Online Entertainment Holding (2007-2009). Prior to this Mr. Nikolsky became the co-founder and the CEO of “IT Territory”, company engaged in online games production (2004-2007).
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="team sectio" data-hash="teams">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>PROJECT TEAM</h3>
                    <h4></h4>
                </div>
            </div>
            <div class="row top-row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="box box1">
                        <div class="round round1"></div>
                        <p>Oleg Grigoryan<br>CEO
                        </p>
                        <div class="desc">
                            <h5>Oleg Grigoryan</h5>
                            <span>
                Graduate of the Moscow State Social Academy. Since 2009 Mr. Grigoryan has been taking the leading positions in the largest automobile companies and gained the vast experience managing the larger structures with complex partnership.  Oleg Grigoryan developed and organized the Сlient Service Department for Jaguar Land Rover Representative Office in Russia.
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="box box2">
                        <div class="round round2"></div>
                        <p>Vyacheslav Potyomkin <br>
                            Chief Product Officer</p>
                        <div class="desc">
                            <h5>Vyacheslav Potyomkin</h5>
                            <span>Project Manager for Mobile Department, HeadHunter. Mr. Potyomkin is a highly experienced project developer for the Game Industry with more than 8 years of leadership in project development. He managed the project with audience more than 75 million users. The Certified Agile Professional (KMP-1, ICP, ICP-ATF).</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bottom-row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="box box3">
                        <div class="round round3"></div>
                        <p>Kirill Keker <br> System Architect</p>
                        <div class="desc">
                            <h5>Kirill Keker</h5>
                            <span>"TeleLive" startup co-founder, the MikroTik certified trainer for equipment. Mr Keker gained more than 8 years of experience in the fixed and mobile communication sphere. Kirill Keker became speaker of MUM Conference 2015, besides he is known as “Otkrytie.Life” project software architect (2017) and Investment platform for “Investitsionnye Seminary”, LLC software architect (2015).
              </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="left-box">
                        <div class="box box4">
                            <div class="round round4"></div>
                            <p>Olga Sharkhun <br> Medical Consultant</p>
                            <div class="desc">
                                <h5>Olga Sharkhun</h5>
                                <span>Physician, gastroenterologist, general practitioner. Mrs. Sharkhun is the Member of Russian Gastroenterological Association, the Member of Scientific Society of Gastroenterology of Russia, and the Member of the European Association for the Study of the Liver (EASL). Mrs. Sharkhun participated in a wide range of Russian and international conferences. She has more than 18 years of medical experience. In 1998 Olga took her PhD Medicine Degree. She is a co-author of the "Metabolic Syndrome" monograph and author of methodical recommendations series. Olga had her traineeship at the University of Iowa (The USA) and Muenster (Germany).
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
                    <h3>PROJECT ADVISERS</h3>
                    <h4>We brought together professionals from all over the world to strengthen our project.</h4>
                </div>
            </div>
            <div class="row top-row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="box box1">
                        <div class="round round1"></div>
                        <p>Grigory Roytberg Professor,<br>“MEDICINE”, JSC CEO & Founder</p>
                        <div class="desc">
                            <h5>Grigory Roytberg</h5>
                            <span>The President of Meditsina JSC, Mr Roytberg is holder of Post-Doctoral Degree in Medicine, Russian Academy of Sciences (RAS) member, Head of the Department for Therapy and Family Medicine, RNRMU, the Honored Doctor of the Russian Federation, the winner of the RF Government Award in the field of education.
              In 1990 Mr Roytberg starts “Meditsina Clinic”, JSC.
              In 2005 Mr Roytberg was elected the Associate Member of the Russian Academy of Medical Sciences.
              In 2014 Mr Roytberg was elected the Regular Member of RAS.
              On December 21, 2010 by order of V.V. Putin, the Russian Prime Minister, Professor G.E. Roytberg gained the Award of the RF Government in the field of education and got rank "The Winner of the Russian Federation Government Award in the Field of Education".
              </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="box box2">
                        <div class="round round2"></div>
                        <p>Alexander Rumyantsev Professor,<br> Post-Doctoral Degree in Medicine</p>
                        <div class="desc">
                            <h5>Alexander Rumyantsev</h5>
                            <span>Soviet and Russian pediatrician, RAS and Russian Academy of Medical Science member, CEO of  “Dmitry Rogachev National Research Center of Pediatric Hematology, Oncology and Immunology”, Russian Ministry of Health. Mr. Rumyantsev is Honored Professor of Department of oncology, hematology and radiation therapy, RNRMU, Chief external expert for pediatric hematology of the Russian Ministry of Health, The President of National Society of Pediatric Hematologists and Oncologists, the Member of RAS General Committee (since 2017).
              </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bottom-row">
                <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="box box3">
                    <div class="round round3"></div>
                    <p>Dmitry Pushkar</p>
                    <div class="desc">
                      <h5>Dmitry Pushkar Professor,<br> Post-Doctoral Degree in Medicine</h5>
                      <span>Chief external expert for urology, RAS Associated Member, Honored Doctor of the Russian Federation, honored worker of science of the Russian Federation. Mr. Pushkar’ is Head of the Urology Department of the Moscow State University of Medicine and Dentistry. The first Russian expert to be invited on regular base as lecture and the surgeon’s sow-case performer to the leading European and USA Clinics. Mr. Pushkar’ is the author of more, than 1000 scientific papers and 40 monographs.
                      </span>
                    </div>
                  </div>
                </div> -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="box box5">
                        <div class="round round5"></div>
                        <p>Sergey Chernev<br>Deputy Director for<br>Information Technologies<br>of Kiberplat, LLC.</p>
                        <div class="desc">
                            <h5>Sergey Chernev</h5>
                            <span>Doctor of Engineering, Master Degree in Physics and Math, teacher, Mr. Chernev has more than 17 years of experience in creating  distributed systems for development and deployment of products. From 2005 to 2009 Mr.  Chernev held CTO position IN GIGAFONE Company, where he was responsible for development of the ground-braking mobile advertising platform.
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="left-box">
                        <div class="box box4">
                            <div class="round round4"></div>
                            <p>Dmitry Khan
                                Co-founder <br> of “Dauria Aerospace”, the first<br> Russian Private Space Company </p>
                            <div class="desc">
                                <h5>Dmitry Khan</h5>
                                <span>More than 20 years of business activity in Technology industry, bio and space exploration spheres. The co-founder of “Rostock Biotech One” investment fund, focused on biotechnology solutions helping in significant increase of the human active lifespan, medical problems of aging and cancer treatment. Dmitry has vast experience in investment bank activities, M&A in the telecommunication and IT market. Dmitry participated in the Management of Sustainable Development program, Sustainability Challenge Foundation. Mr. Khan has experience in the international cooperation and joint ventures development. Besides he is keen on such kinds of sport as ultra-marathon and oriental martial arts.
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
                        <h4>JOIN THE TEAM!</h4>
                        <p>We are welcoming professionals who share the idea of implementation of the most advanced technologies into Health Care Industry.</p>
                        <p class="mid-p">
                            - Marketing specialists<br>
                            - Translators<br>
                            - Blockchain technology experts<br>
                            - Regional representatives<br>
                            - Volunteers<br>
                        </p>
                        <p>Let's join hands in developing a new<br> market and world standards of<br> Health Care Services!</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <div class="right-box">
                        <img class="img-responsive" src="img/bottom-doctor.jpg" alt="">
                        <a href="#form1" class="pop btn send">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer sectio" data-hash="footers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Contact Us</h4>
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
                        <li><a href=""><img src="img/telegram.svg" alt=""></a></li>
                        <li><a href=""><img src="img/facebook.svg" alt=""></a></li>
                        <li><a href=""><img src="img/linkdin.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php
    // Top of the page, before sending out ANY output to the page.
    $user_is_first_timer = !isset( $_COOKIE["FirstTimer"] );
    // Set the cookie so that the message doesn't show again
    setcookie( "FirstTimer", 1, strtotime( '+1 year' ) );
    ?>
    <!-- Put this anywhere on your page. -->
    <?php if( $user_is_first_timer ): ?>
        <div id="snackbar"><span class="docSmart">Doctor Smart</span> uses cookies and similar  technologies on its websites. By continuing your browsing after being presented with the cookie information you consent to such use. <span class="close_snack">&times;</span><br>
            <a href="/cookie" target="_blank" class="learn_more">Learn more</a>
        </div>
    <?php endif; ?>
</div>



<div class="hidden">
    <form id="form1" class="feedback">
        <h3>Contact Us</h3>
        <input type="hidden" class="choose-language" value='en'><br>
        <input type="text" name="Name" placeholder="Your name" required class="name"><br>
        <input type="text" name="E-mail" placeholder="Your contacts" required class="contacts"><br>
        <input type="text" name="Subject" placeholder="Subject" required class="theme"><br>
        <textarea name="massage" class="text" placeholder="Message" required></textarea><br>
        <button class="send_massage_btn">Send</button>
    </form>
</div>