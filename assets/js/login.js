if(typeof dSwitch != 'undefined') {
    window.addEventListener('load', function(e){
        if(dSwitch.checked) {
            console.log('ahaa');
            dElement.disabled = (dElement.disabled==true ? false : true);
        }
    });
    dSwitch.addEventListener('click', function(e){
        dElement.disabled = (dElement.disabled==true ? false : true);
    });
}
if(typeof pSwitches != 'undefined') {
    pSwitches.forEach(function(item,index,arr){
       item.addEventListener('click', function(e){
           pElements[index].type = pElements[index].type  === "password" ? "text" : "password";
        //    console.dir(pElements[index].type);
       });
    });
}
var input = input ?? document.querySelector("#phone");
window.intlTelInput(input, {
    autoHideDialCode: false,
    hiddenInput: "fullphone",
    separateDialCode: true,
   nationalMode: false,
   utilsScript: domain+"/assets/loginsystem/build/js/utils.js",
 });