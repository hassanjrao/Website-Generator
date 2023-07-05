@extends('layouts.backend')
@section('page-title', 'Shop Options')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Shop Options
                </h3>


                {{-- @can('create shop Options') --}}
                    <a type="button" class="btn btn-primary " href="{{ route('shop-options.create') }}">Add</a>
                {{-- @endcan --}}
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table  class=" table table-bordered table-striped table-vcenter js-dataTable-full table-vcenter  " id='dtable'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Option Quantity</th>
                                <th>Option Price</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($shopOptions as $ind => $shopOption)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $shopOption->product->name }}</td>
                                    <td>{{ $shopOption->option_quantity }}</td>
                                    <td>{{ $shopOption->option_price }}</td>

                                    <td>{{ $shopOption->created_at }}</td>
                                    <td>{{ $shopOption->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            {{-- @can('edit shop Options') --}}
                                                <a href="{{ route('shop-options.edit', $shopOption->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            {{-- @endcan --}}

                                            {{-- @can('delete shop Options') --}}
                                                <form id="form-{{ $shopOption->id }}"
                                                    action="{{ route('shop-options.destroy', $shopOption->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $shopOption->id }})"
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
