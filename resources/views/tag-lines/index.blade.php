@extends('layouts.backend')
@section('page-title', 'Tag Lines')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Tag Lines
                </h3>


                {{-- @can('create tagLine') --}}
                    <a type="button" class="btn btn-primary push" href="{{ route('tag-lines.create') }}">Add</a>
                {{-- @endcan --}}
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
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
                            @foreach ($tagLines as $ind => $tagLine)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $tagLine->title }}</td>


                                    <td>{{ $tagLine->created_at }}</td>
                                    <td>{{ $tagLine->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            {{-- @can('edit tagLine') --}}
                                                <a href="{{ route('tag-lines.edit', $tagLine->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            {{-- @endcan --}}

                                            {{-- @can('delete tagLine') --}}
                                                <form id="form-{{ $tagLine->id }}"
                                                    action="{{ route('tag-lines.destroy', $tagLine->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $tagLine->id }})"
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