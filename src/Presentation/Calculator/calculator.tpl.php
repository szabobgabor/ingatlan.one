<?php
?>

<form class="calculator" id="annuity-calculator">
    <fieldset>
        <legend>Kiinduló adatok</legend>
        <div class="field">
            <label for="property-price">Ingatlan értéke (millió Ft)</label>
            <input name="propertyPrice" type="number" min="30" max="200" step="0.1" id="property-price" value="50" />
        </div>
        <div class="field">
            <label for="down-payment">Meglévő önerő (millió Ft)</label>
            <input name="downPayment" type="number" min="3" max="100" step="0.1" id="down-payment" value="20" />
        </div>
        <div class="field">
            <label for="investment-rate">Egyég befektetéssel elérhető kamat hozama (%)</label>
            <input name="investmentRate" type="number" min="0" max="25" step="0.1" id="investment-rate" value="5" />
        </div>
        <div class="field">
            <label for="monthly-rental-price">Szoba havi bérleti díja (ha csak bérlésben gondolkodunk)</label>
            <input name="monthlyRentalPrice" type="number" min="0" max="300000" id="monthly-rental-price" value="80000" />
        </div>
    </fieldset>
    <fieldset class="form-group">
        <legend>Hitel adatok</legend>
        <div class="field">
            <label for="annuity-principal">Hitelösszeg (millió Ft)</label>
            <input name="principal" type="number" id="annuity-principal" value="30" readonly />
        </div>
        <div class="field">
            <label for="annuity-rate">Kamatláb (%)</label>
            <input name="rate" type="number" id="annuity-rate" min="1" max="10" step="0.1" value="3" />
        </div>
        <div class="field">
            <label for="annuity-duration">Futamidő (év)</label>
            <input name="duration" type="number" id="annuity-duration" min="5" max="25" value="20" />
        </div>
        <dl>
            <div>
                <dt>Havi törlesztőrészlet</dt>
                <dd class="loan-monthly-payment"></dd>
            </div>
        </dl>
    </fieldset>
    <fieldset>
        <legend>Kalkuláció egyéb paraméterei</legend>
        <div class="field">
            <label for="calculation-period">Vizsgált időszak hossza (év)</label>
            <input name="calculationPeriod" type="number" id="calculation-period" min="1" max="25" value="5" />
        </div>
        <div class="field">
            <label for="annual-property-appreciation-rate">Ingatlan éves értéknövekedése (%)</label>
            <input name="annualPropertyAppreciationRate" type="number" id="annual-property-appreciation-rate" min="0" max="10" step="0.1" value="3" />
        </div>
        <div class="field">
            <label for="annual-inflation-rate">Infláció éves mértéke (%)</label>
            <input name="annualInflationRate" type="number" id="annual-inflation-rate" min="0" max="10" step="0.1" value="2.5" />
        </div>
        <div class="field">
            <label>
                <input type="checkbox" name="transferTaxEnabled" id="transfer-tax-enabled" checked />
                Vagyonszerzési illeték (4%) figyelembevétele a kalkuláció során
            </label>
        </div>
        <div class="field">
            <label for="annual-rental-income">Ingatlan kiadásból származó éves bevétel (Ft)</label>
            <input name="annualRentalIncome" type="number" id="annual-rental-income" min="0" max="5000000" value="900000" />
        </div>
        <div class="field">
            <label for="annual-property-expenses">Ingatlan felújításra szánt éves keret</label>
            <input name="annualPropertyExpenses" type="number" id="annual-property-expenses" min="0" max="1000000" value="150000" />
        </div>
    </fieldset>
</form>

<div class="scenario" id="rental-scenario">
    <h2>Albérlet bérlésére</h2>
    <dl>
        <div>
            <dt>Vizsgált időszak alatti albérletre kifizetett összeg (éves inflációval emelt)</dt>
            <dd class="rental-total-amount"></dd>
        </div>
        <div>
            <dt>Kezdőtőke + kamat hozam</dt>
            <dd class="investment-total-amount"></dd>
        </div>
        <div>
            <dt>Záró vagyon</dt>
            <dd class="final-net-worth"></dd>
        </div>
    </dl>
</div>
<div class="scenario" id="loan-scenario">
    <h2>Hitelfelvétel</h2>
    <dl>
        <div>
            <dt>Ingatlan értéke</dt>
            <dd class="property-value"></dd>
        </div>
        <div>
            <dt>Vagyonszerzési illeték</dt>
            <dd class="transfer-tax"></dd>
        </div>
        <div>
            <dt>Fennmaradó tőketartozás</dt>
            <dd class="remaining-principal"></dd>
        </div>
        <div>
            <dt>Ingatlan által termelt bevétel (ingatlan kiadás - ingatlan felújítás -- inflációval korrigálva)</dt>
            <dd class="property-income"></dd>
        </div>
        <div>
            <dt>Vizsgált időszak hiteltörlesztése</dt>
            <dd class="total-loan-payment"></dd>
        </div>
        <div>
            <dt>Záró vagyon</dt>
            <dd class="final-net-worth"></dd>
        </div>
    </dl>
</div>

<script type="module" src="/js/calculator.js"></script>

