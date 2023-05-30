@extends('layouts.backend')
@section('page-title', 'CRMs')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    CRMs
                </h3>


                {{-- @can('create crms') --}}
                    <a type="button" class="btn btn-primary push" href="{{ route('crms.create') }}">Add</a>
                {{-- @endcan --}}
            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class=" table table-bordered table-striped table-vcenter js-dataTable-full table-vcenter  ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Advertising crm</th>
                                <th>URL</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Shipping Id</th>
                                <th>Compaign Id</th>
                                <th>Tran Type</th>
                                <th>Offer Id</th>
                                <th>Billing Model</th>
                                <th>Gateway Id</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($crms as $ind => $crm)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $crm->advertisingCompany->name }}</td>
                                    <td>{{ $crm->url }}</td>
                                    <td>{{ $crm->username }}</td>
                                    <td>{{ $crm->password }}</td>
                                    <td>{{ $crm->shipping_id }}</td>
                                    <td>{{ $crm->compaign_id }}</td>
                                    <td>{{ $crm->tran_type }}</td>
                                    <td>{{ $crm->offer_id }}</td>
                                    <td>{{ $crm->billingModel->name }}</td>
                                    <td>{{ $crm->gateway_id }}</td>

                                    <td>{{ $crm->created_at }}</td>
                                    <td>{{ $crm->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            {{-- @can('edit crms') --}}
                                                <a href="{{ route('crms.edit', $crm->id) }}"
                                                    class="btn btn-sm btn-alt-primary">Edit</a>
                                            {{-- @endcan --}}

                                            {{-- @can('delete crms') --}}
                                                <form id="form-{{ $crm->id }}"
                                                    action="{{ route('crms.destroy', $crm->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="button" onclick="confirmDelete({{ $crm->id }})"
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
