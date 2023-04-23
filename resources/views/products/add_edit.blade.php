@extends('layouts.backend')

@php
    $addEdit = isset($product) ? 'Edit' : 'Add';
    $addUpdate = isset($product) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' product')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Product</h3>


                <a href="{{ route('products.index') }}" class="btn btn-primary push">All Products</a>


            </div>
            <div class="block-content">

                @if ($product)
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4">

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Product Category<span
                                        class="text-danger">*</span></label>

                                <select name="product_category" class="form-select" required>
                                    <option value="">Select Product Category</option>
                                    @foreach ($productCategories as $productCategory)
                                        <option value="{{ $productCategory->id }}"
                                            {{ $product && $product->product_category_id == $productCategory->id ? 'selected' : '' }}>
                                            {{ $productCategory->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <span class="text-danger" id="product_category_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Name <span class="text-danger">*</span></label>
                                <input type="text" value="{{ $product ? $product->name : null }}" class="form-control"
                                    id="name" name="name" placeholder="Enter Name">
                                <span class="text-danger" id="name_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Stick Id <span class="text-danger">*</span></label>
                                <input type="number" value="{{ $product ? $product->sticky_id : null }}"
                                    class="form-control" id="sticky_id" name="sticky_id" placeholder="Enter sticky Id">
                                <span class="text-danger" id="sticky_id_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">

                                @if ($product && $product->image)
                                    <img src="{{ asset('storage/product/images/' . $product->image) }}" alt=""
                                        width="100%" height="100px">
                                    <input type="hidden" name="old_image" value="{{ $product->image }}">
                                    <br>
                                @endif

                                <label class="form-label" for="label">Image <span class="text-danger">*</span></label>
                                <input {{ ($product && $product->image) ? '' : 'required' }} type="file" class="form-control" id="image" name="image">
                                <span class="text-danger" id="image_error"></span>
                            </div>

                        </div>

                        <div class="row mb-4">

                            <div class="col-lg-12 ">
                                <label class="form-label" for="label">Description</label>
                                <textarea name="description" id="editor" class="form-control" cols="30" rows="10">{{ $product && $product->description ? $product->description : '' }}</textarea>
                            </div>

                        </div>

                        <div class="row mb-4">




                            <div class="col-lg-3 col-md-3 col-sm-12 mt-4">
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" id="show_ingrediants"
                                        name="show_ingrediants"
                                        {{ $product && $product->show_ingredients ? 'checked' : '' }}>
                                    <label class="form-check-label" for="show_ingrediants">Show Ingrediants <span
                                            class="text-danger">*</span></label>
                                </div>

                                <span class="text-danger" id="show_ingrediants_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">

                                @if ($product && $product->ingredients_image)
                                    <img src="{{ asset('storage/product/ingrediants_images/' . $product->ingredients_image) }}"
                                        alt="" width="100%" height="100px">
                                    <input type="hidden" name="old_ingrediants_image"
                                        value="{{ $product->ingrediants_image }}">


                                @endif

                                <label class="form-label" for="label">Ingrediants Image <span
                                        class="text-danger">*</span></label>
                                <input {{ ($product && $product->ingredients_image) ? '' : 'required' }} type="file" class="form-control" id="ingrediants_image"
                                    name="ingrediants_image">
                                <span class="text-danger" id="ingrediants_image_error"></span>
                            </div>



                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Billing Model<span
                                        class="text-danger">*</span></label>

                                <select name="billing_model" class="form-select" required>
                                    <option value="">Select Billing Model</option>
                                    @foreach ($billingModels as $billingModel)
                                        <option value="{{ $billingModel->id }}"
                                            {{ $product && $product->billing_model_id == $billingModel->id ? 'selected' : '' }}>
                                            {{ $billingModel->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <span class="text-danger" id="billing_model_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">SS Price <span
                                        class="text-danger">*</span></label>
                                <input required type="number" step="0.01"
                                    value="{{ $product ? $product->ss_price : '' }}" class="form-control" id="ss_price"
                                    name="ss_price">
                                <span class="text-danger" id="ss_price_error"></span>
                            </div>




                        </div>



                        <div class="row mb-4">

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">SS Shipping <span
                                        class="text-danger">*</span></label>
                                <input required type="number" step="0.01"
                                    value="{{ $product ? $product->trial_price : '' }}" class="form-control"
                                    id="ss_shipping" name="ss_shipping">
                                <span class="text-danger" id="ss_shipping_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">SS Max Quantity <span
                                        class="text-danger">*</span></label>
                                <input required type="number" value="{{ $product ? $product->ss_max_quantity : '' }}"
                                    class="form-control" id="ss_max_quantity" name="ss_max_quantity">
                                <span class="text-danger" id="ss_max_quantity_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Trial Price <span
                                        class="text-danger">*</span></label>
                                <input required type="number" step="0.01"
                                    value="{{ $product ? $product->trial_price : '' }}" class="form-control"
                                    id="trial_price" name="trial_price">
                                <span class="text-danger" id="trial_price_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Trial Shipping <span
                                        class="text-danger">*</span></label>
                                <input required type="number" step="0.01"
                                    value="{{ $product ? $product->trial_shipping : '' }}" class="form-control"
                                    id="trial_shipping" name="trial_shipping">
                                <span class="text-danger" id="trial_shipping_error"></span>
                            </div>


                        </div>



                        <div class="row mb-4">


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Trial Rebill Price <span
                                        class="text-danger">*</span></label>
                                <input required type="number" step="0.01"
                                    value="{{ $product ? $product->trial_rebill_price : '' }}" class="form-control"
                                    id="trial_rebill_price" name="trial_rebill_price">
                                <span class="text-danger" id="trial_rebill_price_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Trial Max Quantity <span
                                        class="text-danger">*</span></label>
                                <input required type="number" value="{{ $product ? $product->trial_max_quantity : '' }}"
                                    class="form-control" id="trial_max_quantity" name="trial_max_quantity">
                                <span class="text-danger" id="trial_max_quantity_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Continuity Price <span
                                        class="text-danger">*</span></label>
                                <input required type="number" step="0.01"
                                    value="{{ $product ? $product->continuity_price : '' }}" class="form-control"
                                    id="continuity_price" name="continuity_price">
                                <span class="text-danger" id="continuity_price_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Continuity Shipping <span
                                        class="text-danger">*</span></label>
                                <input required type="number" step="0.01"
                                    value="{{ $product ? $product->continuity_shipping : '' }}" class="form-control"
                                    id="continuity_shipping" name="continuity_shipping">
                                <span class="text-danger" id="continuity_shipping_error"></span>
                            </div>

                        </div>


                        <div class="row mb-4">

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Continuity Max Quantity <span
                                        class="text-danger">*</span></label>
                                <input required type="number"
                                    value="{{ $product ? $product->continuity_max_quantity : '' }}" class="form-control"
                                    id="continuity_max_quantity" name="continuity_max_quantity">
                                <span class="text-danger" id="continuity_max_quantity_error"></span>
                            </div>




                            <div class="col-lg-3 col-md-3 col-sm-12 mt-4">
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" id="straight_sale_multi_price"
                                        name="straight_sale_multi_price"
                                        {{ $product && $product->straight_sale_multi_price ? 'checked' : '' }}>
                                    <label class="form-check-label" for="straight_sale_multi_price">Straight Sale Multi
                                        Price <span class="text-danger">*</span></label>
                                </div>

                                <span class="text-danger" id="straight_sale_multi_price_error"></span>
                            </div>



                            <div class="col-lg-3 col-md-3 col-sm-12 mt-4">
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" id="max_quantity_enable"
                                        name="max_quantity_enable"
                                        {{ $product && $product->enable_max_quantity ? 'checked' : '' }}>
                                    <label class="form-check-label" for="max_quantity_enable">Max Quantity Enable <span
                                            class="text-danger">*</span></label>
                                </div>

                                <span class="text-danger" id="max_quantity_enable_error"></span>
                            </div>



                            <div class="col-lg-3 col-md-3 col-sm-12 mt-4">
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" id="size_option" name="size_option"
                                        {{ $product && $product->size_option ? 'checked' : '' }}>
                                    <label class="form-check-label" for="size_option">Size Option <span
                                            class="text-danger">*</span></label>
                                </div>

                                <span class="text-danger" id="size_option_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mt-4">
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" id="active" name="active"
                                        {{ $product && $product->status ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active">Active <span
                                            class="text-danger">*</span></label>
                                </div>

                                <span class="text-danger" id="active_error"></span>
                            </div>




                        </div>


                    </div>


                </div>

                <div class="d-flex justify-content-end mb-4">

                    <button type="submit" id="submitBtn" class="btn btn-primary  push">{{ $addUpdate }}</button>


                </div>




                </form>


            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>


@endsection
