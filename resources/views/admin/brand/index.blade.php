@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between">
                <h3 class="box-title">Brand</h3>
                <a href="{{ route('admin.brand.create') }}" class="btn btn-info">Create Brand</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        <img src="{{ $brand->image ? asset($brand->image) : url('upload/no_image.jpg') }}"
                                            style="width:70px;height:40px;" alt="">
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('admin.brand.edit', $brand) }}">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('admin.brand.delete', $brand) }}">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- /.box -->
    </div>
@endsection
