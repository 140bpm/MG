<div class="modal fade" id="editModal{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="addModalLabel">Edit {{$car->brand}} {{$car->productname}}</h4>
        </div>
        <div class="modal-body">
        		<div class="row">
                        <div class="col-md-6">
                                <form action="/admin/cars/{{$car->id}}" method="post">
                                    {{method_field('PATCH')}}
                                    {{ csrf_field() }}
                            <div class="input-group mb-3">

                                <label>@yield('namepage') Name</label>
                              <input type="text" class="form-control" value="{{$car->productname}}" aria-label="@yield('namepage') Name" aria-describedby="basic-addon1" name="nombre" required>
                            </div><br>
                            <div class="input-group mb-3">
                                <label>Brand</label>
                              <input type="text" class="form-control" value="{{$car->brand}}" aria-describedby="basic-addon1" name="marca" required>
                            </div><br>
                            <div class="input-group mb-3">
                                <label>Price</label>
                              <input type="number" class="form-control" value="{{$car->price}}" aria-describedby="basic-addon1" min="0" name="price" required>
                            </div><br>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label>Type</label>

                            <select type="text" class="form-control" value="{{$car->type}}" aria-describedby="basic-addon1" name="tipo" required>
                                <option value="Auto">Auto</option>
                            </select>
                            </div><br>

                            <div class="input-group mb-3">
                                <label>Model</label>
                              <input type="number" class="form-control" value="{{$car->model}}" aria-describedby="basic-addon1" min="0" name="modelo" required>
                            </div><br>

                            <div class="input-group mb-3">
                                <label>Description</label>
                              <textarea type="text" class="form-control" value="{{$car->productdescription}}"  aria-describedby="basic-addon1" name="descripcion"></textarea>
                            </div>
                            <div class="input-group mb-3">
                                    <label>Code</label>
                            <input type="text" class="form-control" value="{{$car->id}}" aria-describedby="basic-addon1" min="0" name="code" readonly>
                                </div><br>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn pull-left btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-fill">Update {{$car->brand}} {{$car->productname}}</button>
                </div>
            </form>
            </div>
