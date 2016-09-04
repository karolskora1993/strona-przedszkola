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
        $__internal_146b88629b1ba81ad122f4e897c8888fd1d47a230807886397a41cd543b95979 = $this->env->getExtension("native_profiler");
        $__internal_146b88629b1ba81ad122f4e897c8888fd1d47a230807886397a41cd543b95979->enter($__internal_146b88629b1ba81ad122f4e897c8888fd1d47a230807886397a41cd543b95979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146b88629b1ba81ad122f4e897c8888fd1d47a230807886397a41cd543b95979->leave($__internal_146b88629b1ba81ad122f4e897c8888fd1d47a230807886397a41cd543b95979_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b11d0a24a31ee25c38d3f61c0067cdadb8d89676595d707af625f2693259551 = $this->env->getExtension("native_profiler");
        $__internal_8b11d0a24a31ee25c38d3f61c0067cdadb8d89676595d707af625f2693259551->enter($__internal_8b11d0a24a31ee25c38d3f61c0067cdadb8d89676595d707af625f2693259551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo $this->getAttribute($context["advert"], "text", array());
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
";
        
        $__internal_8b11d0a24a31ee25c38d3f61c0067cdadb8d89676595d707af625f2693259551->leave($__internal_8b11d0a24a31ee25c38d3f61c0067cdadb8d89676595d707af625f2693259551_prof);

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
        return array (  94 => 38,  85 => 35,  80 => 33,  74 => 30,  70 => 28,  66 => 27,  40 => 3,  34 => 2,  11 => 1,);
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
