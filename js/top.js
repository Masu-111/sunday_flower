
let imgList = [];
if (window.innerWidth < 960) {
    imgList = ["img/top_sp01.jpg", "img/top_sp02.jpg"];
} else {
    imgList = ["img/top_pc01.jpg", "img/top_pc02.jpg"];
}

$('.key_v_slider').bgswitcher({
    images: imgList,
    interval: 8000,
    duration: 1700,
    effect: "fade",
});

// $(function () {
// setTimeout(function () {
//     $('.logo_fadein p').fadeIn(1000);
// }, 500);
// setTimeout(function () {
//     $('.logo_fadein').fadeOut(900);
// }, 2500);
// });

//fade in-out
setTimeout(() => {
    $('.logo_fadein p').fadeIn(1000);
}, 500);

setTimeout(() => {
    $('.logo_fadein').fadeOut(900);
}, 2500);

// News
$('.tab-item').on('click', (e) => {
    const target = e.currentTarget;
    const tabIndex = $('.tab-item').index(target);
    $('.tab-item, .panel-item').removeClass('is-active');
    $('.panel-item').eq(tabIndex).addClass('is-active');
    $(target).addClass('is-active');
});


