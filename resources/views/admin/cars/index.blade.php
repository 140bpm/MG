@extends('principal.layout')

<?php $page='cars' ?>

@section('title', 'Cars')

@section('namepage', 'Cars')

@section('content-row1')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <!-- including "Add New Modal" on the button "Add New" -->
            <button type="button" class="btn btn-info pull-right btn-fill" data-toggle="modal" data-target="#addModal">Add New</button>
            </button>
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
                    <th>Options</th>
                </thead>
                <tbody>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 9bbedbe... Merge branch 'master' of https://github.com/sebaguillen/MG
                        @foreach($cars as $car)
                    
                        
=======
                    <!--  -->
>>>>>>> parent of 989dfb5... Ruta nueva y cambios en vistas
=======
                    <!--  -->
>>>>>>> parent of 989dfb5... Ruta nueva y cambios en vistas
                        @include('/admin/cars/lookModal')                    
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
<<<<<<< HEAD
<<<<<<< HEAD
                                <button type="submit" data-toggle="modal" data-target="#editModal"><i class="pe-7s-edit"></i></button>
<<<<<<< HEAD
=======
                    <!--  -->
                        @include('/admin/includes/modals/look')                    
                        <tr>
                            <td>1</td>
                            <td>F1</td>
                            <td>Car</td>
                            <td>Ferrari</td>
                            <td>Oud-Turnhout</td>
                            <td>$36,738</td>
                            <td></td>
                            <td>
                                @include('/admin/includes/btns/look')
                                @include('/admin/includes/btns/edit')
>>>>>>> 9df0f6fe09b8514e93a4b10f04c49fa1614a950c
=======
                                <button type="button" data-toggle="modal" data-target="#editModal"><i class="pe-7s-edit"></i></button>
>>>>>>> parent of 989dfb5... Ruta nueva y cambios en vistas
=======
                                <button type="button" data-toggle="modal" data-target="#editModal"><i class="pe-7s-edit"></i></button>
>>>>>>> parent of 989dfb5... Ruta nueva y cambios en vistas
=======
>>>>>>> parent of 9bbedbe... Merge branch 'master' of https://github.com/sebaguillen/MG
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
@include('/admin/cars/editModal')
</div>
@include('/admin/cars/addModal')

@endsection