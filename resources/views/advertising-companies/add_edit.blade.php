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
