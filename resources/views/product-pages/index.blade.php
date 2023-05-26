@extends('layouts.backend')
@section('page-title', 'Product Pages')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Product pages
                </h3>


                @can('create product pages')
                    <a type="button" class="btn btn-primary push" href="{{ route('product-pages.create') }}">Add</a>
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
                            @foreach ($productPages as $ind => $productPage)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $productPage->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $productPage->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $productPage->file }}
                                        </a>
                                    </td>

                                    <td>{{ $productPage->created_at }}</td>
                                    <td>{{ $productPage->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit product pages')
                                                <a href="{{ route('product-pages.edit', $productPage->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete product pages')
                                                <form id="form-{{ $productPage->id }}"
                                                    action="{{ route('product-pages.destroy', $productPage->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $productPage->id }})"
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
