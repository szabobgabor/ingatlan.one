<?php
/* @var \App\Application\Property\PropertyViewModel $property */
/* @var string $contact */
?>

<article class="property-container">
    <section class="hero">
        <h1>Teljes körűen felújított családi ház csendes környezetben</h1>
        <section class="image" id="property-main-image">
            <img src="/images/property/malomsok/01-amerikai-konyhas-nappali.jpg" />
        </section>
        <section class="price">
            36 000 000 Ft
        </section>
        <section class="location">
            <i data-lucide="map-pin"></i> Malomsok
        </section>
        <section class="features">
            <div class="card">
                83 m<sup>2</sup>
                <span class="label">alapterület</span>
            </div>
            <div class="card">
                443 m<sup>2</sup>
                <span class="label">telekterület</span>
            </div>
            <div class="card">
                2
                <span class="label">szobaszám</span>
            </div>
            <div class="card">
                2020
                <span class="label">felújítva</span>
            </div>
        </section>
        <blockquote class="summary">
            Van, amikor egy ház nem a méretével, hanem a hangulatával győz meg. Csendes utca, rendezett kert,
            alacsony rezsi és egy olyan otthon, amelybe a felújítás helyett már csak beköltözni kell.
        </blockquote>
    </section>
    <div class="property-details-layout sidebar-layout">
        <div class="sidebar">
            <?= $contact ?>
        </div>
        <div class="contents">
            <section class="highlights">
                <div class="card">
                    <i data-lucide="percent"></i>
                    Alacsony rezsi
                </div>
                <div class="card">
                    <i data-lucide="flower-2"></i>
                    Rendezett kert
                </div>
                <div class="card">
                    <i data-lucide="drill"></i>
                    Teljeskörűen felújított
                </div>
                <div class="card">
                    <i data-lucide="waves-horizontal"></i>
                    Rába karnyújtásnyira
                </div>
                <div class="card">
                    <i data-lucide="eye-closed"></i>
                    Csendes környezetben
                </div>
            </section>
            <h2>Képek az ingatlanról</h2>
            <section class="gallery" id="property-gallery">
                <?php foreach($property->getGallery() as $galleryItem): ?>
                    <a href="<?= $galleryItem->src ?>"
                       data-pswp-width="<?= $galleryItem->width ?>"
                       data-pswp-height="<?= $galleryItem->height ?>">
                        <img src="<?= $galleryItem->src ?>" alt="<?= $galleryItem->alt ?>" />
                    </a>
                <?php endforeach; ?>
                <!--
                <a href="/images/property/malomsok/01-amerikai-konyhas-nappali.jpg"><img src="/images/property/malomsok/01-amerikai-konyhas-nappali.jpg" /></a>
                <a href="/images/property/malomsok/02-amerikai-konyhas-nappali.jpg"><img src="/images/property/malomsok/02-amerikai-konyhas-nappali.jpg" /></a>
                <a href="/images/property/malomsok/03-amerikai-konyhas-nappali.jpg"><img src="/images/property/malomsok/03-amerikai-konyhas-nappali.jpg" /></a>
                <a href="/images/property/malomsok/04-amerikai-konyhas-nappali.jpg"><img src="/images/property/malomsok/04-amerikai-konyhas-nappali.jpg" /></a>
                <a href="/images/property/malomsok/05-szoba-1.jpg"><img src="/images/property/malomsok/05-szoba-1.jpg" /></a>
                <a href="/images/property/malomsok/06-szoba-1.jpg"><img src="/images/property/malomsok/06-szoba-1.jpg" /></a>
                <a href="/images/property/malomsok/07-szoba-2.jpg"><img src="/images/property/malomsok/07-szoba-2.jpg" /></a>
                <a href="/images/property/malomsok/08-szoba-2.jpg"><img src="/images/property/malomsok/08-szoba-2.jpg" /></a>
                <a href="/images/property/malomsok/09-furdo.jpg"><img src="/images/property/malomsok/09-furdo.jpg" /></a>
                <a href="/images/property/malomsok/10-tarolo.jpg"><img src="/images/property/malomsok/10-tarolo.jpg" /></a>
                <a href="/images/property/malomsok/11-udvar.jpg"><img src="/images/property/malomsok/11-udvar.jpg" /></a>
                <a href="/images/property/malomsok/12-udvar.jpg"><img src="/images/property/malomsok/12-udvar.jpg" /></a>
                <a href="/images/property/malomsok/13-udvar.jpg"><img src="/images/property/malomsok/13-udvar.jpg" /></a -->
            </section>
            <h2>Ingatlan leírása</h2>
            <section class="description">
                <p>Ha olyan otthont keres, ahová a költözés után már nem kell jelentős összegeket költenie, és fontos a nyugodt, vidéki környezet, akkor érdemes megismernie ezt a gondosan felújított ingatlant.</p>

                <p>A ház egy rendezett, csendes utcában található, kellemes lakókörnyezetben. Az ingatlan 2020-ban teljes körű felújításon esett át: megújult az elektromos és vízhálózat, új kondenzációs gázkazán került beépítésre, amely a fűtést és a használati melegvizet is biztosítja, valamint a belső terek is modern elrendezést kaptak.</p>

                <p>A ház kis alapterületének, kedvező kialakításának és a külső szigetelésnek köszönhetően fenntartása gazdaságos. A jelenlegi tulajdonos tapasztalatai alapján a fűtési költségek rendkívül kedvezőek még a téli hónapokban is.</p>

                <p>A nappaliban egy külön kémény áll rendelkezésre, így akár kandalló vagy kályha is kialakítható, ami tovább növelheti az otthon hangulatát és energiahatékonyságát.</p>

                <p>A mintegy 400 m²-es telek könnyen karbantartható, rendezett, több gyümölcsfával beültetett. A napos udvar ideális pihenésre, kertészkedésre vagy családi összejövetelekhez.</p>

                <p>A környék egyik különlegessége a közeli Rába-part, amely néhány perc alatt elérhető, a közelben pedig kialakított szabadstrand is található. A településrész nyugodt, barátságos hangulatú, rendezett portákkal és gondozott kertekkel.</p>

                <p>Az ingatlan aszfaltos úton közelíthető meg, az udvarban parkolási lehetőség biztosított, emellett a melléképület is alkalmas gépkocsi tárolására.</p>

                <h3>Főbb jellemzők:</h3>
                <ul>
                    <li>teljes körű felújítás 2020-ban</li>
                    <li>új elektromos- és vízhálózat</li>
                    <li>kondenzációs gázkazán</li>
                    <li>külső szigetelés</li>
                    <li>lemez tetőfedés</li>
                    <li>kályha vagy kandalló kialakításának lehetősége</li>
                    <li>rendezett, könnyen kezelhető telek</li>
                    <li>gyümölcsfák az udvarban</li>
                    <li>csendes, nyugodt környezet</li>
                    <li>azonnal költözhető állapot</li>
                    <li>parkolási lehetőség telken belül</li>
                </ul>

                <p>Pápa néhány perc alatt elérhető, míg Győr a gyorsforgalmi útnak köszönhetően kényelmes távolságban található. A közelben megtalálhatók a mindennapi élethez szükséges szolgáltatások és intézmények is.</p>
            </section>
            <section class="details">
                <div class="block">
                    <h3><i data-lucide="house"></i>Alapadatok</h3>
                    <ul>
                        <li><span class="label">Kategória</span><span class="value">Használt</span></li>
                        <li><span class="label">Ingatlan típusa</span><span class="value">Családi ház</span></li>
                        <li><span class="label">Övezeti besorolás</span><span class="value">Lakóövezet</span></li>
                        <li><span class="label">Épület szerkezete</span><span class="value">Tégla</span></li>
                        <li><span class="label">Építés éve</span><span class="value">1960</span></li>
                        <li><span class="label">Teljes felújítás éve</span><span class="value">2020</span></li>
                        <li><span class="label">Ingatlan állapot</span><span class="value">Jó</span></li>
                        <li><span class="label">Külső állapot</span><span class="value">Jó</span></li>
                    </ul>
                </div>

                <div class="block">
                    <h3><i data-lucide="ruler"></i>Méretek</h3>
                    <ul>
                        <li><span class="label">Alapterület</span><span class="value">83 m<sup>2</sup></span></li>
                        <li><span class="label">Telek területe</span><span class="value">442 m<sup>2</sup></span></li>
                        <li><span class="label">Belmagasság</span><span class="value">2.4 m</span></li>
                        <li><span class="label">Telek szélessége</span><span class="value">15.5 m</span></li>
                        <li><span class="label">Telek hosszúsága</span><span class="value">28.5 m</span></li>
                    </ul>
                </div>

                <div class="block">
                    <h3><i data-lucide="bed"></i>Helyiségek</h3>
                    <ul>
                        <li><span class="label">Ingatlan belső lakó szintjeinek száma</span><span class="value">1</span></li>
                        <li><span class="label">Egész szobák száma</span><span class="value">2</span></li>
                        <li><span class="label">Félszobák száma</span><span class="value">0</span></li>
                    </ul>
                </div>
                <div class="block">
                    <h3><i data-lucide="thermometer"></i>Komfort</h3>
                    <ul>
                        <li><span class="label">Komfortfokozat</span><span class="value">Összkomfort</span></li>
                        <li><span class="label">Fűtés</span><span class="value">Gáz - cirko</span></li>
                        <li><span class="label">Hőleadás fajtája</span><span class="value">Radiátoros fűtés</span></li>
                        <li><span class="label">Redőny</span><span class="value">igen</span></li>
                        <li><span class="label">Közművek</span><span class="value">Víz, Villany, Gáz, Emésztőgödör, Internet, Telefon</span></li>
                        <li><span class="label">Fényviszony</span><span class="value">Jó</span></li>
                        <li><span class="label">Nappali tájolása</span><span class="value">Déli</span></li>
                    </ul>
                </div>
                <div class="block">
                    <h3><i data-lucide="info"></i>Egyéb</h3>
                    <ul>
                        <li><span class="label">Beépített konyhabútor</span><span class="value">igen</span></li>
                        <li><span class="label">Parkolás</span><span class="value">Nyílt kocsibeálló, Közterületen ingyenes</span></li>
                    </ul>
                </div>
            </section>
            <section class="map">
                <h2>Térkép</h2>
                <a href="https://www.google.com/maps/place/Malomsok,+%C3%93malomsok,+8533/@47.4474392,17.3525185,13.37z/" target="_blank">
                    <img src="/images/location/omalomsok.png" alt="Malomsok, Ómalomsok" />
                </a>
            </section>
        </div>
    </div>
</article>
<script type="module" src="/js/property.js"></script>