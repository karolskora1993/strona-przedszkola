<?php

/* ::index.html.twig */
class __TwigTemplate_690b193143c06d03a892243646b101efb2982584e8109d3d9fe5d56bc353b213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "::index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a39cd305d5c89af57787267c2d9f161bdc246de50ddd9c63c6ee27e334ae85a3 = $this->env->getExtension("native_profiler");
        $__internal_a39cd305d5c89af57787267c2d9f161bdc246de50ddd9c63c6ee27e334ae85a3->enter($__internal_a39cd305d5c89af57787267c2d9f161bdc246de50ddd9c63c6ee27e334ae85a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39cd305d5c89af57787267c2d9f161bdc246de50ddd9c63c6ee27e334ae85a3->leave($__internal_a39cd305d5c89af57787267c2d9f161bdc246de50ddd9c63c6ee27e334ae85a3_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_be4efe9142161e81443f38d71d291f503053ae6c41547b256b163fe4516b99ef = $this->env->getExtension("native_profiler");
        $__internal_be4efe9142161e81443f38d71d291f503053ae6c41547b256b163fe4516b99ef->enter($__internal_be4efe9142161e81443f38d71d291f503053ae6c41547b256b163fe4516b99ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"row row-blue\" id=\"film\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title \">Film promujący nasze Przedszkole</h3>
                        </div>
                        <div class=\"panel-body animated bounceIn\">
                            <video  controls poster=\"images/poster.png\">
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
    <div class=\"row row-green\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-8\">
                <div class=\"panel-body\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 28
            echo "                        <div class=\"panel panel-success animated bounceInLeft\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "text", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"panel-footer\"><p style=\"text-align:right\">Autor:";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "</p></div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>
                <span id=\"o_nas\"></span>
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
    <div class=\"row row-blue\" id=\"o_nas2\">
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
    <div class=\"row row-green\" id=\"plan_dnia\">
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
    <div class=\"row row-blue\" id=\"zywienie\">
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
    <div class=\"row row-green\">
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
    <div class=\"row row-blue\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success animated bounceInLeft\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Nasze publikacje</h3>
                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 312
            echo "                                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo ": <a href=\"/web/files/articles/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "article", array()), "html", null, true);
            echo "\">otwórz</a></p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                            <p>referat bajki psychoterapeutyczne: <a href=\"/web/files/articles/referatbajkipsychoterapeutyczne.doc\">otwórz</a></p>
                            <p>referat patriotyzm: <a href=\"/web/files/articles/referatpatriotyzm.doc\">otwórz</a></p>
                            <p>referat jak pomoc dziecku nadpobudliwemu: <a href=\"/web/files/articles/Jakpomocdzieckunadpobudliwemu.doc\">otwórz</a></p>
                            <p>Bajka najlepszym lekarstwem na dzieciece problemy: <a href=\"/web/files/articles/Bajkanajlepszymlekarstwemnadziecieceproblemy.doc\">otwórz</a></p>
                            <p>Dziecięce lęki: <a href=\"/web/files/articles/Ddziecieceleki.doc\">otwórz</a></p>
                            <p>Kochani rodzice !: <a href=\"/web/files/articles/Kochanirodzice.doc\">otwórz</a></p>
                            <p>Poczytaj mi mamo: <a href=\"/web/files/articles/Poczytajmimamo.doc\">otwórz</a></p>
                            <p>Zajęcia plastyczne a rozwój dziecka: <a href=\"/web/files/articles/Zajeciaplastycznearozwojdziecka.doc\">otwórz</a></p>
                            <p>Wpływ programów telewizyjnych na rozwój i zachowanie dzieci przedszkolnych: <a href=\"/web/files/articles/wplywprogramowtelewizyjnychnarozwojizachowaniedzieciprzedszkolnych.doc \">otwórz</a></p>
                            <p>jak powstaje dziecieca agresja: <a href=\"/web/files/articles/jakpowstajedzieciecaagresja.doc \">otwórz</a></p>
                            <p>jak pracowac z dzieckiem nadpobudliwym psychoruchowo: <a href=\"/web/files/articles/jakpracowaczdzieckiemnadpobudliwympsychoruchowo.doc \">otwórz</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row row-green\" id=\"osiagniecia\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title \">nasze osiągnięcia</h3>
                        </div>
                        <div class=\"panel-body animated bounceInRight\" id=\"osiagniecia\">

                            ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolYears"]) ? $context["schoolYears"] : $this->getContext($context, "schoolYears")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 342
            echo "                                <div class=\"row\">
                                    <h3 id=\"";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($context["year"], "schoolYear", array()), "html", null, true);
            echo "\">Nasze osiągnięcia ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["year"], "schoolYear", array()), "html", null, true);
            echo " </h3>
                                    <br>
                                    ";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["year"], "achievements", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["achievement"]) {
                // line 346
                echo "                                        <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                                            <a href=\"#\" class=\"thumbnail\" target=\"_blank\">
                                                <img src=\"/images/achievements/";
                // line 348
                echo twig_escape_filter($this->env, $this->getAttribute($context["achievement"], "image", array()), "html", null, true);
                echo "\" alt=\"dyplom\">
                                            </a>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['achievement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row row-blue\" id=\"galeria\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success animated bounceInLeft\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title \">nasze galerie</h3>
                        </div>
                        <div class=\"panel-body\">

                            ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolYears"]) ? $context["schoolYears"] : $this->getContext($context, "schoolYears")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 372
            echo "                                <div class=\"row\">
                                    <h3 id=\"galeria";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute($context["year"], "schoolYear", array()), "html", null, true);
            echo "\">Nasze galerie ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["year"], "schoolYear", array()), "html", null, true);
            echo " </h3>
                                    <br>
                                    ";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["year"], "galleries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 376
                echo "                                        <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-12\">
                                            <div class=\"thumbnail\">
                                                <img src=\"/images/galleries/";
                // line 378
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "image", array()), "html", null, true);
                echo "\" alt=\"obrazek galerii\">
                                                <div class=\"caption\">
                                                    <h5>";
                // line 380
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
                echo "</h5>
                                                    </br>
                                                    <p><a href=\"";
                // line 382
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "href", array()), "html", null, true);
                echo "\" class=\"btn btn-primary\" role=\"button\" target=\"_blank\">wyświetl</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_be4efe9142161e81443f38d71d291f503053ae6c41547b256b163fe4516b99ef->leave($__internal_be4efe9142161e81443f38d71d291f503053ae6c41547b256b163fe4516b99ef_prof);

    }

    public function getTemplateName()
    {
        return "::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 389,  514 => 387,  503 => 382,  498 => 380,  493 => 378,  489 => 376,  485 => 375,  478 => 373,  475 => 372,  471 => 371,  452 => 354,  445 => 352,  435 => 348,  431 => 346,  427 => 345,  420 => 343,  417 => 342,  413 => 341,  384 => 314,  373 => 312,  369 => 311,  94 => 38,  85 => 35,  80 => 33,  74 => 30,  70 => 28,  66 => 27,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block content %}*/
/*     <div class="row row-blue" id="film">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title ">Film promujący nasze Przedszkole</h3>*/
/*                         </div>*/
/*                         <div class="panel-body animated bounceIn">*/
/*                             <video  controls poster="images/poster.png">*/
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
/*     <div class="row row-green">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-8">*/
/*                 <div class="panel-body">*/
/*                     {% for advert in adverts %}*/
/*                         <div class="panel panel-success animated bounceInLeft">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">{{ advert.title }}</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 {{ advert.text }}*/
/*                             </div>*/
/*                             <div class="panel-footer"><p style="text-align:right">Autor:{{ advert.author }}</p></div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <span id="o_nas"></span>*/
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
/*     <div class="row row-blue" id="o_nas2">*/
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
/*     <div class="row row-green" id="plan_dnia">*/
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
/*     <div class="row row-blue" id="zywienie">*/
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
/*     <div class="row row-green">*/
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
/*     <div class="row row-blue">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success animated bounceInLeft">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Nasze publikacje</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             {% for article in articles %}*/
/*                                 <p>{{ article.description }}: <a href="/web/files/articles/{{ article.article }}">otwórz</a></p>*/
/*                             {% endfor %}*/
/*                             <p>referat bajki psychoterapeutyczne: <a href="/web/files/articles/referatbajkipsychoterapeutyczne.doc">otwórz</a></p>*/
/*                             <p>referat patriotyzm: <a href="/web/files/articles/referatpatriotyzm.doc">otwórz</a></p>*/
/*                             <p>referat jak pomoc dziecku nadpobudliwemu: <a href="/web/files/articles/Jakpomocdzieckunadpobudliwemu.doc">otwórz</a></p>*/
/*                             <p>Bajka najlepszym lekarstwem na dzieciece problemy: <a href="/web/files/articles/Bajkanajlepszymlekarstwemnadziecieceproblemy.doc">otwórz</a></p>*/
/*                             <p>Dziecięce lęki: <a href="/web/files/articles/Ddziecieceleki.doc">otwórz</a></p>*/
/*                             <p>Kochani rodzice !: <a href="/web/files/articles/Kochanirodzice.doc">otwórz</a></p>*/
/*                             <p>Poczytaj mi mamo: <a href="/web/files/articles/Poczytajmimamo.doc">otwórz</a></p>*/
/*                             <p>Zajęcia plastyczne a rozwój dziecka: <a href="/web/files/articles/Zajeciaplastycznearozwojdziecka.doc">otwórz</a></p>*/
/*                             <p>Wpływ programów telewizyjnych na rozwój i zachowanie dzieci przedszkolnych: <a href="/web/files/articles/wplywprogramowtelewizyjnychnarozwojizachowaniedzieciprzedszkolnych.doc ">otwórz</a></p>*/
/*                             <p>jak powstaje dziecieca agresja: <a href="/web/files/articles/jakpowstajedzieciecaagresja.doc ">otwórz</a></p>*/
/*                             <p>jak pracowac z dzieckiem nadpobudliwym psychoruchowo: <a href="/web/files/articles/jakpracowaczdzieckiemnadpobudliwympsychoruchowo.doc ">otwórz</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row row-green" id="osiagniecia">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title ">nasze osiągnięcia</h3>*/
/*                         </div>*/
/*                         <div class="panel-body animated bounceInRight" id="osiagniecia">*/
/* */
/*                             {% for year in schoolYears %}*/
/*                                 <div class="row">*/
/*                                     <h3 id="{{ year.schoolYear }}">Nasze osiągnięcia {{ year.schoolYear }} </h3>*/
/*                                     <br>*/
/*                                     {% for achievement in year.achievements %}*/
/*                                         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*                                             <a href="#" class="thumbnail" target="_blank">*/
/*                                                 <img src="/images/achievements/{{ achievement.image}}" alt="dyplom">*/
/*                                             </a>*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row row-blue" id="galeria">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success animated bounceInLeft">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title ">nasze galerie</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/* */
/*                             {% for year in schoolYears %}*/
/*                                 <div class="row">*/
/*                                     <h3 id="galeria{{ year.schoolYear }}">Nasze galerie {{ year.schoolYear }} </h3>*/
/*                                     <br>*/
/*                                     {% for gallery in year.galleries %}*/
/*                                         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">*/
/*                                             <div class="thumbnail">*/
/*                                                 <img src="/images/galleries/{{ gallery.image }}" alt="obrazek galerii">*/
/*                                                 <div class="caption">*/
/*                                                     <h5>{{ gallery.name }}</h5>*/
/*                                                     </br>*/
/*                                                     <p><a href="{{ gallery.href }}" class="btn btn-primary" role="button" target="_blank">wyświetl</a></p>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/