@extends('principal.layout')

<?php $page='motorcycles' ?>

@section('title', 'Motorcycles')

@section('namepage', 'Motorcycles')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            @include('/admin/includes/btns/add')
            <h4 class="title">Motorcycles</h4>
            <p class="category">Here is a subtitle for this table</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Brand</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Total Sells</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->
                        @include('/admin/includes/modals/look')                    
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td></td>
                            <td>Niger</td>
                            <td>Oud-Turnhout</td>
                            <td>$36,738</td>
                            <td></td>
                            <td>
                                @include('/admin/includes/btns/look')
                                @include('/admin/includes/btns/edit')
                                <button><i class="pe-7s-trash"></i></button>
                            </td>
                        </tr>
                    <!--  -->
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