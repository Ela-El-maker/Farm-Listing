@extends('admin.layouts.master')

@section('contents')
    <!-- Breadcrumbs section -->
    <div class="breadcrumbs mb-4">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Location</a></li>
                                <li class="active">Countries</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Orders Table Section -->
<section class="">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <!-- Card Header with Search and Create -->
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <form action="#" method="GET" class="d-flex align-items-center gap-2 text-center">
                        <input type="text" name="search" class="form-control" placeholder="Search orders..." style="max-width: 200px;">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                    <a href="{{ route('admin.countries.create') }}" class="btn btn-success">+ Create Country</a>
                </div>


                <!-- Orders Table Title -->
                <div class="card-body pt-0">
                    <h4 class="box-title">Countries</h4>
                </div>

                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th style="width: 100px;" class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($countries as $country)
                           <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $country?->name }}</td>
                            <td class="text-center text-nowrap">
                                <a href="{{ route('admin.countries.edit', $country->id) }}"
                                   class="btn btn-sm btn-primary me-1"
                                   title="Edit">
                                    <i class="fa fa-edit"></i>Edit
                                </a>

                                <a href="{{ route('admin.countries.destroy', $country->id) }}"
                                   class="btn btn-sm btn-danger"
                                   title="Delete"
                                   onclick="return confirm('Are you sure you want to delete this country?')">
                                    <i class="fa fa-trash"></i>Delete
                                </a>
                            </td>

                        </tr>
                           @empty

                           @endforelse


                        </tbody>
                    </table>

                </div>

                <div class="card-footer">
                    @if ($countries->hasPages())
                        <div class="d-flex justify-content-end">
                            <!-- Use simple pagination for just 1 2 3 links -->
                            {{ $countries->links('pagination::simple-bootstrap-4') }}
                        </div>
                    @endif
                </div>


            </div> <!-- /.card -->
        </div>
    </div>
</section>
@endsection
