@extends('principal.layout')

<?php $page='customers' ?>

@section('title', 'Customers')

@section('namepage', 'Customers')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            @include('/admin/includes/btns/add')
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
                  
                    
                    @foreach($customers as $customer)
                    
                        
                        @include('/admin/includes/modals/look')                    
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
                                @include('/admin/includes/btns/look')
                                @include('/admin/includes/btns/edit')
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
@include('/admin/includes/modals/add')
</div>
@include('/admin/includes/modals/edit')

@endsection