@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row row-deck">


            @can('view sites')
                <div class="col-sm-6 col-xxl-3 col-md-3">
                    <!-- New Customers -->
                    <div class="block block-rounded d-flex flex-column">
                        <a href="{{ route('sites.index') }}">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">{{ $sites }}</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Sites</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">

                                    {{-- <i class="fas fa-fw fa-calendar-check fa-2x"></i> --}}
                                    <i class="fas fa-link fa-2x"></i>

                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="{{ route('sites.index') }}">
                                    <span>View sites</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </a>
                    </div>


                </div>
            @endcan


            @can('view users')
                <div class="col-sm-6 col-xxl-3 col-md-3">
                    <!-- New Customers -->
                    <div class="block block-rounded d-flex flex-column">
                        <a href="{{ route('users.index') }}">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">{{ $users }}</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Users</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">

                                    <i class="fa fa-2x fa-users text-primary"></i>

                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="{{ route('users.index') }}">
                                    <span>View users</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </a>
                    </div>


                </div>
            @endcan


            @can('view categories')
                <div class="col-sm-6 col-xxl-3 col-md-3">
                    <!-- New Customers -->
                    <div class="block block-rounded d-flex flex-column">
                        <a href="{{ route('product-categories.index') }}">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">{{ $productCategories }}</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Product Categories</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">

                                    <i class="fas fa-list fa-2x"></i>

                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="{{ route('product-categories.index') }}">
                                    <span>View Product Categories</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </a>
                    </div>


                </div>
            @endcan

            @can('view products')
                <div class="col-sm-6 col-xxl-3 col-md-3">
                    <!-- New Customers -->
                    <div class="block block-rounded d-flex flex-column">
                        <a href="{{ route('products.index') }}">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">{{ $products }}</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Products</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">

                                    <i class="fas fa-tags fa-2x"></i>

                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="{{ route('products.index') }}">
                                    <span>View Products</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </a>
                    </div>


                </div>
            @endcan


            @can('view roles')
                <div class="col-sm-6 col-xxl-3 col-md-3">
                    <!-- New Customers -->
                    <div class="block block-rounded d-flex flex-column">
                        <a href="{{ route('roles.index') }}">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">{{ $roles }}</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Roles</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">

                                    <i class="fas fa-user-tag fa-2x"></i>

                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="{{ route('roles.index') }}">
                                    <span>View Roles</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </a>
                    </div>


                </div>
            @endcan

        </div>
    </div>
    <!-- END Page Content -->
@endsection
