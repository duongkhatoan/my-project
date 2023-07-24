@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Update {{ $product->name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('admin.product.update', $product) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h5>Name<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control"
                                        data-validation-required-message="This field is required"
                                        value="{{ $product->name }}">
                                    <div class="help-block"></div>
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Excerpt<span class="text-danger"></span></h5>
                                <div class="controls">
                                    <textarea class="form-control" id="editor1" name="excerpt" rows="10" cols="80" placeholder="excerpt">{{ $product->excerpt }}
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
                                        {{ $product->description }}
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
                                    src="{{ $product->image ? asset($product->image) : url('upload/no_image.jpg') }}"
                                    alt="">
                            </div>
                            <div class="form-group">
                                <h5>Category <span class="text-danger"></span></h5>
                                <div class="form-group">
                                    <select name="category_id[]" class="form-control select2" style="width: 100%;" multiple>
                                        <option value="">Select category</option>
                                        @foreach ($categoryTree as $item)
                                            <option {{ in_array($item['id'], $categorySelected, true) ? 'selected' : '' }}
                                                value="{{ $item['id'] }}">{{ $item['label'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Slug<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="slug" class="form-control"
                                        data-validation-required-message="This field is required"
                                        value="{{ $product->slug }}">
                                    <div class="help-block"></div>
                                </div>
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>Discount Price<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="discount_price" class="form-control"
                                        data-validation-required-message="This field is required"
                                        value="{{ $product->discount_price }}">
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
                                        data-validation-required-message="This field is required"
                                        value="{{ $product->sell_price }}">
                                    <div class="help-block"></div>
                                </div>
                                @error('sell_price')
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
        {{-- Media --}}
        <form action="{{ route('admin.product.media', $product) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Media {{ $product->name }}</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <h5>Media image <span class="text-danger"></span></h5>
                        <div class="controls">
                            <input id="fileLoader" type="file" name="thumbs[]" class="form-control" accept="image/*"
                                multiple>
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div id="preUpload">

                    </div>
                </div>
                <div class="text-xs-right mt-3">
                    <button type="submit" class="btn btn-rounded btn-info">Media add</button>
                </div>
            </div>
        </form>

        {{-- All --}}
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Media existing
                </h3>
            </div>
            <div class="box-body">
                <div id="sortable" class="sorttableProduct">
                    @foreach ($product->getMedia('thumbs') as $media)
                        <div class="sortable-item imgThumbPro" data-media-id="{{ $media->id }}">
                            <img class="img" src="{{ $media->getUrl() }}" alt="{{ $media->name }}">
                            <button class="btn btn-danger btn-delete-media">Delete</button>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- /.box -->

        <!-- /.box -->
    </div>
@endsection
@push('js')
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
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
        $(document).ready(function() {
            var fileArr = [];
            $("#fileLoader").change(function() {
                // check if fileArr length is greater than 0
                if (fileArr.length > 0) fileArr = [];

                $('#preUpload').html("");
                var total_file = document.getElementById("fileLoader").files;
                if (!total_file.length) return;
                for (var i = 0; i < total_file.length; i++) {
                    if (total_file[i].size > 1048576) {
                        return false;
                    } else {
                        fileArr.push(total_file[i]);
                        $('#preUpload').append("<div class='img-div' id='img-div" + i + "'><img src='" +
                            URL.createObjectURL(event.target.files[i]) +
                            "' class='img-preview' title='" + total_file[i]
                            .name + "'><div class='middle'><button id='action-icon' value='img-div" +
                            i + "' class='btn btn-danger' role='" + total_file[i].name +
                            "'><i class='fa fa-trash'></i></button></div></div>");
                    }
                }
            });

            $('body').on('click', '#action-icon', function(evt) {
                var divName = this.value;
                var fileName = $(this).attr('role');
                $(`#${divName}`).remove();

                for (var i = 0; i < fileArr.length; i++) {
                    if (fileArr[i].name === fileName) {
                        fileArr.splice(i, 1);
                    }
                }
                document.getElementById('fileLoader').files = FileListItem(fileArr);
                evt.preventDefault();
            });

            function FileListItem(file) {
                file = [].slice.call(Array.isArray(file) ? file : arguments)
                for (var c, b = c = file.length, d = !0; b-- && d;) d = file[b] instanceof File
                if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
                for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(file[c])
                return b.files
            }


            // Handle drag media exists
            $("#sortable").sortable({
                update: function(event, ui) {
                    var sortedData = [];
                    $(".sortable-item").each(function(index) {
                        var mediaId = $(this).data('media-id');
                        sortedData.push({
                            media_id: mediaId,
                            position: index + 1
                        });
                    });
                    // Gửi Ajax request để cập nhật vị trí hình ảnh
                    $.ajax({
                        url: '{{ route('admin.product.updateMediaPosition', $product->id) }}',
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            sortedData: sortedData
                        },
                        success: function(response) {
                            // Xử lý sau khi cập nhật thành công (nếu cần)
                        },
                        error: function() {
                            // Xử lý khi có lỗi xảy ra (nếu cần)
                        }
                    });
                }
            });

            // handle delete thumbs images
            $(document).on('click', '.btn-delete-media', function() {
                var mediaId = $(this).closest('.sortable-item').data('media-id');

                if (confirm('Are you sure you want to delete this media?')) {
                    $.ajax({
                        url: '/admin/product/media/delete/' + mediaId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            if (response.success) {
                                $('.sortable-item[data-media-id="' + mediaId + '"]').remove();
                                alert('Media has been deleted successfully.');
                            }
                        }
                    });
                }
            });
        });
    </script>
@endpush
