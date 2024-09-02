const starsElements = document.querySelectorAll('[data-stars]');
starsElements.forEach(starsEl => {
    const input = starsEl.querySelector('input');
    let starsValue = starsEl.getAttribute('data-stars-value');
    const items = starsEl.querySelectorAll('.stars__item');
    let state = numberToArray(starsValue);

    const setState = () => {
        items.forEach((item, index) => {
            const value = state[index];
            const icon = item.querySelector('.stars__item-solid-icon');

            if (value) {
                icon.style.setProperty('width', (100 * value) + '%');
            } else {
                icon.style.setProperty('width', '0%');
            }
        })
    }

    setState();

    items.forEach((item, index) => {
        const value = index + 1;

        item.addEventListener('click', () => {
            input.setAttribute('value', value);
            input.value = value;
            state = numberToArray(value);
            setState();
        });

        item.addEventListener('mouseenter', () => {
            state = numberToArray(value);
            setState();
        })
    });


    starsEl.addEventListener('mouseleave', (e) => {
        state = numberToArray(input.value);
        setState();
    })
})

function numberToArray(num) {
    const parts = String(num).split('.');
    const integerPart = parseInt(parts[0]);
    const result = Array(integerPart).fill(1);

    if (parts[1]) {
        const fractionalPart = parseFloat('0.' + parts[1]);
        result.push(fractionalPart);
    }

    return result;
}