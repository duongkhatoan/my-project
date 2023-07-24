@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h5>Name<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="title" class="form-control"
                                        data-validation-required-message="This field is required">
                                    <div class="help-block"></div>
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Images <span class="text-danger"></span></h5>
                                <div class="controls">
                                    <input id="file" type="file" name="image" class="form-control"
                                        accept="image/*">
                                    <div class="help-block"></div>
                                </div>
                                @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <img id="showimages" class="avatar avatar-xxl avatar-bordered"
                                    src="{{ url('upload/no_image.jpg') }}" alt="">
                            </div>
                            <div class="form-group">
                                <h5>Category <span class="text-danger"></span></h5>
                                <div class="form-group">
                                    <select name="category_id[]" class="form-control select2" style="width: 100%;" multiple>
                                        <option value="">Select category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
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
        <!-- /.box -->

        <!-- /.box -->
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#file').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showimages').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
        CKEDITOR.replace('editor1')
        CKEDITOR.replace('editor2')
    </script>
@endpush
