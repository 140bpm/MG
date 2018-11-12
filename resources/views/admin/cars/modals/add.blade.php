<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="addModalLabel">Add New @yield('namepage')</h4>
        </div>

        <div class="modal-body">
        	<div class="row">
        		<div class="col-md-6">
                        <form action="{{ url('admin/cars') }}" method="POST">
                            {{ csrf_field() }}
                    <div class="input-group mb-3">

                        <label>@yield('namepage') Name</label>
                      <input type="text" class="form-control" placeholder="@yield('namepage') Name" aria-label="@yield('namepage') Name" aria-describedby="basic-addon1" name="nombre" required>
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Brand</label>
                      <input type="text" class="form-control" placeholder="Brand" aria-describedby="basic-addon1" name="marca" required>
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Price</label>
                      <input type="number" class="form-control" placeholder="Price" aria-describedby="basic-addon1" min="0" name="precio" required>
                    </div><br>
        		</div>

        		<div class="col-md-6">
        			<div class="input-group mb-3">
                        <label>Type</label>

                    <select type="text" class="form-control" placeholder="Type" aria-describedby="basic-addon1" name="tipo" required>
                        <option value="Auto">Auto</option>
                        <option value="Moto">Moto</option>
                    </select>
                    </div><br>

        			<div class="input-group mb-3">
                        <label>Description</label>
                      <textarea type="text" class="form-control" placeholder="Description"  aria-describedby="basic-addon1" name="descripcion" required></textarea>
                    </div><br>
        		</div>
        	</div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn pull-left btn-fill" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-fill">Add @yield('namepage')</button>
        </div>
    </form>
    </div>
