const bodyElement = document.querySelector('body');
  const buttonElement = document.getElementById('to-top-btn');

  window.addEventListener('scroll', () => {
    const bodyTopOffset = bodyElement.getBoundingClientRect().top;
    if (bodyTopOffset > -400) {
      buttonElement.classList.remove('to-top-btn-appear');
    }
    if (bodyTopOffset < -400) {
      buttonElement.classList.add('to-top-btn-appear');
    }
  });