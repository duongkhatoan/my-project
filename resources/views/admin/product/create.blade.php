@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
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
                            <div class="form-group">
                                <h5>Excerpt<span class="text-danger"></span></h5>
                                <div class="controls">
                                    <textarea class="form-control" id="editor1" name="excerpt" rows="10" cols="80" placeholder="excerpt">
                                    </textarea>
                                    @error('excerpt')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Description<span class="text-danger"></span></h5>
                                <div class="controls">
                                    <textarea class="form-control" id="editor2" name="description" rows="10" cols="80" placeholder="description">
                                    </textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                        @foreach ($categoryTree as $category)
                                            <option value="{{ $category['id'] }}">{{ $category['label'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Discount Price<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="discount_price" class="form-control"
                                        data-validation-required-message="This field is required">
                                    <div class="help-block"></div>
                                </div>
                                @error('discount_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Sell price<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="sell_price" class="form-control"
                                        data-validation-required-message="This field is required">
                                    <div class="help-block"></div>
                                </div>
                                @error('sell_price')
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
