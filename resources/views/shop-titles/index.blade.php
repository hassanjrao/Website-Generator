@extends('layouts.backend')
@section('page-title', 'Shop Titles')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Shop Titles
                </h3>


                @can('create shop titles')
                    <a type="button" class="btn btn-primary push" href="{{ route('shop-titles.create') }}">Add</a>
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
                            @foreach ($shopTitles as $ind => $shopTitle)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $shopTitle->title }}</td>


                                    <td>{{ $shopTitle->created_at }}</td>
                                    <td>{{ $shopTitle->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit shop titles')
                                                <a href="{{ route('shop-titles.edit', $shopTitle->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete shop titles')
                                                <form id="form-{{ $shopTitle->id }}"
                                                    action="{{ route('shop-titles.destroy', $shopTitle->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $shopTitle->id }})"
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
