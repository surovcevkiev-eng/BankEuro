const modal 	 = document.querySelector('#modal-search');
const openModal  = document.querySelector('.btn-search');
const closeModal = document.querySelector('.btn-search-close');

openModal.addEventListener('click', () => {
	modal.showModal();
})

closeModal.addEventListener('click', () => {
	modal.close();
})
