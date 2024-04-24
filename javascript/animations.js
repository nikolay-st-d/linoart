// content animations
const animatedElements = document.querySelectorAll('.animation-left');
const observer = new IntersectionObserver(
    (elementEntries) => {
        elementEntries.forEach((elementEntry) => {
            if (elementEntry.isIntersecting) {
                elementEntry.target.classList.add('scroll-animation');
            }
        });
    },
    { threshold: 0.4 }
);
animatedElements.forEach((element) => {
    observer.observe(element);
});

// header content animation
const headerElement = document.querySelector('.header_container');
window.addEventListener('load', () => {
    setTimeout(() => {
        headerElement.classList.add('header_animation_in');
    }, '1000');
});
window.addEventListener('scroll', () => {
    const headerTopOffset = headerElement.getBoundingClientRect().top;
    console.log(headerTopOffset);
    if (headerTopOffset < -150) {
        headerElement.classList.remove('header_animation_in');
    } 
    if (headerTopOffset == -150) {
        headerElement.classList.add('header_animation_in');
    }
});
