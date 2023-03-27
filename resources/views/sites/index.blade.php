@extends('layouts.backend')
@section('page-title', 'Sites')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')

    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Sites
                </h3>



                <a class="btn btn-primary push" href="{{ route('sites.create') }}">Add</a>

            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand Name</th>
                                <th>URL</th>
                                <th>Email</th>
                                <th>Description</th>
                                <th>Corp Name</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Created By</th>
                                <th>Updated By</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($sites as $ind => $site)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $site->name }}</td>
                                    <td>{{ $site->url }}</td>
                                    <td>{{ $site->email }}</td>
                                    <td>{{ $site->description }}</td>
                                    <td>{{ $site->corp_name }}</td>
                                    <td>{{ $site->phone_number }}</td>
                                    <td>{{ $site->address }}</td>
                                    <td>{{ $site->createdBy ? $site->createdBy->name : '' }}</td>
                                    <td>{{ $site->updatedBy ? $site->updatedBy->name : '' }}</td>

                                    <td>{{ $site->created_at }}</td>
                                    <td>{{ $site->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            {{-- <a href="{{ route('sites.download', ['site' => $site]) }}"
                                                class="btn btn-sm btn-alt-warning">Download</a> --}}

                                            {{-- <a href="{{ route('sites.edit', $site->id) }}"
                                                class="btn btn-sm btn-alt-primary">Edit</a> --}}
                                            {{-- <form id="form-{{ $site->id }}"
                                                action="{{ route('sites.destroy', $site->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="button" onclick="confirmDelete({{ $site->id }})"
                                                    class="btn btn-sm btn-alt-danger" value="Delete">

                                            </form> --}}
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


    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
