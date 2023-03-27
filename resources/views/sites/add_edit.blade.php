@extends('layouts.backend')

@php
    $addEdit = isset($site) ? 'Edit' : 'Add';
    $addUpdate = isset($site) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' site')
@section('content')

    <div class="content content-boxed">
        <site-builder-form />
    </div>

    <!-- Page Content -->
    {{-- <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Site</h3>


                <a href="{{ route('sites.index') }}" class="btn btn-primary push">All Sites</a>


            </div>
            <div class="block-content">

                @if ($site)
                    <form action="{{ route('sites.update', $site->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('sites.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Brand Name<span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->name : '' }}" class="form-control"
                                    id="name" name="name">
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <label class="form-label" for="label">Site URL<span class="text-danger">*</span></label>
                                <input required type="url" value="{{ $site ? $site->url : '' }}" class="form-control"
                                    id="url" name="url">
                            </div>

                        </div>

                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Email<span class="text-danger">*</span></label>
                                <input required type="email" value="{{ $site ? $site->email : '' }}" class="form-control"
                                    id="email" name="email">
                            </div>


                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <label class="form-label" for="label">Description<span
                                        class="text-danger">*</span></label>
                                <textarea name="description" id="description" class="form-control">{{ $site ? $site->description : '' }}</textarea>
                            </div>

                        </div>

                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Corp. Name<span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->corp_name : '' }}"
                                    class="form-control" id="corp_name" name="corp_name">
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Phone<span class="text-danger">*</span></label>
                                <input required type="tel" value="{{ $site ? $site->phone_number : '' }}"
                                    class="form-control" id="phone_number" name="phone_number">
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Address<span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->address : '' }}"
                                    class="form-control" id="address" name="address">
                            </div>

                        </div>


                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Fulfillment<span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->fulfillment : '' }}"
                                    class="form-control" id="fulfillment" name="fulfillment">
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Return Address<span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->return_address : '' }}"
                                    class="form-control" id="return_address" name="return_address">
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Trial Period<span
                                        class="text-danger">*</span></label>
                                <input required type="number" value="{{ $site ? $site->trial_period : '' }}"
                                    class="form-control" id="trial_period" name="trial_period">
                            </div>

                        </div>

                        <div class="row mb-4">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Trial Period Breakdown<span
                                        class="text-danger">*</span></label>
                                <input required type="number" value="{{ $site ? $site->trial_period_breakdown : '' }}"
                                    class="form-control" id="trial_period_breakdown" name="trial_period_breakdown">
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Shipping Period<span
                                        class="text-danger">*</span></label>
                                <input required type="number" value="{{ $site ? $site->shipping_period : '' }}"
                                    class="form-control" id="shipping_period" name="shipping_period">
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Shipping Carrier<span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->shipping_carrier : '' }}"
                                    class="form-control" id="shipping_carrier" name="shipping_carrier">
                            </div>


                        </div>


                        <div class="row mb-4">


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Customer Service Hours<span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->customer_service_hours : '' }}"
                                    class="form-control" id="customer_service_hours" name="customer_service_hours">
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Style Sheet<span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->style_sheet : '' }}"
                                    class="form-control" id="style_sheet" name="style_sheet">
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Maximum Ticket Value<span
                                        class="text-danger">*</span></label>
                                <input required type="text" value="{{ $site ? $site->maximum_ticket_value : '' }}"
                                    class="form-control" id="maximum_ticket_value" name="maximum_ticket_value">
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





    </div> --}}
    <!-- END Page Content -->
@endsection

@section('js_after')

    <!-- Page JS Helpers (CKEditor 5 plugins) -->
    <script></script>
@endsection
