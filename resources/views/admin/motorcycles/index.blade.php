@extends('principal.layout')

<?php $page='Motorcycles' ?>

@section('title', 'Motorcycles')

@section('namepage', 'Motorcycle')

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
                    <th>Model</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <!--  -->

                        @foreach ($products as $motorcycle)

                        @if ($motorcycle->type == 'Moto')


                        <tr>
                            <td>{{$motorcycle->id}}</td>
                            @include('/admin/motorcycles/modals/delete')
                            <td>{{$motorcycle->productname}}</td>
                            <td>{{$motorcycle->type}}</td>
                            <td>{{$motorcycle->brand}}</td>
                            <td>{{$motorcycle->model}}</td>
                            <td>{{$motorcycle->created_at}}</td>
                            <td>{{$motorcycle->price}}</td>
                            <td>{{$motorcycle->productdescription}}</td>
                            <td>
                                @include('/admin/motorcycles/btns/look',['motorcycle->id'])
                                @include('/admin/motorcycles/btns/edit',['motorcycle->id'])
                                @include('/admin/motorcycles/btns/delete',['motorcycle->id'])
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
