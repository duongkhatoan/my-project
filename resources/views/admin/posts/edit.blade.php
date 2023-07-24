@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Update {{ $post->name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('admin.post.update', $post) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h5>Name<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="title" class="form-control"
                                        data-validation-required-message="This field is required"
                                        value="{{ $post->title }}">
                                    <div class="help-block"></div>
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Excerpt<span class="text-danger"></span></h5>
                                <div class="controls">
                                    <textarea class="form-control" id="editor1" name="excerpt" rows="10" cols="80" placeholder="excerpt">{{ $post->excerpt }}
                                    </textarea>
                                    @error('excerpt')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Description<span class="text-danger"></span></h5>
                                <div class="controls">
                                    <textarea class="form-control" id="editor2" name="description" rows="10" cols="80"
                                        placeholder="description">
                                        {{ $post->description }}
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
                                    src="{{ $post->image ? $post->image : url('upload/no_image.jpg') }}"
                                    alt="">
                            </div>
                            <div class="form-group">
                                <h5>Slug<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="slug" class="form-control"
                                        data-validation-required-message="This field is required"
                                        value="{{ $post->slug }}">
                                    <div class="help-block"></div>
                                </div>
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Category <span class="text-danger"></span></h5>
                                <div class="form-group">
                                    <select name="category_id[]" class="form-control select2" style="width: 100%;" multiple>
                                        <option value="">Select category</option>
                                        @foreach ($categoryIds as $item)
                                            <option value="{{ $item->id }} "
                                                {{ in_array($item->id, $categoryIds, true) ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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
