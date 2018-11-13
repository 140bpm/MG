@if ($errors->any())
        <div class="alert alert-danger"></div>
        <h6>Corrige los siguientes errores por favor:</h6>
        @endif
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="addModalLabel">Add New Motorcycles</h4>
        </div>
        <div class="modal-body">
        	<div class="row">
        		<div class="col-md-6">
                        <form action="{{ url('admin/cars') }}" method="POST">
                            {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <label for="nombre">Name</label>
                      <input type="text" class="form-control" placeholder="Name" aria-label="" aria-describedby="basic-addon1" name="name" id="nombre" required>
                      @if ($errors->has('nombre'))
                        <p>{{ $errors->first('nombre') }}</p>
                      @endif
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Lastname</label>
                      <input type="text" class="form-control" placeholder="Lastname" aria-describedby="basic-addon1" name="lastname" required>
                    </div><br>
                    <div class="input-group mb-3">
                        <label>DNI</label>
                      <input type="text" class="form-control" placeholder="DNI" aria-describedby="basic-addon1" name="DNI" required>
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Birth</label>
                      <input type="date" class="form-control" placeholder="Birth" aria-describedby="basic-addon1" min="0" name="birth" required>
                    </div><br>
        		</div>

        		<div class="col-md-6">
                    <div class="input-group mb-3">
                        <label>Adress</label>
                      <input type="date" class="form-control" placeholder="Adress" aria-describedby="basic-addon1" min="0" name="Adress" required>
                    </div><br>

        			<div class="input-group mb-3">
                        <label>Sex</label>

                    <select type="text" class="form-control" placeholder="Sex" aria-describedby="basic-addon1" name="sex" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </div><br>

        			<div class="input-group mb-3">
                        <label>Nationality</label>

                    <select type="text" class="form-control" placeholder="Nationality" aria-describedby="basic-addon1" name="nationality" required>
                        <option value="Argentina">Argentina</option>
                    </select>
                    </div><br>
        		</div>
        	</div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn pull-left btn-fill" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-fill">Add</button>
        </div>
    </form>
    </div>
