@extends('layouts.backend')
@section('page-title', 'CTA Section')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    CTA Section
                </h3>


                @can('create cta sections')
                    <a type="button" class="btn btn-primary push" href="{{ route('cta-sections.create') }}">Add</a>
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
                            @foreach ($ctaSections as $ind => $ctaSection)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $ctaSection->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $ctaSection->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $ctaSection->file }}
                                        </a>
                                    </td>

                                    <td>{{ $ctaSection->created_at }}</td>
                                    <td>{{ $ctaSection->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit cta sections')
                                                <a href="{{ route('cta-sections.edit', $ctaSection->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete cta sections')
                                                <form id="form-{{ $ctaSection->id }}"
                                                    action="{{ route('cta-sections.destroy', $ctaSection->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $ctaSection->id }})"
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
