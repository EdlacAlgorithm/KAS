<div class="modal fade" id="modalComponet" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">{{$modalTitle}}</h4>
            </div>
            <form method="post" action="{{$modalFormAction}}" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        {{$modalBody}}
                    </div>
                </div>
                <div class="modal-footer">
                    {{csrf_field()}}
                    @section('modalFooter')
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" style="background: #5bc0de;">Save</button>
                    @show
                </div>
            </form>
        </div>
    </div>
</div>