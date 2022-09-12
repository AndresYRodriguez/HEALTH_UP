const openModal = document.querySelector('.hero__cta');
const OpenModal = document.querySelector('.modificar');
const Modal2 = document.querySelector('.modal2');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.modal__close');
const CloseModal = document.querySelector('.modal_close');


openModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.add('modal--show');
});

OpenModal.addEventListener('click', (e) => {
    e.preventDefault();
    Modal2.classList.add('modal-show');
});

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('modal--show');
});

CloseModal.addEventListener('click', (e) => {
    e.preventDefault();
    Modal2.classList.remove('modal-show');
});