@extends('layouts.backend')

@php
    $addEdit = isset($crm) ? 'Edit' : 'Add';
    $addUpdate = isset($crm) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' CRMs')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} CRM</h3>


                <a href="{{ route('crms.index') }}" class="btn btn-primary push">All CRMs</a>


            </div>
            <div class="block-content">

                @if ($crm)
                    <form action="{{ route('crms.update', $crm->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('crms.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4 justify-content-around">

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Advertising Company<span
                                        class="text-danger">*</span></label>

                                <select name="advertising_company_id" class="form-select" required>
                                    <option value="">Select Advertising Company</option>
                                    @foreach ($advertisingCompanies as $advertisingCompany)
                                        <option value="{{ $advertisingCompany->id }}"
                                            {{ $crm && $crm->advertising_company_id == $advertisingCompany->id ? 'selected' : '' }}>
                                            {{ $advertisingCompany->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <span class="text-danger" id="advertising_company_id_error"></span>
                            </div>



                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">URL <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $crm ? $crm->url : null }}" class="form-control"
                                    id="url" name="url" placeholder="Enter url">
                                <span class="text-danger" id="url_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Username <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $crm ? $crm->username : null }}"
                                    class="form-control" id="username" name="username" placeholder="Enter Username">
                                <span class="text-danger" id="username_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">password <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $crm ? $crm->password : null }}"
                                    class="form-control" id="password" name="password" placeholder="Enter password">
                                <span class="text-danger" id="password_error"></span>
                            </div>

                        </div>
                        <div class="row mb-4 justify-content-around">



                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Shipping Id <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $crm ? $crm->shipping_id : null }}"
                                    class="form-control" id="shipping_id" name="shipping_id"
                                    placeholder="Enter Shipping Id">
                                <span class="text-danger" id="shipping_id_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Compaign Id <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $crm ? $crm->compaign_id : null }}"
                                    class="form-control" id="compaign_id" name="compaign_id"
                                    placeholder="Enter Compaign Id">
                                <span class="text-danger" id="compaign_id_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Tran Type <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $crm ? $crm->tran_type : null }}"
                                    class="form-control" id="tran_type" name="tran_type" placeholder="Enter Tran Type">
                                <span class="text-danger" id="tran_type_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Offer Id <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $crm ? $crm->offer_id : null }}"
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
                                            {{ $crm && $crm->billing_model_id == $billingModel->id ? 'selected' : '' }}>
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
                                    value="{{ $crm ? $crm->gateway_id : null }}"
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
