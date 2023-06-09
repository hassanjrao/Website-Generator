@extends('layouts.backend')
@section('page-title', 'Popular Titles')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Popular Titles
                </h3>


                @can('create popular titles')
                    <a type="button" class="btn btn-primary push" href="{{ route('popular-titles.create') }}">Add</a>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped table-vcenter" id="dtable">
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
                            @foreach ($popularTitles as $ind => $popularTitle)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $popularTitle->title }}</td>


                                    <td>{{ $popularTitle->created_at }}</td>
                                    <td>{{ $popularTitle->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit popular titles')
                                                <a href="{{ route('popular-titles.edit', $popularTitle->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete popular titles')
                                                <form id="form-{{ $popularTitle->id }}"
                                                    action="{{ route('popular-titles.destroy', $popularTitle->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $popularTitle->id }})"
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

    <script>
        var table = $('#dtable').DataTable();

        function myCallbackFunction(updatedCell, updatedRow, oldValue) {
            console.log("The new value for the cell is: " + updatedCell.data());
            console.log("The values for each cell in that row are: " + updatedRow.data());

            var id = updatedRow.data()[0];
            var title = updatedRow.data()[1];


            console.log(id, title);

            $.ajax({
                // add put update route with id
                url: "/content/popular-titles/" + id,
                type: 'POST',
                data: {
                    id: id,
                    title: title,
                    _token: '{{ csrf_token() }}',
                    _method: 'PUT'
                },
                success: function(response) {
                    console.log(response);
                }
            });

        }

        table.MakeCellsEditable({
            "onUpdate": myCallbackFunction,
            "inputCss": 'form-control ',
        });
    </script>

@endsection
