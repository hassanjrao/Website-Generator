@extends('layouts.backend')
@section('page-title', 'Contact Titles')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Contact Titles
                </h3>


                @can('create contact titles')
                    <a type="button" class="btn btn-primary push" href="{{ route('contact-titles.create') }}">Add</a>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($contactTitles as $ind => $contactTitle)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $contactTitle->title }}</td>


                                    <td>{{ $contactTitle->created_at }}</td>
                                    <td>{{ $contactTitle->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit contact titles')
                                                <a href="{{ route('contact-titles.edit', $contactTitle->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete contact titles')
                                                <form id="form-{{ $contactTitle->id }}"
                                                    action="{{ route('contact-titles.destroy', $contactTitle->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $contactTitle->id }})"
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
