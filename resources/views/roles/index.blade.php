@extends('layouts.backend')
@section('page-title', 'Roles')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Roles
                </h3>



                @can('create roles')
                    <button type="button" class="btn btn-primary push" data-bs-toggle="modal"
                        data-bs-target="#modal-block-popin">Add</button>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped table-vcenter js-dataTable-full table-vcenter  ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($roles as $ind => $role)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $role->name }}</td>

                                    <td>{{ $role->created_at }}</td>
                                    <td>{{ $role->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit roles')
                                                <a href="{{ route('roles.edit', $role->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan
                                            @can('delete roles')
                                                <form id="form-{{ $role->id }}"
                                                    action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $role->id }})"
                                                        class="btn btn-sm btn-alt-danger" value="Delete">

                                                </form>
                                            @endcan
                                        </div>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>



    <div class="modal fade" id="modal-block-popin" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin" role="document">
            <div class="modal-content">

                <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="block block-rounded block-transparent mb-0">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Add</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content fs-sm">
                            <div class="block block-rounded">

                                <div class="block-content">

                                    <div class="row push justify-content-center">

                                        <div class="col-lg-12 ">

                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <label class="form-label" for="label">Name</label>
                                                    <input required type="text" class="form-control" id="name"
                                                        name="name">
                                                </div>




                                            </div>



                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
