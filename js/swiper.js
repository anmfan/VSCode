function initializeSwiper(selector) {
    return new Swiper(selector, {
        loop: true,
        centeredSlides: true,
        centeredSlidesBounds: true,
        slidesPerView: 3,
        spaceBetween: 10,
        allowTouchMove: false,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        }
    });
}

const swipers = ['.swiper', '.swiper2', '.swiper3'].map(initializeSwiper)
function controlAutoplay(swipers, action) {
    swipers.forEach(swiper => {
        if (action === 'start') {
            swiper.autoplay.start();
        } else {
            swiper.autoplay.stop();
        }
    });
}

document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'visible') {
        controlAutoplay(swipers, 'start');
    } else {
        controlAutoplay(swipers, 'stop');
    }
});

window.addEventListener('load', () => controlAutoplay(swipers, 'start'));
window.addEventListener('focus', () => controlAutoplay(swipers, 'start'));