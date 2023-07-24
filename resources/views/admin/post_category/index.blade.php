@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between">
                <h3 class="box-title">PostCategories</h3>
                <a href="{{ route('admin.postcategory.create') }}" class="btn btn-info">Create PostCategories</a>
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
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <img src="{{ $category->image ? $category->image : url('upload/no_image.jpg') }}"
                                            style="width:70px;height:40px;" alt="">
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('admin.postcategory.edit', $category) }}">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger"
                                            href="{{ route('admin.postcategory.delete', $category) }}">
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
