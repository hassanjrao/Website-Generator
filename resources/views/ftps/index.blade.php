@extends('layouts.backend')
@section('page-title', 'FTPs')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    FTPs
                </h3>


                {{-- @can('create FTPs') --}}
                    <a type="button" class="btn btn-primary push" href="{{ route('ftps.create') }}">Add</a>
                {{-- @endcan --}}
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped table-vcenter js-dataTable-full table-vcenter  ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Advertising Company</th>
                                <th>Name</th>
                                <th>Host</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Port</th>
                                <th>Root Path</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($ftps as $ind => $ftp)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $ftp->advertisingCompany ? $ftp->advertisingCompany->name : '' }}</td>
                                    <td>{{ $ftp->name }}</td>
                                    <td>{{ $ftp->host }}</td>
                                    <td>{{ $ftp->username }}</td>
                                    <td>{{ $ftp->password }}</td>
                                    <td>{{ $ftp->port }}</td>
                                    <td>{{ $ftp->root_path }}</td>
                                    <td>{{ $ftp->created_at }}</td>
                                    <td>{{ $ftp->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            {{-- @can('edit FTPs') --}}
                                                <a href="{{ route('ftps.edit', $ftp->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            {{-- @endcan --}}

                                            {{-- @can('delete FTPs') --}}
                                                <form id="form-{{ $ftp->id }}"
                                                    action="{{ route('ftps.destroy', $ftp->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $ftp->id }})"
                                                        class="btn btn-sm btn-alt-danger" value="Delete">

                                                </form>
                                            {{-- @endcan --}}
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






    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
