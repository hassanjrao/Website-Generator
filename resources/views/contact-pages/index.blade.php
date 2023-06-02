@extends('layouts.backend')
@section('page-title', 'Contact Pages')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Contact pages
                </h3>


                {{-- @can('create contact pages') --}}
                    <a type="button" class="btn btn-primary push" href="{{ route('contact-pages.create') }}">Add</a>
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
                            @foreach ($contactPages as $ind => $contactPage)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $contactPage->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $contactPage->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $contactPage->file }}
                                        </a>
                                    </td>

                                    <td>{{ $contactPage->created_at }}</td>
                                    <td>{{ $contactPage->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            {{-- @can('edit contact pages') --}}
                                                <a href="{{ route('contact-pages.edit', $contactPage->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            {{-- @endcan --}}

                                            {{-- @can('delete contact pages') --}}
                                                <form id="form-{{ $contactPage->id }}"
                                                    action="{{ route('contact-pages.destroy', $contactPage->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $contactPage->id }})"
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
