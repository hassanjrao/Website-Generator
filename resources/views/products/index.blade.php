@extends('layouts.backend')
@section('page-title', 'Product')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Product
                </h3>


                @can('create products')
                    <a type="button" class="btn btn-primary push" href="{{ route('products.create') }}">Add</a>
                @endcan
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped table-vcenter js-dataTable-full table-vcenter  ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Sticky Id</th>
                                <th>Description</th>
                                {{-- <th>Image</th> --}}
                                <th>Show Ingrediants</th>
                                {{-- <th>Ingrediants Image</th> --}}
                                <th>Billing Model</th>
                                <th>SS Price</th>
                                <th>SS Shipping</th>
                                <th>SS Max Quantity</th>
                                <th>Trial Price</th>
                                <th>Trial Shipping</th>
                                <th>Trial Rebill Price</th>
                                <th>Trial Max Quantity</th>
                                <th>Continuity Price</th>
                                <th>Continuity Shipping </th>
                                <th>Continuity Max Quantity</th>
                                <th>Straight Sale Multi Price</th>
                                <th>Max Quantity Enable</th>
                                <th>Size Option</th>
                                <th>Active</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($products as $ind => $product)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $product->productCategory->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->sticky_id }}</td>
                                    <td>
                                        {{-- remove html tags --}}
                                        {{ strip_tags(substr($product->description, 1, 50)) }}...
                                    </td>
                                    {{-- <td>{{ $product->image }}</td> --}}
                                    <td>

                                        @if ($product->show_ingredients)
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Yes</span>
                                        @else
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">No</span>
                                        @endif

                                    </td>

                                    {{-- <td>{{ $product->ingredients_image }}</td> --}}
                                    <td>{{ $product->billingModel ? $product->billingModel->name : '' }}</td>
                                    <td>{{ $product->ss_price }}</td>
                                    <td>{{ $product->ss_shipping }}</td>
                                    <td>{{ $product->ss_max_quantity }}</td>
                                    <td>{{ $product->trial_price }}</td>
                                    <td>{{ $product->trial_shipping }}</td>
                                    <td>{{ $product->trial_rebill_price }}</td>
                                    <td>{{ $product->trial_max_quantity }}</td>
                                    <td>{{ $product->continuity_price }}</td>
                                    <td>{{ $product->continuity_shipping }}</td>
                                    <td>{{ $product->continuity_max_quantity }}</td>
                                    <td>
                                        @if ($product->straight_sale_multi_price)
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Yes</span>
                                        @else
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($product->enable_max_quantity)
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Yes</span>
                                        @else
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($product->size_option)
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Yes</span>
                                        @else
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($product->status)
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Yes</span>
                                        @else
                                            <span
                                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">No</span>
                                        @endif
                                    </td>

                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit products')
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete products')
                                                <form id="form-{{ $product->id }}"
                                                    action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $product->id }})"
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
