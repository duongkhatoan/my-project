@extends('layout_admin.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border d-flex justify-content-between">
                    <h3 class="box-title">Attributes</h3>
                    {{-- <a href="{{ route('admin.attribute.create') }}" class="btn btn-info">Create Attributes</a> --}}
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attributes as $attribute)
                                    <tr>
                                        <td>{{ $attribute->name }}</td>
                                        <td>
                                            <a class="btn btn-success"
                                                href="{{ route('admin.attribute.edit', $attribute) }}">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger"
                                                href="{{ route('admin.attribute.delete', $attribute) }}">
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
        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Create attribute</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ route('admin.attribute.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control"
                                            data-validation-required-message="This field is required">
                                        <div class="help-block"></div>
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-xs-right mt-3">
                            <button type="submit" class="btn btn-rounded btn-info">Create</button>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
