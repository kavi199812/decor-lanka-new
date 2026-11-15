<!-- business information here -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Receipt-{{$receipt_details->invoice_no}}</title>
        <style type="text/css">
            @page {
                margin: 0;
            }
            body {
                background-color: #ffffff;
                margin: 0;
                padding: 0;
            }
            .ticket {
                width: 76mm; /* Adjusted for better Windows margin handling */
                max-width: 76mm;
                margin: 0 auto;
                padding: 1mm;
                font-family: 'Arial', sans-serif; /* Arial is very safe for Windows printers */
                color: #000;
                line-height: 1.1;
                background: white;
            }
            .centered {
                text-align: center;
                display: block;
            }
            .logo-container {
                text-align: center;
                margin-bottom: 10px;
                width: 100%;
            }
            .logo-container img {
                max-height: 110px; /* Increased from 80px */
                width: auto;
                display: inline-block;
            }
            .text-box {
                width: 100%;
                margin-bottom: 5px;
            }
            .headings {
                font-size: 16px;
                font-weight: 800;
                text-transform: uppercase;
                display: block;
                margin-bottom: 2px;
            }
            .sub-headings {
                font-size: 14px;
                font-weight: 700;
            }
            .border-top {
                border-top: 1px solid #000;
                margin-top: 5px;
                padding-top: 5px;
            }
            .border-bottom {
                border-bottom: 1px solid #000;
                margin-bottom: 5px;
                padding-bottom: 5px;
            }
            .border-bottom-dotted {
                border-bottom: 1px dashed #000;
            }
            .textbox-info {
                display: flex;
                justify-content: space-between;
                font-size: 12px;
                margin-bottom: 2px;
            }
            .f-left {
                font-weight: 700;
                text-align: left;
                margin: 0;
            }
            .f-right {
                text-align: right;
                margin: 0;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 10px 0;
                table-layout: fixed;
            }
            th {
                font-size: 10px;
                text-transform: uppercase;
                border-bottom: 1px solid #000;
                padding: 5px 2px;
                text-align: left;
                white-space: nowrap; /* Prevent headers from overlapping */
            }
            td {
                font-size: 11px;
                padding: 4px 2px;
                vertical-align: top;
                word-wrap: break-word;
            }
            .description { width: 35%; }
            .unit_price { width: 18%; text-align: right; }
            .quantity { width: 22%; text-align: right; }
            .price { width: 25%; text-align: right; }
            
            .barcode {
                width: 100%;
                text-align: center;
                margin-top: 10px;
            }
            .barcode img {
                width: 60%; /* Reduced from 80% for better sizing */
                height: auto;
                image-rendering: pixelated;
                display: block;
                margin: 0 auto;
            }
            .barcode-number {
                font-size: 14px;
                font-weight: 700;
                margin-top: 2px;
                text-align: center;
            }
            .flex-box {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                padding: 3px 0;
                width: 100%;
            }
            .flex-box p {
                margin: 0;
                font-size: 12px;
            }
            .summary-label {
                text-align: left;
                font-weight: 700;
                flex: 1;
            }
            .summary-value {
                text-align: right;
                font-weight: 700;
                flex: 1;
            }
            .total-row {
                font-size: 15px !important;
                border-top: 1px solid #000;
                margin-top: 5px;
                padding-top: 5px;
            }
            .total-row .summary-label, .total-row .summary-value {
                font-size: 15px !important;
            }
            
            .f-8 { font-size: 10px !important; }
            .mb-10 { margin-bottom: 10px; }
            .mt-5 { margin-top: 5px; }
            
            @media print {
                .hidden-print {
                    display: none !important;
                }
                body {
                    margin: 0;
                    -webkit-print-color-adjust: exact;
                }
                .ticket {
                    width: 100%;
                    max-width: 100%;
                    padding: 0;
                }
            }
        </style>
    </head>
    <body>
        <div class="ticket">
        	@if(empty($receipt_details->letter_head))
				@if(!empty($receipt_details->logo))
					<div class="logo-container">
						<img src="{{$receipt_details->logo}}" alt="Logo">
					</div>
				@endif
				<div class="text-box">
				<!-- Logo -->
				<p class="centered">
					<!-- Header text -->
					@if(!empty($receipt_details->header_text))
						<span class="headings">{!! $receipt_details->header_text !!}</span>
						<br/>
					@endif

					<!-- business information here -->
					@if(!empty($receipt_details->display_name))
						<span class="headings">
							{{$receipt_details->display_name}}
						</span>
						<br/>
					@endif
					
					@if(!empty($receipt_details->address))
						{!! $receipt_details->address !!}
						<br/>
					@endif

					@if(!empty($receipt_details->contact))
						{!! $receipt_details->contact !!}
					@endif
					@if(!empty($receipt_details->contact) && !empty($receipt_details->website))
						, 
					@endif
					@if(!empty($receipt_details->website))
						{{ $receipt_details->website }}
					@endif
					@if(!empty($receipt_details->location_custom_fields))
						<br>{{ $receipt_details->location_custom_fields }}
					@endif

					@if(!empty($receipt_details->sub_heading_line1))
						{{ $receipt_details->sub_heading_line1 }}<br/>
					@endif
					@if(!empty($receipt_details->sub_heading_line2))
						{{ $receipt_details->sub_heading_line2 }}<br/>
					@endif
					@if(!empty($receipt_details->sub_heading_line3))
						{{ $receipt_details->sub_heading_line3 }}<br/>
					@endif
					@if(!empty($receipt_details->sub_heading_line4))
						{{ $receipt_details->sub_heading_line4 }}<br/>
					@endif		
					@if(!empty($receipt_details->sub_heading_line5))
						{{ $receipt_details->sub_heading_line5 }}<br/>
					@endif

					@if(!empty($receipt_details->tax_info1))
						<br><b>{{ $receipt_details->tax_label1 }}</b> {{ $receipt_details->tax_info1 }}
					@endif

					@if(!empty($receipt_details->tax_info2))
						<b>{{ $receipt_details->tax_label2 }}</b> {{ $receipt_details->tax_info2 }}
					@endif
				@endif
					<!-- Title of receipt -->
					@if(!empty($receipt_details->invoice_heading))
						<br/><br/><span class="sub-headings">{!! $receipt_details->invoice_heading !!}</span>
					@endif
				</p>
				</div>
				@if(!empty($receipt_details->letter_head))
					<div class="text-box">
						<img style="width: 100%;margin-bottom: 10px;" src="{{$receipt_details->letter_head}}">
					</div>
				@endif
			<div class="border-top textbox-info">
				<p class="f-left"><strong>{!! $receipt_details->invoice_no_prefix !!}</strong></p>
				<p class="f-right">
					{{$receipt_details->invoice_no}}
				</p>
			</div>
			<div class="textbox-info">
				<p class="f-left"><strong>{!! $receipt_details->date_label !!}</strong></p>
				<p class="f-right">
					{{$receipt_details->invoice_date}}
				</p>
			</div>
			
			@if(!empty($receipt_details->due_date_label))
				<div class="textbox-info">
					<p class="f-left"><strong>{{$receipt_details->due_date_label}}</strong></p>
					<p class="f-right">{{$receipt_details->due_date ?? ''}}</p>
				</div>
			@endif

			@if(!empty($receipt_details->sales_person_label))
				<div class="textbox-info">
					<p class="f-left"><strong>{{$receipt_details->sales_person_label}}</strong></p>
				
					<p class="f-right">{{$receipt_details->sales_person}}</p>
				</div>
			@endif
			@if(!empty($receipt_details->commission_agent_label))
				<div class="textbox-info">
					<p class="f-left"><strong>{{$receipt_details->commission_agent_label}}</strong></p>
				
					<p class="f-right">{{$receipt_details->commission_agent}}</p>
				</div>
			@endif

			@if(!empty($receipt_details->brand_label) || !empty($receipt_details->repair_brand))
				<div class="textbox-info">
					<p class="f-left"><strong>{{$receipt_details->brand_label}}</strong></p>
				
					<p class="f-right">{{$receipt_details->repair_brand}}</p>
				</div>
			@endif

			@if(!empty($receipt_details->device_label) || !empty($receipt_details->repair_device))
				<div class="textbox-info">
					<p class="f-left"><strong>{{$receipt_details->device_label}}</strong></p>
				
					<p class="f-right">{{$receipt_details->repair_device}}</p>
				</div>
			@endif
			
			@if(!empty($receipt_details->model_no_label) || !empty($receipt_details->repair_model_no))
				<div class="textbox-info">
					<p class="f-left"><strong>{{$receipt_details->model_no_label}}</strong></p>
				
					<p class="f-right">{{$receipt_details->repair_model_no}}</p>
				</div>
			@endif
			
			@if(!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
				<div class="textbox-info">
					<p class="f-left"><strong>{{$receipt_details->serial_no_label}}</strong></p>
				
					<p class="f-right">{{$receipt_details->repair_serial_no}}</p>
				</div>
			@endif

			@if(!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{!! $receipt_details->repair_status_label !!}
					</strong></p>
					<p class="f-right">
						{{$receipt_details->repair_status}}
					</p>
				</div>
        	@endif

        	@if(!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
	        	<div class="textbox-info">
	        		<p class="f-left"><strong>
	        			{!! $receipt_details->repair_warranty_label !!}
	        		</strong></p>
	        		<p class="f-right">
	        			{{$receipt_details->repair_warranty}}
	        		</p>
	        	</div>
        	@endif

        	<!-- Waiter info -->
			@if(!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
	        	<div class="textbox-info">
	        		<p class="f-left"><strong>
	        			{!! $receipt_details->service_staff_label !!}
	        		</strong></p>
	        		<p class="f-right">
	        			{{$receipt_details->service_staff}}
					</p>
	        	</div>
	        @endif

	        @if(!empty($receipt_details->table_label) || !empty($receipt_details->table))
	        	<div class="textbox-info">
	        		<p class="f-left"><strong>
	        			@if(!empty($receipt_details->table_label))
							<b>{!! $receipt_details->table_label !!}</b>
						@endif
	        		</strong></p>
	        		<p class="f-right">
	        			{{$receipt_details->table}}
	        		</p>
	        	</div>
	        @endif

			@if (!empty($receipt_details->sell_custom_field_1_value))
				<div class="textbox-info">
					<p class="f-left"><strong>{!! $receipt_details->sell_custom_field_1_label !!}</strong></p>
					<p class="f-right">
						{{$receipt_details->sell_custom_field_1_value}}
					</p>
				</div>
			@endif
			@if (!empty($receipt_details->sell_custom_field_2_value))
				<div class="textbox-info">
					<p class="f-left"><strong>{!! $receipt_details->sell_custom_field_2_label !!}</strong></p>
					<p class="f-right">
						{{$receipt_details->sell_custom_field_2_value}}
					</p>
				</div>
			@endif
			@if (!empty($receipt_details->sell_custom_field_3_value))
				<div class="textbox-info">
					<p class="f-left"><strong>{!! $receipt_details->sell_custom_field_3_label !!}</strong></p>
					<p class="f-right">
						{{$receipt_details->sell_custom_field_3_value}}
					</p>
				</div>
			@endif
			@if (!empty($receipt_details->sell_custom_field_4_value))
				<div class="textbox-info">
					<p class="f-left"><strong>{!! $receipt_details->sell_custom_field_4_label !!}</strong></p>
					<p class="f-right">
						{{$receipt_details->sell_custom_field_4_value}}
					</p>
				</div>
			@endif

	        <!-- customer info -->
	        <div class="textbox-info">
	        	<p style="vertical-align: top;"><strong>
	        		{{$receipt_details->customer_label ?? ''}}
	        	</strong></p>

	        	<p>
	        		@if(!empty($receipt_details->customer_info))
	        			<div class="bw">
						{!! $receipt_details->customer_info !!}
						</div>
					@endif
	        	</p>
	        </div>
			
			@if(!empty($receipt_details->client_id_label))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{{ $receipt_details->client_id_label }}
					</strong></p>
					<p class="f-right">
						{{ $receipt_details->client_id }}
					</p>
				</div>
			@endif
			
			@if(!empty($receipt_details->customer_tax_label))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{{ $receipt_details->customer_tax_label }}
					</strong></p>
					<p class="f-right">
						{{ $receipt_details->customer_tax_number }}
					</p>
				</div>
			@endif

			@if(!empty($receipt_details->customer_custom_fields))
				<div class="textbox-info">
					<p class="centered">
						{!! $receipt_details->customer_custom_fields !!}
					</p>
				</div>
			@endif
			
			@if(!empty($receipt_details->customer_rp_label))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{{ $receipt_details->customer_rp_label }}
					</strong></p>
					<p class="f-right">
						{{ $receipt_details->customer_total_rp }}
					</p>
				</div>
			@endif
			@if(!empty($receipt_details->shipping_custom_field_1_label))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{!!$receipt_details->shipping_custom_field_1_label!!} 
					</strong></p>
					<p class="f-right">
						{!!$receipt_details->shipping_custom_field_1_value ?? ''!!}
					</p>
				</div>
			@endif
			@if(!empty($receipt_details->shipping_custom_field_2_label))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{!!$receipt_details->shipping_custom_field_2_label!!} 
					</strong></p>
					<p class="f-right">
						{!!$receipt_details->shipping_custom_field_2_value ?? ''!!}
					</p>
				</div>
			@endif
			@if(!empty($receipt_details->shipping_custom_field_3_label))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{!!$receipt_details->shipping_custom_field_3_label!!} 
					</strong></p>
					<p class="f-right">
						{!!$receipt_details->shipping_custom_field_3_value ?? ''!!}
					</p>
				</div>
			@endif
			@if(!empty($receipt_details->shipping_custom_field_4_label))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{!!$receipt_details->shipping_custom_field_4_label!!} 
					</strong></p>
					<p class="f-right">
						{!!$receipt_details->shipping_custom_field_4_value ?? ''!!}
					</p>
				</div>
			@endif
			@if(!empty($receipt_details->shipping_custom_field_5_label))
				<div class="textbox-info">
					<p class="f-left"><strong>
						{!!$receipt_details->shipping_custom_field_5_label!!} 
					</strong></p>
					<p class="f-right">
						{!!$receipt_details->shipping_custom_field_5_value ?? ''!!}
					</p>
				</div>
			@endif
			@if(!empty($receipt_details->sale_orders_invoice_no))
				<div class="textbox-info">
					<p class="f-left"><strong>
						@lang('restaurant.order_no')
					</strong></p>
					<p class="f-right">
						{!!$receipt_details->sale_orders_invoice_no ?? ''!!}
					</p>
				</div>
			@endif

			@if(!empty($receipt_details->sale_orders_invoice_date))
				<div class="textbox-info">
					<p class="f-left"><strong>
						@lang('lang_v1.order_dates')
					</strong></p>
					<p class="f-right">
						{!!$receipt_details->sale_orders_invoice_date ?? ''!!}
					</p>
				</div>
			@endif
            <table style="margin-top: 25px !important" class="border-bottom width-100 table-f-12 mb-10">
                <thead class="border-bottom-dotted">
                    <tr>
                        <th class="description">
                        	{{$receipt_details->table_product_label}}
                        </th>
                        @if(empty($receipt_details->hide_price))
                        <th class="unit_price text-right">
                        	{{$receipt_details->table_unit_price_label}}
                        </th>
                        @endif
                        <th class="quantity text-right">
                        	{{$receipt_details->table_qty_label}}
                        </th>
                        @if(!empty($receipt_details->discounted_unit_price_label))
							<th class="text-right">
								{{$receipt_details->discounted_unit_price_label}}
							</th>
						@endif
                        @if(!empty($receipt_details->item_discount_label))
							<th class="text-right">{{$receipt_details->item_discount_label}}</th>
						@endif
                        @if(empty($receipt_details->hide_price))
                        <th class="price text-right">{{$receipt_details->table_subtotal_label}}</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                	@forelse($receipt_details->lines as $line)
	                    <tr>
	                        <td class="description">
	                        	{{$line['name']}} {{$line['product_variation']}} {{$line['variation']}} 
	                        	@if(!empty($line['sub_sku'])), {{$line['sub_sku']}} @endif @if(!empty($line['brand'])), {{$line['brand']}} @endif @if(!empty($line['cat_code'])), {{$line['cat_code']}}@endif
	                        	@if(!empty($line['product_custom_fields'])), {{$line['product_custom_fields']}} @endif
	                        	@if(!empty($line['product_description']))
	                            	<div class="f-8">
	                            		{!!$line['product_description']!!}
	                            	</div>
	                            @endif
	                        	@if(!empty($line['sell_line_note']))
	                        	<br>
	                        	<span class="f-8">
	                        	{!!$line['sell_line_note']!!}
	                        	</span>
	                        	@endif 
	                        	@if(!empty($line['lot_number']))<br> {{$line['lot_number_label']}}:  {{$line['lot_number']}} @endif 
	                        	@if(!empty($line['product_expiry'])), {{$line['product_expiry_label']}}:  {{$line['product_expiry']}} @endif
	                        	@if(!empty($line['warranty_name']))
	                            	<br>
	                            	<small>
	                            		{{$line['warranty_name']}}
	                            	</small>
	                            @endif
	                            @if(!empty($line['warranty_exp_date']))
	                            	<small>
	                            		- {{@format_date($line['warranty_exp_date'])}}
	                            </small>
	                            @endif
	                            @if(!empty($line['warranty_description']))
	                            	<small> {{$line['warranty_description'] ?? ''}}</small>
	                            @endif

	                            @if($receipt_details->show_base_unit_details && $line['quantity'] && $line['base_unit_multiplier'] !== 1)
		                            <br><small>
		                            	1 {{$line['units']}} = {{$line['base_unit_multiplier']}} {{$line['base_unit_name']}} <br>
                            			{{$line['base_unit_price']}} x {{$line['orig_quantity']}} = {{$line['line_total']}}
		                            </small>
		                            @endif
	                        </td>
	                        @if(empty($receipt_details->hide_price))
	                        <td class="unit_price text-right">{{$line['unit_price_before_discount']}}</td>
	                        @endif
	                        <td class="quantity text-right">{{$line['quantity']}} {{$line['units']}} @if($receipt_details->show_base_unit_details && $line['quantity'] && $line['base_unit_multiplier'] !== 1)
                            <br><small>
                            	{{$line['quantity']}} x {{$line['base_unit_multiplier']}} = {{$line['orig_quantity']}} {{$line['base_unit_name']}}
                            </small>
                            @endif</td>

	                        @if(!empty($receipt_details->discounted_unit_price_label))
								<td class="text-right">
									{{$line['unit_price_inc_tax']}} 
								</td>
							@endif

	                        @if(!empty($receipt_details->item_discount_label))
								<td class="text-right">
									{{$line['total_line_discount'] ?? '0.00'}}
								</td>
							@endif
	                        @if(empty($receipt_details->hide_price))
	                        <td class="price text-right">{{$line['line_total']}}</td>
	                        @endif
	                    </tr>
	                    @if(!empty($line['modifiers']))
							@foreach($line['modifiers'] as $modifier)
								<tr>
									<td class="description">
			                            {{$modifier['name']}} {{$modifier['variation']}} 
			                            @if(!empty($modifier['sub_sku'])), {{$modifier['sub_sku']}} @endif @if(!empty($modifier['cat_code'])), {{$modifier['cat_code']}}@endif
			                            @if(!empty($modifier['sell_line_note']))({!!$modifier['sell_line_note']!!}) @endif 
			                        </td>
									@if(empty($receipt_details->hide_price))
									<td class="text-right">{{$modifier['unit_price_inc_tax']}}</td>
									@endif
									<td class="text-right">{{$modifier['quantity']}} {{$modifier['units']}} </td>
									@if(empty($receipt_details->hide_price))
									@if(!empty($receipt_details->discounted_unit_price_label))
										<td class="text-right">{{$modifier['unit_price_exc_tax']}}</td>
									@endif
									@if(!empty($receipt_details->item_discount_label))
										<td class="text-right">0.00</td>
									@endif
									<td class="text-right">{{$modifier['line_total']}}</td>
									@endif
								</tr>
							@endforeach
						@endif
                    @endforeach
                    <tr>
                    	<td @if(!empty($receipt_details->item_discount_label)) colspan="5" @else colspan="4" @endif>&nbsp;</td>
                    	@if(!empty($receipt_details->discounted_unit_price_label))
    					<td></td>
    					@endif
                    </tr>
                </tbody>
            </table>
			@if(!empty($receipt_details->total_quantity_label))
				<div class="flex-box">
					<p class="summary-label">
						{!! $receipt_details->total_quantity_label !!}
					</p>
					<p class="summary-value">
						{{$receipt_details->total_quantity}}
					</p>
				</div>
			@endif
			@if(!empty($receipt_details->total_items_label))
				<div class="flex-box">
					<p class="summary-label">
						{!! $receipt_details->total_items_label !!}
					</p>
					<p class="summary-value">
						{{$receipt_details->total_items}}
					</p>
				</div>
			@endif
			@if(empty($receipt_details->hide_price))
                <div class="flex-box">
                    <p class="summary-label">
                    	{!! $receipt_details->subtotal_label !!}
                    </p>
                    <p class="summary-value">
                    	{{$receipt_details->subtotal}}
                    </p>
                </div>

                <!-- Shipping Charges -->
				@if(!empty($receipt_details->shipping_charges))
					<div class="flex-box">
						<p class="summary-label">
							{!! $receipt_details->shipping_charges_label !!}
						</p>
						<p class="summary-value">
							{{$receipt_details->shipping_charges}}
						</p>
					</div>
				@endif

				@if(!empty($receipt_details->packing_charge))
					<div class="flex-box">
						<p class="summary-label">
							{!! $receipt_details->packing_charge_label !!}
						</p>
						<p class="summary-value">
							{{$receipt_details->packing_charge}}
						</p>
					</div>
				@endif

				<!-- Discount -->
				@if( !empty($receipt_details->discount) )
					<div class="flex-box">
						<p class="summary-label">
							{!! preg_replace('/\s*\(.*?\)\s*/', '', $receipt_details->discount_label) !!}
						</p>

						<p class="summary-value">
							(-) {{$receipt_details->discount}}
						</p>
					</div>
				@endif

				@if( !empty($receipt_details->total_line_discount) )
					<div class="flex-box">
						<p class="summary-label">
							{!! preg_replace('/\s*\(.*?\)\s*/', '', $receipt_details->line_discount_label) !!}
						</p>

						<p class="summary-value">
							(-) {{$receipt_details->total_line_discount}}
						</p>
					</div>
				@endif

				@if( !empty($receipt_details->additional_expenses) )
					@foreach($receipt_details->additional_expenses as $key => $val)
						<div class="flex-box">
							<p class="summary-label">
								{{$key}}:
							</p>

							<p class="summary-value">
								(+) {{$val}}
							</p>
						</div>
					@endforeach
				@endif

				@if(!empty($receipt_details->reward_point_label) )
					<div class="flex-box">
						<p class="summary-label">
							{!! $receipt_details->reward_point_label !!}
						</p>

						<p class="summary-value">
							(-) {{$receipt_details->reward_point_amount}}
						</p>
					</div>
				@endif

				@if( !empty($receipt_details->tax) )
					<div class="flex-box">
						<p class="summary-label">
							{!! $receipt_details->tax_label !!}
						</p>
						<p class="summary-value">
							(+) {{$receipt_details->tax}}
						</p>
					</div>
				@endif

				@if( $receipt_details->round_off_amount > 0)
					<div class="flex-box">
						<p class="summary-label">
							{!! $receipt_details->round_off_label !!} 
						</p>
						<p class="summary-value">
							{{$receipt_details->round_off}}
						</p>
					</div>
				@endif

				<div class="flex-box total-row">
					<p class="summary-label">
						{!! $receipt_details->total_label !!}
					</p>
					<p class="summary-value">
						{{$receipt_details->total}}
					</p>
				</div>
				@if(!empty($receipt_details->total_in_words))
				<p colspan="2" class="text-right mb-0">
					<small>
					({{$receipt_details->total_in_words}})
					</small>
				</p>
				@endif
				@if(!empty($receipt_details->payments))
					@foreach($receipt_details->payments as $payment)
						<div class="flex-box">
							<p class="summary-label" style="font-weight: 400;">{{$payment['method']}} ({{$payment['date']}}) </p>
							<p class="summary-value" style="font-weight: 400;">{{$payment['amount']}}</p>
						</div>
					@endforeach
				@endif

				<!-- Total Paid-->
				@if(!empty($receipt_details->total_paid))
					<div class="flex-box">
						<p class="summary-label">
							{!! $receipt_details->total_paid_label !!}
						</p>
						<p class="summary-value">
							{{$receipt_details->total_paid}}
						</p>
					</div>
				@endif

				<!-- Total Due-->
				@if(!empty($receipt_details->total_due) && !empty($receipt_details->total_due_label))
					<div class="flex-box">
						<p class="summary-label">
							{!! $receipt_details->total_due_label !!}
						</p>
						<p class="summary-value">
							{{$receipt_details->total_due}}
						</p>
					</div>
				@endif

				@if(!empty($receipt_details->all_due))
					<div class="flex-box">
						<p class="summary-label">
							{!! $receipt_details->all_bal_label !!}
						</p>
						<p class="summary-value">
							{{$receipt_details->all_due}}
						</p>
					</div>
				@endif
			@endif
            <div class="border-bottom width-100">&nbsp;</div>
            @if(empty($receipt_details->hide_price) && !empty($receipt_details->tax_summary_label) )
	            <!-- tax -->
	            @if(!empty($receipt_details->taxes))
	            	<table class="border-bottom width-100 table-f-12">
	            		<tr>
	            			<th colspan="2" class="text-center">{{$receipt_details->tax_summary_label}}</th>
	            		</tr>
	            		@foreach($receipt_details->taxes as $key => $val)
	            			<tr>
	            				<td class="left">{{$key}}</td>
	            				<td class="right">{{$val}}</td>
	            			</tr>
	            		@endforeach
	            	</table>
	            @endif
            @endif

            @if(!empty($receipt_details->additional_notes))
	            <p class="centered">
	            	{!! nl2br($receipt_details->additional_notes) !!}
	            </p>
            @endif

            {{-- Barcode --}}
			@if($receipt_details->show_barcode)
				<div class="barcode">
					<img src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2, 45, array(0, 0, 0), false)}}">
                    <div class="barcode-number">{{$receipt_details->invoice_no}}</div>
				</div>
			@endif

			@if($receipt_details->show_qr_code && !empty($receipt_details->qr_code_text))
				<div class="centered mt-5">
					<img style="width: 50%;" src="data:image/png;base64,{{DNS2D::getBarcodePNG($receipt_details->qr_code_text, 'QRCODE')}}">
				</div>
			@endif
			
			@if(!empty($receipt_details->footer_text))
				<p class="centered">
					{!! $receipt_details->footer_text !!}
				</p>
			@endif
			
        </div>
    </body>
</html>