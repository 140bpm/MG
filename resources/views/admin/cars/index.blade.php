@extends('principal.layout')

<?php $page='cars' ?>

@section('title', 'Cars')

@section('namepage', 'Car')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <!-- including "Add New Modal" on the button "Add New" -->
            @include('/admin/cars/btns/add')
            <h4 class="title">Cars</h4>
            <p class="category">Here is a subtitle for this table</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Code</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Added</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->

                        @foreach ($products as $car)

                        @if ($car->type == 'Auto')


                        <tr>
                            <td>{{$car->id}}</td>
                            @include('/admin/cars/modals/delete')
                            <td>{{$car->brand}}</td>
                            <td>{{$car->productname}}</td>
                            <td>{{$car->model}}</td>
                            <td>{{$car->type}}</td>
                            <td>{{$car->created_at}}</td>
                            <td>{{$car->price}}</td>
                            <td>{{$car->productdescription}}</td>
                            <td>
                                @include('/admin/cars/btns/look',['car->id'])
                                @include('/admin/cars/btns/edit',['car->id'])
                                @include('/admin/cars/btns/delete',['car->id'])
                            </td>
                            @include('/admin/cars/modals/edit')

                        </tr>

                        @include('/admin/cars/modals/look')

                        @else

                        @endif

                        @endforeach

                    <!--  -->
                </tbody>
            </table>

        </div>

    </div>

</div>
</div>

@include('/admin/cars/modals/add')

</div>



@endsection
