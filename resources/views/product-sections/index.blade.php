@extends('layouts.backend')
@section('page-title', 'Product Section')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Product Section
                </h3>


                @can('create product sections')
                    <a type="button" class="btn btn-primary push" href="{{ route('product-sections.create') }}">Add</a>
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
                                <th>File</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($productSections as $ind => $productSection)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $productSection->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $productSection->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $productSection->file }}
                                        </a>
                                    </td>

                                    <td>{{ $productSection->created_at }}</td>
                                    <td>{{ $productSection->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit product sections')
                                                <a href="{{ route('product-sections.edit', $productSection->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete product sections')
                                                <form id="form-{{ $productSection->id }}"
                                                    action="{{ route('product-sections.destroy', $productSection->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $productSection->id }})"
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
