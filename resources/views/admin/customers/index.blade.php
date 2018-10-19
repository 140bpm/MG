@extends('principal.layout')

<?php $page='customers' ?>

@section('title', 'Customers')

@section('namepage', 'Customers')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <button type="button" class="btn btn-info pull-right btn-fill" data-toggle="modal" data-target="#addModal">Add New</button>
            <h4 class="title">Customers</h4>
            <p class="category">Here is a subtitle for this table</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>D.N.I</th>
                    <th>Birth</th>
                    <th>Adress</th>
                    <th>Sex</th>
                    <th>Nationality</th>
                    <th>Customer Code</th>
                    <th>Options</th>
                </thead>
                <tbody>
                  
                    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 9bbedbe... Merge branch 'master' of https://github.com/sebaguillen/MG
                    @foreach($customers as $customer)                     
=======
                    @foreach($customers as $customer)
                    
                        
>>>>>>> parent of 989dfb5... Ruta nueva y cambios en vistas
=======
                    @foreach($customers as $customer)
                    
                        
>>>>>>> parent of 989dfb5... Ruta nueva y cambios en vistas
                        @include('/admin/customers/lookModal')                    
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->lastname}}</td>
                            <td>{{$customer->dni}}</td>
                            <td>{{$customer->birth}}</td>
                            <td>{{$customer->adress}}</td>
                            <td>{{$customer->sex}}</td>
                            <td>{{$customer->nationalityPerson->country}}</td>
                            <td>{{$customer->customerPerson->customercode}}</td>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#lookModal"><i class="pe-7s-look"></i></button>
                                <button type="button" data-toggle="modal" data-target="#editModal"><i class="pe-7s-edit"></i></button>
                                <button><i class="pe-7s-trash"></i></button>
                            </td>
                        </tr>                       
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
@include('/admin/customers/addModal')
</div>
@include('/admin/customers/addModal')

@endsection