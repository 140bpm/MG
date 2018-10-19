<div class="modal fade" id="lookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Customer Information</h4>
        </div>
        <div class="modal-body">
        	<div class="row">
        		<div class="col-md-6">
        			Customer Code:{{$customer->customercode}}<br>
        			Plan N°:{{$customer->plan_id}}<br>
        			Name & Lastname:{{$customer->name}}{{$customer->lastname}}<br>
        			Birth:{{$customer->birth}}<br>
        			Sex:{{$customer->sex_id}}<br>
        			Customer Id:{{$customer->customer_id}}<br>
        		</div>
        		<div class="col-md-6">
        			Bill N°:{{$customer->bill_id}}<br>
        			Seller:{{$customer->seller_id}}<br>
        			D.N.I:{{$customer->dni}}<br>
        			Adress:{{$customer->adress}}<br>
        			Civil State:{{$customer->civil_state_id}}<br>
        			Nationality:{{$customer->nationality_id}}<br>
        		</div>
        	</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>