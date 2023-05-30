@extends('layouts.backend')
@section('page-title', 'Advertising Companies')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Advertising Companies
                </h3>


                {{-- @can('create advertising companies') --}}
                    <a type="button" class="btn btn-primary push" href="{{ route('advertising-companies.create') }}">Add</a>
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
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($advertisingCompanies as $ind => $company)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $company->name }}</td>


                                    <td>{{ $company->created_at }}</td>
                                    <td>{{ $company->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit advertising companies')
                                                <a href="{{ route('advertising-companies.edit', $company->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete advertising companies')
                                                <form id="form-{{ $company->id }}"
                                                    action="{{ route('advertising-companies.destroy', $company->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $company->id }})"
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
