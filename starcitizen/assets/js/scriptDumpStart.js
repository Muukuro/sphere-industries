$(document).ready(function() {
    $('.viewport').mouseenter(function(e) {
        $(this).children('a').children('span').fadeIn(200);
    }).mouseleave(function(e) {
        $(this).children('a').children('span').fadeOut(200);
    });
});


(function(){
  // if firefox 3.5+, hide content till load (or 3 seconds) to prevent FOUT
  var d = document, e = d.documentElement, s = d.createElement('style');
  //if (e.style.MozTransform === ''){ // gecko 1.9.1 inference
    s.textContent = '.submenu>ul,.left,.right,.full{visibility:hidden}';
    var r = document.getElementsByTagName('script')[0];
    r.parentNode.insertBefore(s, r);
    function f(){ s.parentNode && s.parentNode.removeChild(s); }
    addEventListener('load',f,false);
    setTimeout(f,3000); 
  //}
})();