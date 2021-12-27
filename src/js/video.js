(() => {
    const refs = {
      openModalVideoBtn: document.querySelector('.feature__button'),
      closeModalVideoBtn: document.querySelector('[data-modal-close-video]'),
      modalVideo: document.querySelector('[data-video]'),
    };
  
    refs.openModalVideoBtn.addEventListener('click', toggleModal);
    refs.closeModalVideoBtn.addEventListener('click', toggleModal);
  
    function toggleModal() {
      refs.modalVideo.classList.toggle('is-shown');
    }
  })();