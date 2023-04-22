@extends('layouts.backend')

@section('page-title', 'Edit Role')
@section('content')

    <!-- Page Content -->
    <div class="content content-boxed">

        <div class="block block-rounded">
            <div class="block-header block-header-default d-flex">
                <h3 class="block-title">Edit Role: {{ $role->name }}</h3>


            </div>
            <div class="block-content">
                <form action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row push justify-content-center">

                        <div class="col-4">
                            <label class="form-label" for="label">Name</label>
                            <input required type="text" value="{{ $role->name }}" class="form-control" id="name"
                                name="name">
                        </div>

                        <div class="col-4 mt-4">
                            <button type="submit" class="btn btn-primary  border">Update</button>

                        </div>



                    </div>


                </form>
            </div>
        </div>


        <form action="{{ route('roles.update-role-permissions') }}" method="POST" enctype="multipart/form-data">

            
            @csrf
            <input type="hidden" name="role_id" value="{{ $role->id }}">
            <div class="block block-rounded">
                <div class="block-header block-header-default d-flex align-items-center">
                    <h3 class="block-title">{{ $role->name }} Permissions</h3>

                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </div>
                <div class="block-content">


                    <div class="row push">


                        @foreach ($permissions as $ind => $permissionGroup)
                            <div class="col-4 mb-4">

                                <label class="form-label">{{ ucwords($ind) }}</label>


                                @foreach ($permissionGroup as $permission)
                                    <div class="space-y-2 mt-2 ">
                                        <div class="form-check" style="padding-left: 2.5em !important">
                                            <input class="form-check-input" type="checkbox" id="{{ $permission->name }}"
                                                name="{{ $permission->name }}"
                                                {{ $permission->hasPermission ? 'checked' : '' }}>
                                            <label class="form-check-label"
                                                for="{{ $permission->name }}">{{ $permission->name }}</label>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        @endforeach

                    </div>


                </div>
            </div>


        </form>



    </div>
    <!-- END Page Content -->
@endsection
