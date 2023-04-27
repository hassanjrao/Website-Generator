@extends('layouts.backend')
@section('page-title', 'Popular Product Section')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Popular Product Section
                </h3>


                @can('create categories')
                    <a type="button" class="btn btn-primary push" href="{{ route('popular-product-sections.create') }}">Add</a>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
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
                            @foreach ($popularProductSections as $ind => $popularProductSection)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $popularProductSection->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $popularProductSection->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $popularProductSection->file }}
                                        </a>
                                    </td>

                                    <td>{{ $popularProductSection->created_at }}</td>
                                    <td>{{ $popularProductSection->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit categories')
                                                <a href="{{ route('popular-product-sections.edit', $popularProductSection->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete categories')
                                                <form id="form-{{ $popularProductSection->id }}"
                                                    action="{{ route('popular-product-sections.destroy', $popularProductSection->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $popularProductSection->id }})"
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






    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
