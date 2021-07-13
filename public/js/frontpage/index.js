
var frontNav = document.querySelector('nav');
const banner = document.querySelector('.banner');

window.addEventListener('scroll', function (e) {
    let st = this.scrollY;
    let bannerHeight = banner.offsetHeight;

    if (st > bannerHeight) {
        frontNav.classList.remove('front-nav');
    } else {
        frontNav.classList.add('front-nav');
    }

});


setTimeout(showPage, 1700);

function showPage() {
    var loadingPage = document.querySelector('.loading');
    var body = document.querySelector('body');
    loadingPage.classList.add('hidden');

    setTimeout(function () {
        loadingPage.classList.add('display-none');
        body.classList.remove('loading-animate');
    }, 500);

}
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);

window.addEventListener('scroll', function (e) {
    var aboutTop = document.querySelector('.section-about').offsetTop;
    var aboutHeight = document.querySelector('.section-about').offsetHeight;
    let scrollY = this.scrollY;

    var cherry = document.querySelector('.cherry');
    var cherryMove = ((scrollY - aboutTop) / aboutHeight) * 100;
    cherry.style.bottom = cherryMove + '%'



});

var imgs = document.querySelectorAll('.animate-img');
function debounce(func, wait = 10, immediate = true) {
    var timeout;
    return function () {
        var context = this, args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}
scrollElement();
window.addEventListener('scroll', debounce(scrollElement));
function scrollElement(e) {

    imgs.forEach(img => {
        let imgHeight = img.height;
        let imgTop = img.getBoundingClientRect().top;
        console.log(imgTop);

        if (imgTop - imgHeight <= 0) {

            let parent = img.parentElement;
            let div = parent.querySelector('.animate-div');
            img.classList.add('active');
            div.classList.add('active');
        }

    });


}
