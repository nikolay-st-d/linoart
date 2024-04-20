// content animations
const the_animation = document.querySelectorAll('.animation-left');
const observer = new IntersectionObserver(
    (elementEntries) => {
        elementEntries.forEach((elementEntry) => {
            if (elementEntry.isIntersecting) {
                elementEntry.target.classList.add('scroll-animation');
            } else {
                elementEntry.target.classList.remove('scroll-animation');
            }
        });
    },
    { threshold: 0.3 }
);
for (let i = 0; i < the_animation.length; i++) {
    const elements = the_animation[i];
    observer.observe(elements);
}

// logo animation
const headerElement = document.querySelector('.header_container');
const mainElement = document.getElementById('#main');
headerElement.style.transform = 'translateY(-150px)';
window.addEventListener('load', () => {
    setTimeout(() => {
        headerElement.style.transition = 'all 0.3s ease';
        headerElement.style.transform = 'translateY(0)';
    }, '2000');
});
