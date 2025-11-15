document.addEventListener('DOMContentLoaded', () => {
  const letters = document.querySelectorAll('.welcome-title span');
  let lastScrollTop = 0;
  window.addEventListener('scroll', () => {
    const st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop) {
      for(let i = 0; i < letters.length; i++) {
        setTimeout(() => {
          letters[i].classList.add('visible');
        }, i * 200);
      }
    } else {
      for(let i = 0; i < letters.length; i++) {
        letters[i].classList.remove('visible');
      }
    }
    lastScrollTop = st <= 0 ? 0 : st;
  }, false);
});