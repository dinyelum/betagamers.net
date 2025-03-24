if(typeof toggleTabDivs != 'undefined') {
    toggleTabDivs.forEach(function(item, index, arr){
        var testlinks = item.querySelectorAll('.tablinks');
        var testtabs = item.querySelectorAll('.tabcontent');
        
        for(let i=0; i<testlinks.length; i++) {
          testlinks[i].addEventListener('click', function(e) {
              openunit(testtabs, testlinks, testtabs[i], e)
          });
        }
    });
}
function openunit(n, t, showunit, e){
    for(l=0;l<n.length;l++) {
    n[l].style.display="none";
    }
    for(l=0;l<n.length;l++) {
    t[l].className=t[l].className.replace(" "+activeclass,"");
    }
    showunit.style.display="block";
    e.currentTarget.className+=" "+activeclass;
}

var elAccoBtn = document.querySelectorAll('.accobtn');
var elAccoContent = document.querySelectorAll('.accocontent');
if(typeof elAccoBtn != 'undefined' && typeof elAccoContent != 'undefined') {
    for(let i=0; i<elAccoBtn.length; i++) {
        elAccoBtn[i].addEventListener('click', function(e) {
            accordion(elAccoContent[i]);
      });
    }
}

function sElObj(sElname, defOpt, defText, optList) {
    var sEl = document.createElement('select');
    sEl.name = sElname;
    sEl.add(new Option(defOpt in optList ? optList[defOpt] : defText, defOpt));
    Object.entries(optList).forEach(function(cur) {
        sEl.add(new Option(cur[1], cur[0]));
    });
    return sEl;
}
if(typeof showSlides != 'undefined') {
    var slides,dots,slideIndex=0;function plusSlides(s){for((slideIndex+=s)>slides.length?slideIndex=1:slideIndex<1&&(slideIndex=slides.length),i=0;i<slides.length;i++)slides[i].style.display="none";for(i=0;i<dots.length;i++)dots[i].className=dots[i].className.replace(" active","");slides[slideIndex-1].style.display="block",dots[slideIndex-1].className+=" active"}function currentSlide(s){for(s>slides.length?s=1:s<1&&(s=slides.length),i=0;i<slides.length;i++)slides[i].style.display="none";for(i=0;i<dots.length;i++)dots[i].className=dots[i].className.replace(" active","");slides[s-1].style.display="block",dots[s-1].className+=" active"}
    function showSlides(){var s;for(slides=document.getElementsByClassName("mySlides"),dots=document.getElementsByClassName("dot"),s=0;s<slides.length;s++)slides[s].style.display="none";for(++slideIndex>slides.length&&(slideIndex=1),s=0;s<dots.length;s++)dots[s].className=dots[s].className.replace(" active","");slides[slideIndex-1].style.display="block",dots[slideIndex-1].className+=" active",setTimeout(showSlides,3e3)}
    showSlides();
}
if(typeof tawkTo == 'undefined' || tawkTo===true) {
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src='https://embed.tawk.to/5bfd3b2279ed6453ccab59d2/default';s1.charset='UTF-8';s1.setAttribute('crossorigin','*');s0.parentNode.insertBefore(s1,s0);})();
}
//Accordion
function accordion(x){if(x.className.indexOf("w3-show")==-1){x.className+=" w3-show"}else{x.className=x.className.replace(" w3-show","")}}