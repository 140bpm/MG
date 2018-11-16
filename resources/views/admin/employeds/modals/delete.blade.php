<div class="modal fade" id="deleteModal{{$employed->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
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
                        <form action="/admin/employeds/{{$employed->id}}" method="POST">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}

                    <div class="input-group mb-3">

                        <label> {{$employed->employedPerson->name}} {{$employed->employedPerson->lastname}}</label>
                      <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="nombre" value="{{$employed->employedPerson->name}}" readonly>
                    </div><br>
        			<div class="input-group mb-3">
                        <label>{{$employed->id}}</label>
                    <input type="text" class="form-control" placeholder="Brand" aria-describedby="basic-addon1" name="code" value="{{$employed->employedPerson->id}}" readonly>
                    </div><br>

        <div class="modal-footer">
            <button type="button" class="btn pull-left btn-alert" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-danger">Eliminar</button>
        </div>
    </form>
    </div>
