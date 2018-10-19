@extends('principal.layout')

<?php $page='plans' ?>

@section('title', 'Plans')

@section('namepage', 'Plans')

@section('content-row1')

<div class="col-md-12">
	<div class="card">
		<div class="header">
			@include('/admin/includes/btns/add')
		</div>
		<div class="content">

		</div>
		<div class="footer">
			<br>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="card">
		<div class="header">
	        <a href="#lookModal" data-toggle="modal" data-target="#lookModal"><h4 class="title">Plan 1</h4></a>
	        <p class="category">Last Campaign Performance</p>
	    </div>
	    <div class="content">
	        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

	            <div class="footer">
	                <div class="legend">
	                    <i class="fa fa-circle text-info"></i> Open
	                    <i class="fa fa-circle text-danger"></i> Bounce
	                    <i class="fa fa-circle text-warning"></i> Unsubscribe
	                </div>
	                <button type="button" class="btn btn-warning pull-right btn-fill" data-toggle="modal" data-target="#editModal">Edit Plan</button>
	                <hr>
	                <div class="stats">
	                    <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
	            	</div>
	            </div>
	    </div>
	</div>
</div>
</div>
@include('/admin/includes/modals/look')  
</div>
@include('/admin/includes/modals/add')
</div>
@include('/admin/includes/modals/edit')

@endsection