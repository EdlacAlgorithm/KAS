$modal = 'testimonial'
function editModal(inputs,content){
    inputs[0].value = content.name
    inputs[1].value = content.profile
    inputs[2].value = content.avater
    $('.MultiFile-preview')[0].src = window.baseUrl+'/assets/images/testimonial/detail_'+content.avater+'.jpg'
    $('.MultiFile-title')[0].innerText = content.avater+'.jpg'
    //console.log(inputs)
}