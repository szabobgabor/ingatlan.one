/**
 * Annuitásos hitel kalkulátor
 *
 * @param {number} principal        Hitelösszeg, pl. 20_000_000
 * @param {number} annualRate       Éves kamatláb százalékban, pl. 3
 * @param {number} durationInMonths Futamidő hónapokban, pl. 240
 */
export function calculateAnnuityLoan(
    principal,
    annualRate,
    durationInMonths
) {
    if (!Number.isFinite(principal) || principal <= 0) {
        throw new Error('A hitelösszegnek pozitív számnak kell lennie.');
    }

    if (!Number.isFinite(annualRate) || annualRate < 0) {
        throw new Error('A kamatláb nem lehet negatív.');
    }

    if (
        !Number.isInteger(durationInMonths) ||
        durationInMonths <= 0
    ) {
        throw new Error('A futamidőnek pozitív egész hónapszámnak kell lennie.');
    }

    const monthlyRate = annualRate / 100 / 12;

    const monthlyPayment = monthlyRate === 0
        ? principal / durationInMonths
        : principal * (
        monthlyRate * Math.pow(1 + monthlyRate, durationInMonths)
    ) / (
        Math.pow(1 + monthlyRate, durationInMonths) - 1
    );

    const schedule = [];
    let remainingPrincipal = principal;
    let totalInterest = 0;
    let totalPaid = 0;

    for (let month = 1; month <= durationInMonths; month++) {
        const interestPayment = remainingPrincipal * monthlyRate;

        /*
         * Az utolsó hónapban korrigálunk, hogy a lebegőpontos
         * számítás miatt ne maradjon néhány fillér tartozás.
         */
        const principalPayment = month === durationInMonths
            ? remainingPrincipal
            : monthlyPayment - interestPayment;

        const actualPayment = principalPayment + interestPayment;

        remainingPrincipal = Math.max(
            0,
            remainingPrincipal - principalPayment
        );

        totalInterest += interestPayment;
        totalPaid += actualPayment;

        schedule.push({
            month,
            payment: round(actualPayment),
            principalPayment: round(principalPayment),
            interestPayment: round(interestPayment),
            remainingPrincipal: round(remainingPrincipal),
        });
    }

    return {
        principal: round(principal),
        annualRate,
        durationInMonths,
        monthlyPayment: round(monthlyPayment),
        totalInterest: round(totalInterest),
        totalPaid: round(totalPaid),
        schedule,
    };
}

/**
 * Kamatos kamat számítása éves tőkésítéssel.
 *
 * @param {number} principal      Kiinduló összeg
 * @param {number} annualRate     Éves kamat százalékban, pl. 5
 * @param {number} durationYears  Futamidő években
 */
export function calculateCompoundInterest(
    principal,
    annualRate,
    durationYears
) {
    if (!Number.isFinite(principal) || principal < 0) {
        throw new Error('A kiinduló összeg nem lehet negatív.');
    }

    if (!Number.isFinite(annualRate) || annualRate <= -100) {
        throw new Error('A kamatnak -100%-nál nagyobbnak kell lennie.');
    }

    if (!Number.isInteger(durationYears) || durationYears < 0) {
        throw new Error('A futamidőnek nem negatív egész évnek kell lennie.');
    }

    const rate = annualRate / 100;
    const schedule = [];

    let currentAmount = principal;
    let totalInterest = 0;

    for (let year = 1; year <= durationYears; year++) {
        const startingAmount = currentAmount;
        const interest = startingAmount * rate;

        currentAmount += interest;
        totalInterest += interest;

        schedule.push({
            year,
            startingAmount: round(startingAmount),
            interest: round(interest),
            endingAmount: round(currentAmount),
        });
    }

    return {
        principal: round(principal),
        annualRate,
        durationYears,
        finalAmount: round(currentAmount),
        totalInterest: round(totalInterest),
        schedule,
    };
}

function round(value, decimals = 2) {
    const multiplier = 10 ** decimals;
    return Math.round((value + Number.EPSILON) * multiplier) / multiplier;
}