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
                    <th>Description</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->

                        @foreach ($products as $car)

                        @if ($car->type == 'Moto')


                        <tr>
                            <td>{{$car->id}}</td>
                            @include('/admin/cars/modals/delete')
                            <td>{{$car->productname}}</td>
                            <td>{{$car->type}}</td>
                            <td>{{$car->brand}}</td>
                            <td>{{$car->created_at}}</td>
                            <td>{{$car->price}}</td>
                            <td>{{$car->productdescription}}</td>
                            <td>
                                @include('/admin/motorcycles/btns/look',['car->id'])
                                @include('/admin/motorcycles/btns/edit',['car->id'])
                                @include('/admin/motorcycles/btns/delete',['car->id'])
                            </td>
                            @include('/admin/motorcycles/modals/edit')

                        </tr>

                        @include('/admin/motorcycles/modals/look')

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

@include('/admin/motorcycles/modals/add')

</div>



@endsection
