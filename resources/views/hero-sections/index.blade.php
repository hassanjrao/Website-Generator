@extends('layouts.backend')
@section('page-title', 'Hero Section')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Hero Section
                </h3>


                @can('create hero sections')
                    <a type="button" class="btn btn-primary push" href="{{ route('hero-sections.create') }}">Add</a>
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
                            @foreach ($heroSections as $ind => $heroSection)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $heroSection->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $heroSection->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $heroSection->file }}
                                        </a>
                                    </td>

                                    <td>{{ $heroSection->created_at }}</td>
                                    <td>{{ $heroSection->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit hero sections')
                                                <a href="{{ route('hero-sections.edit', $heroSection->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete hero sections')
                                                <form id="form-{{ $heroSection->id }}"
                                                    action="{{ route('hero-sections.destroy', $heroSection->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $heroSection->id }})"
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
