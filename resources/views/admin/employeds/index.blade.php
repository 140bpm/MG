@extends('principal.layout')

<?php $page='employeds' ?>

@section('title', 'Employeds')

@section('namepage', 'Employeds')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <button type="button" class="btn btn-info pull-right btn-fill" data-toggle="modal" data-target="#addModal">Add New</button>
            <h4 class="title">Employeds</h4>
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
                    <th>Total Sells</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    @foreach($employeds as $employed)
                        @include('/admin/employeds/lookModal')                    
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                            <td>Oud-Turnhout</td>
                            <td></td>
                            <td></td>
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
@include('/admin/employeds/addModal')
</div>
@include('/admin/employeds/addModal')

@endsection