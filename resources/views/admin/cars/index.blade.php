@extends('principal.layout')

<?php $page='cars' ?>

@section('title', 'Cars')

@section('namepage', 'Cars')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <!-- including "Add New Modal" on the button "Add New" -->
            @include('/admin/includes/btns/add')
            <h4 class="title">Cars</h4>
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
                    <th>Description</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->
                        @include('/admin/includes/modals/look')
                        @foreach ($products as $car)

                        <tr>
                            <td>{{$car->id}}</td>
                            <td>{{$car->productname}}</td>
                            <td>{{$car->type}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{$car->productdescription}}</td>

                            <td>
                                @include('/admin/includes/btns/look')
                                @include('/admin/includes/btns/edit')
                                <button><i class="pe-7s-trash"></i></button>
                            </td>
                        </tr>



                        @endforeach

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
