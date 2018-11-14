<div class="modal fade" id="sellerModal{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Information</h4>
        </div>
        <div class="modal-body">
        	<div class="row">

                <div class="col-md-3">
                    <label>Name: </label><br>
                    <label>Lastname: </label><br>
                    <label>DNI: </label><br>
                    <label>Sex:</label><br>
                </div>

                <div class="col-md-6">
                <label>{{$client->customerEmployed->employedPerson->name}}</label><br>
                </div>
                <div class="col-md-6">
                 <label>{{$client->customerEmployed->employedPerson->lastname}}</label><br>
                </div>
                <div class="col-md-6">
                <label>{{$client->customerEmployed->employedPerson->dni}}</label><br>
                </div>
                <div class="col-md-6">
                <label></label><br>
                </div>

        	</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-fill pull-left" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
