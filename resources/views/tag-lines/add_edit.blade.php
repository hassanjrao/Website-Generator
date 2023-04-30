@extends('layouts.backend')

@php
    $addEdit = isset($tagLine) ? 'Edit' : 'Add';
    $addUpdate = isset($tagLine) ? 'Update' : 'Add';
@endphp
@section('page-title', $addEdit . ' Tag Line')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">{{ $addEdit }} Tag Line</h3>


                <a href="{{ route('tag-lines.index') }}" class="btn btn-primary push">All Tag Lines</a>


            </div>
            <div class="block-content">

                @if ($tagLine)
                    <form action="{{ route('tag-lines.update', $tagLine->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                    @else
                        <form action="{{ route('tag-lines.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                @endif


                <div class="row push justify-content-center">

                    <div class="col-lg-12 ">

                        <div class="row mb-4">



                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label class="form-label" for="label">Title <span class="text-danger">*</span></label>
                                <input required type="text" value="{{ $tagLine ? $tagLine->title : null }}"
                                    class="form-control" id="title" name="title" placeholder="Enter Title">
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
