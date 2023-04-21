@extends('layouts.backend')

@php
    $addEdit = isset($productCategory) ? 'Edit' : 'Add';
    $addUpdate = isset($productCategory) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' productCategory')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Product Category</h3>


                <a href="{{ route('product-categories.index') }}" class="btn btn-primary push">All Product Categories</a>


            </div>
            <div class="block-content">

                @if ($productCategory)
                    <form action="{{ route('product-categories.update', $productCategory->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('product-categories.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4 justify-content-around">

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Advertising Company<span
                                        class="text-danger">*</span></label>

                                <select name="advertising_company" class="form-select" required>
                                    <option value="">Select Advertising Company</option>
                                    @foreach ($advertisingCompanies as $advertisingCompany)
                                        <option value="{{ $advertisingCompany->id }}"
                                            {{ $productCategory && $productCategory->advertising_company_id == $advertisingCompany->id ? 'selected' : '' }}>
                                            {{ $advertisingCompany->name }}
                                        </option>
                                    @endforeach
                                </select>


                                <span class="text-danger" id="advertising_company_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Name <span class="text-danger">*</span></label>
                                <input type="text" value="{{ $productCategory ? $productCategory->name : null }}"
                                    class="form-control" id="name" name="name" placeholder="Enter Name">
                                <span class="text-danger" id="name_error"></span>
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
