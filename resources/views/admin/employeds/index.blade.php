@extends('principal.layout')

<?php $page='Employeds' ?>

@section('title', 'Employeds')

@section('namepage', 'Employeds')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <!-- including "Add New Modal" on the button "Add New" -->
            @include('/admin/includes/btns/add')
            <h4 class="title">Employeds</h4>
            <p class="category">Here is a subtitle for this table</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>DNI</th>
                    <th>Birth</th>
                    <th>Adress</th>
                    <th>Sex</th>
                    <th>Nationality</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->

                        @foreach ($employeds as $employed)
                        <tr>
                            <td>{{$employed->id}}</td>
                            @include('/admin/employeds/modals/delete')
                            <td>{{$employed->employedPerson->name}}</td>
                            <td>{{$employed->employedPerson->lastname}}</td>
                            <td>{{$employed->employedPerson->dni}}</td>
                            <td>{{$employed->employedPerson->birth}}</td>
                            <td>{{$employed->employedPerson->adress}}</td>
                            <td>{{$employed->employedPerson->sex}}</td>
                            <td>{{$employed->employedPerson->nationalityPerson->country}}</td>

                            <td>
                                @include('/admin/employeds/btns/look',['employed->id'])
                                @include('/admin/employeds/btns/edit',['employed->id'])
                                @include('/admin/employeds/btns/delete',['employed->id'])
                            </td>
                            @include('/admin/employeds/modals/edit')
                        </tr>
                        @include('/admin/employeds/modals/look')
                       @endforeach
                    <!--  -->
                </tbody>
            </table>

        </div>

    </div>

</div>
</div>

@include('/admin/employeds/modals/add')

</div>



@endsection
