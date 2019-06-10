// APP Name: KAS Shisha Zone
// Author: EDLACAGORITHM(Daud)
// File:slider_switching.js
// Website: http://edlac.com.ng/

function toggle($sliderId){
    $.post(baseUrl+'/slider/toggle/'+$sliderId)
}

$(document).ready(function(){
  	//console.log($numOfSlide);
  	var options={onColor:'success',offColor:'default',animate:false};
    $(".switches").bootstrapSwitch(options);
});