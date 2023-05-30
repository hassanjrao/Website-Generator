@extends('layouts.backend')

@php
    $addEdit = isset($ftp) ? 'Edit' : 'Add';
    $addUpdate = isset($ftp) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' ftps')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} FTP</h3>


                <a href="{{ route('ftps.index') }}" class="btn btn-primary push">All FTPs</a>


            </div>
            <div class="block-content">

                @if ($ftp)
                    <form action="{{ route('ftps.update', $ftp->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('ftps.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4 justify-content-around">


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Host <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $ftp ? $ftp->host : null }}" class="form-control"
                                    id="host" name="host" placeholder="Enter Host">
                                <span class="text-danger" id="host_error"></span>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Username <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $ftp ? $ftp->username : null }}"
                                    class="form-control" id="username" name="username" placeholder="Enter Username">
                                <span class="text-danger" id="username_error"></span>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">password <span class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $ftp ? $ftp->password : null }}"
                                    class="form-control" id="password" name="password" placeholder="Enter password">
                                <span class="text-danger" id="password_error"></span>
                            </div>



                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label class="form-label" for="label">Port <span
                                        class="text-danger">*</span></label>
                                <input required type="number"
                                    value="{{ $ftp ? $ftp->port : null }}"
                                    class="form-control" id="port" name="port"
                                    placeholder="Enter Port">
                                <span class="text-danger" id="port_error"></span>
                            </div>

                        </div>
                        <div class="row mb-4">



                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label class="form-label" for="label">Root Path <span
                                        class="text-danger">*</span></label>
                                <input required type="text"
                                    value="{{ $ftp ? $ftp->root_path : null }}"
                                    class="form-control" id="root_path" name="root_path"
                                    placeholder="Enter Root Path">
                                <span class="text-danger" id="root_path_error"></span>
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
