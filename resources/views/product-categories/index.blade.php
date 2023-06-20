@extends('layouts.backend')
@section('page-title', 'Product Categories')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Product Categories
                </h3>


                @can('create categories')
                    <a type="button" class="btn btn-primary push" href="{{ route('product-categories.create') }}">Add</a>
                @endcan
            </div>


            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="btn-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Advertising Companies</div>
                            </div>
                            <select class="form-select" id="advertisingCompanyDropDown">
                                <option value="">All</option>

                                @foreach ($advertisingCompanies as $company)
                                    <option value="{{ $company->name }}">{{ $company->name }}</option>
                                @endforeach

                            </select>

                        </div>

                    </div>
                </div>

            </div>


            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">





                    <table class=" table table-bordered table-striped table-vcenter" id="dTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Advertising Company</th>
                                <th>Name</th>
                                <th>Total Products</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($productCategories as $ind => $category)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $category->advertisingCompany->name }}</td>
                                    <td>{{ $category->name }}</td>

                                    <td>{{ $category->products->count() }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @can('edit categories')
                                                <a href="{{ route('product-categories.edit', $category->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            @endcan

                                            @can('delete categories')
                                                <form id="form-{{ $category->id }}"
                                                    action="{{ route('product-categories.destroy', $category->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $category->id }})"
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
        $(document).ready(function() {
            dataTable = $("#dTable").DataTable({
                lengthMenu: [
                    [5,10,15, 25, 50,100 ,-1],
                    [5,10,15, 25, 50,100 ,'All'],
                ],
                pageLength: 25,
            });

                                 
            $('#advertisingCompanyDropDown').on('change', function(e) {
                var company = $(this).val();
                $('#advertisingCompanyDropDown').val(company)
                console.log(company, dataTable.column(1))
                //dataTable.column(6).search('\\s' + company + '\\s', true, false, true).draw();
                dataTable.column(1).search(company).draw();
            })
        });
    </script>

@endsection
