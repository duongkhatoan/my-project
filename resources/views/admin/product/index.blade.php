@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between">
                <h3 class="box-title">Product</h3>
                <a href="{{ route('admin.product.create') }}" class="btn btn-info">Create Product</a>
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
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <img src="{{ $product->image ? asset($product->image) : url('upload/no_image.jpg') }}"
                                            style="width:70px;height:40px;" alt="">
                                    </td>
                                    <td>
                                        @if ($product->categories)
                                            @foreach ($product->categories as $category)
                                                <div class="block">
                                                    <a href="{{ route('admin.category.edit', $category->id) }}">{{ $category->name }}
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif

                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('admin.product.edit', $product) }}">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('admin.product.delete', $product) }}">
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
