$('.nav-text-home').click(function(){
    $('html, body').animate({
        scrollTop:$('header').offset().top
    }, 1000)
});

$('.nav-text-services').click(function(){
    $('html, body').animate({
        scrollTop:$('.offer').offset().top
    },1000)
});

$('.nav-text-about').click(function(){
    $('html, body').animate({
        scrollTop:$('.about').offset().top
    },1000)
});

$('.nav-text-comments').click(function(){
    $('html, body').animate({
        scrollTop:$('.reviews').offset().top
    },1000)
});

$('.nav-text-contact').click(function(){
    $('html, body').animate({
        scrollTop:$('.footer').offset().top
    },1000)
});

$('.content-button').click(function(){
    $('html, body').animate({
        scrollTop:$('.about').offset().top
    },1000)
});

$('.burger').click(function(){
    $('header').toggleClass('open');
});

$('header .nav a').click(function(){
    $('header').removeClass('open');
});

let slider = $('.slider'); //сделать вокруг кружочков кружочек
let sliderItem = slider.find('.slider-item');
let nowShowIndex = 0;
slider.find('.slider-arrow-left').click(function(){
    if(nowShowIndex <= 0){
        sliderItem.eq(nowShowIndex).fadeOut();
        nowShowIndex = sliderItem.length-1;
        sliderItem.eq(nowShowIndex).css('display', 'flex');
    }else{
        sliderItem.eq(nowShowIndex).fadeOut();
        sliderItem.eq(nowShowIndex-1).css('display', 'flex');
        nowShowIndex = nowShowIndex-1;
    }
});
slider.find('.slider-arrow-right').click(function(){
    if(nowShowIndex >= sliderItem.length-1){
        sliderItem.eq(nowShowIndex).fadeOut();
        nowShowIndex = 0;
        sliderItem.eq(nowShowIndex).css('display', 'flex');
    }else{
        sliderItem.eq(nowShowIndex).fadeOut();
        sliderItem.eq(nowShowIndex+1).css('display', 'flex');
        nowShowIndex = nowShowIndex+1
    }
});
//если быстро кликать, то все картинки становятся дисплэй ноне


$('.about-text-button').click(function(){
    $('.popup').css('display', 'block').hide().fadeIn(1000);
});
$(window).keydown(function(e){
    if(e.keyCode==27){
        $('.popup').fadeOut(500);
    }
});
$('.popup').click(function(){
    $(this).fadeOut(500); //почему не пропадает 
});
$('.popup-content').click(function(e){
    e.stopPropagation();
});


$('form').submit(function(e){
    e.preventDefault();
    let errorElement = $(this).find('.error-message');
    let fioVal = $(this).find("[name='fio']").val();
    let emailVal = $(this).find("[name='email']").val();
    let phoneVal = $(this).find("[name='phone']").val();
    $(this).find('button').addClass('fail');
    if(fioVal==''||emailVal==''||phoneVal==''){
        let errorMessage = 'Вы не заполнили поля: ';
        $(this).find('button').addClass('fail');
        if(fioVal==''){
            $(this).find("[name='fio']").addClass('error');
            errorMessage=errorMessage + "ФИО, ";
        }else{
            $(this).find("[name='fio']").removeClass('error');
        }
       if(emailVal==''){
            $(this).find("[name='email']").addClass('error');
            errorMessage=errorMessage + "e-mail, ";
        }else{
            $(this).find("[name='email']").removeClass('error');
        }
       if(phoneVal==''){
            $(this).find("[name='phone']").addClass('error');
            errorMessage=errorMessage + "телефон ";
        }else{
            $(this).find("[name='phone']").removeClass('error');
        }
    errorElement.html(errorMessage);
    errorElement.slideDown();
    }else{
        alert('Всё хорошо, я бы отправил форму');
        errorElement.slideUp();
        $(this).find("[name='fio']").removeClass('error');
        $(this).find("[name='email']").removeClass('error');
        $(this).find("[name='phone']").removeClass('error');
        $(this).find('button').removeClass('fail');
    }
});
$("[name='fio'], [name='email'], [name='phone']").keyup(function(e){
    let errorElement = $('form').find('.error-message');
    let errorMessage = 'Вы не заполнили поля: ';
    if(e.keyCode!=17 && e.keyCode!=16 && e.keyCode!=27 && e.keyCode!=9){
        let fioVal = $('form').find("[name='fio']").val();
        let emailVal = $('form').find("[name='email']").val();
        let phoneVal = $('form').find("[name='phone']").val();
        if(fioVal.length < 2 || fioVal.length > 24 ){
            errorMessage=errorMessage + "ФИО, ";
        }
        if(emailVal.length < 2 || emailVal.length > 24 ){
            errorMessage=errorMessage + "e-mail, ";
        }
        if(phoneVal.length < 2 || phoneVal.length > 24 ){
            errorMessage=errorMessage + "телефон ";
        }
        errorElement.html(errorMessage);
        if($(this).val().length>=2 && $(this).val().length<=24 ){
            $(this).removeClass('error');
            if ($('form').find('input.error').length==0){ 
                $('form').find('button').removeClass('fail');
                errorElement.slideUp();
            }
        }else{
            $(this).addClass('error');
            $('form').find('button').addClass('fail');
            errorElement.slideDown();
        }
    }
});
