@extends('layouts.backend')
@section('page-title', 'Button Titles')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Button Titles
                </h3>


                @can('create button titles')
                    <a type="button" class="btn btn-primary push" href="{{ route('button-titles.create') }}">Add</a>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped" id="dtable">
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
                            @foreach ($buttonTitles as $ind => $buttonTitle)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $buttonTitle->title }}</td>


                                    <td>{{ $buttonTitle->created_at }}</td>
                                    <td>{{ $buttonTitle->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit button titles')
                                                <a href="{{ route('button-titles.edit', $buttonTitle->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete button titles')
                                                <form id="form-{{ $buttonTitle->id }}"
                                                    action="{{ route('button-titles.destroy', $buttonTitle->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $buttonTitle->id }})"
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
                url: "/content/button-titles/" + id,
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
