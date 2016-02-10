<?php

/* ::layout.html.twig */
class __TwigTemplate_d142bffa656b5ba5d72e1cf28b4581be331dbdd37dc8a99c919c952c27a35825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbe57e745ae77c0d8a03ab9dec1de6adbe42351dd41792646f1349011774fbcc = $this->env->getExtension("native_profiler");
        $__internal_cbe57e745ae77c0d8a03ab9dec1de6adbe42351dd41792646f1349011774fbcc->enter($__internal_cbe57e745ae77c0d8a03ab9dec1de6adbe42351dd41792646f1349011774fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe57e745ae77c0d8a03ab9dec1de6adbe42351dd41792646f1349011774fbcc->leave($__internal_cbe57e745ae77c0d8a03ab9dec1de6adbe42351dd41792646f1349011774fbcc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c816561f6da967b9d8029ade5f3a28f2918ef05d472efa3f490da8126e3157af = $this->env->getExtension("native_profiler");
        $__internal_c816561f6da967b9d8029ade5f3a28f2918ef05d472efa3f490da8126e3157af->enter($__internal_c816561f6da967b9d8029ade5f3a28f2918ef05d472efa3f490da8126e3157af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"nav\" id=\"top\"></div>
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">główne menu</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#top\"><img alt=\"Brand\" src=\"images/logomin.png\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#aktualnosci\">AKTUALNOŚCI <span class=\"sr-only\">(current)</span></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">O NAS <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#o_nas\">INFORMACJE O PLACÓWCE</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">PRACOWNICY PRZEDSZKOLA</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#film\">FILM PROMUJĄCY</a></li>
                        </ul>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">DLA RODZICÓW <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#plan_dnia\">PLAN DNIA</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">MISJA PRZEDSZKOLA</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#zywienie\">ŻYWIENIE W NASZYM PRZEDSZKOLU</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#pierwszy_dzien\">PIERWSZY DZIEŃ W PRZEDSZKOLU</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#publikacje\">PUBLIKACJE</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">OSIĄGNIĘCIA <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#osiagniecia1213\">ROK SZKOLNY 2012/2013</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#osiagniecia1314\">ROK SZKOLNY 2013/2014</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#osiagniecia1415\">ROK SZKOLNY 2014/2015</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#osiagniecia1516\">ROK SZKOLNY 2015/2016</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 57
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 58
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                    ";
        } else {
            // line 60
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span>wyloguj</a></li>
                        <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("easyadmin");
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>administruj</a></li>
                    ";
        }
        // line 63
        echo "                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <img src=\"images/bg3.gif\" class=\"img-responsive\"/>
    <div class=\"row-blue\" id=\"film\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title \">Film promujący nasze Przedszkole</h3>
                        </div>
                        <div class=\"panel-body animated bounceIn\">
                            <video  controls poster=\"video/video_picture.jpg\">
                                <source src=\"video/video.mp4\" type=\"video/mp4\">
                                Twoja przeglądarka nie obsługuje odtwarzacza video.
                            </video>
                        </div>
                        <span id=\"aktualnosci\"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row-green\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-8\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success animated bounceInLeft\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Wyprawka dla dzieci z grupy I i II</h3>
                        </div>
                        <div class=\"panel-body\">
                            <ul>
                                <li>-pantofle  najlepiej na rzepy ,  podpisane</li>
                                <li>-<b>Duży koc obleczony w dużą poszwę- podpisany</b></li>
                                <li>-mała poduszeczka</li>
                                <li>-piżamki- podpisane</li>
                                <li>-zapasowe ubrania w razie \"awarii\"(majteczki , skarpety , spodnie , bluzeczki  w woreczku z materiału)</li>
                                <li>-w razie potrzeby pampersy do założenia w czasie leżakowania</li>
                                <li>-chusteczki higieniczne (cały wagon)</li>
                                <li>-chusteczki nawilżane</li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\"><p style=\"text-align:right\">Autor:Dorota Skóra</p></div>
                    </div>
                    <div class=\"panel panel-primary animated bounceInLeft\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Wyprawka dla dzieci grup starszych</h3>
                        </div>
                        <div class=\"panel-body\">
                            <ul>
                                <li>-obuwie zastępcze podpisane w woreczku z materiału,</li>
                                <li>-strój gimnastyczny  podpisany w woreczku z materiału,</li>
                                <li>-chusteczki higieniczne (cały wagon)</li>
                                <li>-zapasowe ubrania w razie \"awarii\"(majteczki , skarpety , spodnie , bluzeczki  w woreczku)  pozostawione w szatni w półce indywidualnej dziecka,</li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\"><p style=\"text-align:right\">Autor:Dorota Skóra</p></div>
                    </div>

                </div>
                <span id=\"o_nas\"></span>
                <nav>
                    <ul class=\"pager\">
                        <li><a href=\"#\">nowsze</a></li>
                        <li><a href=\"#\">starsze</a></li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-md-4\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-primary animated bounceInRight\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">KONTAKT</h3>
                        </div>
                        <div class=\"panel-body\">
      <pre>
Kochanowskiego 1D
37-100 Łańcut
tel: (017)225 41 74
e-mail: przedszkole3lancut@gmail.com
      </pre>
                        </div>
                    </div>
                    <div class=\"panel panel-success animated bounceInRight\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">GALERIA</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <div class=\"thumbnail\">
                                        <img src=\"images/gallery-thumbnail-images/20122013.JPG\" alt=\"obrazek galeria rok szkolny 2012/2013\">
                                        <div class=\"caption\">
                                            <p>galeria z uroczystości oraz codziennych zajęć odbywających się w naszym przedszkolu</p>
                                            <p><a href=\"#galeria\" class=\"btn btn-primary center-block\" role=\"button\">przejdz do galerii</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row-blue\" id=\"o_nas2\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success animated bounceInLeft\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\" id=\"about_us\">Informacje o naszej placówce</h3>
                        </div>
                        <div class=\"panel-body\">
                            <p>Nasze przedszkole zlokalizowane jest w dzielnicy
                                Łańcut-Podzwierzyniec. Jest to budynek wolnostojący z dużymi przestronnymi
                                salami dydaktycznymi. Przedszkole otoczone jest bogato zazielenionym ogrodem . Wschodnia część ogrodu
                                wyposażona jest w sprzęt ogrodowy, który sukcesywnie wymieniany jest na nowy</p>
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"thumbnail\">
                                        <img src=\"images/about-us-images/1.jpg\" alt=\"zdjęcie plac zabaw\">
                                        <div class=\"caption\">
                                            <p>plac zabaw zlokalizowany na terenie naszego Przedszkola</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"thumbnail\">
                                        <img src=\"images/about-us-images/2.jpg\" alt=\"zdjęcie ogród\">
                                        <div class=\"caption\">
                                            <p>zielony ogród otaczający budynek</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"thumbnail\">
                                        <img src=\"images/about-us-images/3.jpg\" alt=\"zdjęcie budynek\">
                                        <div class=\"caption\">
                                            <p>Główny budynek Przedszkola</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Jesteśmy placówką, która zapewnia
                                dziecku ciepłą rodzinną atmosferę, która pomoże przezwyciężyć tęsknotę za
                                domem. Częste spacery, zabawy na świeżym powietrzu, ćwiczenia ogólnorozwojowe
                                pozwalają dzieciom na prawidłowy rozwój fizyczny. Ciekawe zajęcia dydaktyczne
                                prowadzone z wykorzystaniem różnorodnych form i metod rozwijają sferę
                                intelektualną naszych dzieci.</p>
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"thumbnail\">
                                        <img src=\"images/about-us-images/4.jpg\" alt=\"zdjęcie sala\">
                                        <div class=\"caption\">
                                            <p>sala dydaktyczna</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"thumbnail\">
                                        <img src=\"images/about-us-images/5.jpg\" alt=\"zdjęcie korytarz\">
                                        <div class=\"caption\">
                                            <p>główny korytarz z szatnią</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"thumbnail\">
                                        <img src=\"images/about-us-images/6.jpg\" alt=\"zdjęcie sala\">
                                        <div class=\"caption\">
                                            <p>sala dydaktyczna</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span id=\"plan_dnia\"></span>
                            <p>Promujemy uzdolnienia i zainteresowania naszych
                                wychowanków poprzez udział w konkursach międzyprzedszkolnych,
                                ogólnopolskich, regionalnych (patrz osiągnięcia).</p>
                            <p style='text-align:center'><b>Przedszkole liczy
                                    5 oddziałów.<br>
                                    Czynne jest w
                                    godzinach 6:00-17:00</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row-green\" id=\"plan_dnia\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-primary animated bounceInRight\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Plan dnia w naszym Przedszkolu</h3>
                        </div>
                        <div class=\"panel-body\">
                            <ul>
                                <li><b>6:00-8:30</b></li>
                                <ul>
                                    <li>-schodzenie się dzieci, indywidualne rozmowy nauczycieli z dziećmi</li>
                                    <li>-indywidualne zajęcia korekcyjno-wyrównawcze z poszczególnymi dziećmi</li>
                                    <li>-swobodna zabawa w kącikach zainteresowań</li>
                                </ul>
                                <li><b>8:30-9:00</b></li>
                                <ul>
                                    <li>-śniadanie</li>
                                    <li>-zajęcia zintegrowane</li>
                                    <li>-zajęcia dodatkowe wg zainteresowań dziecka wg propozycji rodziców np język angielski</li>
                                </ul>
                                <li><b>10:30- 10:45</b></li>
                                <ul>
                                    <li>-II śniadanie</li>
                                </ul>
                                <li><b>10:45- 11:30</b></li>
                                <ul>
                                    <li>-dowolne zabawy dzieci wg zainteresowań</li>
                                    <li>-spacer w okolicy przedszkola</li>
                                    <li>-zabawy na powietrzu w ogrodzie przedszkolnym</li>
                                    <li>-wycieczki piesze w pobliżu przedszkola</li>
                                </ul>
                                <li><b>11:30-12:00</b></li>
                                <ul>
                                    <li>-obiad</li>
                                </ul>
                                <li><b>12:00- 13:30</b></li>
                                <ul>
                                    <li>-zajęcia zintegrowane</li>
                                    <li>-indywidualna praca korekcyjno-wyrównawcza</li>
                                    <li>-indywidualne zajęcia rozwijające zainteresowania i uzdolnienia dzieci</li>
                                    <li>-swobodna zabawa w kącikach zainteresowań</li>
                                </ul>
                                <li><b>14:00</b></li>
                                <ul>
                                    <li>-podwieczorek</li>
                                </ul>
                                <li><b>14:00-17:00</b>\t</li>
                                <ul>
                                    <li>-dowolne zabawy dzieci w salach dydaktycznych lub na podwórku, przedszkolnym, rozchodzenie się dzieci do domu.</li>
                                </ul>
                            </ul>
                            <span id=\"zywienie\"></span>
                            <p style=\"text-align:center\"><b>Dzieci odbierane są tylko przez rodziców lub osoby upoważnione pisemnie</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row-blue\" id=\"zywienie\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success animated bounceInLeft\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Żywienie w naszym Przedszkolu</h3>
                        </div>
                        <div class=\"panel-body\">
                            W naszej przedszkolnej kuchni przygotowujemy domowe posiłki. Podajemy dzieciom pokarmy zawierające najwyższe wartości odżywcze. Menu jest oparte na zbożach pełnoziarnistych, sezonowych warzywach i owocach, roślinach strączkowych, nasionach, pestkach i olejach tłoczonych na zimno. Nie używa się tu rafinowanych produktów. Żadnych kostek rosołowych, glutaminianów sodu .Stopniowo staramy się ograniczać ilość soli i cukru dodawaną do potraw.
                            Panie kucharki same robią domowe pierogi, racuchy, naleśniki, wykonujemy świeże surówki z warzyw i sałatki owocowe. Każdego dnia dzieci jedzą trzy smaczne posiłki: śniadanie, obiad, podwieczorek. Stanowią one Âž dziennego zapotrzebowania dziecka w wieku przedszkolnym na białko, węglowodany, tłuszcze i witaminy (zgodnie z normami Instytutu Żywności i Żywienia oraz Instytutu Matki i Dziecka).
                            Posiłki mają być zdrowe, smaczne i różnorodne uwzględniając sezonowość niektórych potraw. To właśnie okres przedszkola jest czasem, kiedy dzieci powinny nauczyć się zdrowo jeść. Przyzwyczajenie do posiłków spożywanych w okresie dzieciństwa pozostaje na całe dorosłe życie i procentuje dobrym zdrowiem na lata.<br>
<pre>
Kiedy dziecko rano wstanie,
najpierw musi zjeść śniadanie,
kromkę chleba z świeżym jajkiem
Na obiadek zalewajkę,
drugie danie:
schab pieczony, ogóreczek pokrojony
i ziemniaczki z sosem zdrowym,
nie kupionym, lecz domowym.
</pre>
      <pre>
Kompot z śliwką lub z jabłuszkiem,
po obiedzie przegryź gruszkę
(a gdy mięsa nie jesz wcale,
to fasolę włóż na talerz).
</pre>
      <pre>
Na kolację,
tuż przed spaniem,
nie jedz tyle co na śniadanie,
coś lekkiego, może płatki
zastanówcie no się, dziatki.
</pre>
                        </div>
                        <span id=\"pierwszy_dzien\"></span>
                        <div class=\"panel-footer\"><p style=\"text-align:right\">Autor:Jolanta Sawicka</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row-green\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-primary animated bounceInRight\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Pierwszy dzień w Przedszkolu</h3>
                        </div>
                        <div class=\"panel-body\">
                            <b>,,Najtrudniej jest pierwszy raz wyfrunąć z gniazdka..’’</b><br>
                            .. .  więc pomóżmy naszym pociechom najlepiej  jak potrafimy  ułatwić start w samodzielność. Rodzice przede wszystkim powinni być świadomi, że dziecku w przedszkolu nic złego nie grozi, nikt go tam nie chce skrzywdzić, ponadto przedszkole jest miejscem gdzie dziecko szybciej rozwija swoją sprawność, nabywa umiejętności, które pozwolą mu na lepszy start w kolejny etap życia, jakim jest szkoła. Co robić a czego nie wolno robić:<br>
                            <ul>
                                <li>Dajmy rano dziecku czas na spokojne wstanie z łóżka, nie wprowadzajmy atmosfery nerwowości.</li>
                                <li>Utwierdzajmy nasze dziecko w przekonaniu że jest mądre, odważne, że jesteśmy z niego dumni, znajdźmy takie argumenty, które zmotywują go pozytywnie i utwierdzą w poczuciu własnej wartości.</li>
                                <li>Przy pożegnaniu rodzic powinien być pogodny, uśmiechnięty nie powinien okazywać smutku, niepokoju (dzieci są bardzo dobrymi obserwatorami) Pożegnanie powinno być krótkie.</li>
                                <li>Rozmawiajmy z dzieckiem o pobycie w przedszkolu tak jakby to była jego praca, doceńmy jego wysiłek i mówmy mu o tym.</li>
                                <li>Każdy rodzic ma wątpliwości, niepokoi go wiele rzeczy i to jest zrozumiałe, na wiele godzin jest pozbawiony kontroli nad dzieckiem, ale nie należy rozmawiać o tych wątpliwościach przy dziecku.</li>
                                <li>Nie wolno zaglądać po pożegnaniu do sali, by sprawdzić czy dziecko się bawi. Jeśli nasza pociecha to zauważy, resztę dnia spędzi przy drzwiach, bo skoro mama zajrzała raz, to może jeszcze raz zajrzy.</li>
                                <li>Do przedszkola nie dajemy dziecku słodyczy (ma przecież zapewnione posiłki)  jeśli już chcemy dać, np. cukierki – wtedy w takiej ilości, aby wystarczyło dla wszystkich dzieci w grupie</li>
                                <li>Jeżeli dziecko przynosi zabawkę z domu (oprócz zabawek militarnych ) musimy liczyć się z tym (i odpowiednio uprzedzić dziecko), że zabawka może ulec uszkodzeniu</li>
                                <li>Nie należy ulegać maleństwu, jeżeli płacze, tupie nogami i chce zostać w domu  „jeszcze tylko dziś\" - to tylko próba sił. Jeżeli dziecko wymusi pozostanie w domu, rodzic przegrał a sytuacja będzie się powtarzać.</li>
                                <li>Nie przedłużajmy weekendowego pobytu u babci to wydłużać będzie adaptację dziecka do przedszkola.</li>
                                <li>Kochani rodzice najważniejszymi warunkami adaptacji dziecka do przedszkola jest wasza miłość do niego, o której dziecko musi wiedzieć oraz  przekonanie dziecka, że zawsze, absolutnie zawsze będzie odebrane z przedszkola, że nikt nie zostawia go na długo ,  by dziecko przekonało się o tym musi wielokrotnie przeżyć rozstania i szczęśliwe powroty do domu. Trzeba nam dorosłym uzbroić się w cierpliwość i wyjątkową delikatność w tym okresie.</li>
                                <li>Stanowczość rodziców to  najważniejsza kwestia.</li>
                            </ul>
                             Pamiętaj, że nawet jeśli znajdziesz idealne przedszkole i dobrze przygotujesz dziecko, i tak Twój maluch ma prawo wyrażać sprzeciw i niezadowolenie - w końcu w jego życiu zaszła radykalna zmiana i potrzeba czasu, aby ją zaakceptował. Jeśli przetrwacie pierwszy miesiąc, dalej będzie już z górki i tylko patrzeć jak Twój maluch z przejęciem opowie Ci o swych pierwszych przyjaźniach, z dumą pokaże zdjęcia z Balu Karnawałowego, a Tobie ze wzruszenia zakręci się łza w oku na występach z okazji Dnia Matki !
                        </div>
                        <span id=\"publikacje\"></span>
                        <div class=\"panel-footer\"><p style=\"text-align:right\">Autor:Janina Jęczalik</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row-blue\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success animated bounceInLeft\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Nasze publikacje</h3>
                        </div>
                        <div class=\"panel-body\">
                            <p>referat bajki psychoterapeutyczne: <a href=\"publikacje/referatbajkipsychoterapeutyczne.doc\">otwórz</a></p>
                            <p>referat patriotyzm: <a href=\"publikacje/referatpatriotyzm.doc\">otwórz</a></p>
                            <p>referat jak pomoc dziecku nadpobudliwemu: <a href=\"publikacje/Jakpomocdzieckunadpobudliwemu.doc\">otwórz</a></p>
                            <p>Bajka najlepszym lekarstwem na dzieciece problemy: <a href=\"publikacje/Bajkanajlepszymlekarstwemnadziecieceproblemy.doc\">otwórz</a></p>
                            <p>Dziecięce lęki: <a href=\"publikacje/Ddziecieceleki.doc\">otwórz</a></p>
                            <p>Kochani rodzice !: <a href=\"publikacje/Kochanirodzice.doc\">otwórz</a></p>
                            <p>Poczytaj mi mamo: <a href=\"publikacje/Poczytajmimamo.doc\">otwórz</a></p>
                            <p>Zajęcia plastyczne a rozwój dziecka: <a href=\"publikacje/Zajeciaplastycznearozwojdziecka.doc\">otwórz</a></p>
                            <p>Wpływ programów telewizyjnych na rozwój i zachowanie dzieci przedszkolnych: <a href=\"publikacje/wplywprogramowtelewizyjnychnarozwojizachowaniedzieciprzedszkolnych.doc \">otwórz</a></p>
                            <p>jak powstaje dziecieca agresja: <a href=\"publikacje/jakpowstajedzieciecaagresja.doc \">otwórz</a></p>
                            <p>jak pracowac z dzieckiem nadpobudliwym psychoruchowo: <a href=\"publikacje/jakpracowaczdzieckiemnadpobudliwympsychoruchowo.doc \">otwórz</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row-green\" id=\"osiagniecia\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title \">nasze osiągnięcia</h3>
                        </div>
                        <div class=\"panel-body animated bounceInRight\">
                            <h3 id=\"osiagniecia1213\">Nasze osiągnięcia w roku szkolnym 2012/2013</h3>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1213/12131.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1213/12132.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1213/12133.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1213/12134.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1213/12135.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1213/12136.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1213/12137.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1213/12138.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <hr id=\"osiagniecia1314\">
                            <h3>Nasze osiągnięcia w roku szkolnym 2013/2014</h3>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13141.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13142.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13143.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13144.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13145.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13146.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13147.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13148.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/13149.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/131410.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/131411.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/131412.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/131413.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/131414.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1314/131415.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <hr id=\"osiagniecia1415\">
                            <h3 >Nasze osiągnięcia w roku szkolnym 2014/2015</h3>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14151.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14152.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14153.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14154.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14155.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14156.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14157.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14158.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/14159.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/141510.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/141511.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/141512.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-md-3\">
                                    <a href=\"#\" class=\"thumbnail\">
                                        <img src=\"images/dyplomy/1415/141513.jpg\" alt=\"dyplom\">
                                    </a>
                                </div>
                            </div>
                            <hr id=\"osiagniecia1516\">
                            <h3 >Nasze osiągnięcia w roku szkolnym 2015/2016</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#\">STRONA GŁÓWNA</a></li>
                        <li role=\"presentation\"><a href=\"#\">O NAS</a></li>
                        <li role=\"presentation\"><a href=\"#\">DLA RODZICÓW</a></li>
                        <li role=\"presentation\"><a href=\"#\">PUBLIKACJE</a></li>
                        <li role=\"presentation\"><a href=\"#\">OSIĄGNIĘCIA</a></li>
                        <li role=\"presentation\"><a href=\"#\">GALERIA</a></li>
                    </ul>
                </div>
            </div><!--end row-->
            <div class=\"row\">
                <div class=\"col-md-12 footer-copy\">
                    Copyright © <a href=\"http://www.przedszkole3lancut.pl\">Przedszkole Miejskie nr3 w Łańcucie</a><br>
                    realizacja: Karol Skóra
                </div>
            </div><!--end row-->
        </div>
    </footer>

";
        
        $__internal_c816561f6da967b9d8029ade5f3a28f2918ef05d472efa3f490da8126e3157af->leave($__internal_c816561f6da967b9d8029ade5f3a28f2918ef05d472efa3f490da8126e3157af_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 63,  109 => 61,  104 => 60,  98 => 58,  96 => 57,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div class="nav" id="top"></div>*/
/*     <nav class="navbar navbar-default navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">główne menu</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#top"><img alt="Brand" src="images/logomin.png"></a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="#aktualnosci">AKTUALNOŚCI <span class="sr-only">(current)</span></a></li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O NAS <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#o_nas">INFORMACJE O PLACÓWCE</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">PRACOWNICY PRZEDSZKOLA</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#film">FILM PROMUJĄCY</a></li>*/
/*                         </ul>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DLA RODZICÓW <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#plan_dnia">PLAN DNIA</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">MISJA PRZEDSZKOLA</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#zywienie">ŻYWIENIE W NASZYM PRZEDSZKOLU</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#pierwszy_dzien">PIERWSZY DZIEŃ W PRZEDSZKOLU</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li><a href="#publikacje">PUBLIKACJE</a></li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OSIĄGNIĘCIA <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#osiagniecia1213">ROK SZKOLNY 2012/2013</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#osiagniecia1314">ROK SZKOLNY 2013/2014</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#osiagniecia1415">ROK SZKOLNY 2014/2015</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#osiagniecia1516">ROK SZKOLNY 2015/2016</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     {% if user== null %}*/
/*                     <li><a href="{{ path('fos_user_security_login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*                     {% else %}*/
/*                         <li><a href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-log-out"></span>wyloguj</a></li>*/
/*                         <li><a href="{{ path('easyadmin') }}"><span class="glyphicon glyphicon-edit"></span>administruj</a></li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/*     <img src="images/bg3.gif" class="img-responsive"/>*/
/*     <div class="row-blue" id="film">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title ">Film promujący nasze Przedszkole</h3>*/
/*                         </div>*/
/*                         <div class="panel-body animated bounceIn">*/
/*                             <video  controls poster="video/video_picture.jpg">*/
/*                                 <source src="video/video.mp4" type="video/mp4">*/
/*                                 Twoja przeglądarka nie obsługuje odtwarzacza video.*/
/*                             </video>*/
/*                         </div>*/
/*                         <span id="aktualnosci"></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row-green">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-8">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success animated bounceInLeft">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Wyprawka dla dzieci z grupy I i II</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <ul>*/
/*                                 <li>-pantofle  najlepiej na rzepy ,  podpisane</li>*/
/*                                 <li>-<b>Duży koc obleczony w dużą poszwę- podpisany</b></li>*/
/*                                 <li>-mała poduszeczka</li>*/
/*                                 <li>-piżamki- podpisane</li>*/
/*                                 <li>-zapasowe ubrania w razie "awarii"(majteczki , skarpety , spodnie , bluzeczki  w woreczku z materiału)</li>*/
/*                                 <li>-w razie potrzeby pampersy do założenia w czasie leżakowania</li>*/
/*                                 <li>-chusteczki higieniczne (cały wagon)</li>*/
/*                                 <li>-chusteczki nawilżane</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="panel-footer"><p style="text-align:right">Autor:Dorota Skóra</p></div>*/
/*                     </div>*/
/*                     <div class="panel panel-primary animated bounceInLeft">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Wyprawka dla dzieci grup starszych</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <ul>*/
/*                                 <li>-obuwie zastępcze podpisane w woreczku z materiału,</li>*/
/*                                 <li>-strój gimnastyczny  podpisany w woreczku z materiału,</li>*/
/*                                 <li>-chusteczki higieniczne (cały wagon)</li>*/
/*                                 <li>-zapasowe ubrania w razie "awarii"(majteczki , skarpety , spodnie , bluzeczki  w woreczku)  pozostawione w szatni w półce indywidualnej dziecka,</li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="panel-footer"><p style="text-align:right">Autor:Dorota Skóra</p></div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <span id="o_nas"></span>*/
/*                 <nav>*/
/*                     <ul class="pager">*/
/*                         <li><a href="#">nowsze</a></li>*/
/*                         <li><a href="#">starsze</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-primary animated bounceInRight">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">KONTAKT</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*       <pre>*/
/* Kochanowskiego 1D*/
/* 37-100 Łańcut*/
/* tel: (017)225 41 74*/
/* e-mail: przedszkole3lancut@gmail.com*/
/*       </pre>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel panel-success animated bounceInRight">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">GALERIA</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12 col-md-12">*/
/*                                     <div class="thumbnail">*/
/*                                         <img src="images/gallery-thumbnail-images/20122013.JPG" alt="obrazek galeria rok szkolny 2012/2013">*/
/*                                         <div class="caption">*/
/*                                             <p>galeria z uroczystości oraz codziennych zajęć odbywających się w naszym przedszkolu</p>*/
/*                                             <p><a href="#galeria" class="btn btn-primary center-block" role="button">przejdz do galerii</a></p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row-blue" id="o_nas2">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success animated bounceInLeft">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title" id="about_us">Informacje o naszej placówce</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <p>Nasze przedszkole zlokalizowane jest w dzielnicy*/
/*                                 Łańcut-Podzwierzyniec. Jest to budynek wolnostojący z dużymi przestronnymi*/
/*                                 salami dydaktycznymi. Przedszkole otoczone jest bogato zazielenionym ogrodem . Wschodnia część ogrodu*/
/*                                 wyposażona jest w sprzęt ogrodowy, który sukcesywnie wymieniany jest na nowy</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6 col-md-4">*/
/*                                     <div class="thumbnail">*/
/*                                         <img src="images/about-us-images/1.jpg" alt="zdjęcie plac zabaw">*/
/*                                         <div class="caption">*/
/*                                             <p>plac zabaw zlokalizowany na terenie naszego Przedszkola</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6 col-md-4">*/
/*                                     <div class="thumbnail">*/
/*                                         <img src="images/about-us-images/2.jpg" alt="zdjęcie ogród">*/
/*                                         <div class="caption">*/
/*                                             <p>zielony ogród otaczający budynek</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6 col-md-4">*/
/*                                     <div class="thumbnail">*/
/*                                         <img src="images/about-us-images/3.jpg" alt="zdjęcie budynek">*/
/*                                         <div class="caption">*/
/*                                             <p>Główny budynek Przedszkola</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p>Jesteśmy placówką, która zapewnia*/
/*                                 dziecku ciepłą rodzinną atmosferę, która pomoże przezwyciężyć tęsknotę za*/
/*                                 domem. Częste spacery, zabawy na świeżym powietrzu, ćwiczenia ogólnorozwojowe*/
/*                                 pozwalają dzieciom na prawidłowy rozwój fizyczny. Ciekawe zajęcia dydaktyczne*/
/*                                 prowadzone z wykorzystaniem różnorodnych form i metod rozwijają sferę*/
/*                                 intelektualną naszych dzieci.</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6 col-md-4">*/
/*                                     <div class="thumbnail">*/
/*                                         <img src="images/about-us-images/4.jpg" alt="zdjęcie sala">*/
/*                                         <div class="caption">*/
/*                                             <p>sala dydaktyczna</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6 col-md-4">*/
/*                                     <div class="thumbnail">*/
/*                                         <img src="images/about-us-images/5.jpg" alt="zdjęcie korytarz">*/
/*                                         <div class="caption">*/
/*                                             <p>główny korytarz z szatnią</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6 col-md-4">*/
/*                                     <div class="thumbnail">*/
/*                                         <img src="images/about-us-images/6.jpg" alt="zdjęcie sala">*/
/*                                         <div class="caption">*/
/*                                             <p>sala dydaktyczna</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <span id="plan_dnia"></span>*/
/*                             <p>Promujemy uzdolnienia i zainteresowania naszych*/
/*                                 wychowanków poprzez udział w konkursach międzyprzedszkolnych,*/
/*                                 ogólnopolskich, regionalnych (patrz osiągnięcia).</p>*/
/*                             <p style='text-align:center'><b>Przedszkole liczy*/
/*                                     5 oddziałów.<br>*/
/*                                     Czynne jest w*/
/*                                     godzinach 6:00-17:00</b></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row-green" id="plan_dnia">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-primary animated bounceInRight">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Plan dnia w naszym Przedszkolu</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <ul>*/
/*                                 <li><b>6:00-8:30</b></li>*/
/*                                 <ul>*/
/*                                     <li>-schodzenie się dzieci, indywidualne rozmowy nauczycieli z dziećmi</li>*/
/*                                     <li>-indywidualne zajęcia korekcyjno-wyrównawcze z poszczególnymi dziećmi</li>*/
/*                                     <li>-swobodna zabawa w kącikach zainteresowań</li>*/
/*                                 </ul>*/
/*                                 <li><b>8:30-9:00</b></li>*/
/*                                 <ul>*/
/*                                     <li>-śniadanie</li>*/
/*                                     <li>-zajęcia zintegrowane</li>*/
/*                                     <li>-zajęcia dodatkowe wg zainteresowań dziecka wg propozycji rodziców np język angielski</li>*/
/*                                 </ul>*/
/*                                 <li><b>10:30- 10:45</b></li>*/
/*                                 <ul>*/
/*                                     <li>-II śniadanie</li>*/
/*                                 </ul>*/
/*                                 <li><b>10:45- 11:30</b></li>*/
/*                                 <ul>*/
/*                                     <li>-dowolne zabawy dzieci wg zainteresowań</li>*/
/*                                     <li>-spacer w okolicy przedszkola</li>*/
/*                                     <li>-zabawy na powietrzu w ogrodzie przedszkolnym</li>*/
/*                                     <li>-wycieczki piesze w pobliżu przedszkola</li>*/
/*                                 </ul>*/
/*                                 <li><b>11:30-12:00</b></li>*/
/*                                 <ul>*/
/*                                     <li>-obiad</li>*/
/*                                 </ul>*/
/*                                 <li><b>12:00- 13:30</b></li>*/
/*                                 <ul>*/
/*                                     <li>-zajęcia zintegrowane</li>*/
/*                                     <li>-indywidualna praca korekcyjno-wyrównawcza</li>*/
/*                                     <li>-indywidualne zajęcia rozwijające zainteresowania i uzdolnienia dzieci</li>*/
/*                                     <li>-swobodna zabawa w kącikach zainteresowań</li>*/
/*                                 </ul>*/
/*                                 <li><b>14:00</b></li>*/
/*                                 <ul>*/
/*                                     <li>-podwieczorek</li>*/
/*                                 </ul>*/
/*                                 <li><b>14:00-17:00</b>	</li>*/
/*                                 <ul>*/
/*                                     <li>-dowolne zabawy dzieci w salach dydaktycznych lub na podwórku, przedszkolnym, rozchodzenie się dzieci do domu.</li>*/
/*                                 </ul>*/
/*                             </ul>*/
/*                             <span id="zywienie"></span>*/
/*                             <p style="text-align:center"><b>Dzieci odbierane są tylko przez rodziców lub osoby upoważnione pisemnie</b>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row-blue" id="zywienie">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success animated bounceInLeft">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Żywienie w naszym Przedszkolu</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             W naszej przedszkolnej kuchni przygotowujemy domowe posiłki. Podajemy dzieciom pokarmy zawierające najwyższe wartości odżywcze. Menu jest oparte na zbożach pełnoziarnistych, sezonowych warzywach i owocach, roślinach strączkowych, nasionach, pestkach i olejach tłoczonych na zimno. Nie używa się tu rafinowanych produktów. Żadnych kostek rosołowych, glutaminianów sodu .Stopniowo staramy się ograniczać ilość soli i cukru dodawaną do potraw.*/
/*                             Panie kucharki same robią domowe pierogi, racuchy, naleśniki, wykonujemy świeże surówki z warzyw i sałatki owocowe. Każdego dnia dzieci jedzą trzy smaczne posiłki: śniadanie, obiad, podwieczorek. Stanowią one Âž dziennego zapotrzebowania dziecka w wieku przedszkolnym na białko, węglowodany, tłuszcze i witaminy (zgodnie z normami Instytutu Żywności i Żywienia oraz Instytutu Matki i Dziecka).*/
/*                             Posiłki mają być zdrowe, smaczne i różnorodne uwzględniając sezonowość niektórych potraw. To właśnie okres przedszkola jest czasem, kiedy dzieci powinny nauczyć się zdrowo jeść. Przyzwyczajenie do posiłków spożywanych w okresie dzieciństwa pozostaje na całe dorosłe życie i procentuje dobrym zdrowiem na lata.<br>*/
/* <pre>*/
/* Kiedy dziecko rano wstanie,*/
/* najpierw musi zjeść śniadanie,*/
/* kromkę chleba z świeżym jajkiem*/
/* Na obiadek zalewajkę,*/
/* drugie danie:*/
/* schab pieczony, ogóreczek pokrojony*/
/* i ziemniaczki z sosem zdrowym,*/
/* nie kupionym, lecz domowym.*/
/* </pre>*/
/*       <pre>*/
/* Kompot z śliwką lub z jabłuszkiem,*/
/* po obiedzie przegryź gruszkę*/
/* (a gdy mięsa nie jesz wcale,*/
/* to fasolę włóż na talerz).*/
/* </pre>*/
/*       <pre>*/
/* Na kolację,*/
/* tuż przed spaniem,*/
/* nie jedz tyle co na śniadanie,*/
/* coś lekkiego, może płatki*/
/* zastanówcie no się, dziatki.*/
/* </pre>*/
/*                         </div>*/
/*                         <span id="pierwszy_dzien"></span>*/
/*                         <div class="panel-footer"><p style="text-align:right">Autor:Jolanta Sawicka</p></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row-green">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-primary animated bounceInRight">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Pierwszy dzień w Przedszkolu</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <b>,,Najtrudniej jest pierwszy raz wyfrunąć z gniazdka..’’</b><br>*/
/*                             .. .  więc pomóżmy naszym pociechom najlepiej  jak potrafimy  ułatwić start w samodzielność. Rodzice przede wszystkim powinni być świadomi, że dziecku w przedszkolu nic złego nie grozi, nikt go tam nie chce skrzywdzić, ponadto przedszkole jest miejscem gdzie dziecko szybciej rozwija swoją sprawność, nabywa umiejętności, które pozwolą mu na lepszy start w kolejny etap życia, jakim jest szkoła. Co robić a czego nie wolno robić:<br>*/
/*                             <ul>*/
/*                                 <li>Dajmy rano dziecku czas na spokojne wstanie z łóżka, nie wprowadzajmy atmosfery nerwowości.</li>*/
/*                                 <li>Utwierdzajmy nasze dziecko w przekonaniu że jest mądre, odważne, że jesteśmy z niego dumni, znajdźmy takie argumenty, które zmotywują go pozytywnie i utwierdzą w poczuciu własnej wartości.</li>*/
/*                                 <li>Przy pożegnaniu rodzic powinien być pogodny, uśmiechnięty nie powinien okazywać smutku, niepokoju (dzieci są bardzo dobrymi obserwatorami) Pożegnanie powinno być krótkie.</li>*/
/*                                 <li>Rozmawiajmy z dzieckiem o pobycie w przedszkolu tak jakby to była jego praca, doceńmy jego wysiłek i mówmy mu o tym.</li>*/
/*                                 <li>Każdy rodzic ma wątpliwości, niepokoi go wiele rzeczy i to jest zrozumiałe, na wiele godzin jest pozbawiony kontroli nad dzieckiem, ale nie należy rozmawiać o tych wątpliwościach przy dziecku.</li>*/
/*                                 <li>Nie wolno zaglądać po pożegnaniu do sali, by sprawdzić czy dziecko się bawi. Jeśli nasza pociecha to zauważy, resztę dnia spędzi przy drzwiach, bo skoro mama zajrzała raz, to może jeszcze raz zajrzy.</li>*/
/*                                 <li>Do przedszkola nie dajemy dziecku słodyczy (ma przecież zapewnione posiłki)  jeśli już chcemy dać, np. cukierki – wtedy w takiej ilości, aby wystarczyło dla wszystkich dzieci w grupie</li>*/
/*                                 <li>Jeżeli dziecko przynosi zabawkę z domu (oprócz zabawek militarnych ) musimy liczyć się z tym (i odpowiednio uprzedzić dziecko), że zabawka może ulec uszkodzeniu</li>*/
/*                                 <li>Nie należy ulegać maleństwu, jeżeli płacze, tupie nogami i chce zostać w domu  „jeszcze tylko dziś" - to tylko próba sił. Jeżeli dziecko wymusi pozostanie w domu, rodzic przegrał a sytuacja będzie się powtarzać.</li>*/
/*                                 <li>Nie przedłużajmy weekendowego pobytu u babci to wydłużać będzie adaptację dziecka do przedszkola.</li>*/
/*                                 <li>Kochani rodzice najważniejszymi warunkami adaptacji dziecka do przedszkola jest wasza miłość do niego, o której dziecko musi wiedzieć oraz  przekonanie dziecka, że zawsze, absolutnie zawsze będzie odebrane z przedszkola, że nikt nie zostawia go na długo ,  by dziecko przekonało się o tym musi wielokrotnie przeżyć rozstania i szczęśliwe powroty do domu. Trzeba nam dorosłym uzbroić się w cierpliwość i wyjątkową delikatność w tym okresie.</li>*/
/*                                 <li>Stanowczość rodziców to  najważniejsza kwestia.</li>*/
/*                             </ul>*/
/*                              Pamiętaj, że nawet jeśli znajdziesz idealne przedszkole i dobrze przygotujesz dziecko, i tak Twój maluch ma prawo wyrażać sprzeciw i niezadowolenie - w końcu w jego życiu zaszła radykalna zmiana i potrzeba czasu, aby ją zaakceptował. Jeśli przetrwacie pierwszy miesiąc, dalej będzie już z górki i tylko patrzeć jak Twój maluch z przejęciem opowie Ci o swych pierwszych przyjaźniach, z dumą pokaże zdjęcia z Balu Karnawałowego, a Tobie ze wzruszenia zakręci się łza w oku na występach z okazji Dnia Matki !*/
/*                         </div>*/
/*                         <span id="publikacje"></span>*/
/*                         <div class="panel-footer"><p style="text-align:right">Autor:Janina Jęczalik</p></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row-blue">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success animated bounceInLeft">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Nasze publikacje</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <p>referat bajki psychoterapeutyczne: <a href="publikacje/referatbajkipsychoterapeutyczne.doc">otwórz</a></p>*/
/*                             <p>referat patriotyzm: <a href="publikacje/referatpatriotyzm.doc">otwórz</a></p>*/
/*                             <p>referat jak pomoc dziecku nadpobudliwemu: <a href="publikacje/Jakpomocdzieckunadpobudliwemu.doc">otwórz</a></p>*/
/*                             <p>Bajka najlepszym lekarstwem na dzieciece problemy: <a href="publikacje/Bajkanajlepszymlekarstwemnadziecieceproblemy.doc">otwórz</a></p>*/
/*                             <p>Dziecięce lęki: <a href="publikacje/Ddziecieceleki.doc">otwórz</a></p>*/
/*                             <p>Kochani rodzice !: <a href="publikacje/Kochanirodzice.doc">otwórz</a></p>*/
/*                             <p>Poczytaj mi mamo: <a href="publikacje/Poczytajmimamo.doc">otwórz</a></p>*/
/*                             <p>Zajęcia plastyczne a rozwój dziecka: <a href="publikacje/Zajeciaplastycznearozwojdziecka.doc">otwórz</a></p>*/
/*                             <p>Wpływ programów telewizyjnych na rozwój i zachowanie dzieci przedszkolnych: <a href="publikacje/wplywprogramowtelewizyjnychnarozwojizachowaniedzieciprzedszkolnych.doc ">otwórz</a></p>*/
/*                             <p>jak powstaje dziecieca agresja: <a href="publikacje/jakpowstajedzieciecaagresja.doc ">otwórz</a></p>*/
/*                             <p>jak pracowac z dzieckiem nadpobudliwym psychoruchowo: <a href="publikacje/jakpracowaczdzieckiemnadpobudliwympsychoruchowo.doc ">otwórz</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row-green" id="osiagniecia">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title ">nasze osiągnięcia</h3>*/
/*                         </div>*/
/*                         <div class="panel-body animated bounceInRight">*/
/*                             <h3 id="osiagniecia1213">Nasze osiągnięcia w roku szkolnym 2012/2013</h3>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1213/12131.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1213/12132.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1213/12133.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1213/12134.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1213/12135.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1213/12136.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1213/12137.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1213/12138.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <hr id="osiagniecia1314">*/
/*                             <h3>Nasze osiągnięcia w roku szkolnym 2013/2014</h3>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13141.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13142.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13143.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13144.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13145.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13146.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13147.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13148.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/13149.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/131410.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/131411.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/131412.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/131413.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/131414.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1314/131415.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <hr id="osiagniecia1415">*/
/*                             <h3 >Nasze osiągnięcia w roku szkolnym 2014/2015</h3>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14151.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14152.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14153.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14154.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14155.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14156.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14157.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14158.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/14159.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/141510.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/141511.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/141512.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-6 col-md-3">*/
/*                                     <a href="#" class="thumbnail">*/
/*                                         <img src="images/dyplomy/1415/141513.jpg" alt="dyplom">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <hr id="osiagniecia1516">*/
/*                             <h3 >Nasze osiągnięcia w roku szkolnym 2015/2016</h3>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li role="presentation" class="active"><a href="#">STRONA GŁÓWNA</a></li>*/
/*                         <li role="presentation"><a href="#">O NAS</a></li>*/
/*                         <li role="presentation"><a href="#">DLA RODZICÓW</a></li>*/
/*                         <li role="presentation"><a href="#">PUBLIKACJE</a></li>*/
/*                         <li role="presentation"><a href="#">OSIĄGNIĘCIA</a></li>*/
/*                         <li role="presentation"><a href="#">GALERIA</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div><!--end row-->*/
/*             <div class="row">*/
/*                 <div class="col-md-12 footer-copy">*/
/*                     Copyright © <a href="http://www.przedszkole3lancut.pl">Przedszkole Miejskie nr3 w Łańcucie</a><br>*/
/*                     realizacja: Karol Skóra*/
/*                 </div>*/
/*             </div><!--end row-->*/
/*         </div>*/
/*     </footer>*/
/* */
/* {% endblock %}*/
