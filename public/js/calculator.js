import { calculateAnnuityLoan, calculateCompoundInterest} from './calculator-functions.js';

const annuityForm = document.querySelector('#annuity-calculator');
const propertyPrice = document.querySelector('#property-price');
const downPayment = document.querySelector('#down-payment');
const loanAmount = document.querySelector('#annuity-principal');
const loanRate = document.querySelector('#annuity-rate');
const loanDuration = document.querySelector('#annuity-duration');
const monthlyRentalIncome = document.querySelector('#monthly-rental-income');

const rentalScenario = document.querySelector('#rental-scenario');
const loanScenario = document.querySelector('#loan-scenario');

let loan, investment, propertyInvestment = null;

init();

function init() {
    propertyPrice.addEventListener('input', () => { updateLoanAmount(); calculate(); });
    downPayment.addEventListener('input', () => { updateLoanAmount(); calculate(); });
    document.querySelector('#investment-rate').addEventListener('input', calculate);
    document.querySelector('#monthly-rental-price').addEventListener('input', calculate);

    loanAmount.addEventListener('input', calculate);
    loanRate.addEventListener('input', calculate);
    loanDuration.addEventListener('input', calculate);

    document.querySelector('#calculation-period').addEventListener('input', calculate);
    document.querySelector('#annual-property-appreciation-rate').addEventListener('input', calculate);
    document.querySelector('#annual-inflation-rate').addEventListener('input', calculate);
    document.querySelector('#transfer-tax-enabled').addEventListener('change', calculate);
    document.querySelector('#annual-rental-income').addEventListener('input', calculate);
    document.querySelector('#annual-property-expenses').addEventListener('input', calculate);


    calculate();
}

function calculate() {
    const principal = parseFloat(annuityForm.elements.principal.value) * 1_000_000;
    const rate = parseFloat(annuityForm.elements.rate.value);
    const durationYears = parseFloat(annuityForm.elements.duration.value);
    const durationMonths = durationYears * 12;

    const calculationPeriod = parseInt(annuityForm.elements.calculationPeriod.value, 10);
    const monthlyRentalPrice = parseInt(annuityForm.elements.monthlyRentalPrice.value, 10);
    const annualInflationRate = parseFloat(annuityForm.elements.annualInflationRate.value);

    // loan
    loan = calculateAnnuityLoan(principal, rate, durationMonths);
    annuityForm.querySelector('.loan-monthly-payment').textContent = Math.round(loan.monthlyPayment).toLocaleString() + ' Ft';

    // rental
    let rentalTotalAmount = 0.0;
    for (let i = 0; i < calculationPeriod; i++) {
        rentalTotalAmount += monthlyRentalPrice * 12 * Math.pow(1 + annualInflationRate / 100, i);
    }

    investment = calculateCompoundInterest(parseFloat(downPayment.value) * 1_000_000, parseFloat(annuityForm.elements.investmentRate.value), calculationPeriod);

    rentalScenario.querySelector('.rental-total-amount').textContent = Math.round(rentalTotalAmount * -1).toLocaleString() + ' Ft';
    rentalScenario.querySelector('.investment-total-amount').textContent = Math.round(investment.finalAmount).toLocaleString() + ' Ft';
    rentalScenario.querySelector('.final-net-worth').textContent = (Math.round(investment.finalAmount) - Math.round(rentalTotalAmount)).toLocaleString() + ' Ft';
    rentalScenario.querySelector('.monthly-net-outflow').textContent = monthlyRentalPrice.toLocaleString() + ' Ft';

    //property
    propertyInvestment = calculateCompoundInterest(parseFloat(propertyPrice.value) * 1_000_000, parseFloat(annuityForm.elements.annualPropertyAppreciationRate.value), calculationPeriod);
    const transferTax = annuityForm.elements.transferTaxEnabled.checked ? parseFloat(propertyPrice.value) * 1_000_000 * 0.04 : 0;
    let propertyTotalIncome = 0.0;
    const propertyYearlyIncome = parseFloat(annuityForm.elements.annualRentalIncome.value) - parseFloat(annuityForm.elements.annualPropertyExpenses.value)
    for (let i = 0; i < calculationPeriod; i++) {
        propertyTotalIncome += propertyYearlyIncome  * Math.pow(1 + annualInflationRate / 100, i);
    }

    loanScenario.querySelector('.property-value').textContent = Math.round(propertyInvestment.finalAmount).toLocaleString() + ' Ft';
    loanScenario.querySelector('.transfer-tax').textContent = Math.round(transferTax * -1).toLocaleString() + ' Ft';
    loanScenario.querySelector('.remaining-principal').textContent = Math.round(loan.schedule[(calculationPeriod * 12) - 1].remainingPrincipal * -1).toLocaleString() + ' Ft';
    loanScenario.querySelector('.property-income').textContent = Math.round(propertyTotalIncome).toLocaleString() + ' Ft';
    loanScenario.querySelector('.total-loan-payment').textContent = (Math.round(loan.monthlyPayment) * calculationPeriod * 12 * -1).toLocaleString() + ' Ft';
    loanScenario.querySelector('.final-net-worth').textContent = (Math.round(propertyInvestment.finalAmount) - Math.round(transferTax) - Math.round(loan.schedule[(calculationPeriod * 12) - 1].remainingPrincipal) + Math.round(propertyTotalIncome) - (Math.round(loan.monthlyPayment) * calculationPeriod * 12)).toLocaleString() + ' Ft';
    loanScenario.querySelector('.monthly-net-outflow').textContent = (Math.round(loan.monthlyPayment) - Math.round(propertyYearlyIncome / 12)).toLocaleString() + ' Ft';


}

function updateLoanAmount(event) {
    loanAmount.value = parseFloat(propertyPrice.value) - parseFloat(downPayment.value);
}