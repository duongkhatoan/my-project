@extends('layout_admin.master')
@section('content')
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Update {{ $product->name }}</h3>
                <a class="preview" target="_blank" style="float:right;" href="{{ route('product.show', $product) }}">Preview</a>
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
                            <div class="form-group">
                                <h5>Product Attributes<span class="text-danger"></span></h5>
                                <div class="controls">
                                    <div id="variant-section" class="productAttribute">
                                        <!-- Các dòng input cho việc thêm biến thể sẽ được tạo ở đây -->
                                    </div>
                                    <button type="button" class="btn btn-primary" id="add-variant-btn">Add Variant</button>
                                </div>
                                @error('attributes')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <h5>Exist variants<span class="text-danger"></span></h5>
                                <div class="controls productAttribute">
                                    @foreach ($productVariants as $variant)
                                        <div class="variant-row">
                                            <div class="item">
                                                <label for="price">Giá:</label>
                                                <input class="form-control" type="number"
                                                    name="{{ 'variants[' . $variant->id . '][price]' }}"
                                                    value="{{ $variant->price }}">
                                            </div>
                                            <div class="item">
                                                <label for="quantity">Số lượng:</label>
                                                <input class="form-control" type="number"
                                                    name="{{ 'variants[' . $variant->id . '][quantity]' }}"
                                                    value="{{ $variant->quantity }}">
                                            </div>

                                            @foreach ($attributes as $attribute)
                                                <div class="item">
                                                    <label
                                                        for="{{ 'attribute_' . $attribute->id }}">{{ $attribute->name }}:</label>
                                                    <select
                                                        name="{{ 'variants[' . $variant->id . '][attributes][' . $attribute->id . ']' }}"
                                                        class="form-control" id="{{ 'attribute_' . $attribute->id }}">
                                                        <option value="">Select {{ $attribute->name }}</option>
                                                        @foreach ($attribute->attribute_values as $value)
                                                            <option value="{{ $value->id }}"
                                                                @if ($value->id == $variant->values->where('attribute_id', $attribute->id)->first()?->id ? 'selected' : '') selected @endif>
                                                                {{ $value->value }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endforeach
                                            <div class="form-group">
                                                <button class="btn btn-danger remove-variant-btn">Remove</button>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                @error('attributes')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>


                            {{-- <button type="submit" class="btn btn-success">Save Variants</button> --}}


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


        // handle productAtt
        // $(document).ready(function() {
        //     // Đối tượng chứa các thuộc tính và giá trị của chúng
        //     var attributes = @json($attributes);

        //     // Xử lý sự kiện khi người dùng nhấn vào nút "Thêm biến thể"
        //     $(".add-variant-btn").click(function() {
        //         // Tạo một customProduct mới
        //         var newCustomProduct = $('<div class="customProduct"></div>');

        //         // Lặp qua các thuộc tính và tạo select box và trường nhập liệu cho mỗi thuộc tính
        //         attributes.forEach(function(attribute) {
        //             var selectBox = '<div class="item">' +
        //                 '<div class="name">' + attribute.name + '</div>' +
        //                 '<div class="select-' + attribute.name + '">' +
        //                 '<select name="attributes[' + attribute.id + '][]" class="form-control">' +
        //                 '<option value="">Select options</option>';
        //             attribute.attribute_values.forEach(function(value) {
        //                 selectBox += '<option value="' + value.id + '">' + value.value +
        //                     '</option>';
        //             });
        //             selectBox += '</select>' +
        //                 '</div>' +
        //                 '</div>';

        //             newCustomProduct.append(selectBox);
        //         });

        //         // Thêm trường nhập liệu cho quantity và price
        //         var quantityInput = '<div class="item">' +
        //             '<div class="name">Quantity</div>' +
        //             '<div><input type="number" name="quantityAtt[]" class="form-control" data-validation-required-message="This field is required"></div>' +
        //             '</div>';
        //         var priceInput = '<div class="item">' +
        //             '<div class="name">Price</div>' +
        //             '<div><input type="number" name="priceAtt[]" class="form-control" data-validation-required-message="This field is required"></div>' +
        //             '</div>';

        //         newCustomProduct.append(quantityInput);
        //         newCustomProduct.append(priceInput);
        //         var deleteButton = '<button class="delete-btn">Xóa</button>';
        //         newCustomProduct.append(deleteButton);

        //         // Thêm customProduct mới vào bên trong productAttribute
        //         $(".productAttribute").append(newCustomProduct);
        //     });
        //     $(document).on("click", ".delete-btn", function() {
        //         // Xóa customProduct chứa nút "Xóa" mà người dùng nhấn
        //         $(this).closest(".customProduct").remove();
        //     });
        // });

        $(document).ready(function() {
            // Xử lý khi người dùng nhấn nút "Add Variant"
            $("#add-variant-btn").click(function() {
                // Đếm số dòng biến thể đã có
                var rowCount = $(".variant-row").length;

                // Tạo một dòng input mới cho việc thêm biến thể
                var variantRow = `
            <div class="variant-row">
                @foreach ($attributes as $attribute)
                    <div class="form-group">
                        <label for="variant[${rowCount}][{{ $attribute->id }}]">{{ $attribute->name }}:</label>
                        <select name="variant[${rowCount}][attributes][{{ $attribute->id }}]" class="form-control">
                            <option value="">-- Select {{ $attribute->name }} --</option>
                            @foreach ($attribute->attribute_values as $value)
                                <option value="{{ $value->id }}">{{ $value->value }}</option>
                            @endforeach
                        </select>
                    </div>
                @endforeach
                <div class="form-group">
                    <label for="variant[${rowCount}][price]">Price:</label>
                    <input type="number" name="variant[${rowCount}][price]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="variant[${rowCount}][quantity]">Quantity:</label>
                    <input type="number" name="variant[${rowCount}][quantity]" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-danger remove-variant-btn">Remove</button>
                </div>
            </div>`;

                // Thêm dòng input mới vào phần "variant-section"
                $("#variant-section").append(variantRow);
            });
            $(document).on('click', '.remove-variant-btn', function() {
                $(this).closest(".variant-row").remove();
            });
        });
    </script>
@endpush
