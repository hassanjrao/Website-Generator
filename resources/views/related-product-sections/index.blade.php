@extends('layouts.backend')
@section('page-title', 'Related Product Section')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Related Product Section
                </h3>


                @can('create related product sections')
                    <a type="button" class="btn btn-primary push" href="{{ route('related-product-sections.create') }}">Add</a>
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
                            @foreach ($relatedProductSections as $ind => $relatedProductSection)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $relatedProductSection->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $relatedProductSection->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $relatedProductSection->file }}
                                        </a>
                                    </td>

                                    <td>{{ $relatedProductSection->created_at }}</td>
                                    <td>{{ $relatedProductSection->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit related product sections')
                                                <a href="{{ route('related-product-sections.edit', $relatedProductSection->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete related product sections')
                                                <form id="form-{{ $relatedProductSection->id }}"
                                                    action="{{ route('related-product-sections.destroy', $relatedProductSection->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $relatedProductSection->id }})"
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
