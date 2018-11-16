<div class="modal fade" id="deleteModal{{$motorcycle->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="addModalLabel">¿Desea borrar este producto?</h4>
        </div>

        <div class="modal-body">
        	<div class="row">
        		<div class="col-md-6">
                        <form action="/admin/motorcycles/{{$motorcycle->id}}" method="POST">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}

                    <div class="input-group mb-3">

                        <label>@yield('namepage') Name</label>
                      <input type="text" class="form-control" placeholder="@yield('namepage') Name" aria-label="@yield('namepage') Name" aria-describedby="basic-addon1" name="nombre" value="{{$motorcycle->productname}}" readonly>
                    </div><br>
        			<div class="input-group mb-3">
                        <label>Brand</label>
                    <input type="text" class="form-control" placeholder="Brand" aria-describedby="basic-addon1" name="marca" value="{{$motorcycle->brand}}" readonly>
                    </div><br>

        <div class="modal-footer">
            <button type="button" class="btn pull-left btn-alert" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-danger">Eliminar</button>
        </div>
    </form>
    </div>
