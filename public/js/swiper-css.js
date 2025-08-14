document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing my-partners-slider');

    var sliderContainer = document.querySelector('.my-partners-slider');
    if (!sliderContainer) {
        console.error('Slider container not found!');
        return;
    }

    var configStr = sliderContainer.getAttribute('data-config');
    var config = {};
    try {
        config = configStr ? JSON.parse(configStr) : {};
    } catch (e) {
        console.error('Error parsing data-config:', e);
    }

    var autoplayConfig = config.autoplay ? {
        delay: 3000,
        disableOnInteraction: false
    } : false;

    var myPartnersSlider = new Swiper('.my-partners-slider', {
        rtl: config.rtl || false,
        autoplay: autoplayConfig,
        loop: (typeof config.loop === 'boolean') ? config.loop : true,
        speed: config.speed || 4000,
        slidesPerView: config.slidesPerView || 3,
        slidesPerGroup: config.slidesPerGroup || 1,
        spaceBetween: config.spaceBetween || 0,
        breakpoints: config.breakpoints || {}
    });

    sliderContainer.addEventListener('mouseenter', function() {
        if (myPartnersSlider.autoplay) {
            myPartnersSlider.autoplay.stop();
        }
    });
    sliderContainer.addEventListener('mouseleave', function() {
        if (myPartnersSlider.autoplay) {
            myPartnersSlider.autoplay.start();
        }
    });
});
