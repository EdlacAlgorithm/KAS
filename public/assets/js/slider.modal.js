$modal = 'slider'
function editModal(inputs,content){    
    const image = content.image?'sliders/slide_'+content.image:"no_image.jpg"

    inputs[0].value = content.title
    inputs[1].value = content.sub_title
    inputs[2].value = content.description
    $('.MultiFile-preview')[0].src = window.baseUrl+'/assets/images/'+image
    $('.MultiFile-title')[0].innerText = image
    //console.log(inputs)
}
