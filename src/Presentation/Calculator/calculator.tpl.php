<div class="calculator-container">
    <form class="calculator" id="annuity-calculator">
        <fieldset>
            <legend>Általános adatok</legend>
            <div class="field">
                <label for="down-payment">Induló vagyon</label>
                <div>
                    <input name="downPayment" type="number" min="3" max="100" step="0.1" id="down-payment" value="20" />
                    <span class="unit">millió Ft</span>
                </div>
                <span class="comment">A rendelkezésre álló tóke, amiből vagy ingatlant vásárolunk, vagy egyéb módon fektetjük be</span>
            </div>
            <div class="field">
                <label for="annual-inflation-rate">Infláció éves mértéke</label>
                <div>
                    <input name="annualInflationRate" type="number" id="annual-inflation-rate" min="0" max="10" step="0.1" value="2.5" />
                    <span class="unit">% / év</span>
                </div>
                <span class="comment">A kalkuláció során ezzel az átlagos inflációval számolunk - ha egy ingatlan jelenlegi bérleti díja például ezzel az összeggel növekedik évente, de ez igaz adott esetben a javítási költségekre, biztosításra, egyéb költségekre is.</span>
            </div>
            <div class="field">
                <label for="calculation-period">Vizsgált időszak hossza</label>
                <div>
                    <input name="calculationPeriod" type="number" id="calculation-period" min="1" max="25" value="5" />
                    <span class="unit">év</span>
                </div>
                <span class="comment">
                    Hány évre kalkuláljuk az összehasonlítást, ennyi évnyi törlesztés / albérlet bérlés és befektetés után lesz kalkulálva az eredmény
                </span>
            </div>
        </fieldset>

        <fieldset>
            <legend>Bérlés</legend>
            <div class="field">
                <label for="monthly-rental-price">Ingatlan bérlés havi költsége</label>
                <div>
                    <input name="monthlyRentalPrice" type="number" min="0" max="300000" id="monthly-rental-price" value="80000" />
                    <span class="unit">Ft</span>
                </div>
                <span class="comment">Mennyit költünk havonta ingatlan bérlésre, legyen az egy szoba, lakás, vagy bármi egyéb</span>
            </div>
            <div class="field">
                <label for="investment-rate">Befektetéssel elérhető hozam</label>
                <div>
                    <input name="investmentRate" type="number" min="0" max="25" step="0.1" id="investment-rate" value="5" />
                    <span class="unit">% / év</span>
                </div>
                <span class="comment">
                    Induló vagyonunkat befektetve a becsült éves hozam
                </span>
            </div>
        </fieldset>

        <fieldset>
            <legend>Vásárlás</legend>
            <div class="field">
                <label for="property-price">Ingatlan értéke</label>
                <div>
                    <input name="propertyPrice" type="number" min="30" max="500" step="0.1" id="property-price" value="50" />
                    <span class="unit">millió Ft</span>
                </div>
                <span class="comment">Az induló vagyonunk és az ingatlan vételára határozza meg a tulajdonszerzéshez szükséges hitel mértékét</span>
            </div>
            <div class="field">
                <label for="annuity-principal">Hitelösszeg</label>
                <div>
                    <input name="principal" type="number" id="annuity-principal" value="30" readonly />
                    <span class="unit">millió Ft</span>
                </div>
                <span class="comment">Számolt érték, az induló vagyon és az ingatlan értéke alapján</span>
            </div>
            <div class="field">
                <label for="annuity-rate">Éves kamatláb</label>
                <div>
                    <input name="rate" type="number" id="annuity-rate" min="1" max="10" step="0.1" value="3" />
                    <span class="unit">%</span>
                </div>
                <span class="comment">
                    Az igényelt hitel éves kamatlába
                </span>
            </div>
            <div class="field">
                <label for="annuity-duration">Futamidő</label>
                <div>
                    <input name="duration" type="number" id="annuity-duration" min="5" max="25" value="20" />
                    <span class="unit">év</span>
                </div>
                <span class="comment">
                    Az igényelt hitel futamideje
                </span>
            </div>
            <dl>
                <div>
                    <dt>Havi kalkulált törlesztőrészlet</dt>
                    <dd class="loan-monthly-payment"></dd>
                    <span class="comment">
                        Az itt látható szám pusztán egy matematikai képlet alapján számolt összeg, SEMMIFÉLE BANKI
                        AJÁNLAT NINCS MÖGÖTTE, ellenben a matematika elég konok dolog, a hitelösszeg, a futamidő és
                        az éves kamatláb egy konkrét hitel esetén is nagyon hasonló számot fog eredményezni.
                    </span>
                </div>
            </dl>
            <div class="field">
                <label for="annual-property-appreciation-rate">Ingatlan éves értéknövekedése</label>
                <div>
                    <input name="annualPropertyAppreciationRate" type="number" id="annual-property-appreciation-rate" min="0" max="10" step="0.1" value="3" />
                    <span class="unit">% / év</span>
                </div>
                <span class="comment">
                    Az ingatlanok értékének lehet változása, itt adhatjuk meg ennek átlagos értékét a vizsgált időszakra.
                </span>
            </div>
            <div class="field">
                <label for="annual-rental-income">Ingatlan tervezett éves bevétele</label>
                <div>
                    <input name="annualRentalIncome" type="number" id="annual-rental-income" min="0" max="5000000" value="900000" />
                    <span class="unit">Ft / év</span>
                </div>
                <span class="comment">Ingatlankiadásból származó éves bevétel. Amennyiben nem csak saját magunk lakhatását oldjuk meg a vásárlással, de egy részét ki is adjuk.</span>
            </div>
            <div class="field">
                <label>
                    Vagyonszerzési illeték (4%) figyelembevétele a kalkuláció során
                    <input type="checkbox" name="transferTaxEnabled" id="transfer-tax-enabled" checked />
                </label>
            </div>
            <div class="field">
                <label for="annual-property-expenses">Ingatlan egyéb éves költségei</label>
                <div>
                    <input name="annualPropertyExpenses" type="number" id="annual-property-expenses" min="0" max="1000000" value="250000" />
                    <span class="unit">Ft / év</span>
                </div>
                <span class="comment">Lakásbiztosítás, felújításra szánt összeg</span>
            </div>
        </fieldset>

        <!--fieldset>
            <legend>Kiinduló adatok</legend>
            <div class="field">
                <label for="property-price">Ingatlan értéke</label>
                <div>
                    <input name="propertyPrice" type="number" min="30" max="200" step="0.1" id="property-price" value="50" />
                    <span class="unit">millió Ft</span>
                </div>
                <span class="comment">Az ingatlan értéke, amit a meglévő önerőnkkel meg szeretnénk vásárolni</span>
            </div>
            <div class="field">
                <label for="down-payment">Meglévő önerő</label>
                <div>
                    <input name="downPayment" type="number" min="3" max="100" step="0.1" id="down-payment" value="20" />
                    <span class="unit">millió Ft</span>
                </div>
                <span class="comment">A rendelkezésre álló tóke, amiből vagy ingatlant vásárolunk, vagy egyéb módon fektetjük be</span>
            </div>
            <div class="field">
                <label for="investment-rate">Befektetéssel elérhető hozam</label>
                <div>
                    <input name="investmentRate" type="number" min="0" max="25" step="0.1" id="investment-rate" value="5" />
                    <span class="unit">% / év</span>
                </div>
                <span class="comment">
                    Amennyiben nem ingatlant vásárolunk a befektetésünk becsült éves hozama
                </span>
            </div>
            <div class="field">
                <label for="monthly-rental-price">Szoba havi bérleti díja</label>
                <div>
                    <input name="monthlyRentalPrice" type="number" min="0" max="300000" id="monthly-rental-price" value="80000" />
                    <span class="unit">Ft</span>
                </div>
                <span class="comment">Ha nem vásárolunk ingatlant, ez az összeg a havi lakhatás költsége</span>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Hitel adatok</legend>
            <div class="field">
                <label for="annuity-principal">Hitelösszeg (millió Ft)</label>
                <div>
                    <input name="principal" type="number" id="annuity-principal" value="30" readonly />
                    <span class="unit">millió Ft</span>
                </div>
                <span class="comment">Számolt érték, az ingatlan értékének és a meglévő önerőnek a különbsége</span>
            </div>
            <div class="field">
                <label for="annuity-rate">Kamatláb</label>
                <div>
                    <input name="rate" type="number" id="annuity-rate" min="1" max="10" step="0.1" value="3" />
                    <span class="unit">%</span>
                </div>
                <span class="comment">
                    Mekkora THM-mel tudunk hitelt felvenni az ingatlanra
                </span>
            </div>
            <div class="field">
                <label for="annuity-duration">Futamidő</label>
                <div>
                    <input name="duration" type="number" id="annuity-duration" min="5" max="25" value="20" />
                    <span class="unit">év</span>
                </div>
            </div>
            <dl>
                <div>
                    <dt>Havi kalkulált törlesztőrészlet</dt>
                    <dd class="loan-monthly-payment"></dd>
                    <span class="comment">
                        Az itt látható szám pusztán egy matematikai képlet alapján számolt összeg, SEMMIFÉLE BANKI
                        AJÁNLAT NINCS MÖGÖTTE, ellenben a matematika elég konok dolog, a hitelösszeg, a futamidő és
                        a THM egy konkrét hitel esetén is nagyon hasonló számot fog eredményezni.
                    </span>
                </div>
            </dl>
        </fieldset>
        <fieldset>
            <legend>Kalkuláció egyéb paraméterei</legend>
            <div class="field">
                <label for="calculation-period">Vizsgált időszak hossza</label>
                <div>
                    <input name="calculationPeriod" type="number" id="calculation-period" min="1" max="25" value="5" />
                    <span class="unit">év</span>
                </div>
                <span class="comment">
                    Hány évre kalkuláljuk az összehasonlítást, ennyi évnyi törlesztés / albérlet bérlés és befektetés után lesz kalkulálva az eredmény
                </span>
            </div>
            <div class="field">
                <label for="annual-property-appreciation-rate">Ingatlan éves értéknövekedése</label>
                <div>
                    <input name="annualPropertyAppreciationRate" type="number" id="annual-property-appreciation-rate" min="0" max="10" step="0.1" value="3" />
                    <span class="unit">% / év</span>
                </div>
            </div>
            <div class="field">
                <label for="annual-inflation-rate">Infláció éves mértéke</label>
                <div>
                    <input name="annualInflationRate" type="number" id="annual-inflation-rate" min="0" max="10" step="0.1" value="2.5" />
                    <span class="unit">% / év</span>
                </div>
            </div>
            <div class="field">
                <label>
                    Vagyonszerzési illeték (4%) figyelembevétele a kalkuláció során
                    <input type="checkbox" name="transferTaxEnabled" id="transfer-tax-enabled" checked />
                </label>
            </div>
            <div class="field">
                <label for="annual-rental-income">Ingatlan tervezett bevétele</label>
                <div>
                    <input name="annualRentalIncome" type="number" id="annual-rental-income" min="0" max="5000000" value="900000" />
                    <span class="unit">Ft / év</span>
                </div>
                <span class="comment">Ingatlankiadásból származó éves bevétel</span>
            </div>
            <div class="field">
                <label for="annual-property-expenses">Ingatlan egyéb költségei</label>
                <div>
                    <input name="annualPropertyExpenses" type="number" id="annual-property-expenses" min="0" max="1000000" value="150000" />
                    <span class="unit">Ft / év</span>
                </div>
                <span class="comment">Lakásbiztosítás, felújításra szánt összeg</span>
            </div>
        </fieldset -->
    </form>

    <i data-lucide="arrow-big-down" class="results-separator"></i>

    <div class="results">
        <div class="scenario" id="rental-scenario">
            <h2>Albérlet bérlésére</h2>
            <div class="outcome">
                <dl>
                    <dt>Záró vagyon</dt>
                    <dd class="final-net-worth"></dd>
                </dl>
                <dl>
                    <dt>Havi nettó ráfordítás</dt>
                    <dd class="monthly-net-outflow"></dd>
                </dl>
            </div>
            <div class="details">
                <dl>
                    <dt>Vizsgált időszak alatti albérletre kifizetett összeg (éves inflációval emelt)</dt>
                    <dd class="rental-total-amount"></dd>
                    <dt>Kezdőtőke + kamat hozam</dt>
                    <dd class="investment-total-amount"></dd>
                </dl>
            </div>
        </div>
        <div class="scenario" id="loan-scenario">
            <h2>Hitelfelvétel</h2>

            <div class="outcome">
                <dl>
                    <dt>Záró vagyon</dt>
                    <dd class="final-net-worth"></dd>
                </dl>
                <dl>
                    <dt>Havi nettó ráfordítás</dt>
                    <dd class="monthly-net-outflow"></dd>
                </dl>
            </div>
            <div class="details">
                <dl>
                    <dt>Ingatlan értéke</dt>
                    <dd class="property-value"></dd>
                    <dt>Vagyonszerzési illeték</dt>
                    <dd class="transfer-tax"></dd>
                    <dt>Fennmaradó tőketartozás</dt>
                    <dd class="remaining-principal"></dd>
                    <dt>Ingatlan által termelt bevétel (ingatlan kiadás - ingatlan felújítás -- inflációval korrigálva)</dt>
                    <dd class="property-income"></dd>
                    <dt>Vizsgált időszak hiteltörlesztése</dt>
                    <dd class="total-loan-payment"></dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<script type="module" src="/js/calculator.js"></script>

