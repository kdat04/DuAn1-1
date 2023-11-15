let amountELement = document.getElementById('amount')
let amount = amountELement.value
// console.log(amount)
// CỘNG SỐ LƯỢNG
let render = (amount) =>{
    amountELement.value = amount
}
let plus = () => {
    amount++
    render(amount);
}

// TRỪ SỐ LƯỢNG
let minus = () => {
    if (amount > 1) 
    amount --;
    render(amount);
}

amountELement.addEventListener('input', () => {
    amount = amountELement.value
    amount = parseInt(amount);
    amount = (isNaN(amount) || amount==0)?1:amount;
    render(amount)
    console.log(amount);
});