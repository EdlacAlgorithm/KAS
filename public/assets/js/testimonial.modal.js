$modal = 'testimonial'
function editModal(inputs,content){
    const avater = content.avater?'testimonials/detail_'+content.avater:"no_image.jpg"
    inputs[0].value = content.name
    inputs[1].value = content.profile
    inputs[2].value = content.avater
    $('.MultiFile-preview')[0].src = window.baseUrl+'/assets/images/'+avater
    $('.MultiFile-title')[0].innerText = avater
}