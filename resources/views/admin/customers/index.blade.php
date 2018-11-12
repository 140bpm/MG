@extends('principal.layout')

<?php $page='Motorcycles' ?>

@section('title', 'Cars')

@section('namepage', 'Cars')

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
                    <th>Civil State</th>
                    <th>Nationality</th>
                    <th>Customer Code</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->

                        @foreach ($customers as $customer)

                        <tr>
                            <td>{{$customer->id}}</td>
                            @include('/admin/customers/modals/delete')
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->lastname}}</td>
                            <td>{{$customer->dni}}</td>
                            <td>{{$customer->birth}}</td>
                            @include('/admin/customers/modals/seller')
                            <td>{{$customer->adress}}</td>
                            <td>{{$customer->sex}}</td>
                            <td>{{$customer->civil_state}}</td>
                            <th>{{$customer->nationalityPerson->country}}</th>
                            <th>{{$customer->customerPerson->customercode}}</th>


                            <td>
                                @include('/admin/customers/btns/seller',['customer->id'])
                                @include('/admin/customers/btns/look',['customer->id'])
                                @include('/admin/customers/btns/edit',['customer->id'])
                                @include('/admin/customers/btns/delete',['customer->id'])
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
