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
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->

                        @foreach ($clients as $client)
                        <tr>
                            <td>{{$client->data_customer_id}}</td>
                            @include('/admin/customers/modals/delete')
                            <td>{{$client->customerPerson->name}}</td>
                            @include('/admin/customers/modals/seller')
                            <td>{{$client->customerPerson->lastname}}</td>
                            <td>{{$client->customerPerson->dni}}</td>
                            <td>{{$client->customerPerson->birth}}</td>
                            <td>{{$client->customerPerson->adress}}</td>
                            <td>{{$client->customerPerson->sex}}</td>
                            <td>{{$client->customerPerson->nationalityPerson->country}}</td>

                            <td>
                                @include('/admin/customers/btns/seller',['client->id,persons,employeds,clients'])
                                @include('/admin/customers/btns/look',['client->id'])
                                @include('/admin/customers/btns/edit',['client->id'])
                                @include('/admin/customers/btns/delete',['client->id'])
                            </td>
                            @include('/admin/customers/modals/edit')
                        </tr>
                        @include('/admin/customers/modals/look')
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
