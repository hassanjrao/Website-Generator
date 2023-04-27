@extends('layouts.backend')

@php
    $addEdit = isset($footer) ? 'Edit' : 'Add';
    $addUpdate = isset($footer) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' header')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Footer</h3>


                <a href="{{ route('footers.index') }}" class="btn btn-primary push">All Footers</a>


            </div>
            <div class="block-content">

                @if ($footer)
                    <form action="{{ route('footers.update', $footer->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('footers.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4 justify-content-around">



                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <label class="form-label" for="label">Name <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $footer ? $footer->name : null }}"
                                    class="form-control" id="name" name="name" placeholder="Enter Name">
                                <span class="text-danger" id="name_error"></span>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12">

                                @if ($footer && $footer->file)
                                    <a href="{{ asset('storage/' . $footer->file) }}" download>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        {{ $footer->file }}
                                    </a>
                                @endif

                                <label class="form-label" for="label">File <span class="text-danger">{{ $footer && $footer->file ? "" : "*" }}</span></label>
                                <input  {{ $footer && $footer->file ? "" : "required" }} type="file"
                                    class="form-control" id="file" name="file" placeholder="Enter file">
                                <span class="text-danger" id="file_error"></span>
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
