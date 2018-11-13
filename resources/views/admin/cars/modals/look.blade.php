<div class="modal fade" id="lookModal{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">@yield('namepage') Information</h4>
        </div>
        <div class="modal-body">
        	<div class="row">

                <div class="col-md-3">
                    <label><b>Code:</b> </label><br>
                    <label><b>Brand:</b> </label><br>
                    <label><b>Precio:</b> </label><br>
                    <label><b>Description:</b> </label><br>
                </div>

        		<div class="col-md-3">
        			<label>{{$car->id}}</label><br>
        			<label>{{$car->brand}} </label><br>
                    <label>{{$car->price}} </label><br>
                    <label>{{$car->productdescription}} </label><br>
        		</div>

                <div class="col-md-3">
                    <label><b>Name:</b> </label><br>
                    <label><b>Model:</b> </label><br>
                    <label><b>Type:</b> </label><br>
                    <label><b>Year:</b> </label><br>
                </div>

                <div class="col-md-3">
                    <label>{{$car->productname}}</label><br>
                    <label>{{$car->model}}</label><br>
                    <label>{{$car->type}}</label><br>
                    <label>{{$car->created_at}}</label><br>
                </div>

        	</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-fill pull-left" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
