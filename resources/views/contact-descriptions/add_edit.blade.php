@extends('layouts.backend')

@php
    $addEdit = isset($contactDescription) ? 'Edit' : 'Add';
    $addUpdate = isset($contactDescription) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Contact Description')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Contact Description</h3>


                <a href="{{ route('contact-descriptions.index') }}" class="btn btn-primary push">All Contact Descriptions</a>


            </div>
            <div class="block-content">

                @if ($contactDescription)
                    <form action="{{ route('contact-descriptions.update', $contactDescription->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('contact-descriptions.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4">



                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label class="form-label" for="label">Description <span class="text-danger">*</span></label>


                                <textarea required class="form-control" id="description" name="description" placeholder="Enter description">{{ $contactDescription ? $contactDescription->description : '' }}</textarea>
                                <span class="text-danger" id="title_error"></span>
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
