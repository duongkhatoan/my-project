@extends('layout_admin.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border d-flex justify-content-between">
                    <h3 class="box-title">Attributes values</h3>
                    {{-- <a href="{{ route('admin.attribute.create') }}" class="btn btn-info">Create Attributes</a> --}}
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="listAttributeValue">
                        @foreach ($attributes as $attribute)
                            <div class="item">
                                <div class="title">
                                    {{ $attribute->name }}
                                </div>
                                <div class="value">
                                    @if ($attribute->attribute_values)
                                        @foreach ($attribute->attribute_values as $value)
                                            <div class="valueItem">
                                                <div class="name">
                                                    {{ $value->value }}
                                                </div>
                                                <div class="deleteValue">
                                                    <a href="{{ route('admin.attributeValue.delete', $value) }}">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
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
                    <h3 class="box-title">Edit {{ $attributeValue->name }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ route('admin.attributeValue.update', $attributeValue) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Value<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="value" class="form-control"
                                            data-validation-required-message="This field is required"
                                            value="{{ $attributeValue->value }}">
                                        <div class="help-block"></div>
                                    </div>
                                    @error('value')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <h5>Attribute<span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <select name="attribute_id" class="form-control select2" style="width: 100%;">
                                            {{-- <option value="">Select attribute</option> --}}
                                            @foreach ($attributes as $attribute)
                                                <option
                                                    {{ $attribute->id == $attributeValue->attribute->id ? 'selected' : '' }}
                                                    value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('attribute_id')
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
        </div>
    </div>
@endsection
