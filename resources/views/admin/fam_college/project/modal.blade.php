<div class="modal fade" id="{{ $modal }}" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow border-0">
            <form name="service-form" class="custom-form">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                            class="uil uil-times fs-4 text-dark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="p-3 rounded box-shadow">
                        <d class="row">
                            <div class="col-md-12">
                                <div class="avatar-picture">
                                    <div class="image-input image-input-outline" id="imgUserProfile">
                                        <div class="image-input-wrapper"
                                            style="background-image: url('{{ asset('assets/common/product-placeholder.webp') }}');">
                                        </div>
                                        <label class="btn">
                                            <i>
                                                <img src="{{ asset('assets/common/edit.svg') }}" alt=""
                                                    class="img-fluid">
                                            </i>
                                            <input type="file" name="image" id="changeImg"
                                                accept=".png, .jpg, .jpeg">
                                            <input type="button" value="Upload" id="uploadButton">
                                        </label>
                                    </div>

                                </div><!--end col-->
                            </div><!--end col-->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">{{ __('general.name') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <input type="text" name="name" id="name" required
                                            class="form-control">
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">{{ __('general.training.program_category') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="">{{ __('general.select') }}</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">{{ __('general.description') }}<span
                                            class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <textarea type="text" name="description" id="description" cols="30" rows="10" required
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div><!--end col-->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('general.close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('general.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
