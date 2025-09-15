$(function(){
  let header=$("#header");
  let headerH=header.height();
  let scrollPos=$(window).scrollTop();
 
  console.log(headerH);

$(window).on("scroll", function(){




  scrollPos=$(this).scrollTop();
  if (scrollPos>headerH){
    header.addClass("fixed");
  }
  else{
    header.removeClass("fixed");
  }
});
});

console.log("erfrfer");
