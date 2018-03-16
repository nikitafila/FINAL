const 
    num = document.querySelector('#num'),
    percentage = document.querySelector('#percentage'),
    calculate = document.querySelector('#calculate');

    calculate.addEventListener('click', () => {
    document.querySelector('#result').innerHTML = (num.value === '' || percentage.value === '') ? 'Попълнете полета' : (num.value*(percentage.value / 100)).toFixed(2);
});

