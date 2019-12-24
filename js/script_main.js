$('.user-name-wrapper ul').hide();

$(document).click(function(e) {
    $('.user-name-wrapper ul').hide();
    $('body').removeClass('slide-fixed-open');
})

$('span.user-name').click(function(e) {
    e.stopPropagation();
    $(this).next('.user-name-wrapper ul').slideToggle(150);
});
$('.user-name-wrapper ul,.fixed-item-container').click(function(e) {
    e.stopPropagation();
});

$('ul.list ul').each(function(){
    $(this).addClass('child-list-wrapper');
    $(this).children('li').addClass('child-item');
});

$('.child-list-wrapper').each(function(){
    $(this).closest('li').addClass('wrapper-list-child-items');
});
$('.wrapper-list-child-items').prepend('<div class="child-trigger"></div>');
$('.child-trigger').click(function(){
    $(this).siblings('.child-list-wrapper').slideToggle();
    $(this).toggleClass('child-open');
    $(this).next('a').toggleClass('background');
});
$('.child-trigger').mouseenter(function(){
    $(this).next('a').addClass('hover');
});
$('.child-trigger').mouseleave(function(){
    $(this).next('a').removeClass('hover');
});