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

    <!--  Table Section -->
    <section class="">
        <div class="row">
            <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            Countries
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('admin.countries.update',$country?->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">
                                            Name
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="name" value="{{ old('name',$country?->name) }}" placeholder="Country Name" class="form-control">
                                    </div>
                                </div>

                                <button type="button" type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                </div> <!-- /.card -->
            </div>
        </div>
    </section>
@endsection
