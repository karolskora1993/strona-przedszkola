<?php

/* ::index.html.twig */
class __TwigTemplate_9393471f23320cb53b27de9570ac26e2b4edc7e8fd34cc98c6da06bc4e64dcd8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"row row-blue\" id=\"film\">
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) ? $context["adverts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 30
            echo "                        <div class=\"panel panel-success animated bounceInLeft\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                ";
            // line 35
            echo $this->getAttribute($context["advert"], "text", array());
            echo "
                            </div>
                            <div class=\"panel-footer\"><p style=\"text-align:right\">Autor:";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "</p></div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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

    <div class=\"row row-green\" id=\"program_wychowawczy\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-primary animated bounceInRight\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Program wychowawczy</h3>
                        </div>
                        <div class=\"panel-body\">
                            <p>&nbsp;</p>

                            <p style=\"text-align: center;\"><span style=\"font-size:18px\"><strong>Program wychowawczy</strong></span></p>

                            <p style=\"text-align: center;\"><span style=\"font-size:18px\"><strong>Przedszkola Miejskiego Nr 3 w Łańcucie </strong></span></p>

                            <p style=\"margin-left:21.3pt\"><em>&bdquo;Nie psuj mnie. Dobrze wiem, że nie powinienem mieć tego wszystkiego, czego się domagam. To tylko pr&oacute;ba sił z mojej strony. Nie b&oacute;j się stanowczości. Właśnie tego potrzebuję &ndash; poczucia bezpieczeństwa. Nie b&oacute;j się miłości. Nigdy.&rdquo;</em></p>

                            <p style=\"margin-left: 18pt; text-align: right;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/Fragm. &bdquo;Prośba dziecka&rdquo; Janusz Korczak /</em></p>

                            <p>&nbsp;</p>

                            <p><strong>Spis treści </strong></p>

                            <p><strong>Wstęp </strong></p>

                            <p>I. Gł&oacute;wne prawa dziecka uznawane w przedszkolu.</p>

                            <p>II. Zadania przedszkola w zakresie wychowania.</p>

                            <p>III. Zadania wychowawcze nauczycieli.</p>

                            <p>IV. Zadania wychowawcze rodzic&oacute;w.</p>

                            <p>V. Kodeks Przedszkolaka &ndash; zasady obowiązujące w &bdquo;małej społeczności&rdquo; grupy, przedszkola.</p>

                            <p>VI. System motywujący do grzecznego zachowania.</p>

                            <p>VII. Wskaz&oacute;wki dla nauczycieli i rodzic&oacute;w do realizacji programu wychowawczego przedszkola&nbsp; -&nbsp; kilka praktycznych rad.</p>

                            <p>VIII. Forma upowszechnienia programu wychowawczego w przedszkolu.</p>

                            <p>IX. Ewaluacja programu</p>

                            <p><strong>Zakończenie</strong></p>

                            <p>&nbsp;</p>

                            <p><strong>Wstęp </strong></p>

                            <p>Proces wychowania dziecka&nbsp; przebiega &nbsp;&nbsp;na&nbsp; r&oacute;żnych&nbsp; płaszczyznach&nbsp; i jest skutkiem wielu oddziaływań wychowawczych. Rodzice i nauczyciele doskonale wiedzą, że&nbsp; o wiele łatwiej jest kształcić&nbsp; i wychowywać&nbsp; dzieci, gdy&nbsp; istnieje wsp&oacute;łdziałanie&nbsp; r&oacute;żnych&nbsp; środowisk, w&nbsp; kt&oacute;rych dziecko się wychowuje. Dlatego tak ważnym jest przestrzeganie postanowień najważniejszych dokument&oacute;w gwarantujących dzieciom realizację ich praw, a przede wszystkim prawo do wychowania w warunkach gwarantujących ukształtowanie prawidłowej postawy dobrego obywatela, członka rodziny, przedszkolaka, ucznia, kolegi.</p>

                            <p>Program wychowawczy przedszkola opiera się na gł&oacute;wnych założeniach Konwencji o Prawach Dziecka.</p>

                            <p><strong>Uznajemy, że:</strong></p>

                            <p style=\"margin-left:18pt\">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dziecko jest samodzielnym podmiotem &ndash; ze względu na swoją niedojrzałość psychiczną &nbsp;&nbsp;&nbsp;i fizyczną wymaga szczeg&oacute;lnej opieki i ochrony prawnej,</p>

                            <p style=\"margin-left:18pt\">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dziecko wymaga poszanowania jego tożsamości, prywatności i godności osobistej,</p>

                            <p style=\"margin-left:18pt\">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rodzina jest najlepszym środowiskiem wychowawczym dziecka,</p>

                            <p style=\"margin-left:18pt\">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; państwo wspiera rodzinę w wychowaniu dziecka, a przedszkole jest instytucja wspomagającą państwo w wykonaniu tego zadania.</p>

                            <p><strong>Uznajemy, że:</strong></p>

                            <p>- rodzice mają prawo do wychowania dzieci zgodnie z własnymi przekonaniami. Wychowanie to powinno uwzględniać stopień dojrzałości dziecka,</p>

                            <p>- przedszkole pełni w swym oddziaływaniu wychowawczym funkcję wspomagającą rodzic&oacute;w.</p>

                            <p>&nbsp;</p>

                            <p><strong>I. &nbsp;Gł&oacute;wne prawa dziecka uznawane &nbsp;&nbsp;&nbsp;w przedszkolu.</strong></p>

                            <p>Tworząc program wychowawczy przedszkola kierowaliśmy się poniższymi zasadami:</p>

                            <p><strong>Zasada&nbsp; dobra dziecka</strong>, zgodnie z kt&oacute;rą wszystkie działania podejmowane są w najlepiej pojętym interesie dziecka.</p>

                            <p><strong>Zasada&nbsp; r&oacute;wności, </strong>zgodnie z kt&oacute;rą wszystkie dzieci uczęszczające do przedszkola, niezależnie od stanu psychicznego, fizycznego, materialnego są&nbsp; traktowane&nbsp; tak samo.</p>

                            <p><strong>Zasada ujednolicenia oddziaływań wychowawczych</strong>, zgodnie z kt&oacute;rą zadaniem przedszkola jest działanie mające na celu uświadamianie rodzicom ich roli w wychowaniu dziecka i pozyskanie rodzic&oacute;w do wsp&oacute;łpracy.</p>

                            <p>Spośr&oacute;d wielu praw gwarantowanych w niniejszym programie wychowawczym uznajemy, &nbsp;&nbsp;&nbsp;że dziecko przede wszystkim&nbsp; ma :</p>

                            <p style=\"margin-left:18pt\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do życia i rozwoju,</p>

                            <p style=\"margin-left:18pt\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do swobody myśli, sumienia i wyznania,</p>

                            <p style=\"margin-left:18pt\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do wyrażania własnych pogląd&oacute;w,</p>

                            <p style=\"margin-left:18pt\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do wolności od przemocy fizycznej, psychicznej, nadużyć seksualnych &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i wszelkiego okrucieństwa,</p>

                            <p style=\"margin-left:18pt\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do wypoczynku i czasu wolnego,</p>

                            <p style=\"margin-left:18pt\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do godności i nietykalności osobistej .</p>

                            <p>Świadomość istnienia&nbsp; praw dziecka&nbsp; jest ważna, ale ważniejsze jest respektowanie tych praw przez wszystkich pracownik&oacute;w przedszkola, a także przez rodzic&oacute;w. Kierując się zasadą ujednolicenia oddziaływań wychowawczych opracowaliśmy&nbsp; zadania, jakie ma w tym zakresie przedszkole&nbsp; wsp&oacute;łdziałając z rodzicami.</p>

                            <p>&nbsp;</p>

                            <p><strong>II. Zadania przedszkola w zakresie wychowania.</strong></p>

                            <p style=\"margin-left:18pt\">1.&nbsp;&nbsp;&nbsp;&nbsp; Zbadać oczekiwania rodzic&oacute;w&nbsp; w zakresie metod wychowawczych.</p>

                            <p style=\"margin-left:18pt\">2.&nbsp;&nbsp;&nbsp;&nbsp; Poznać&nbsp; i stosować metody skutecznego oddziaływania wychowawczego.</p>

                            <p style=\"margin-left:18pt\">3.&nbsp;&nbsp;&nbsp;&nbsp; Systematycznie przeprowadzać zajęcia profilaktyczno-edukacyjne uczące dzieci jak radzić sobie w trudnych sytuacjach oraz chroniące je&nbsp; przed niebezpieczeństwem.</p>

                            <p style=\"margin-left:18pt\">4.&nbsp;&nbsp;&nbsp;&nbsp; Wsp&oacute;łdziałać z instytucjami oraz specjalistami w celu otoczenia opieką i&nbsp; terapią&nbsp; dzieci dotkniętych przemocą.</p>

                            <p style=\"margin-left:18pt\">5.&nbsp;&nbsp;&nbsp;&nbsp; Wsp&oacute;łdziałać z rodzicami wykorzystując skuteczne środki komunikacji interpersonalnej&nbsp; dla wsp&oacute;lnego rozwiązywania problem&oacute;w wychowawczych.</p>

                            <p style=\"margin-left:18pt\">6.&nbsp;&nbsp;&nbsp;&nbsp; Wspierać działania wychowawcze rodzic&oacute;w.</p>

                            <p style=\"margin-left:18pt\">7.&nbsp;&nbsp;&nbsp;&nbsp; Organizować dostosowane do możliwości dzieci sytuacje edukacyjne wyrabiające umiejętności społeczne dzieci w zakresie porozumiewanie się z dorosłymi i dziećmi, zgodnego funkcjonowania w zabawie i w sytuacjach zadaniowych.</p>

                            <p style=\"margin-left:18pt\">8.&nbsp;&nbsp;&nbsp;&nbsp; Stosować system wzmacniania&nbsp;&nbsp; pozytywnych zachowań dzieci.</p>

                            <p style=\"margin-left:18pt\">9.&nbsp;&nbsp;&nbsp;&nbsp; Uczyć tolerancji i akceptacji &bdquo;inności&rdquo;.</p>

                            <p>&nbsp;</p>

                            <p><strong>III. Zadania wychowawcze nauczycieli. </strong></p>

                            <p style=\"margin-left:18pt\">1.&nbsp;&nbsp;&nbsp;&nbsp; Systematycznie poszerzać zakres swoich kompetencji wychowawczych, zwłaszcza umiejętności skutecznej komunikacji interpersonalnej.</p>

                            <p style=\"margin-left:18pt\">2.&nbsp;&nbsp;&nbsp;&nbsp; Poznać środowisko wychowawcze dziecka.</p>

                            <p style=\"margin-left:18pt\">3.&nbsp;&nbsp;&nbsp;&nbsp; Poznać oczekiwania rodzic&oacute;w&nbsp; wobec przedszkola.</p>

                            <p style=\"margin-left:18pt\">4.&nbsp;&nbsp;&nbsp;&nbsp; Tworzyć bezpieczną dla dziecka atmosferę warunkująca&nbsp; zdrowie fizyczne i psychiczne.</p>

                            <p style=\"margin-left:18pt\">5.&nbsp;&nbsp;&nbsp;&nbsp; Kształtować postawy wychowank&oacute;w zgodnie z normami określonymi w programie wychowawczym przedszkola.</p>

                            <p style=\"margin-left:18pt\">6.&nbsp;&nbsp;&nbsp;&nbsp; Stosować metody wychowawcze wzmacniające pozytywne zachowania dzieci oraz eliminować zachowania niepożądane zgodnie z obowiązującymi w przedszkolu zasadami.</p>

                            <p style=\"margin-left:18pt\">7.&nbsp;&nbsp;&nbsp;&nbsp; Ściśle wsp&oacute;łdziałać z rodziną dziecka w celu ujednolicenia oddziaływań wychowawczych.</p>

                            <p style=\"margin-left:18pt\">8.&nbsp;&nbsp;&nbsp;&nbsp; Przekazywać rodzicom informacje o stanie rozwoju dziecka według zaleceń określonych w warunkach realizacji podstawy programowej.</p>

                            <p style=\"margin-left:18pt\">9.&nbsp;&nbsp;&nbsp;&nbsp; Wzajemnie&nbsp; wspierać swoje działania w ramach pracy zespołowej nauczycieli.</p>

                            <p>&nbsp;</p>

                            <p><strong>IV. Zadania wychowawcze rodzic&oacute;w.</strong></p>

                            <p style=\"margin-left:18.15pt\">1.&nbsp;&nbsp;&nbsp; Wsp&oacute;łdziałać z nauczycielami w celu ujednolicenia oddziaływań wychowawczych i&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; utrwalania efekt&oacute;w pracy wychowawczej nauczycieli.</p>

                            <p style=\"margin-left:18.15pt\">2.&nbsp;&nbsp;&nbsp; Angażować się w proponowane przez przedszkole działania w celu usprawniania swoich kompetencji wychowawczych.&nbsp;</p>

                            <p style=\"margin-left:18.15pt\">3.&nbsp;&nbsp;&nbsp; Wspomagać dziecko w rozwoju według wskaz&oacute;wek udzielanych przez nauczycieli lub&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; specjalist&oacute;w.</p>

                            <p style=\"margin-left:18.15pt\">4.&nbsp;&nbsp;&nbsp; Przekazywać nauczycielom oraz dyrektorowi wnioski z obserwacji pracy przedszkola.</p>

                            <p>&nbsp;</p>

                            <p><strong>V. Kodeks Przedszkolaka &ndash; zasady obowiązujące w &bdquo;małej społeczności&rdquo; grupy, przedszkola</strong>.</p>

                            <p>&nbsp;</p>

                            <p><strong>1. Zasady zachowania się podczas posiłk&oacute;w</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                            <ul>
                                <li>Jemy w ciszy tj. nie mlaskamy, nie rozmawiamy, gdyż rozmowa w czasie jedzenia może być przyczyną zadławienia.</li>
                                <li>Jemy powoli - szybkie zjadanie &ndash;połykanie jedzenia jest nie zdrowe i nieeleganckie &nbsp;</li>
                                <li>Sztućcami i innym sprzętem posługujemy się bezpiecznie i kulturalnie, według ustalonych wzor&oacute;w.</li>
                                <li>Wycieramy usta serwetką i odkładamy ją na brzeg talerza.</li>
                                <li>Odchodząc od stołu cicho wstajemy i lekko odsuwamy krzesło, wychodzimy, stawiamy je z powrotem w to samo miejsce i m&oacute;wimy &bdquo;dziękuję&rdquo;.</li>
                            </ul>

                            <p>&nbsp;</p>

                            <p><strong>2. Zasady zachowania się w łazience</strong></p>

                            <p><strong>Mycie rąk</strong></p>

                            <ul>
                                <li>Podwijamy rękawy, aby się nie zamoczyły.</li>
                                <li>Moczymy ręce, aby rozpuściło się trochę mydło, kt&oacute;re usuwa brud.</li>
                                <li>Pocieramy namydlone ręce, by wytworzyć pianę tak, aby każdy palec był umyty.</li>
                                <li>Płuczemy ręce wodą, aby całkowicie zmyć mydło.</li>
                                <li>Otrząsamy ręce z wody nad zlewem, aby nie zamoczyć podłogi.</li>
                                <li>Wycieramy bardzo dokładnie dłonie.</li>
                                <li>Na właściwym wieszaku zawieszamy ręcznik lub ręcznik jednorazowy wyrzucamy do pojemnika.</li>
                                <li>Odwijamy rękawy.</li>
                                <li>Myjemy ręce:</li>
                            </ul>

                            <ul>
                                <li>&nbsp;zawsze przed posiłkami i po ich spożyciu,</li>
                                <li>&nbsp;zawsze po korzystaniu z toalety,</li>
                                <li>&nbsp;zawsze po powrocie z placu zabaw, spaceru, wycieczki,</li>
                                <li>&nbsp;w innych sytuacjach, kiedy są brudne (malowanie, lepienie, itd.)</li>
                            </ul>

                            <p>&nbsp;</p>

                            <p><strong>Mycie zęb&oacute;w</strong></p>

                            <ul>
                                <li>Do kubka wlewamy wodę.</li>
                                <li>Dwu-trzykrotnie płuczemy usta.</li>
                                <li>Wyciskamy pastę na szczoteczkę.</li>
                                <li>Myjemy zęby okrężnymi ruchami przypominającymi rysowanie małych k&oacute;łek.</li>
                                <li>Płuczemy jamę ustną kilkakrotnie wodą.</li>
                                <li>Płuczemy dokładnie szczoteczkę i kubek.</li>
                                <li>Wkładamy szczoteczkę do kubka do g&oacute;ry włosiem.</li>
                                <li>Kubek ze szczotką ustawiamy w wyznaczonym miejscu.</li>
                            </ul>

                            <p>&nbsp;</p>

                            <p><strong>Higiena potrzeb fizjologicznych</strong></p>

                            <ul>
                                <li>Korzystamy z toalety wyłącznie pojedynczo.</li>
                                <li>Zawsze po sobie spłukujemy toaletę.</li>
                            </ul>

                            <p style=\"margin-left:14.2pt\">&nbsp;</p>

                            <p><strong>3. Zasady zachowania się w szatni</strong></p>

                            <ul>
                                <li>Starannie układamy swoją odzież, buty ustawiamy &nbsp;na p&oacute;łce.</li>
                                <li>Pamiętamy o kolejności zakładania odzieży przed wyjściem na podw&oacute;rko (spodnie- jeśli są zmienne, buty, sweter, szalik, kurtka, czapka, rękawiczki).</li>
                                <li>Po powrocie z podw&oacute;rka, przed wejściem do budynku &ndash; otrzepujemy buty z piasku, błota, śniegu, a następnie wycieramy buty o wycieraczkę.</li>
                                <li>Przy rozbieraniu się &ndash; pamiętamy o kolejności zdejmowania odzieży (odwrotnie niż przy ubieraniu).</li>
                                <li>Starannie składamy odzież i odkładamy na swoją p&oacute;łkę.</li>
                            </ul>

                            <p style=\"margin-left:14.2pt\">&nbsp;</p>

                            <p><strong>4. Zasady zachowania się w sali zabaw</strong></p>

                            <ul>
                                <li>Używamy sł&oacute;w: proszę, przepraszam, dziękuję.</li>
                                <li>Bieganie w sali jest zabronione.</li>
                                <li>Dzielimy się zabawkami.</li>
                                <li>Staramy się m&oacute;wić umiarkowanym głosem.</li>
                                <li>Sprzątamy po sobie zabawki, po skończonej zabawie odkładamy je na miejsce.</li>
                                <li>Staramy się nie m&oacute;wić głośno gdy:</li>
                                <li>&nbsp;inni cicho pracują,</li>
                            </ul>

                            <ul>
                                <li>inni się bawią,</li>
                                <li>&nbsp;czytamy i słuchamy,</li>
                                <li>&nbsp;gdy inni odpoczywają.</li>
                            </ul>

                            <p style=\"margin-left:21.3pt\">&nbsp;</p>

                            <p><strong><u>Kodeks przedszkolaka </u></strong></p>

                            <ul>
                                <li>Wsp&oacute;lnie i zgodnie bawię&nbsp; się z dziećmi .</li>
                                <li>Potrafię czekać na swoją kolej podczas zabawy.</li>
                                <li>Szanuję cudzą własność.</li>
                                <li>Wiem, że praca innych jest trudem, kt&oacute;ry należy szanować i tego samego oczekuję od innych.</li>
                                <li>Do zabawy biorę tylko te zabawki, kt&oacute;rymi teraz będę się bawić, a po skończonej&nbsp; zabawie odłożę je na miejsce.</li>
                                <li>Bawię się tak, aby nie powodować zagrożenia i przykrości.</li>
                                <li>Pomagam innym: młodszym i mniej sprawnym dzieciom.</li>
                                <li>Pr&oacute;buję samodzielnie rozwiązywać sytuacje problemowe zgodnie z zasadami&nbsp;&nbsp; obowiązującymi w przedszkolu .</li>
                                <li>Stosuję formy grzecznościowe: proszę, dziękuję, przepraszam.</li>
                                <li>Wiem, że w przedszkolu jestem po to, aby nauczyć się wszystkiego co będzie mi potrzebne w szkole.</li>
                            </ul>

                            <p style=\"margin-left:21.3pt\">&nbsp;</p>

                            <p><strong>VI. System motywujący do grzecznego zachowania.</strong></p>

                            <p>1) pochwała indywidualna,</p>

                            <p>2) pochwała przed całą grupą,</p>

                            <p>3) pochwała przed rodzicami,</p>

                            <p>4) &nbsp;nagroda poprzez sprawienie dziecku przyjemności zabawę przez niego wybraną,</p>

                            <p>5) znaczek &bdquo;uśmiechniętego serduszka&rdquo; na tablicy grupowego systemu motywacji do nabywania zachowań pożądanych, znaczek &bdquo;Uśmiechniętej buzi&rdquo; wręczany do domu po zakończonym dla dziecka dniu w przedszkolu,</p>

                            <p>6) &bdquo;medal dobrej zabawy&rdquo; zawieszany na szyję.</p>

                            <p>&nbsp;</p>

                            <p><strong>&nbsp;Stosowane w przedszkolu konsekwencje za niepożądane zachowanie </strong></p>

                            <ul>
                                <li>kara naturalna &ndash; zadośćuczynienie wyrządzonej krzywdzie (przeproszenie, naprawienie),</li>
                                <li>odm&oacute;wienie dziecku nagrody,</li>
                                <li>czasowe odbieranie przyznanego przywileju,</li>
                            </ul>

                            <p style=\"margin-left:36pt\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &bdquo;krzesełko do myślenia&rdquo; chwilowe wykluczenie dziecka z zabawy w celu przemyślenia swojego postępowania.&nbsp;</p>

                            <p>&nbsp;</p>

                            <p><strong>VII. Wskaz&oacute;wki dla nauczycieli i rodzic&oacute;w do realizacji programu wychowawczego przedszkola&nbsp; -&nbsp; kilka praktycznych rad.</strong></p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Bądźcie&nbsp; konsekwentni, r&oacute;bcie to, co m&oacute;wicie&nbsp; i m&oacute;wcie o tym, co robicie.</p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Bądźcie świadomi, czego uczycie.</p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Bądźcie żywym przykładem właściwego działania.</p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Bądźcie dobrymi obserwatorami dzieci.</p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Dobrze poznajcie siebie i swoje możliwości.&nbsp;</p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Poł&oacute;żcie nacisk na pogłębianie swoich wiadomości i umiejętności.&nbsp;</p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Tw&oacute;rzcie atmosferę wzajemnego zaufania i szacunku.&nbsp;</p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Nie oczekujcie, że natychmiast wystąpi u dziecka pożądana umiejętność, zmiany wymagają czasu,</p>

                            <p style=\"margin-left:36pt\">&uuml;&nbsp; Bądźcie cierpliwi &ndash; pamiętajcie, że pośpiech szkodzi.</p>

                            <p>&nbsp;</p>

                            <p style=\"margin-left:14.2pt\">&nbsp;</p>

                            <p><strong>VIII. Formy upowszechniania programu wychowawczego przedszkola. </strong></p>

                            <p>1.&nbsp;&nbsp; Przedstawienie programu rodzicom na pierwszym zebraniu grupowym.</p>

                            <p>2.&nbsp;&nbsp; Zamieszczenie na stronie internetowej przedszkola w zakładce &bdquo;dla rodzic&oacute;w&rdquo;.</p>

                            <p>3.&nbsp;&nbsp; Udostępnienie wydruku programu (na prośbę rodzica).</p>

                            <p>4.&nbsp;&nbsp; Wywieszenie tablic z zasadami zachowań w salach zabaw.</p>

                            <p>&nbsp;</p>

                            <p><strong>IX. Ewaluacja programu </strong></p>

                            <p>Program zostanie poddany ewaluacji w cyklu rocznym. Sposoby ewaluacji:</p>

                            <p>1) ankieta dla rodzic&oacute;w(wybi&oacute;rczo)</p>

                            <p>2) arkusz obserwacji pracy nauczyciela,</p>

                            <p>3) arkusz obserwacji zachowań dzieci</p>

                            <p>4) analiza dokument&oacute;w przebiegu nauczania (dziennik, plany pracy nauczycieli, sprawozdania z realizacji pracy dydaktyczno- wychowawczej ).</p>

                            <p>Wnioski z realizacji programu określi dyrektor w raporcie z prowadzonego nadzoru pedagogicznego, w terminie do końca danego roku szkolnego. Wyniki i wnioski z realizacji programu zostaną uwzględnione w planowaniu działań wychowawczych w następnym roku szkolnym.</p>

                            <p><strong>Zakończenie </strong></p>

                            <p>&nbsp;</p>

                            <p><strong>Prośba dziecka - Janusz Korczak</strong></p>

                            <p style=\"margin-left:21.3pt\">1.Nie psuj mnie. Dobrze wiem, że nie powinienem mieć tego wszystkiego, czego się domagam. To tylko pr&oacute;ba sił z mojej strony.</p>

                            <p style=\"margin-left:21.3pt\">2.Nie b&oacute;j się stanowczości. Właśnie tego potrzebuję &ndash; poczucia bezpieczeństwa.</p>

                            <p style=\"margin-left:21.3pt\">3.Nie bagatelizuj moich złych nawyk&oacute;w. Tylko ty możesz pom&oacute;c mi zwalczyć zło, p&oacute;ki jest to jeszcze w og&oacute;le możliwe.</p>

                            <p style=\"margin-left:21.3pt\">4.Nie r&oacute;b ze mnie większego dziecka niż jestem. To sprawia, że przejmuję postawę głupio dorosłą.</p>

                            <p style=\"margin-left:21.3pt\">5.Nie zwracaj mi uwagi przy innych ludziach, jeśli nie jest to absolutnie konieczne. O wiele bardziej przejmuję się tym, co m&oacute;wisz, jeśli rozmawiamy w cztery oczy.</p>

                            <p style=\"margin-left:21.3pt\">6.Nie chroń mnie przed konsekwencjami. Czasami dobrze jest nauczyć się rzeczy bolesnych i nieprzyjemnych.</p>

                            <p style=\"margin-left:21.3pt\">7.Nie wmawiaj mi, że błędy, kt&oacute;re popełniam, są grzechem. To zagraża mojemu poczuciu wartości.</p>

                            <p style=\"margin-left:21.3pt\">8.Nie przejmuj się za bardzo, gdy m&oacute;wię, że cię nienawidzę. To nie ty jesteś moim wrogiem, lecz twoja miażdżąca przewaga.</p>

                            <p style=\"margin-left:21.3pt\">9.Nie zwracaj zbytniej uwagi na moje drobne dolegliwości. Czasami wykorzystuję je, by przyciągnąć twoją uwagę.</p>

                            <p style=\"margin-left:21.3pt\">10.Nie zrzędź. W przeciwnym razie muszę się przed tobą bronić i robię się głuchy.</p>

                            <p style=\"margin-left:21.3pt\">11.Nie dawaj mi obietnic bez pokrycia. Czuję się przeraźliwie tłamszony, kiedy nic z tego wszystkiego nie wychodzi.</p>

                            <p style=\"margin-left:21.3pt\">12.Nie zapominaj, że jeszcze trudno mi jest precyzyjnie wyrazić myśli. To dlatego nie zawsze się rozumiemy.</p>

                            <p style=\"margin-left:21.3pt\">13.Nie sprawdzaj z uporem maniaka mojej uczciwości. Zbyt łatwo strach zmusza mnie do kłamstwa.</p>

                            <p style=\"margin-left:21.3pt\">14.Nie bądź niekonsekwentny. To mnie ogłupia i wtedy tracę całą moją wiarę w ciebie.</p>

                            <p style=\"margin-left:21.3pt\">15.Nie odtrącaj mnie, gdy dręczę cię pytaniami. Może się wkr&oacute;tce okazać, że zamiast prosić cię o wyjaśnienia, poszukam ich gdzie indziej.</p>

                            <p style=\"margin-left:21.3pt\">16.Nie wmawiaj mi, że moje lęki są głupie. One po prostu są.</p>

                            <p style=\"margin-left:21.3pt\">17.Nie r&oacute;b z siebie nieskazitelnego ideału. Prawda na tw&oacute;j temat byłaby w przyszłości nie do zniesienia. Nie wyobrażaj sobie, iż przepraszając mnie stracisz autorytet. Za uczciwą grę umiem podziękować miłością, o jakiej nawet ci się nie śniło.</p>

                            <p style=\"margin-left:21.3pt\">18.Nie zapominaj, że uwielbiam wszelkiego rodzaju eksperymenty. To po prostu m&oacute;j spos&oacute;b na życie, więc przymknij na to oczy.</p>

                            <p style=\"margin-left:21.3pt\">19.Nie bądź ślepy i przyznaj, że ja też rosnę. Wiem, jak trudno dotrzymać mi kroku w tym galopie, ale zr&oacute;b, co możesz, żeby nam się to udało.</p>

                            <p style=\"margin-left:21.3pt\">20.Nie b&oacute;j się miłości. Nigdy.</p>

                            <p style=\"margin-left:21.3pt\">&nbsp;</p>

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
";
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
        return array (  87 => 40,  78 => 37,  73 => 35,  67 => 32,  63 => 30,  59 => 29,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block content %}*/
/* */
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
/* */
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
/*                                 {{ advert.text | raw }}*/
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
/* */
/*     <div class="row row-green" id="program_wychowawczy">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-primary animated bounceInRight">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Program wychowawczy</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p style="text-align: center;"><span style="font-size:18px"><strong>Program wychowawczy</strong></span></p>*/
/* */
/*                             <p style="text-align: center;"><span style="font-size:18px"><strong>Przedszkola Miejskiego Nr 3 w Łańcucie </strong></span></p>*/
/* */
/*                             <p style="margin-left:21.3pt"><em>&bdquo;Nie psuj mnie. Dobrze wiem, że nie powinienem mieć tego wszystkiego, czego się domagam. To tylko pr&oacute;ba sił z mojej strony. Nie b&oacute;j się stanowczości. Właśnie tego potrzebuję &ndash; poczucia bezpieczeństwa. Nie b&oacute;j się miłości. Nigdy.&rdquo;</em></p>*/
/* */
/*                             <p style="margin-left: 18pt; text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/Fragm. &bdquo;Prośba dziecka&rdquo; Janusz Korczak /</em></p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>Spis treści </strong></p>*/
/* */
/*                             <p><strong>Wstęp </strong></p>*/
/* */
/*                             <p>I. Gł&oacute;wne prawa dziecka uznawane w przedszkolu.</p>*/
/* */
/*                             <p>II. Zadania przedszkola w zakresie wychowania.</p>*/
/* */
/*                             <p>III. Zadania wychowawcze nauczycieli.</p>*/
/* */
/*                             <p>IV. Zadania wychowawcze rodzic&oacute;w.</p>*/
/* */
/*                             <p>V. Kodeks Przedszkolaka &ndash; zasady obowiązujące w &bdquo;małej społeczności&rdquo; grupy, przedszkola.</p>*/
/* */
/*                             <p>VI. System motywujący do grzecznego zachowania.</p>*/
/* */
/*                             <p>VII. Wskaz&oacute;wki dla nauczycieli i rodzic&oacute;w do realizacji programu wychowawczego przedszkola&nbsp; -&nbsp; kilka praktycznych rad.</p>*/
/* */
/*                             <p>VIII. Forma upowszechnienia programu wychowawczego w przedszkolu.</p>*/
/* */
/*                             <p>IX. Ewaluacja programu</p>*/
/* */
/*                             <p><strong>Zakończenie</strong></p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>Wstęp </strong></p>*/
/* */
/*                             <p>Proces wychowania dziecka&nbsp; przebiega &nbsp;&nbsp;na&nbsp; r&oacute;żnych&nbsp; płaszczyznach&nbsp; i jest skutkiem wielu oddziaływań wychowawczych. Rodzice i nauczyciele doskonale wiedzą, że&nbsp; o wiele łatwiej jest kształcić&nbsp; i wychowywać&nbsp; dzieci, gdy&nbsp; istnieje wsp&oacute;łdziałanie&nbsp; r&oacute;żnych&nbsp; środowisk, w&nbsp; kt&oacute;rych dziecko się wychowuje. Dlatego tak ważnym jest przestrzeganie postanowień najważniejszych dokument&oacute;w gwarantujących dzieciom realizację ich praw, a przede wszystkim prawo do wychowania w warunkach gwarantujących ukształtowanie prawidłowej postawy dobrego obywatela, członka rodziny, przedszkolaka, ucznia, kolegi.</p>*/
/* */
/*                             <p>Program wychowawczy przedszkola opiera się na gł&oacute;wnych założeniach Konwencji o Prawach Dziecka.</p>*/
/* */
/*                             <p><strong>Uznajemy, że:</strong></p>*/
/* */
/*                             <p style="margin-left:18pt">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dziecko jest samodzielnym podmiotem &ndash; ze względu na swoją niedojrzałość psychiczną &nbsp;&nbsp;&nbsp;i fizyczną wymaga szczeg&oacute;lnej opieki i ochrony prawnej,</p>*/
/* */
/*                             <p style="margin-left:18pt">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dziecko wymaga poszanowania jego tożsamości, prywatności i godności osobistej,</p>*/
/* */
/*                             <p style="margin-left:18pt">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rodzina jest najlepszym środowiskiem wychowawczym dziecka,</p>*/
/* */
/*                             <p style="margin-left:18pt">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; państwo wspiera rodzinę w wychowaniu dziecka, a przedszkole jest instytucja wspomagającą państwo w wykonaniu tego zadania.</p>*/
/* */
/*                             <p><strong>Uznajemy, że:</strong></p>*/
/* */
/*                             <p>- rodzice mają prawo do wychowania dzieci zgodnie z własnymi przekonaniami. Wychowanie to powinno uwzględniać stopień dojrzałości dziecka,</p>*/
/* */
/*                             <p>- przedszkole pełni w swym oddziaływaniu wychowawczym funkcję wspomagającą rodzic&oacute;w.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>I. &nbsp;Gł&oacute;wne prawa dziecka uznawane &nbsp;&nbsp;&nbsp;w przedszkolu.</strong></p>*/
/* */
/*                             <p>Tworząc program wychowawczy przedszkola kierowaliśmy się poniższymi zasadami:</p>*/
/* */
/*                             <p><strong>Zasada&nbsp; dobra dziecka</strong>, zgodnie z kt&oacute;rą wszystkie działania podejmowane są w najlepiej pojętym interesie dziecka.</p>*/
/* */
/*                             <p><strong>Zasada&nbsp; r&oacute;wności, </strong>zgodnie z kt&oacute;rą wszystkie dzieci uczęszczające do przedszkola, niezależnie od stanu psychicznego, fizycznego, materialnego są&nbsp; traktowane&nbsp; tak samo.</p>*/
/* */
/*                             <p><strong>Zasada ujednolicenia oddziaływań wychowawczych</strong>, zgodnie z kt&oacute;rą zadaniem przedszkola jest działanie mające na celu uświadamianie rodzicom ich roli w wychowaniu dziecka i pozyskanie rodzic&oacute;w do wsp&oacute;łpracy.</p>*/
/* */
/*                             <p>Spośr&oacute;d wielu praw gwarantowanych w niniejszym programie wychowawczym uznajemy, &nbsp;&nbsp;&nbsp;że dziecko przede wszystkim&nbsp; ma :</p>*/
/* */
/*                             <p style="margin-left:18pt">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do życia i rozwoju,</p>*/
/* */
/*                             <p style="margin-left:18pt">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do swobody myśli, sumienia i wyznania,</p>*/
/* */
/*                             <p style="margin-left:18pt">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do wyrażania własnych pogląd&oacute;w,</p>*/
/* */
/*                             <p style="margin-left:18pt">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do wolności od przemocy fizycznej, psychicznej, nadużyć seksualnych &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i wszelkiego okrucieństwa,</p>*/
/* */
/*                             <p style="margin-left:18pt">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do wypoczynku i czasu wolnego,</p>*/
/* */
/*                             <p style="margin-left:18pt">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prawo do godności i nietykalności osobistej .</p>*/
/* */
/*                             <p>Świadomość istnienia&nbsp; praw dziecka&nbsp; jest ważna, ale ważniejsze jest respektowanie tych praw przez wszystkich pracownik&oacute;w przedszkola, a także przez rodzic&oacute;w. Kierując się zasadą ujednolicenia oddziaływań wychowawczych opracowaliśmy&nbsp; zadania, jakie ma w tym zakresie przedszkole&nbsp; wsp&oacute;łdziałając z rodzicami.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>II. Zadania przedszkola w zakresie wychowania.</strong></p>*/
/* */
/*                             <p style="margin-left:18pt">1.&nbsp;&nbsp;&nbsp;&nbsp; Zbadać oczekiwania rodzic&oacute;w&nbsp; w zakresie metod wychowawczych.</p>*/
/* */
/*                             <p style="margin-left:18pt">2.&nbsp;&nbsp;&nbsp;&nbsp; Poznać&nbsp; i stosować metody skutecznego oddziaływania wychowawczego.</p>*/
/* */
/*                             <p style="margin-left:18pt">3.&nbsp;&nbsp;&nbsp;&nbsp; Systematycznie przeprowadzać zajęcia profilaktyczno-edukacyjne uczące dzieci jak radzić sobie w trudnych sytuacjach oraz chroniące je&nbsp; przed niebezpieczeństwem.</p>*/
/* */
/*                             <p style="margin-left:18pt">4.&nbsp;&nbsp;&nbsp;&nbsp; Wsp&oacute;łdziałać z instytucjami oraz specjalistami w celu otoczenia opieką i&nbsp; terapią&nbsp; dzieci dotkniętych przemocą.</p>*/
/* */
/*                             <p style="margin-left:18pt">5.&nbsp;&nbsp;&nbsp;&nbsp; Wsp&oacute;łdziałać z rodzicami wykorzystując skuteczne środki komunikacji interpersonalnej&nbsp; dla wsp&oacute;lnego rozwiązywania problem&oacute;w wychowawczych.</p>*/
/* */
/*                             <p style="margin-left:18pt">6.&nbsp;&nbsp;&nbsp;&nbsp; Wspierać działania wychowawcze rodzic&oacute;w.</p>*/
/* */
/*                             <p style="margin-left:18pt">7.&nbsp;&nbsp;&nbsp;&nbsp; Organizować dostosowane do możliwości dzieci sytuacje edukacyjne wyrabiające umiejętności społeczne dzieci w zakresie porozumiewanie się z dorosłymi i dziećmi, zgodnego funkcjonowania w zabawie i w sytuacjach zadaniowych.</p>*/
/* */
/*                             <p style="margin-left:18pt">8.&nbsp;&nbsp;&nbsp;&nbsp; Stosować system wzmacniania&nbsp;&nbsp; pozytywnych zachowań dzieci.</p>*/
/* */
/*                             <p style="margin-left:18pt">9.&nbsp;&nbsp;&nbsp;&nbsp; Uczyć tolerancji i akceptacji &bdquo;inności&rdquo;.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>III. Zadania wychowawcze nauczycieli. </strong></p>*/
/* */
/*                             <p style="margin-left:18pt">1.&nbsp;&nbsp;&nbsp;&nbsp; Systematycznie poszerzać zakres swoich kompetencji wychowawczych, zwłaszcza umiejętności skutecznej komunikacji interpersonalnej.</p>*/
/* */
/*                             <p style="margin-left:18pt">2.&nbsp;&nbsp;&nbsp;&nbsp; Poznać środowisko wychowawcze dziecka.</p>*/
/* */
/*                             <p style="margin-left:18pt">3.&nbsp;&nbsp;&nbsp;&nbsp; Poznać oczekiwania rodzic&oacute;w&nbsp; wobec przedszkola.</p>*/
/* */
/*                             <p style="margin-left:18pt">4.&nbsp;&nbsp;&nbsp;&nbsp; Tworzyć bezpieczną dla dziecka atmosferę warunkująca&nbsp; zdrowie fizyczne i psychiczne.</p>*/
/* */
/*                             <p style="margin-left:18pt">5.&nbsp;&nbsp;&nbsp;&nbsp; Kształtować postawy wychowank&oacute;w zgodnie z normami określonymi w programie wychowawczym przedszkola.</p>*/
/* */
/*                             <p style="margin-left:18pt">6.&nbsp;&nbsp;&nbsp;&nbsp; Stosować metody wychowawcze wzmacniające pozytywne zachowania dzieci oraz eliminować zachowania niepożądane zgodnie z obowiązującymi w przedszkolu zasadami.</p>*/
/* */
/*                             <p style="margin-left:18pt">7.&nbsp;&nbsp;&nbsp;&nbsp; Ściśle wsp&oacute;łdziałać z rodziną dziecka w celu ujednolicenia oddziaływań wychowawczych.</p>*/
/* */
/*                             <p style="margin-left:18pt">8.&nbsp;&nbsp;&nbsp;&nbsp; Przekazywać rodzicom informacje o stanie rozwoju dziecka według zaleceń określonych w warunkach realizacji podstawy programowej.</p>*/
/* */
/*                             <p style="margin-left:18pt">9.&nbsp;&nbsp;&nbsp;&nbsp; Wzajemnie&nbsp; wspierać swoje działania w ramach pracy zespołowej nauczycieli.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>IV. Zadania wychowawcze rodzic&oacute;w.</strong></p>*/
/* */
/*                             <p style="margin-left:18.15pt">1.&nbsp;&nbsp;&nbsp; Wsp&oacute;łdziałać z nauczycielami w celu ujednolicenia oddziaływań wychowawczych i&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; utrwalania efekt&oacute;w pracy wychowawczej nauczycieli.</p>*/
/* */
/*                             <p style="margin-left:18.15pt">2.&nbsp;&nbsp;&nbsp; Angażować się w proponowane przez przedszkole działania w celu usprawniania swoich kompetencji wychowawczych.&nbsp;</p>*/
/* */
/*                             <p style="margin-left:18.15pt">3.&nbsp;&nbsp;&nbsp; Wspomagać dziecko w rozwoju według wskaz&oacute;wek udzielanych przez nauczycieli lub&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; specjalist&oacute;w.</p>*/
/* */
/*                             <p style="margin-left:18.15pt">4.&nbsp;&nbsp;&nbsp; Przekazywać nauczycielom oraz dyrektorowi wnioski z obserwacji pracy przedszkola.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>V. Kodeks Przedszkolaka &ndash; zasady obowiązujące w &bdquo;małej społeczności&rdquo; grupy, przedszkola</strong>.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>1. Zasady zachowania się podczas posiłk&oacute;w</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>*/
/* */
/*                             <ul>*/
/*                                 <li>Jemy w ciszy tj. nie mlaskamy, nie rozmawiamy, gdyż rozmowa w czasie jedzenia może być przyczyną zadławienia.</li>*/
/*                                 <li>Jemy powoli - szybkie zjadanie &ndash;połykanie jedzenia jest nie zdrowe i nieeleganckie &nbsp;</li>*/
/*                                 <li>Sztućcami i innym sprzętem posługujemy się bezpiecznie i kulturalnie, według ustalonych wzor&oacute;w.</li>*/
/*                                 <li>Wycieramy usta serwetką i odkładamy ją na brzeg talerza.</li>*/
/*                                 <li>Odchodząc od stołu cicho wstajemy i lekko odsuwamy krzesło, wychodzimy, stawiamy je z powrotem w to samo miejsce i m&oacute;wimy &bdquo;dziękuję&rdquo;.</li>*/
/*                             </ul>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>2. Zasady zachowania się w łazience</strong></p>*/
/* */
/*                             <p><strong>Mycie rąk</strong></p>*/
/* */
/*                             <ul>*/
/*                                 <li>Podwijamy rękawy, aby się nie zamoczyły.</li>*/
/*                                 <li>Moczymy ręce, aby rozpuściło się trochę mydło, kt&oacute;re usuwa brud.</li>*/
/*                                 <li>Pocieramy namydlone ręce, by wytworzyć pianę tak, aby każdy palec był umyty.</li>*/
/*                                 <li>Płuczemy ręce wodą, aby całkowicie zmyć mydło.</li>*/
/*                                 <li>Otrząsamy ręce z wody nad zlewem, aby nie zamoczyć podłogi.</li>*/
/*                                 <li>Wycieramy bardzo dokładnie dłonie.</li>*/
/*                                 <li>Na właściwym wieszaku zawieszamy ręcznik lub ręcznik jednorazowy wyrzucamy do pojemnika.</li>*/
/*                                 <li>Odwijamy rękawy.</li>*/
/*                                 <li>Myjemy ręce:</li>*/
/*                             </ul>*/
/* */
/*                             <ul>*/
/*                                 <li>&nbsp;zawsze przed posiłkami i po ich spożyciu,</li>*/
/*                                 <li>&nbsp;zawsze po korzystaniu z toalety,</li>*/
/*                                 <li>&nbsp;zawsze po powrocie z placu zabaw, spaceru, wycieczki,</li>*/
/*                                 <li>&nbsp;w innych sytuacjach, kiedy są brudne (malowanie, lepienie, itd.)</li>*/
/*                             </ul>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>Mycie zęb&oacute;w</strong></p>*/
/* */
/*                             <ul>*/
/*                                 <li>Do kubka wlewamy wodę.</li>*/
/*                                 <li>Dwu-trzykrotnie płuczemy usta.</li>*/
/*                                 <li>Wyciskamy pastę na szczoteczkę.</li>*/
/*                                 <li>Myjemy zęby okrężnymi ruchami przypominającymi rysowanie małych k&oacute;łek.</li>*/
/*                                 <li>Płuczemy jamę ustną kilkakrotnie wodą.</li>*/
/*                                 <li>Płuczemy dokładnie szczoteczkę i kubek.</li>*/
/*                                 <li>Wkładamy szczoteczkę do kubka do g&oacute;ry włosiem.</li>*/
/*                                 <li>Kubek ze szczotką ustawiamy w wyznaczonym miejscu.</li>*/
/*                             </ul>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>Higiena potrzeb fizjologicznych</strong></p>*/
/* */
/*                             <ul>*/
/*                                 <li>Korzystamy z toalety wyłącznie pojedynczo.</li>*/
/*                                 <li>Zawsze po sobie spłukujemy toaletę.</li>*/
/*                             </ul>*/
/* */
/*                             <p style="margin-left:14.2pt">&nbsp;</p>*/
/* */
/*                             <p><strong>3. Zasady zachowania się w szatni</strong></p>*/
/* */
/*                             <ul>*/
/*                                 <li>Starannie układamy swoją odzież, buty ustawiamy &nbsp;na p&oacute;łce.</li>*/
/*                                 <li>Pamiętamy o kolejności zakładania odzieży przed wyjściem na podw&oacute;rko (spodnie- jeśli są zmienne, buty, sweter, szalik, kurtka, czapka, rękawiczki).</li>*/
/*                                 <li>Po powrocie z podw&oacute;rka, przed wejściem do budynku &ndash; otrzepujemy buty z piasku, błota, śniegu, a następnie wycieramy buty o wycieraczkę.</li>*/
/*                                 <li>Przy rozbieraniu się &ndash; pamiętamy o kolejności zdejmowania odzieży (odwrotnie niż przy ubieraniu).</li>*/
/*                                 <li>Starannie składamy odzież i odkładamy na swoją p&oacute;łkę.</li>*/
/*                             </ul>*/
/* */
/*                             <p style="margin-left:14.2pt">&nbsp;</p>*/
/* */
/*                             <p><strong>4. Zasady zachowania się w sali zabaw</strong></p>*/
/* */
/*                             <ul>*/
/*                                 <li>Używamy sł&oacute;w: proszę, przepraszam, dziękuję.</li>*/
/*                                 <li>Bieganie w sali jest zabronione.</li>*/
/*                                 <li>Dzielimy się zabawkami.</li>*/
/*                                 <li>Staramy się m&oacute;wić umiarkowanym głosem.</li>*/
/*                                 <li>Sprzątamy po sobie zabawki, po skończonej zabawie odkładamy je na miejsce.</li>*/
/*                                 <li>Staramy się nie m&oacute;wić głośno gdy:</li>*/
/*                                 <li>&nbsp;inni cicho pracują,</li>*/
/*                             </ul>*/
/* */
/*                             <ul>*/
/*                                 <li>inni się bawią,</li>*/
/*                                 <li>&nbsp;czytamy i słuchamy,</li>*/
/*                                 <li>&nbsp;gdy inni odpoczywają.</li>*/
/*                             </ul>*/
/* */
/*                             <p style="margin-left:21.3pt">&nbsp;</p>*/
/* */
/*                             <p><strong><u>Kodeks przedszkolaka </u></strong></p>*/
/* */
/*                             <ul>*/
/*                                 <li>Wsp&oacute;lnie i zgodnie bawię&nbsp; się z dziećmi .</li>*/
/*                                 <li>Potrafię czekać na swoją kolej podczas zabawy.</li>*/
/*                                 <li>Szanuję cudzą własność.</li>*/
/*                                 <li>Wiem, że praca innych jest trudem, kt&oacute;ry należy szanować i tego samego oczekuję od innych.</li>*/
/*                                 <li>Do zabawy biorę tylko te zabawki, kt&oacute;rymi teraz będę się bawić, a po skończonej&nbsp; zabawie odłożę je na miejsce.</li>*/
/*                                 <li>Bawię się tak, aby nie powodować zagrożenia i przykrości.</li>*/
/*                                 <li>Pomagam innym: młodszym i mniej sprawnym dzieciom.</li>*/
/*                                 <li>Pr&oacute;buję samodzielnie rozwiązywać sytuacje problemowe zgodnie z zasadami&nbsp;&nbsp; obowiązującymi w przedszkolu .</li>*/
/*                                 <li>Stosuję formy grzecznościowe: proszę, dziękuję, przepraszam.</li>*/
/*                                 <li>Wiem, że w przedszkolu jestem po to, aby nauczyć się wszystkiego co będzie mi potrzebne w szkole.</li>*/
/*                             </ul>*/
/* */
/*                             <p style="margin-left:21.3pt">&nbsp;</p>*/
/* */
/*                             <p><strong>VI. System motywujący do grzecznego zachowania.</strong></p>*/
/* */
/*                             <p>1) pochwała indywidualna,</p>*/
/* */
/*                             <p>2) pochwała przed całą grupą,</p>*/
/* */
/*                             <p>3) pochwała przed rodzicami,</p>*/
/* */
/*                             <p>4) &nbsp;nagroda poprzez sprawienie dziecku przyjemności zabawę przez niego wybraną,</p>*/
/* */
/*                             <p>5) znaczek &bdquo;uśmiechniętego serduszka&rdquo; na tablicy grupowego systemu motywacji do nabywania zachowań pożądanych, znaczek &bdquo;Uśmiechniętej buzi&rdquo; wręczany do domu po zakończonym dla dziecka dniu w przedszkolu,</p>*/
/* */
/*                             <p>6) &bdquo;medal dobrej zabawy&rdquo; zawieszany na szyję.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>&nbsp;Stosowane w przedszkolu konsekwencje za niepożądane zachowanie </strong></p>*/
/* */
/*                             <ul>*/
/*                                 <li>kara naturalna &ndash; zadośćuczynienie wyrządzonej krzywdzie (przeproszenie, naprawienie),</li>*/
/*                                 <li>odm&oacute;wienie dziecku nagrody,</li>*/
/*                                 <li>czasowe odbieranie przyznanego przywileju,</li>*/
/*                             </ul>*/
/* */
/*                             <p style="margin-left:36pt">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &bdquo;krzesełko do myślenia&rdquo; chwilowe wykluczenie dziecka z zabawy w celu przemyślenia swojego postępowania.&nbsp;</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>VII. Wskaz&oacute;wki dla nauczycieli i rodzic&oacute;w do realizacji programu wychowawczego przedszkola&nbsp; -&nbsp; kilka praktycznych rad.</strong></p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Bądźcie&nbsp; konsekwentni, r&oacute;bcie to, co m&oacute;wicie&nbsp; i m&oacute;wcie o tym, co robicie.</p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Bądźcie świadomi, czego uczycie.</p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Bądźcie żywym przykładem właściwego działania.</p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Bądźcie dobrymi obserwatorami dzieci.</p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Dobrze poznajcie siebie i swoje możliwości.&nbsp;</p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Poł&oacute;żcie nacisk na pogłębianie swoich wiadomości i umiejętności.&nbsp;</p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Tw&oacute;rzcie atmosferę wzajemnego zaufania i szacunku.&nbsp;</p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Nie oczekujcie, że natychmiast wystąpi u dziecka pożądana umiejętność, zmiany wymagają czasu,</p>*/
/* */
/*                             <p style="margin-left:36pt">&uuml;&nbsp; Bądźcie cierpliwi &ndash; pamiętajcie, że pośpiech szkodzi.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p style="margin-left:14.2pt">&nbsp;</p>*/
/* */
/*                             <p><strong>VIII. Formy upowszechniania programu wychowawczego przedszkola. </strong></p>*/
/* */
/*                             <p>1.&nbsp;&nbsp; Przedstawienie programu rodzicom na pierwszym zebraniu grupowym.</p>*/
/* */
/*                             <p>2.&nbsp;&nbsp; Zamieszczenie na stronie internetowej przedszkola w zakładce &bdquo;dla rodzic&oacute;w&rdquo;.</p>*/
/* */
/*                             <p>3.&nbsp;&nbsp; Udostępnienie wydruku programu (na prośbę rodzica).</p>*/
/* */
/*                             <p>4.&nbsp;&nbsp; Wywieszenie tablic z zasadami zachowań w salach zabaw.</p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>IX. Ewaluacja programu </strong></p>*/
/* */
/*                             <p>Program zostanie poddany ewaluacji w cyklu rocznym. Sposoby ewaluacji:</p>*/
/* */
/*                             <p>1) ankieta dla rodzic&oacute;w(wybi&oacute;rczo)</p>*/
/* */
/*                             <p>2) arkusz obserwacji pracy nauczyciela,</p>*/
/* */
/*                             <p>3) arkusz obserwacji zachowań dzieci</p>*/
/* */
/*                             <p>4) analiza dokument&oacute;w przebiegu nauczania (dziennik, plany pracy nauczycieli, sprawozdania z realizacji pracy dydaktyczno- wychowawczej ).</p>*/
/* */
/*                             <p>Wnioski z realizacji programu określi dyrektor w raporcie z prowadzonego nadzoru pedagogicznego, w terminie do końca danego roku szkolnego. Wyniki i wnioski z realizacji programu zostaną uwzględnione w planowaniu działań wychowawczych w następnym roku szkolnym.</p>*/
/* */
/*                             <p><strong>Zakończenie </strong></p>*/
/* */
/*                             <p>&nbsp;</p>*/
/* */
/*                             <p><strong>Prośba dziecka - Janusz Korczak</strong></p>*/
/* */
/*                             <p style="margin-left:21.3pt">1.Nie psuj mnie. Dobrze wiem, że nie powinienem mieć tego wszystkiego, czego się domagam. To tylko pr&oacute;ba sił z mojej strony.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">2.Nie b&oacute;j się stanowczości. Właśnie tego potrzebuję &ndash; poczucia bezpieczeństwa.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">3.Nie bagatelizuj moich złych nawyk&oacute;w. Tylko ty możesz pom&oacute;c mi zwalczyć zło, p&oacute;ki jest to jeszcze w og&oacute;le możliwe.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">4.Nie r&oacute;b ze mnie większego dziecka niż jestem. To sprawia, że przejmuję postawę głupio dorosłą.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">5.Nie zwracaj mi uwagi przy innych ludziach, jeśli nie jest to absolutnie konieczne. O wiele bardziej przejmuję się tym, co m&oacute;wisz, jeśli rozmawiamy w cztery oczy.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">6.Nie chroń mnie przed konsekwencjami. Czasami dobrze jest nauczyć się rzeczy bolesnych i nieprzyjemnych.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">7.Nie wmawiaj mi, że błędy, kt&oacute;re popełniam, są grzechem. To zagraża mojemu poczuciu wartości.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">8.Nie przejmuj się za bardzo, gdy m&oacute;wię, że cię nienawidzę. To nie ty jesteś moim wrogiem, lecz twoja miażdżąca przewaga.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">9.Nie zwracaj zbytniej uwagi na moje drobne dolegliwości. Czasami wykorzystuję je, by przyciągnąć twoją uwagę.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">10.Nie zrzędź. W przeciwnym razie muszę się przed tobą bronić i robię się głuchy.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">11.Nie dawaj mi obietnic bez pokrycia. Czuję się przeraźliwie tłamszony, kiedy nic z tego wszystkiego nie wychodzi.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">12.Nie zapominaj, że jeszcze trudno mi jest precyzyjnie wyrazić myśli. To dlatego nie zawsze się rozumiemy.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">13.Nie sprawdzaj z uporem maniaka mojej uczciwości. Zbyt łatwo strach zmusza mnie do kłamstwa.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">14.Nie bądź niekonsekwentny. To mnie ogłupia i wtedy tracę całą moją wiarę w ciebie.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">15.Nie odtrącaj mnie, gdy dręczę cię pytaniami. Może się wkr&oacute;tce okazać, że zamiast prosić cię o wyjaśnienia, poszukam ich gdzie indziej.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">16.Nie wmawiaj mi, że moje lęki są głupie. One po prostu są.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">17.Nie r&oacute;b z siebie nieskazitelnego ideału. Prawda na tw&oacute;j temat byłaby w przyszłości nie do zniesienia. Nie wyobrażaj sobie, iż przepraszając mnie stracisz autorytet. Za uczciwą grę umiem podziękować miłością, o jakiej nawet ci się nie śniło.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">18.Nie zapominaj, że uwielbiam wszelkiego rodzaju eksperymenty. To po prostu m&oacute;j spos&oacute;b na życie, więc przymknij na to oczy.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">19.Nie bądź ślepy i przyznaj, że ja też rosnę. Wiem, jak trudno dotrzymać mi kroku w tym galopie, ale zr&oacute;b, co możesz, żeby nam się to udało.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">20.Nie b&oacute;j się miłości. Nigdy.</p>*/
/* */
/*                             <p style="margin-left:21.3pt">&nbsp;</p>*/
/* */
/*                             <span id="zywienie"></span>*/
/*                             <p style="text-align:center"><b>Dzieci odbierane są tylko przez rodziców lub osoby upoważnione pisemnie</b>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
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
/* {% endblock %}*/
