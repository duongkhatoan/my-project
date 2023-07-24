@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between">
                <h3 class="box-title">Posts</h3>
                <a href="{{ route('admin.post.create') }}" class="btn btn-info">Create Post</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <img src="{{ $post->image ? asset($post->image) : url('upload/no_image.jpg') }}"
                                            style="width:70px;height:40px;" alt="">
                                    </td>
                                    <td>
                                        @foreach ($post->categories as $category)
                                            <div class="hylink">
                                                <a href="{{ route('admin.postcategory.edit', $category) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('admin.post.edit', $post) }}">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('admin.post.delete', $post) }}">
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
