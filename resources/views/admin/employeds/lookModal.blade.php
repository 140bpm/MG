<div class="modal fade" id="lookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Employed Information</h4>
        </div>
        <div class="modal-body">
        	<div class="row">
        		<div class="col-md-6">
        			Employed Code:{{$employed->employedcode}}<br>
        			Plan N°:{{$employed->plan_id}}<br>
        			Name & Lastname:{{$employed->name}}{{$employed->lastname}}<br>
        			Birth:{{$employed->birth}}<br>
        			Sex:{{$employed->sex_id}}<br>
        			Employed Id:{{$employed->customer_id}}<br>
        		</div>
        		<div class="col-md-6">
        			Bill N°:{{$employed->bill_id}}<br>
        			Seller:{{$employed->seller_id}}<br>
        			D.N.I:{{$employed->dni}}<br>
        			Adress:{{$employed->adress}}<br>
        			Civil State:{{$employed->civil_state_id}}<br>
        			Nationality:{{$employed->nationality_id}}<br>
        		</div>
        	</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>