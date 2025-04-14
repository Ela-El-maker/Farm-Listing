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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        Countries
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('admin.countries.store') }}" method="post" enctype="multipart/form-data"
                            class="form-horizontal">
                            @csrf

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">
                                        Name
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="name" placeholder="Country Name"
                                        class="form-control">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>

                        </form>
                    </div>
                </div> <!-- /.card -->
            </div>
        </div>
    </section>
@endsection
