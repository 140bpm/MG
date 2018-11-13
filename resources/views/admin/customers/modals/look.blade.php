<div class="modal fade" id="lookModal{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Customer Information</h4>
        </div>
        <div class="modal-body">
        	<div class="row">

                <div class="col-md-3">
                    <label>Code: </label><br>
                    <label>Name: </label><br>
                    <label>DNI: </label><br>
                    <label>Description: </label><br>
                </div>

        		<div class="col-md-6">
        			<label>{{$client->customerPerson->id}}</label><br>
        			<label>{{$client->customerPerson->name}} </label><br>
                    <label>{{$client->customerPerson->dni}} </label><br>
                    <label>{{$client->customerPerson->adress}} </label><br>
        		</div>

        	</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-fill pull-left" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
