const cardEl = document.querySelectorAll('.card')

cardEl.forEach(card => {
    const buttonEl = card.querySelector('.btn')
    const ulEl = card.querySelector('.curiosities')

    buttonEl?.addEventListener('click', () => {

        ulEl.classList.toggle('d-none')

    })
});