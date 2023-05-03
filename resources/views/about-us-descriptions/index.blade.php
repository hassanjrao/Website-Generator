@extends('layouts.backend')
@section('page-title', 'About Us Descriptions')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    About Us Descriptions
                </h3>


                @can('create aboutus descriptions')
                    <a type="button" class="btn btn-primary push" href="{{ route('about-us-descriptions.create') }}">Add</a>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($aboutUsDescriptions as $ind => $aboutUsDescription)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $aboutUsDescription->description }}</td>


                                    <td>{{ $aboutUsDescription->created_at }}</td>
                                    <td>{{ $aboutUsDescription->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit aboutus descriptions')
                                                <a href="{{ route('about-us-descriptions.edit', $aboutUsDescription->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete aboutus descriptions')
                                                <form id="form-{{ $aboutUsDescription->id }}"
                                                    action="{{ route('about-us-descriptions.destroy', $aboutUsDescription->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $aboutUsDescription->id }})"
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
