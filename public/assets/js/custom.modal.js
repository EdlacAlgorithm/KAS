$('#modalComponet').on('show.bs.modal', function (event){
    var button = $(event.relatedTarget)
    var modal = $(this)
    var form = $('form',modal)[0]
    var inputs = modal.find('.modal-body input')
        modal.find('.modal-title').text(button.data('action') +' '+$modal)
        //form.action = '/'+$modal+'/'
        form.action = $realUrl
        if(button.data('action') == 'Edit')
        {   
            const input = $('<input name="_method" value="PUT" type="hidden"/>')
            form.appendChild(input[0])
            form.action = form.action +'/'+ button.data('content').id
            editModal(inputs,button.data('content'))
        }
        else
        {
            $('.MultiFile-label').hide()
            inputs.val('')
        }
        console.log(form.action)
})