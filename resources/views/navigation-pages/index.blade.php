@extends('layouts.backend')
@section('page-title', 'Navigation Pages')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Navigation pages
                </h3>


                {{-- @can('create navigation pages') --}}
                    <a type="button" class="btn btn-primary push" href="{{ route('navigation-pages.create') }}">Add</a>
                {{-- @endcan --}}
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped table-vcenter js-dataTable-full table-vcenter  ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>File</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($navigationPages as $ind => $navigationPage)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $navigationPage->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $navigationPage->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $navigationPage->file }}
                                        </a>
                                    </td>

                                    <td>{{ $navigationPage->created_at }}</td>
                                    <td>{{ $navigationPage->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            {{-- @can('edit navigation pages') --}}
                                                <a href="{{ route('navigation-pages.edit', $navigationPage->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            {{-- @endcan --}}

                                            {{-- @can('delete navigation pages') --}}
                                                <form id="form-{{ $navigationPage->id }}"
                                                    action="{{ route('navigation-pages.destroy', $navigationPage->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $navigationPage->id }})"
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
