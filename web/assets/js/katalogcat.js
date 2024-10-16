
// Fungsi untuk smooth scroll
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
}

// Fungsi untuk inisialisasi Swiper
function initSwiper() {
    const swiper = new Swiper('.three-items_slider', {
        pagination: {
            el: '.three-items_slider-pagination',
            clickable: true,
        },
        slidesPerView: 3,
        spaceBetween: 10,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 600,
        effect: 'slide',
    });
    return swiper;
}

// Fungsi untuk filter kategori
function initCategoryFilter(swiper) {
    const buttons = document.querySelectorAll('.btn-category');
    const slides = document.querySelectorAll('.three-items_slider .swiper-slide');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const kategori = this.getAttribute('data-kategori');
            
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            slides.forEach(slide => {
                if (kategori === 'all' || slide.getAttribute('data-kategori') === kategori) {
                    slide.style.display = 'block';
                } else {
                    slide.style.display = 'none';
                }
            });

            if (swiper) {
                swiper.update();
            }
        });
    });
}

// Inisialisasi semua fungsi saat DOM siap
document.addEventListener('DOMContentLoaded', function() {
    initSmoothScroll();
    const swiper = initSwiper();
    initCategoryFilter(swiper);
});