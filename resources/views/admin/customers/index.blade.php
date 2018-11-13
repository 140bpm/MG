@extends('principal.layout')

<?php $page='Motorcycles' ?>

@section('title', 'Cars')

@section('namepage', 'Car')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <!-- including "Add New Modal" on the button "Add New" -->
            @include('/admin/includes/btns/add')
            <h4 class="title">Customers</h4>
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
                    <th>Customer Code</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->

                        @foreach ($persons as $person)
                        @if ($person->customer_id > 0)
                        <tr>
                            <td>{{$person->id}}</td>
                            @include('/admin/customers/modals/delete')
                            <td>{{$person->name}}</td>
                            <td>{{$person->lastname}}</td>
                            <td>{{$person->dni}}</td>
                            <td>{{$person->birth}}</td>
                            @include('/admin/customers/modals/seller')
                            <td>{{$person->adress}}</td>
                            <td>{{$person->sex}}</td>
                            <th>{{$person->nationalityPerson->country}}</th>
                            <th>{{$person->customerPerson->customercode}}</th>


                            <td>
                                @include('/admin/customers/btns/seller',['person->id,person->name,persons,employeds,clients'])
                                @include('/admin/customers/btns/look',['person->id'])
                                @include('/admin/customers/btns/edit',['person->id'])
                                @include('/admin/customers/btns/delete',['person->id'])
                            </td>
                            @include('/admin/customers/modals/edit')

                        </tr>

                        @include('/admin/customers/modals/look')
                        @endif
                        @endforeach




                    <!--  -->
                </tbody>
            </table>

        </div>

    </div>

</div>
</div>

@include('/admin/customers/modals/add')

</div>



@endsection
