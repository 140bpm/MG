<div class="modal fade" id="editModal{{$employed->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        <h4 class="modal-gh" id="addModalLabel">Edit -{{$employed->id}}- {{$employed->employedPerson->name}} {{$employed->employedPerson->lastname}}</h4>
        </div>
        <div class="modal-body">
        		<div class="row">
                        <div class="col-md-6">
                                <form action="/admin/employeds/{{$employed->id}}" method="post">
                                    {{method_field('PATCH')}}
                                    {{ csrf_field() }}

                            <div class="input-group mb-3">
                                    <label for="nombre">Name</label>
                            <input type="text" class="form-control" placeholder="Name" aria-label="" aria-describedby="basic-addon1"  value="{{$employed->employedPerson->name}}" name="name" id="name" required>
                                  @if ($errors->has('nombre'))
                                    <p>{{ $errors->first('nombre') }}</p>
                                  @endif
                                </div><br>
                                <div class="input-group mb-3">
                                    <label>Lastname</label>
                                  <input type="text" class="form-control" placeholder="Lastname" aria-describedby="basic-addon1" name="lastname" value="{{$employed->employedPerson->lastname}}" required>
                                </div><br>
                                <div class="input-group mb-3">
                                    <label>DNI</label>
                                  <input type="text" class="form-control" placeholder="DNI" aria-describedby="basic-addon1" name="dni" value="{{$employed->employedPerson->dni}}" required>
                                </div><br>
                                <div class="input-group mb-3">
                                    <label>Birth</label>
                                  <input type="date" class="form-control" placeholder="Birth" aria-describedby="basic-addon1" min="0" name="birth" value="{{$employed->employedPerson->birth}}" required>
                                </div><br>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <label>Adress</label>
                                  <input type="text" class="form-control" placeholder="Adress" aria-describedby="basic-addon1" min="0" name="adress" value="{{$employed->employedPerson->adress}}" required>
                                </div><br>

                                <div class="input-group mb-3">
                                    <label>Sex</label>
                              <select type="text" class="form-control" placeholder="Sex" aria-describedby="basic-addon1" name="sex" value="{{$employed->employedPerson->sex}}" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                </div><br>


                                <div class="input-group mb-3">
                                        <label>Civil State</label>
                                  <select type="text" class="form-control" placeholder="Civil State" aria-describedby="basic-addon1" name="civilstate" value="{{$employed->employedPerson->civil_state}}" required>
                                        <option value="Married">Married</option>
                                        <option value="Single">Single</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widow/er">Widow/er</option>
                                    </select>
                                    </div><br>

                                <div class="input-group mb-3">
                                    <label>Nationality</label>
                                <select type="text" class="form-control" placeholder="Nationality" aria-describedby="basic-addon1" name="nationality" value="{{$employed->employedPerson->nationalityPerson->country}}" required>
                                    <option value="1">Argentina</option>

                                </select>
                                </div><br>

                                <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <label>Code</label>
                                          <input type="text" class="form-control" value="{{$employed->employedPerson->id}}" placeholder="Adress" aria-describedby="basic-addon1" min="0" name="code" required >
                                        </div><br>


                        <br>

                        <div class="input-group mb-3">
                            <label>DNI</label>
                            <input type="text" class="form-control" value="{{$employed->employedPerson->dni}}" aria-describedby="basic-addon1" name="dni" required>
                        </div>

                        <br>

                        <div class="input-group mb-3">
                            <label>Birth</label>
                            <input type="date" class="form-control" value="{{$employed->employedPerson->birth}}" aria-describedby="basic-addon1" min="0" name="birth" required>
                        </div>

                        <br>

                        <div class="input-group mb-3">
                            <label>Code</label>
                            <input type="text" class="form-control" value="{{$employed->employedPerson->id}}"aria-describedby="basic-addon1" min="0" name="code" readonly>
                        </div>

                        <br>

                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn pull-left btn-fill" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-fill">Edit {{$employed->employedPerson->name}} {{$employed->employedPerson->lastname}}</button>
                </div>
            </form>

            </div>

        </div>
