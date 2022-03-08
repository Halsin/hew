$(function(){
  $(".has-sub").hover(function(){
    $(this).children(".sub").stop().slideToggle();
  });
});