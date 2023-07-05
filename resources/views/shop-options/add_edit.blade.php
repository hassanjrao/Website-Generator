@extends('layouts.backend')

@php
    $addEdit = isset($shopOption) ? 'Edit' : 'Add';
    $addUpdate = isset($shopOption) ? 'Update' : 'Add';
@endphp
@section('page-options', $addEdit . ' Shop Options')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-options">{{ $addEdit }} Shop Options</h3>


                <a href="{{ route('shop-options.index') }}" class="btn btn-primary">All Shop Options</a>


            </div>
            <div class="block-content">

                @if ($shopOption)
                    <form action="{{ route('shop-options.update', $shopOption->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('shop-options.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Product<span
                                        class="text-danger">*</span></label>

                                <select name="product" class="form-select" required>
                                    <option value="">Select Product</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}"
                                            {{ $shopOption && $shopOption->product_id == $product->id ? 'selected' : '' }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>


                                <span class="text-danger" id="product_error"></span>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Option Quantity <span class="text-danger">*</span></label>
                                <input required type="number" value="{{ $shopOption ? $shopOption->option_quantity : null }}"
                                    class="form-control" id="option_quantity" name="option_quantity" placeholder="Enter Option Quantity">
                                <span class="text-danger" id="option_quantity_error"></span>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Option Price <span class="text-danger">*</span></label>
                                <input required type="number" step=".01" value="{{ $shopOption ? $shopOption->option_price : null }}"
                                    class="form-control" id="option_price" name="option_price" placeholder="Enter Option price">
                                <span class="text-danger" id="option_price_error"></span>
                            </div>




                        </div>


                    </div>


                </div>

                <div class="d-flex justify-content-end mb-4">

                    <button type="submit" id="submitBtn" class="btn btn-primary  border">{{ $addUpdate }}</button>

                </div>




                </form>


            </div>
        </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')

@endsection
