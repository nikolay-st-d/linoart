// content animations
const animatedElements = document.querySelectorAll('.animation-left');
const observer = new IntersectionObserver(elementEntries => {
        elementEntries.forEach((elementEntry) => {
            if (elementEntry.isIntersecting) {
                elementEntry.target.classList.add('scroll-animation');
            }
        });
    },
    { threshold: 0.4 }
);
for (let i = 0; i < animatedElements.length; i++) {
    const element = animatedElements[i];
    observer.observe(element);
}

// logo animation
const headerElement = document.querySelector('.header_container');
headerElement.style.transform = 'translateY(-150px)';
window.addEventListener('load', () => {
    setTimeout(() => {
        headerElement.style.transition = 'all 0.3s ease';
        headerElement.style.transform = 'translateY(0)';
    }, '1000');
});
