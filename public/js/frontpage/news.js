
 window.addEventListener("load", function(event) {
    console.log("All resources finished loading!");
    loadAnimation();
  });
var view = document.querySelector('body');
var loading = document.querySelector('.loading');
var aLinks = document.querySelectorAll('.current');
aLinks.forEach(function(aLink){

    console.log(aLink);

    aLink.addEventListener('click',function(ele){
        console.log('點到連結');
        ele.preventDefault();
        leaveAnimation();
        setTimeout(() => {
            runLink(this)
        }, 520);
    });
});

function runLink(aLink){
    let href =  aLink.getAttribute('href');
    window.location.href = href;
}

function leaveAnimation(){
    loading.classList.remove('outAnimate');
    console.log(loading);
}

function loadAnimation(){

    setTimeout(function () {
        console.log('跑動畫');
        loading.classList.add('outAnimate');
    }, 700);
    console.log(view);
    setTimeout(function(){
        let loadingNews = document.querySelector('.loading-news');
        loadingNews.style.overflowY = 'initial' ;
    },300)
}



const swiper = new Swiper('.swiper-container', {
    // Optional parameters

    // slidesPerView: 1,
    direction: 'horizontal',
    loop: false,
});

//分頁按鈕產生
var pageFrame = document.querySelector('.page-frame');
var mobilePageFrame = document.querySelector('.mobile-page-frame');
console.log(mobilePageFrame);

var slideQty = pageFrame.getAttribute('data-slideQty');
var mobileSlideQty = mobilePageFrame.getAttribute('data-mobileSlide');


for (let index = 1; index <= slideQty; index++) {
    if(index>3){
        console.log("有大於三");
        pageFrame.innerHTML += '<div id=slide'+index+' class="page-btn hide">'+index+'</div>'
    }else{
        pageFrame.innerHTML += '<div id=slide'+index+' class="page-btn">'+index+'</div>'
    }
}

for (let index = 1; index <= mobileSlideQty; index++) {
    if(index>3){
        console.log("有大於三");
        mobilePageFrame.innerHTML += '<div id=moblieSlide'+index+' class="page-btn hide">'+index+'</div>'
    }else{
        mobilePageFrame.innerHTML += '<div id=moblieSlide'+index+' class="page-btn">'+index+'</div>'
    }
}


//分頁按鈕控制
var pageBtns = document.querySelectorAll('.page-btn');
pageBtns.forEach(pageBtn => {
    pageBtn.addEventListener('click', function () {
        pageBtns.forEach(function (pageBtn) {
            pageBtn.style.color = 'black';
            pageBtn.style.borderColor = '#42210B';
        });
        this.style.color = '#036893';
        this.style.borderColor = '#036893';
        var slide = Number(this.innerText);
        var parent = pageBtn.parentNode ;
        console.log(pageBtn.parentNode.querySelectorAll('.page-btn'));

        if(pageBtn.parentElement.className == 'page-frame'){
            console.log('點到pc按鈕');
            slideId = 'slide';
            controlPageBtnsDisplay(slide,slideQty,slideId,parent);
        }
        if(pageBtn.parentElement.className == 'mobile-page-frame'){
            console.log('點到手機板按鈕');
            mobileSlideId = 'moblieSlide' ;
            controlPageBtnsDisplay(slide,mobileSlideQty,mobileSlideId,parent);
        }


        var index = Number(this.innerText) - 1;
        swiper.slideTo(index);
        // console.log(swiper.activeIndex);
    });
});

function controlPageBtnsDisplay(slide,maxSlideQty,id,parent){
    if(slide>1&&slide<maxSlideQty){
        var hideSlides =parent.querySelectorAll('.page-btn');
        hideSlides.forEach(function(hideSlide){
            hideSlide.classList.add('hide');
            hideSlide.classList.remove('show');
        });
        var next = slide+1 ;
        var pre = slide-1 ;
        var showNextSlide =document.querySelector('#'+id+next);
        var showThisSlide = document.querySelector('#'+id+slide);
        var showPreSlide =document.querySelector('#'+id+pre);
        showNextSlide.classList.add('show');
        showPreSlide.classList.add('show');
        showThisSlide.classList.add('show');
        console.log(slide);
    }
}


///分類公告
var typeCheckBoxs = document.querySelectorAll('.type');
typeCheckBoxs.forEach(function (typeCheckBox) {
    typeCheckBox.addEventListener('click', function () {
        ///blade

        ///css
        this.classList.toggle('checked'), ':before';
        this.classList.toggle('border-checked');
        var checked = this;
        typeCheckBoxs.forEach(function (typeCheckBox) {
            if (typeCheckBox != checked) {
                typeCheckBox.classList.remove('checked'), ':before';
                typeCheckBox.classList.remove('border-checked') ;
            }
        });
    })
});


//圖文動畫
var hoverBlocks = document.querySelectorAll('.line-frame');
hoverBlocks.forEach(block => {
    block.addEventListener('mouseover', function () {
        if(window.innerWidth > 768){
            // console.log(this.getElementsByClassName('photo'));
            var photo = this.querySelector('.photo');
            var description = this.querySelector('.description');
            photo.classList.add('photo-active');
            description.classList.add('description-active');
        }


    })
    block.addEventListener('mouseout', function () {
        if(window.innerWidth>768){
            var photo = this.querySelector('.photo');
            var description = this.querySelector('.description');
            photo.classList.remove('photo-active');
            description.classList.remove('description-active');
        }

    })
});
