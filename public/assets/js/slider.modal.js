$modal = 'slider'
function editModal(inputs,content){
    inputs[0].value = content.title
    inputs[1].value = content.sub_title
    inputs[2].value = content.description
    $('.MultiFile-preview')[0].src = window.baseUrl+'/assets/images/slider/slide_'+content.image+'.jpg'
    $('.MultiFile-title')[0].innerText = content.image+'.jpg'
    //console.log(inputs)
}
