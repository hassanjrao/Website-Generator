@extends('layouts.backend')

@php
    $addEdit = isset($advertisingCompany) ? 'Edit' : 'Add';
    $addUpdate = isset($advertisingCompany) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Advertising Companies')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Advertising Company</h3>


                <a href="{{ route('advertising-companies.index') }}" class="btn btn-primary push">All Advertising
                    Companies</a>

                                                                            
            </div>
            <div class="block-content">

                @if ($advertisingCompany)
                    <form action="{{ route('advertising-companies.update', $advertisingCompany->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('advertising-companies.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4 justify-content-around">


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Name <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->name : null }}"
                                    class="form-control" id="name" name="name" placeholder="Enter Name">
                                <span class="text-danger" id="name_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">URL <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->url : null }}" class="form-control"
                                    id="url" name="url" placeholder="Enter url">
                                <span class="text-danger" id="url_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Username <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->username : null }}"
                                    class="form-control" id="username" name="username" placeholder="Enter Username">
                                <span class="text-danger" id="username_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">password <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->password : null }}"
                                    class="form-control" id="password" name="password" placeholder="Enter password">
                                <span class="text-danger" id="password_error"></span>
                            </div>

                        </div>
                        <div class="row mb-4 justify-content-around">


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Shipping Id <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->shipping_id : null }}"
                                    class="form-control" id="shipping_id" name="shipping_id"
                                    placeholder="Enter Shipping Id">
                                <span class="text-danger" id="shipping_id_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Compaign Id <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->compaign_id : null }}"
                                    class="form-control" id="compaign_id" name="compaign_id"
                                    placeholder="Enter Compaign Id">
                                <span class="text-danger" id="compaign_id_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Tran Type <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->tran_type : null }}"
                                    class="form-control" id="tran_type" name="tran_type" placeholder="Enter Tran Type">
                                <span class="text-danger" id="tran_type_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Offer Id <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->offer_id : null }}"
                                    class="form-control" id="offer_id" name="offer_id" placeholder="Enter Offer Id">
                                <span class="text-danger" id="offer_id_error"></span>
                            </div>

                        </div>
                        <div class="row mb-4 ">


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Billing Model<span
                                        class="text-danger">*</span></label>

                                <select name="billing_model" class="form-select" required>
                                    <option value="">Select Billing Model</option>
                                    @foreach ($billingModels as $billingModel)
                                        <option value="{{ $billingModel->id }}"
                                            {{ $advertisingCompany && $advertisingCompany->billing_model_id == $billingModel->id ? 'selected' : '' }}>
                                            {{ $billingModel->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <span class="text-danger" id="billing_model_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Gateway Id <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $advertisingCompany ? $advertisingCompany->gateway_id : null }}"
                                    class="form-control" id="gateway_id" name="gateway_id"
                                    placeholder="Enter Gateway Id">
                                <span class="text-danger" id="gateway_id_error"></span>
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
