<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="addModalLabel">Edit Motorcycle</h4>
        </div>
        <div class="modal-body">
        	<div class="row">
        		<div class="col-md-6">
                    <div class="input-group mb-3">
                        <label>Motorcycle Name</label>
                      <input type="text" class="form-control" placeholder="Motorcycle Name" aria-label="Motorcycle Name" aria-describedby="basic-addon1">
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Brand</label>
                      <input type="text" class="form-control" placeholder="Brand" aria-describedby="basic-addon1">
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Price</label>
                      <input type="number" class="form-control" placeholder="Price" aria-describedby="basic-addon1">
                    </div><br>
        			<div class="input-group mb-6">
                        <label>Img</label>
                      <input type="file" name="pic" class="form-control" placeholder="Img"  aria-describedby="basic-addon1">
                    </div><br>
        		</div>

        		<div class="col-md-6">
        			<div class="input-group mb-3">
                        <label>Type</label>
                      <input type="text" class="form-control" placeholder="Type" aria-describedby="basic-addon1">
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Year</label>
                      <input type="date" class="form-control" placeholder="Year" aria-describedby="basic-addon1">
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Description</label>
                      <textarea type="text" class="form-control" placeholder="Description"  aria-describedby="basic-addon1"></textarea>
                    </div><br>
        		</div>
        	</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-fill">Save changes</button>
        </div>
    </div>
</div>