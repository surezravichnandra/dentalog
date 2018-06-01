  	@if(count($datas)>0)
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
					<th>#</th>
					<th>Product</th>
					<th>Qty</th>
					<th>Mrp</th>
					<th>Subtotal</th>
					<th>Action</th>
                </tr>
              </thead>
              <tbody>
              	<?php $sl=1; ?>
				@foreach($datas as $values)
                <tr>
                	<input type="hidden" name="stock_id" id="stock_id" value="{{$values->stock_id or ''}}">
					<td>{{ $sl++ }}</td>
					<td>{{ $values->stock->name or '' }}</td>
					<td>{{ $values->quantity or '' }}</td>
					<td>{{ $values->amount or '' }}</td>
					<td>{{ $values->total_amount or '' }}</td>
					<td>
						<a class="delete" title="Delete" data-toggle="tooltip" onclick="destroy({{ $values->temp_id }});"><i class="fa fa-minus-circle"></i></a>
					</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="{{ URL::asset('admins/dist/img/credit/visa.png') }}" alt="Visa">
            <img src="{{ URL::asset('admins/dist/img/credit/mastercard.png') }}" alt="Mastercard">
            <img src="{{ URL::asset('admins/dist/img/credit/american-express.png') }}" alt="American Express">
            <img src="{{ URL::asset('admins/dist/img/credit/paypal2.png') }}" alt="Paypal">
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"></p>
          </div>
          <div class="col-6">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th>Saving Amount</th>
                  <td>₹ {{ round($discount_amount) }}</td>
                </tr>
                <tr>
                  <th>Total:</th>
                  <td>₹ {{ $total_amount }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="row no-print">
          <div class="col-12">
            <button type="button" class="btn btn-success float-right" onclick="update_value();"><i class="fa fa-credit-card"></i> Submit Payment</button>
            <input type="hidden" name="total_amount" id="total_amount" value="{{ $total_amount }}">
            <input type="hidden" name="patient_code" id="patient_code" value="{{ $values->patient_id }}">
          </div>
        </div>
	@endif
