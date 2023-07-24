@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between">
                <h3 class="box-title">Category</h3>
                <a href="{{ route('admin.category.create') }}" class="btn btn-info">Create category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Parent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <img src="{{ $category->image ? asset($category->image) : url('upload/no_image.jpg') }}"
                                            style="width:70px;height:40px;" alt="">
                                    </td>
                                    <td>
                                        @if ($category->parent)
                                            <a href="{{ route('admin.category.edit', $category->parent->id) }}">
                                                {{ $category->parent->name }}
                                            </a>
                                        @endif

                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('admin.category.edit', $category) }}">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('admin.category.delete', $category) }}">
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
