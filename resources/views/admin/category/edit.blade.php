@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="">
            <div class="box-header with-border">
                <h3 class="box-title">Edit {{ $category->name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('admin.category.update', $category) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box">
                                <div class="form-group">
                                    <h5>Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $category->name }}"
                                            data-validation-required-message="This field is required">
                                        <div class="help-block"></div>
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <h5>Parent_id <span class="text-danger"></span></h5>
                                    <div class="form-group">
                                        <select name="parent_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Select category</option>
                                            @foreach ($categoryTree as $item)
                                                <option
                                                    {{ $item['id'] == optional($category->parent)->id ? 'selected' : '' }}
                                                    value="{{ $item['id'] }}">{{ $item['label'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('file')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="box">
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
                                        src="{{ $category->image ? asset($category->image) : url('upload/no_image.jpg') }}"
                                        alt="">
                                </div>
                                <div class="form-group">
                                    <h5>Slug<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ $category->slug }}"
                                            data-validation-required-message="This field is required">
                                        <div class="help-block"></div>
                                    </div>
                                    @error('slug')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="text-xs-right mt-3">
                        <button type="submit" class="btn btn-rounded btn-info">Update</button>
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
    </script>
@endpush
