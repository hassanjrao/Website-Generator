@extends('layouts.backend')
@section('page-title', 'About Us Titles')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    About Us Titles
                </h3>
                {{-- chan --}}

                @can('create aboutus titles')
                    <a type="button" class="btn btn-primary push" href="{{ route('about-us-titles.create') }}">Add</a>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped table-vcenter" id='dtable'>
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
                            @foreach ($aboutUsTitles as $ind => $aboutUsTitle)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $aboutUsTitle->title }}</td>


                                    <td>{{ $aboutUsTitle->created_at }}</td>
                                    <td>{{ $aboutUsTitle->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit aboutus titles')
                                                <a href="{{ route('about-us-titles.edit', $aboutUsTitle->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete aboutus titles')
                                                <form id="form-{{ $aboutUsTitle->id }}"
                                                    action="{{ route('about-us-titles.destroy', $aboutUsTitle->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $aboutUsTitle->id }})"
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
                url: "/content/about-us-titles/" + id,
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
