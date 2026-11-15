<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        {!! Form::open(['url' => action([\App\Http\Controllers\ProductController::class, 'updateProductImage'], [$product->id]), 'method' => 'post', 'id' => 'edit_product_image_form', 'files' => true ]) !!}
        <div class="modal-header" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title font-weight-bold" style="font-size: 17px; color: #1e293b;">
                <i class="fas fa-images text-primary"></i> @lang('lang_v1.upload_or_edit_image')
            </h4>
        </div>
        <div class="modal-body" style="max-height: 75vh; overflow-y: auto;">
            <!-- Product Information Box -->
            <div class="well well-sm" style="background: #eff6ff; border-left: 4px solid #2563eb; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="margin: 0 0 5px 0; font-size: 16px; font-weight: 700; color: #1e3a8a;">{{ $product->name }}</h4>
                <span style="font-size: 13px; color: #475569;">
                    <strong>@lang('product.sku'):</strong> <code>{{ $product->sku }}</code> | 
                    <strong>@lang('product.product_type'):</strong> 
                    <span class="label {{ $product->type == 'variable' ? 'bg-purple' : 'bg-green' }}">
                        {{ ucfirst($product->type) }}
                    </span>
                </span>
            </div>

            <!-- SECTION 1: Main Product Image -->
            <div class="panel panel-default" style="border: 1px solid #cbd5e1; border-radius: 6px; box-shadow: none;">
                <div class="panel-heading" style="background: #f8fafc; font-weight: 600; color: #334155; border-bottom: 1px solid #cbd5e1;">
                    <i class="fas fa-image"></i> Main Product Image (ප්‍රධාන Image එක)
                </div>
                <div class="panel-body">
                    <div class="row">
                        <!-- Current Image Preview -->
                        <div class="col-sm-4 text-center" style="border-right: 1px solid #f1f5f9;">
                            <label class="text-muted" style="font-size: 12px; font-weight: 600; display: block; margin-bottom: 6px;">
                                Current Main Image
                            </label>
                            <div style="width: 120px; height: 120px; margin: 0 auto 8px; border: 2px dashed #cbd5e1; border-radius: 8px; display: flex; align-items: center; justify-content: center; overflow: hidden; background: #fff;">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" id="current_product_image_preview" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                            </div>
                            @if(!empty($product->image))
                                <div class="checkbox" style="margin-top: 4px;">
                                    <label style="color: #ef4444; font-size: 12px; font-weight: 600;">
                                        {!! Form::checkbox('remove_image', 1, false, ['id' => 'remove_image_checkbox']) !!}
                                        <i class="fa fa-trash"></i> Remove Image
                                    </label>
                                </div>
                            @endif
                        </div>

                        <!-- Upload New Main Image -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                {!! Form::label('product_image_file', __('lang_v1.product_image') . ' (Upload / Replace):') !!}
                                <input type="file" name="image" id="product_image_file" class="form-control" accept="image/*" style="padding: 4px;">
                                <small class="text-muted" style="display: block; margin-top: 4px;">
                                    @lang('purchase.max_file_size', ['size' => (config('constants.document_size_limit') / 1000000)]) | @lang('lang_v1.aspect_ratio_should_be_1_1')
                                </small>
                            </div>

                            <!-- Live preview container -->
                            <div id="new_image_preview_container" style="display: none; margin-top: 8px; padding: 6px; background: #f8fafc; border-radius: 6px; text-align: center; border: 1px solid #e2e8f0;">
                                <label style="font-size: 11px; color: #64748b; display: block; margin-bottom: 3px;">New Image Live Preview:</label>
                                <img id="new_image_preview" src="#" alt="New Image Preview" style="max-height: 80px; max-width: 100%; object-fit: contain; border-radius: 4px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: Variations Images (For Variable Products) -->
            @if($product->type == 'variable' && $product->variations->count() > 0)
                <div class="panel panel-default" style="border: 1px solid #cbd5e1; border-radius: 6px; box-shadow: none; margin-top: 15px;">
                    <div class="panel-heading" style="background: #f8fafc; font-weight: 600; color: #334155; border-bottom: 1px solid #cbd5e1;">
                        <i class="fas fa-layer-group"></i> Variable Product Images (වෙන වෙනම Variation Images)
                    </div>
                    <div class="panel-body" style="padding: 10px;">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="margin-bottom: 0;">
                                <thead style="background: #f1f5f9;">
                                    <tr>
                                        <th style="width: 30%;">Variation</th>
                                        <th style="width: 35%;">Existing Images</th>
                                        <th style="width: 35%;">Upload New Images</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product->variations as $variation)
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <span class="label bg-blue" style="font-size: 12px;">
                                                    {{ $variation->product_variation->name ?? '' }} - {{ $variation->name }}
                                                </span>
                                                <div style="font-size: 12px; color: #64748b; margin-top: 4px;">
                                                    <strong>SKU:</strong> <code>{{ $variation->sub_sku }}</code>
                                                </div>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                @if(!empty($variation->media) && $variation->media->count() > 0)
                                                    <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                                                        @foreach($variation->media as $media)
                                                            <div class="img-thumbnail" style="position: relative; padding: 2px; border-radius: 4px; display: inline-block;">
                                                                <span class="badge bg-red delete-media" data-href="{{ action([\App\Http\Controllers\ProductController::class, 'deleteMedia'], ['media_id' => $media->id]) }}" style="position: absolute; top: -6px; right: -6px; cursor: pointer; border-radius: 50%; padding: 3px 5px; font-size: 10px;" title="Delete image">
                                                                    <i class="fas fa-times"></i>
                                                                </span>
                                                                <img src="{{ $media->display_url }}" alt="Variation Media" style="width: 50px; height: 50px; object-fit: cover; border-radius: 3px;">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <span class="text-muted" style="font-size: 12px;"><em>No images uploaded yet</em></span>
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <input type="file" name="variation_images_{{ $variation->id }}[]" class="form-control input-sm variation_file_input" data-preview-target="#variation_preview_{{ $variation->id }}" accept="image/*" multiple style="padding: 2px;">
                                                <div id="variation_preview_{{ $variation->id }}" class="variation-preview-box" style="display: none; margin-top: 6px; display: flex; flex-wrap: wrap; gap: 4px;"></div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="modal-footer" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
            <button type="submit" class="tw-dw-btn tw-dw-btn-primary tw-text-white" id="btn_save_product_image">
                <i class="fa fa-save"></i> @lang('messages.save')
            </button>
            <button type="button" class="tw-dw-btn tw-dw-btn-neutral tw-text-white" data-dismiss="modal">
                @lang('messages.close')
            </button>
        </div>
        {!! Form::close() !!}
    </div>
</div>
