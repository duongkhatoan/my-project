@extends('layout_frontpage.master')
@section('content')
    <div class="main-content w-100 float-left blog-list">
        <div class="container">
            <div class="row">
                <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
                    <div class="row">
                        <div class="col-lg-12 order-lg-last account-content">
                            <h4>Edit Account Information</h4>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('users.update', Auth::user()) }}" class="myacoount-form" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {{-- @dd(Auth::user()) --}}
                                                <div class="form-group required-field">
                                                    <label for="acc-name">Name <span class="required">*</span></label>
                                                    <input type="text" class="form-control" id="acc-name" name="name"
                                                        required="" value="{{ Auth::user()->name }}">
                                                    @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- End .form-group -->
                                            </div>
                                            <!-- End .col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="acc-mname">Phone <span class="required">*</span></label>
                                                    <input type="number" class="form-control" id="acc-mname" name="phone"
                                                        value="{{ Auth::user()->phone }}">
                                                    @error('phone')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- End .form-group -->
                                            </div>
                                            <!-- End .col-md-4 -->

                                            <div class="col-md-4">
                                                <div class="form-group required-field">
                                                    <label for="acc-email">Email <span class="required">*</span></label>
                                                    <input type="email" class="form-control" id="acc-email" name="email"
                                                        required="" value="{{ Auth::user()->email }}">
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- End .form-group -->
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group required-field">
                                                    <label for="province">Province</label>
                                                    <select data-type="province"
                                                        class="province form-control locationS select2" name="province"
                                                        id="province">
                                                        <option value="">Select province</option>
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province->idProvince }}"
                                                                {{ $province->idProvince === Auth::user()->province ? 'selected' : '' }}>
                                                                {{ $province->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('province')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- End .form-group -->
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group required-field">
                                                    <label for="district">District</label>
                                                    <select data-type="district" class="district form-control locationS"
                                                        name="district" id="district">
                                                        <option value="">Select district</option>
                                                        @if ($districts)
                                                            @foreach ($districts as $district)
                                                                <option value="{{ $district->idDistrict }}"
                                                                    {{ $district->idDistrict === Auth::user()->district ? 'selected' : '' }}>
                                                                    {{ $district->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @error('district')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- End .form-group -->
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group required-field">
                                                    <label for="ward">Ward</label>
                                                    <select data-type="ward" class="ward form-control locationS"
                                                        name="ward" id="ward">
                                                        <option value="">Select ward</option>
                                                        @if ($wards)
                                                            @foreach ($wards as $ward)
                                                                <option value="{{ $ward->idCommune }}"
                                                                    {{ $ward->idCommune === Auth::user()->ward ? 'selected' : '' }}>
                                                                    {{ $ward->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @error('ward')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- End .form-group -->
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group required-field">
                                                    <label for="ward">address</label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder="1234 Main St" required="" name="address" value="{{ $user->address }}">
                                                    @error('address')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- End .form-group -->
                                            </div>
                                            <!-- End .col-md-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .col-sm-11 -->
                                </div>
                                <!-- End .row -->
                                <!-- End .form-group -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="change-password-checkbox"
                                        value="1">
                                    <label class="custom-control-label" for="change-password-checkbox">Change
                                        Password</label>
                                </div>
                                <!-- End .custom-checkbox -->

                                <div id="account-change-password" class="">
                                    <h4>Change Password</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="account-pass2">Old Password</label>
                                                <input type="password" class="form-control" id="account-pass2"
                                                    name="current_password">
                                                @error('current_password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- End .form-group -->
                                        </div>
                                        <!-- End .col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="newpassword">New Password</label>
                                                <input type="password" class="form-control" id="newpassword"
                                                    name="password">
                                                @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- End .form-group -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="renewpassword">Confirm Password</label>
                                                <input type="password" class="form-control" id="renewpassword"
                                                    name="password_confirmation">
                                                @error('password_confirmation')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- End .form-group -->
                                        </div>
                                        <!-- End .col-md-4 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End #account-chage-pass -->

                                <div class="required text-right">* Required Field</div>
                                <div class="form-footer d-flex justify-content-between align-items-center">
                                    <a href="#"><i class="material-icons">navigate_before</i>Back</a>

                                    <div class="form-footer-right">
                                        <button type="submit" class="btn btn-primary btn-primary">Save</button>
                                    </div>
                                </div>
                                <!-- End .form-footer -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-xl-3 col-lg-3 order-lg-1">
                    sds
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $("select.locationS").select2();
        });
    </script>
@endpush
