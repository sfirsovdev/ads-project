(() => {
const refs = {
    openModalBtnAll: document.querySelectorAll('[data-modal-open]'),
    closeModalBtnAll: document.querySelectorAll('[data-modal-close]'),
    modal: document.querySelector('[data-modal]'),
};


refs.openModalBtnAll.forEach((btn) => btn.addEventListener('click', toggleModal));
refs.closeModalBtnAll.forEach((btn) => btn.addEventListener('click', toggleModal));

function toggleModal() {
    refs.modal.classList.toggle('is-hidden');
}
})();