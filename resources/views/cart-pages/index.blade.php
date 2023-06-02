@extends('layouts.backend')
@section('page-title', 'Cart Pages')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Cart pages
                </h3>


                {{-- @can('create cart pages') --}}
                    <a type="button" class="btn btn-primary push" href="{{ route('cart-pages.create') }}">Add</a>
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
                            @foreach ($cartPages as $ind => $cartPage)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $cartPage->name }}</td>
                                    <td>

                                        <a href="{{ asset('storage/' . $cartPage->file) }}" download>
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ $cartPage->file }}
                                        </a>
                                    </td>

                                    <td>{{ $cartPage->created_at }}</td>
                                    <td>{{ $cartPage->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            {{-- @can('edit cart pages') --}}
                                                <a href="{{ route('cart-pages.edit', $cartPage->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            {{-- @endcan --}}

                                            {{-- @can('delete cart pages') --}}
                                                <form id="form-{{ $cartPage->id }}"
                                                    action="{{ route('cart-pages.destroy', $cartPage->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $cartPage->id }})"
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
