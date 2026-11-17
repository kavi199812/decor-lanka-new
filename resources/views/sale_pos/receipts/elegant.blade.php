<style>
	@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

	.elegant-invoice-container {
		font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
		color: #1e293b;
		background: #ffffff;
		font-size: 13px;
		line-height: 1.5;
		width: 100%;
		max-width: 820px;
		margin: 0 auto;
		padding: 24px 28px;
		box-sizing: border-box;
	}

	.elegant-invoice-container * {
		box-sizing: border-box;
	}

	/* Top Brand & Title Bar */
	.inv-top-bar {
		width: 100%;
		border-collapse: collapse;
		margin-bottom: 20px;
	}

	.inv-top-bar td {
		vertical-align: middle;
	}

	.inv-brand-logo img {
		max-height: 80px;
		max-width: 220px;
		object-fit: contain;
		display: block;
	}

	.inv-brand-name {
		font-size: 24px;
		font-weight: 800;
		color: #0f172a;
		letter-spacing: -0.5px;
		margin: 0 0 4px 0;
	}

	.inv-brand-details {
		font-size: 11.5px;
		color: #64748b;
		line-height: 1.45;
	}

	.inv-header-title-wrap {
		text-align: right;
	}

	.inv-header-title {
		font-size: 34px;
		font-weight: 900;
		color: #0f172a;
		letter-spacing: 1.5px;
		text-transform: uppercase;
		margin: 0;
		line-height: 1;
	}

	.inv-status-pill {
		display: inline-block;
		margin-top: 8px;
		padding: 4px 12px;
		border-radius: 9999px;
		font-size: 11px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 0.5px;
	}

	.inv-status-paid {
		background-color: #dcfce7;
		color: #15803d;
		border: 1px solid #bbf7d0;
	}

	.inv-status-due {
		background-color: #fee2e2;
		color: #b91c1c;
		border: 1px solid #fecaca;
	}

	.inv-brand-divider {
		height: 3px;
		background: #0f172a;
		margin-bottom: 22px;
		border-radius: 2px;
		width: 100%;
	}

	/* Two-column info cards */
	.inv-info-table {
		width: 100%;
		border-collapse: collapse;
		margin-bottom: 22px;
	}

	.inv-info-card {
		background-color: #f8fafc;
		border: 1px solid #e2e8f0;
		border-radius: 8px;
		padding: 14px 18px;
		width: 100%;
		box-sizing: border-box;
	}

	.inv-card-header {
		font-size: 11px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 0.8px;
		color: #475569;
		border-bottom: 1.5px solid #e2e8f0;
		padding-bottom: 6px;
		margin-bottom: 10px;
	}

	.inv-customer-title {
		font-size: 15px;
		font-weight: 700;
		color: #0f172a;
		margin-bottom: 4px;
	}

	.inv-card-body {
		font-size: 12px;
		color: #475569;
		line-height: 1.6;
	}

	.inv-meta-grid {
		width: 100%;
		border-collapse: collapse;
		font-size: 12px;
	}

	.inv-meta-grid td {
		padding: 3px 0;
		vertical-align: top;
	}

	.inv-meta-grid td:first-child {
		font-weight: 600;
		color: #64748b;
		width: 42%;
	}

	.inv-meta-grid td:last-child {
		font-weight: 700;
		color: #0f172a;
		text-align: right;
	}

	.inv-track-link {
		display: inline-block;
		background-color: #2563eb !important;
		color: #ffffff !important;
		text-decoration: none !important;
		padding: 4px 12px;
		border-radius: 5px;
		font-size: 11px;
		font-weight: 600;
		letter-spacing: 0.2px;
		line-height: 1.4;
		-webkit-print-color-adjust: exact !important;
		print-color-adjust: exact !important;
	}

	.inv-track-link:hover {
		background-color: #1d4ed8 !important;
		color: #ffffff !important;
		text-decoration: none !important;
	}

	/* Items Table */
	.inv-table-container {
		width: 100%;
		border-radius: 8px;
		overflow: hidden;
		border: 1px solid #e2e8f0;
		margin-bottom: 22px;
		box-sizing: border-box;
	}

	.inv-main-table {
		width: 100%;
		border-collapse: collapse;
		font-size: 12.5px;
	}

	.inv-main-table thead tr {
		background-color: #0f172a !important;
		color: #ffffff !important;
	}

	.inv-main-table th {
		background-color: #0f172a !important;
		color: #ffffff !important;
		font-weight: 700;
		font-size: 11px;
		text-transform: uppercase;
		letter-spacing: 0.6px;
		padding: 11px 14px;
		border: none;
	}

	.inv-main-table td {
		padding: 11px 14px;
		border-bottom: 1px solid #f1f5f9;
		vertical-align: middle;
		color: #334155;
	}

	.inv-main-table tbody tr:nth-child(even) {
		background-color: #fbfcfe;
	}

	.inv-main-table tbody tr:last-child td {
		border-bottom: none;
	}

	.inv-product-title {
		font-weight: 700;
		color: #0f172a;
		font-size: 13px;
	}

	.inv-tag-pill {
		display: inline-block;
		background: #f1f5f9;
		color: #475569;
		font-size: 10.5px;
		font-weight: 600;
		padding: 1px 6px;
		border-radius: 4px;
		margin-right: 4px;
		border: 1px solid #e2e8f0;
	}

	/* Bottom Section */
	.inv-bottom-layout {
		width: 100%;
		border-collapse: collapse;
		page-break-inside: avoid;
	}

	.inv-box-card {
		background-color: #f8fafc;
		border: 1px solid #e2e8f0;
		border-radius: 8px;
		padding: 12px 16px;
		margin-bottom: 14px;
		width: 100%;
		box-sizing: border-box;
	}

	.inv-box-card-title {
		font-size: 11px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 0.6px;
		color: #64748b;
		border-bottom: 1px solid #e2e8f0;
		padding-bottom: 5px;
		margin-bottom: 8px;
	}

	.inv-sign-container {
		margin-top: 115px;
		padding-top: 8px;
		width: 210px;
		border-top: 1.5px solid #94a3b8;
		text-align: center;
		font-weight: 700;
		font-size: 11.5px;
		color: #475569;
	}

	/* Summary Table */
	.inv-summary-card {
		background-color: #ffffff;
		border: 1px solid #e2e8f0;
		border-radius: 8px;
		overflow: hidden;
		box-shadow: 0 1px 3px rgba(0,0,0,0.03);
		width: 100%;
		box-sizing: border-box;
	}

	.inv-summary-table {
		width: 100%;
		border-collapse: collapse;
		font-size: 12.5px;
	}

	.inv-summary-table td {
		padding: 8px 16px;
		border-bottom: 1px solid #f1f5f9;
		color: #475569;
	}

	.inv-summary-table td:last-child {
		text-align: right;
		font-weight: 600;
		color: #0f172a;
	}

	.inv-grand-total {
		background-color: #0f172a !important;
	}

	.inv-grand-total td {
		background-color: #0f172a !important;
		color: #ffffff !important;
		font-size: 15px !important;
		font-weight: 800 !important;
		padding: 13px 16px !important;
		border-bottom: none !important;
	}

	.inv-grand-total td:last-child {
		color: #38bdf8 !important;
		font-size: 18px !important;
		font-weight: 900 !important;
	}

	.inv-amount-words {
		font-size: 11px;
		font-style: italic;
		color: #64748b;
		text-align: right;
		padding: 8px 16px 4px 16px;
	}

	/* Footer Barcode & Notes */
	.inv-footer-wrapper {
		margin-top: 24px;
		text-align: center;
		font-size: 11.5px;
		color: #64748b;
		border-top: 1px solid #e2e8f0;
		padding-top: 14px;
		page-break-inside: avoid;
		width: 100%;
	}

	@page {
		size: auto;
		margin: 0mm;
	}

	/* Print optimization */
	@media print {
		@page {
			size: auto;
			margin: 0;
		}
		html, body {
			background: #ffffff !important;
			margin: 0 !important;
			padding: 0 !important;
			-webkit-print-color-adjust: exact !important;
			print-color-adjust: exact !important;
		}
		.elegant-invoice-container {
			padding: 12mm 14mm !important;
			max-width: 100% !important;
			width: 100% !important;
			box-sizing: border-box !important;
		}
		.inv-main-table th {
			background-color: #0f172a !important;
			color: #ffffff !important;
			-webkit-print-color-adjust: exact !important;
		}
		.inv-grand-total td {
			background-color: #0f172a !important;
			color: #ffffff !important;
			-webkit-print-color-adjust: exact !important;
		}
		.inv-info-card, .inv-box-card {
			background-color: #f8fafc !important;
			-webkit-print-color-adjust: exact !important;
		}
		.inv-brand-divider {
			background: #0f172a !important;
			-webkit-print-color-adjust: exact !important;
		}
		.elegant-invoice-container a[href]:after {
			content: none !important;
		}
		.inv-track-link {
			background-color: #2563eb !important;
			color: #ffffff !important;
			text-decoration: none !important;
			-webkit-print-color-adjust: exact !important;
			print-color-adjust: exact !important;
		}
	}
</style>

<div class="elegant-invoice-container">

	<!-- Header text if configured in layout -->
	@if(!empty($receipt_details->header_text))
		<div style="margin-bottom: 14px; font-size: 12px; color: #475569; text-align: center;">
			{!! $receipt_details->header_text !!}
		</div>
	@endif

	<!-- Letterhead if uploaded -->
	@if(!empty($receipt_details->letter_head))
		<div style="width: 100%; margin-bottom: 16px;">
			<img style="width: 100%; border-radius: 6px;" src="{{$receipt_details->letter_head}}" alt="Letterhead">
		</div>
	@endif

	<!-- Top Bar: Logo/Company Info & Invoice Heading -->
	<table class="inv-top-bar">
		<tr>
			<!-- Left: Company Branding & Details -->
			<td style="width: 58%;">
				@if(empty($receipt_details->letter_head))
					<table style="border-collapse: collapse;">
						<tr>
							@if(!empty($receipt_details->logo))
								<td style="vertical-align: top; padding-right: 24px;" class="inv-brand-logo">
									<img src="{{$receipt_details->logo}}" alt="Logo">
								</td>
							@endif
							<td style="vertical-align: top;">
								@if(!empty($receipt_details->display_name))
									<div class="inv-brand-name">{{$receipt_details->display_name}}</div>
								@endif
								<div class="inv-brand-details">
									@if(!empty($receipt_details->address))
										<div>{!! $receipt_details->address !!}</div>
									@endif
									@if(!empty($receipt_details->contact))
										<div>{!! $receipt_details->contact !!}</div>
									@endif
									@if(!empty($receipt_details->website))
										<div>{{ $receipt_details->website }}</div>
									@endif
									@if(!empty($receipt_details->tax_info1))
										<div>{{ $receipt_details->tax_label1 }}: {{ $receipt_details->tax_info1 }}</div>
									@endif
									@if(!empty($receipt_details->tax_info2))
										<div>{{ $receipt_details->tax_label2 }}: {{ $receipt_details->tax_info2 }}</div>
									@endif
									@if(!empty($receipt_details->location_custom_fields))
										<div>{{ $receipt_details->location_custom_fields }}</div>
									@endif
								</div>
							</td>
						</tr>
					</table>
				@endif
			</td>

			<!-- Right: Invoice Title & Status -->
			<td style="width: 42%;" class="inv-header-title-wrap">
				<h1 class="inv-header-title">
					@if(!empty($receipt_details->invoice_heading))
						{!! $receipt_details->invoice_heading !!}
					@else
						INVOICE
					@endif
				</h1>

				@if(!empty($receipt_details->total_due) && floatval(str_replace(',', '', preg_replace('/[^0-9.]/', '', $receipt_details->total_due))) > 0)
					<div class="inv-status-pill inv-status-due">
						PAYMENT DUE: {{$receipt_details->total_due}}
					</div>
				@elseif(!empty($receipt_details->total_paid))
					<div class="inv-status-pill inv-status-paid">
						PAID
					</div>
				@endif

				@php
					$sub_headings = implode(' &bull; ', array_filter([$receipt_details->sub_heading_line1, $receipt_details->sub_heading_line2, $receipt_details->sub_heading_line3, $receipt_details->sub_heading_line4, $receipt_details->sub_heading_line5]));
				@endphp
				@if(!empty($sub_headings))
					<div style="font-size: 11px; color: #64748b; margin-top: 6px;">{!! $sub_headings !!}</div>
				@endif
			</td>
		</tr>
	</table>

	<div class="inv-brand-divider"></div>

	<!-- Information Cards: Customer & Invoice Details (Clean flush alignment) -->
	<table class="inv-info-table">
		<tr>
			<!-- Left Card: Customer Information -->
			<td style="width: 48.5%; vertical-align: top;">
				<div class="inv-info-card">
					<div class="inv-card-header">
						{{ !empty($receipt_details->customer_label) ? $receipt_details->customer_label : 'BILLED TO' }}
					</div>
					<div class="inv-card-body">
						@if(!empty($receipt_details->customer_name))
							<div class="inv-customer-title">{{ $receipt_details->customer_name }}</div>
						@endif

						@if(!empty($receipt_details->customer_info))
							<div style="margin-bottom: 4px;">
								@php
									$clean_info = $receipt_details->customer_info;
									if(!empty($receipt_details->customer_name)) {
										$clean_info = preg_replace('/^\s*' . preg_quote($receipt_details->customer_name, '/') . '(\s*,\s*|\s*<br\s*\/?>\s*|\s)*/i', '', $clean_info);
									}
									$clean_info = preg_replace('/^(\s*,\s*|\s*<br\s*\/?>\s*)+/i', '', trim($clean_info));
									$clean_info = preg_replace('/<b>Mobile<\/b>:\s*$/i', '', trim($clean_info));
									$clean_info = preg_replace('/(\s*,\s*|\s*<br\s*\/?>\s*)+$/i', '', trim($clean_info));
								@endphp
								@if(!empty(trim($clean_info)))
									{!! $clean_info !!}
								@endif
							</div>
						@endif

						@if(!empty($receipt_details->customer_alternate_number))
							<div style="margin-bottom: 2px;"><b>Secondary Contact:</b> {{ $receipt_details->customer_alternate_number }}</div>
						@endif

						@if(!empty($receipt_details->client_id_label) && !empty($receipt_details->client_id))
							<div><strong>{{ $receipt_details->client_id_label }}:</strong> {{ $receipt_details->client_id }}</div>
						@endif

						@if(!empty($receipt_details->customer_tax_label) && !empty($receipt_details->customer_tax_number))
							<div><strong>{{ $receipt_details->customer_tax_label }}:</strong> {{ $receipt_details->customer_tax_number }}</div>
						@endif

						@if(!empty($receipt_details->customer_custom_fields))
							<div>{!! $receipt_details->customer_custom_fields !!}</div>
						@endif

						@if(!empty($receipt_details->customer_rp_label) && !empty($receipt_details->customer_total_rp))
							<div><strong>{{ $receipt_details->customer_rp_label }}:</strong> {{ $receipt_details->customer_total_rp }}</div>
						@endif
					</div>
				</div>
			</td>

			<!-- Spacer Column -->
			<td style="width: 3%;"></td>

			<!-- Right Card: Invoice Meta Information -->
			<td style="width: 48.5%; vertical-align: top;">
				<div class="inv-info-card">
					<div class="inv-card-header">
						INVOICE DETAILS
					</div>
					<table class="inv-meta-grid">
						<tr>
							<td>INVOICE NO:</td>
							<td>
								@if(!empty($receipt_details->invoice_no_prefix))
									{!! $receipt_details->invoice_no_prefix !!}
								@endif
								{{$receipt_details->invoice_no}}
							</td>
						</tr>

						@if(!empty($receipt_details->invoice_date))
							<tr>
								<td>{{ !empty($receipt_details->date_label) ? rtrim($receipt_details->date_label, ':') : 'DATE' }}:</td>
								<td>{{$receipt_details->invoice_date}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->tracking_number) || !empty($receipt_details->shipping_custom_field_1_value))
							@php
								$raw_tracking_no = !empty($receipt_details->tracking_number) ? $receipt_details->tracking_number : $receipt_details->shipping_custom_field_1_value;
								$clean_tracking_no = ltrim(trim($raw_tracking_no), '#');
								$tracking_url = 'https://domex.lk/Order-Details.php?wbno=' . urlencode($clean_tracking_no);
							@endphp
							<tr>
								<td>TRACKING NO:</td>
								<td style="font-weight: 700; color: #1e293b;">{{ $raw_tracking_no }}</td>
							</tr>
							<tr>
								<td style="vertical-align: middle; padding-top: 6px;">TRACK ORDER:</td>
								<td style="vertical-align: middle; padding-top: 6px;">
									<a href="{{ $tracking_url }}" target="_blank" rel="noopener noreferrer" class="inv-track-link">
										Click to Track &rarr;
									</a>
								</td>
							</tr>
						@endif

						@if(!empty($receipt_details->due_date))
							<tr>
								<td>{{ !empty($receipt_details->due_date_label) ? rtrim($receipt_details->due_date_label, ':') : 'DUE DATE' }}:</td>
								<td style="color: #dc2626;">{{$receipt_details->due_date}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->sales_person))
							<tr>
								<td>{{ !empty($receipt_details->sales_person_label) ? rtrim($receipt_details->sales_person_label, ':') : 'SALES PERSON' }}:</td>
								<td>{{ $receipt_details->sales_person }}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->commission_agent))
							<tr>
								<td>{{ !empty($receipt_details->commission_agent_label) ? rtrim($receipt_details->commission_agent_label, ':') : 'COMMISSION AGENT' }}:</td>
								<td>{{ $receipt_details->commission_agent }}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->types_of_service))
							<tr>
								<td>{{ !empty($receipt_details->types_of_service_label) ? rtrim($receipt_details->types_of_service_label, ':') : 'SERVICE TYPE' }}:</td>
								<td>{{$receipt_details->types_of_service}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->table))
							<tr>
								<td>{{ !empty($receipt_details->table_label) ? rtrim($receipt_details->table_label, ':') : 'TABLE' }}:</td>
								<td>{{$receipt_details->table}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->sell_custom_field_1_value))
							<tr>
								<td>{{$receipt_details->sell_custom_field_1_label}}:</td>
								<td>{{$receipt_details->sell_custom_field_1_value}}</td>
							</tr>
						@endif
						@if(!empty($receipt_details->sell_custom_field_2_value))
							<tr>
								<td>{{$receipt_details->sell_custom_field_2_label}}:</td>
								<td>{{$receipt_details->sell_custom_field_2_value}}</td>
							</tr>
						@endif
						@if(!empty($receipt_details->sell_custom_field_3_value))
							<tr>
								<td>{{$receipt_details->sell_custom_field_3_label}}:</td>
								<td>{{$receipt_details->sell_custom_field_3_value}}</td>
							</tr>
						@endif
						@if(!empty($receipt_details->sell_custom_field_4_value))
							<tr>
								<td>{{$receipt_details->sell_custom_field_4_label}}:</td>
								<td>{{$receipt_details->sell_custom_field_4_value}}</td>
							</tr>
						@endif
					</table>
				</div>
			</td>
		</tr>
	</table>

	<!-- Shipping & Order Info if present -->
	@if(!empty($receipt_details->shipping_custom_field_2_label) || !empty($receipt_details->sale_orders_invoice_no))
		<div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 8px 14px; margin-bottom: 18px; font-size: 11.5px; color: #475569; width: 100%; box-sizing: border-box;">
			<table style="width: 100%; border-collapse: collapse;">
				<tr>
					@if(!empty($receipt_details->shipping_custom_field_2_label))
						<td style="padding: 2px 8px;"><strong>{!!$receipt_details->shipping_custom_field_2_label!!}:</strong> {!!$receipt_details->shipping_custom_field_2_value ?? ''!!}</td>
					@endif
					@if(!empty($receipt_details->sale_orders_invoice_no))
						<td style="padding: 2px 8px;"><strong>@lang('restaurant.order_no'):</strong> {!!$receipt_details->sale_orders_invoice_no!!}</td>
					@endif
					@if(!empty($receipt_details->sale_orders_invoice_date))
						<td style="padding: 2px 8px;"><strong>@lang('lang_v1.order_dates'):</strong> {!!$receipt_details->sale_orders_invoice_date!!}</td>
					@endif
				</tr>
			</table>
		</div>
	@endif

	<!-- Common Repair details if included -->
	@includeIf('sale_pos.receipts.partial.common_repair_invoice')

	<!-- Items Table (Flush width matching cards) -->
	<div class="inv-table-container">
		<table class="inv-main-table">
			<thead>
				<tr>
					<th style="width: 5%; text-align: center;">#</th>
					
					@php
						$p_width = 45;
					@endphp
					@if($receipt_details->show_cat_code == 1 && !empty($receipt_details->cat_code_label))
						@php $p_width -= 8; @endphp
					@endif
					@if(!empty($receipt_details->item_discount_label))
						@php $p_width -= 8; @endphp
					@endif
					@if(!empty($receipt_details->discounted_unit_price_label))
						@php $p_width -= 8; @endphp
					@endif

					<th style="width: {{$p_width}}%; text-align: left;">
						{{ !empty($receipt_details->table_product_label) ? $receipt_details->table_product_label : 'PRODUCT / ITEM DESCRIPTION' }}
					</th>

					@if($receipt_details->show_cat_code == 1 && !empty($receipt_details->cat_code_label))
						<th style="width: 10%; text-align: center;">{{$receipt_details->cat_code_label}}</th>
					@endif

					<th style="width: 14%; text-align: right;">
						{{ !empty($receipt_details->table_qty_label) ? $receipt_details->table_qty_label : 'QTY' }}
					</th>

					<th style="width: 15%; text-align: right;">
						{{ !empty($receipt_details->table_unit_price_label) ? $receipt_details->table_unit_price_label : 'UNIT PRICE' }}
					</th>

					@if(!empty($receipt_details->discounted_unit_price_label))
						<th style="width: 12%; text-align: right;">
							{{$receipt_details->discounted_unit_price_label}}
						</th>
					@endif

					@if(!empty($receipt_details->item_discount_label))
						<th style="width: 10%; text-align: right;">
							{{$receipt_details->item_discount_label}}
						</th>
					@endif

					<th style="width: 16%; text-align: right;">
						{{ !empty($receipt_details->table_subtotal_label) ? $receipt_details->table_subtotal_label : 'AMOUNT' }}
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($receipt_details->lines as $line)
					<tr>
						<td style="text-align: center; color: #64748b; font-weight: 600;">
							{{$loop->iteration}}
						</td>
						<td>
							@if(!empty($line['image']))
								<img src="{{$line['image']}}" alt="Item Image" style="float: left; width: 36px; height: 36px; object-fit: cover; border-radius: 4px; margin-right: 10px; border: 1px solid #e2e8f0;">
							@endif
							
							<div class="inv-product-title">
								{{$line['name']}} {{$line['product_variation'] ?? ''}} {{$line['variation'] ?? ''}}
							</div>

							@if(!empty($line['sub_sku']) || !empty($line['brand']) || !empty($line['lot_number']) || !empty($line['product_expiry']) || !empty($line['warranty_name']) || !empty($line['product_custom_fields']))
								<div style="margin-top: 3px;">
									@if(!empty($line['sub_sku']))
										<span class="inv-tag-pill">SKU: {{$line['sub_sku']}}</span>
									@endif
									@if(!empty($line['brand']))
										<span class="inv-tag-pill">{{$line['brand']}}</span>
									@endif
									@if(!empty($line['product_custom_fields']))
										<span class="inv-tag-pill">{{$line['product_custom_fields']}}</span>
									@endif
									@if(!empty($line['lot_number']))
										<span class="inv-tag-pill">{{$line['lot_number_label'] ?? 'Lot'}}: {{$line['lot_number']}}</span>
									@endif 
									@if(!empty($line['product_expiry']))
										<span class="inv-tag-pill">{{$line['product_expiry_label'] ?? 'Exp'}}: {{$line['product_expiry']}}</span>
									@endif 
									@if(!empty($line['warranty_name']))
										<span class="inv-tag-pill">{{$line['warranty_name']}} @if(!empty($line['warranty_exp_date'])) ({{@format_date($line['warranty_exp_date'])}}) @endif</span>
									@endif
								</div>
							@endif

							@if(!empty($line['product_description']))
								<div style="color: #64748b; font-size: 11px; margin-top: 2px;">{!!$line['product_description']!!}</div>
							@endif
							@if(!empty($line['sell_line_note']))
								<div style="font-style: italic; color: #0284c7; font-size: 11px; margin-top: 2px;">{!!$line['sell_line_note']!!}</div>
							@endif
							@if($receipt_details->show_base_unit_details && $line['quantity'] && $line['base_unit_multiplier'] !== 1)
								<div style="font-size: 11px; color: #64748b; margin-top: 2px;">
									1 {{$line['units']}} = {{$line['base_unit_multiplier']}} {{$line['base_unit_name']}} ({{$line['base_unit_price']}} x {{$line['orig_quantity']}} = {{$line['line_total']}})
								</div>
							@endif
						</td>

						@if($receipt_details->show_cat_code == 1 && !empty($receipt_details->cat_code_label))
							<td style="text-align: center; font-size: 11.5px; color: #64748b;">
								{{$line['cat_code'] ?? '-'}}
							</td>
						@endif

						<td style="text-align: right; font-weight: 600; white-space: nowrap;">
							{{$line['quantity']}} <small style="color: #64748b; font-weight: normal;">{{$line['units']}}</small>
						</td>

						<td style="text-align: right; font-weight: 600; color: #334155;">
							{{$line['unit_price_before_discount'] ?? $line['unit_price_exc_tax']}}
						</td>

						@if(!empty($receipt_details->discounted_unit_price_label))
							<td style="text-align: right; font-weight: 600;">
								{{$line['unit_price_inc_tax'] ?? ''}}
							</td>
						@endif

						@if(!empty($receipt_details->item_discount_label))
							<td style="text-align: right; color: #16a34a; font-weight: 600;">
								{{$line['total_line_discount'] ?? '0.00'}}
								@if(!empty($line['line_discount_percent']))
									<br><small style="color: #16a34a;">({{$line['line_discount_percent']}}%)</small>
								@endif
							</td>
						@endif

						<td style="text-align: right; font-weight: 700; color: #0f172a;">
							{{$line['line_total_exc_tax'] ?? $line['line_total']}}
						</td>
					</tr>

					<!-- Line modifiers if any -->
					@if(!empty($line['modifiers']))
						@foreach($line['modifiers'] as $modifier)
							<tr style="background-color: #f8fafc; font-size: 11.5px;">
								<td>&nbsp;</td>
								<td style="padding-left: 24px; color: #475569;">
									↳ {{$modifier['name']}} {{$modifier['variation'] ?? ''}}
									@if(!empty($modifier['sub_sku'])) ({{$modifier['sub_sku']}}) @endif
								</td>
								@if($receipt_details->show_cat_code == 1 && !empty($receipt_details->cat_code_label))
									<td>&nbsp;</td>
								@endif
								<td style="text-align: right;">{{$modifier['quantity']}} {{$modifier['units']}}</td>
								<td style="text-align: right;">{{$modifier['unit_price_exc_tax']}}</td>
								@if(!empty($receipt_details->discounted_unit_price_label))
									<td style="text-align: right;">{{$modifier['unit_price_exc_tax']}}</td>
								@endif
								@if(!empty($receipt_details->item_discount_label))
									<td style="text-align: right;">0.00</td>
								@endif
								<td style="text-align: right; font-weight: 600;">{{$modifier['line_total']}}</td>
							</tr>
						@endforeach
					@endif
				@endforeach
			</tbody>
		</table>
	</div>

	<!-- Bottom Section: Payments, Notes & Financial Summary (Clean flush alignment) -->
	<table class="inv-bottom-layout">
		<tr>
			<!-- Left: Payment details, Terms and Signature -->
			<td style="width: 48.5%; vertical-align: top;">
				@php
					$display_payments = [];
					if (!empty($receipt_details->payments) && count($receipt_details->payments) > 0) {
						foreach ($receipt_details->payments as $payment) {
							$p_method = trim($payment['method'] ?? 'Cash');
							if (strtoupper($p_method) === 'COD' || stripos($p_method, 'cash on delivery') !== false) {
								$p_method = 'COD';
							}
							$display_payments[] = [
								'method' => $p_method,
								'date' => !empty($payment['date']) ? $payment['date'] : $receipt_details->invoice_date,
								'amount' => $payment['amount'] ?? '',
							];
						}
					} else {
						$due_val = !empty($receipt_details->total_due) ? floatval(str_replace(',', '', preg_replace('/[^0-9.]/', '', $receipt_details->total_due))) : 0;
						if ($due_val > 0 || empty($receipt_details->total_paid)) {
							$is_cod = (!empty($receipt_details->prefer_payment_method) && $receipt_details->prefer_payment_method == 'cod');
							$display_payments[] = [
								'method' => $is_cod ? 'COD' : 'Credit Sale',
								'date' => $receipt_details->invoice_date ?? '',
								'amount' => $receipt_details->total,
							];
						}
					}
				@endphp

				@if(!empty($display_payments) && count($display_payments) > 0)
					<div class="inv-box-card">
						<div class="inv-box-card-title">
							Payment Records
						</div>
						<table style="width: 100%; border-collapse: collapse; font-size: 12px;">
							@foreach($display_payments as $payment)
								<tr>
									<td style="padding: 4px 0; font-weight: 600; color: #1e293b;">
										<span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background-color: #16a34a; margin-right: 6px;"></span>
										{{ $payment['method'] }}
									</td>
									<td style="padding: 4px 0; text-align: center; color: #64748b; font-size: 11px;">
										{{ $payment['date'] }}
									</td>
									<td style="padding: 4px 0; text-align: right; font-weight: 700; color: #0f172a;">
										{{ $payment['amount'] }}
									</td>
								</tr>
							@endforeach
						</table>
					</div>
				@endif

				@if(!empty($receipt_details->additional_notes))
					<div class="inv-box-card">
						<div class="inv-box-card-title">Terms & Conditions / Notes</div>
						<div style="font-size: 11.5px; color: #475569; line-height: 1.5;">
							{!! nl2br($receipt_details->additional_notes) !!}
						</div>
					</div>
				@endif

				<div class="inv-sign-container">
					Authorized Signature
				</div>
			</td>

			<!-- Spacer Column -->
			<td style="width: 3%;"></td>

			<!-- Right: Financial Summary -->
			<td style="width: 48.5%; vertical-align: top;">
				<div class="inv-summary-card">
					<table class="inv-summary-table">
						@if(!empty($receipt_details->total_quantity_label))
							<tr>
								<td>{!! $receipt_details->total_quantity_label !!}</td>
								<td>{{$receipt_details->total_quantity}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->total_items_label))
							<tr>
								<td>{!! $receipt_details->total_items_label !!}</td>
								<td>{{$receipt_details->total_items}}</td>
							</tr>
						@endif

						<tr>
							<td>{!! !empty($receipt_details->subtotal_label) ? $receipt_details->subtotal_label : 'Subtotal' !!}</td>
							<td>{{$receipt_details->subtotal_exc_tax ?? $receipt_details->subtotal}}</td>
						</tr>

						<!-- Shipping Charges -->
						@if(!empty($receipt_details->shipping_charges))
							<tr>
								<td>{!! !empty($receipt_details->shipping_charges_label) ? $receipt_details->shipping_charges_label : 'Shipping Charges' !!}</td>
								<td>(+) {{$receipt_details->shipping_charges}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->packing_charge))
							<tr>
								<td>{!! !empty($receipt_details->packing_charge_label) ? $receipt_details->packing_charge_label : 'Packing Charge' !!}</td>
								<td>(+) {{$receipt_details->packing_charge}}</td>
							</tr>
						@endif

						<!-- Taxes -->
						@if(!empty($receipt_details->taxes))
							@foreach($receipt_details->taxes as $k => $v)
								<tr>
									<td>{{$k}}</td>
									<td>(+) {{$v}}</td>
								</tr>
							@endforeach
						@endif

						<!-- Discount -->
						@if(!empty($receipt_details->discount))
							<tr>
								<td>{!! !empty($receipt_details->discount_label) ? $receipt_details->discount_label : 'Discount' !!}</td>
								<td style="color: #dc2626 !important;">(-) {{$receipt_details->discount}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->total_line_discount))
							<tr>
								<td>{!! !empty($receipt_details->line_discount_label) ? $receipt_details->line_discount_label : 'Line Discount' !!}</td>
								<td style="color: #dc2626 !important;">(-) {{$receipt_details->total_line_discount}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->additional_expenses))
							@foreach($receipt_details->additional_expenses as $key => $val)
								<tr>
									<td>{{$key}}</td>
									<td>(+) {{$val}}</td>
								</tr>
							@endforeach
						@endif

						@if(!empty($receipt_details->reward_point_label))
							<tr>
								<td>{!! $receipt_details->reward_point_label !!}</td>
								<td style="color: #dc2626 !important;">(-) {{$receipt_details->reward_point_amount}}</td>
							</tr>
						@endif

						@if(!empty($receipt_details->group_tax_details))
							@foreach($receipt_details->group_tax_details as $key => $value)
								<tr>
									<td>{!! $key !!}</td>
									<td>(+) {{$value}}</td>
								</tr>
							@endforeach
						@else
							@if(!empty($receipt_details->tax))
								<tr>
									<td>{!! !empty($receipt_details->tax_label) ? $receipt_details->tax_label : 'Tax' !!}</td>
									<td>(+) {{$receipt_details->tax}}</td>
								</tr>
							@endif
						@endif

						@if(!empty($receipt_details->round_off_amount) && $receipt_details->round_off_amount > 0)
							<tr>
								<td>{!! !empty($receipt_details->round_off_label) ? $receipt_details->round_off_label : 'Round Off' !!}</td>
								<td>{{$receipt_details->round_off}}</td>
							</tr>
						@endif

						<!-- Grand Total -->
						<tr class="inv-grand-total">
							<td>{!! !empty($receipt_details->total_label) ? $receipt_details->total_label : 'Grand Total' !!}</td>
							<td>{{$receipt_details->total}}</td>
						</tr>
					</table>

					@if(!empty($receipt_details->total_in_words))
						<div class="inv-amount-words">
							{{$receipt_details->total_in_words}}
						</div>
					@endif
				</div>
			</td>
		</tr>
	</table>

	<!-- Tax Summary Table if configured -->
	@if(empty($receipt_details->hide_price) && !empty($receipt_details->tax_summary_label) && !empty($receipt_details->taxes))
		<div style="margin-top: 18px; width: 100%;">
			<table class="inv-main-table" style="font-size: 11.5px;">
				<thead>
					<tr>
						<th colspan="2" style="text-align: center;">{{$receipt_details->tax_summary_label}}</th>
					</tr>
				</thead>
				<tbody>
					@foreach($receipt_details->taxes as $key => $val)
						<tr>
							<td style="font-weight: 600; text-align: center;">{{$key}}</td>
							<td style="text-align: center;">{{$val}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@endif

	<!-- Footer Barcode / QR Code & Footer Text -->
	<div class="inv-footer-wrapper">
		@if($receipt_details->show_barcode || $receipt_details->show_qr_code)
			<div style="margin-bottom: 12px;">
				@if($receipt_details->show_barcode)
					<img style="max-height: 38px; margin: 0 auto; display: block;" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 1.6, 30, [15, 23, 42], true)}}" alt="Barcode">
				@endif

				@if($receipt_details->show_qr_code && !empty($receipt_details->qr_code_text))
					<img style="max-height: 65px; margin: 8px auto 0 auto; display: block;" src="data:image/png;base64,{{DNS2D::getBarcodePNG($receipt_details->qr_code_text, 'QRCODE', 3, 3, [15, 23, 42])}}" alt="QR Code">
				@endif
			</div>
		@endif

		@if(!empty($receipt_details->footer_text))
			<div>
				{!! $receipt_details->footer_text !!}
			</div>
		@endif
	</div>

</div>