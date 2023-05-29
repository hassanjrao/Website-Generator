@extends('layouts.backend')
@section('page-title', 'Contact Descriptions')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Contact Descriptions
                </h3>


                @can('create contact descriptions')
                    <a type="button" class="btn btn-primary push" href="{{ route('contact-descriptions.create') }}">Add</a>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped table-vcenter" id="dtable">
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
                            @foreach ($contactDescriptions as $ind => $contactDescription)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $contactDescription->description }}</td>


                                    <td>{{ $contactDescription->created_at }}</td>
                                    <td>{{ $contactDescription->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit contact descriptions')
                                                <a href="{{ route('contact-descriptions.edit', $contactDescription->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete contact descriptions')
                                                <form id="form-{{ $contactDescription->id }}"
                                                    action="{{ route('contact-descriptions.destroy', $contactDescription->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $contactDescription->id }})"
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
            var description = updatedRow.data()[1];


            console.log(id, description);

            $.ajax({
                // add put update route with id
                url: "/content/contact-descriptions/" + id,
                type: 'POST',
                data: {
                    id: id,
                    description: description,
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
