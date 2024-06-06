@extends('layouts.site')
@section('content')
    <style>
        input {
            border: 1px solid blue;
        }
    </style>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="/" style="text-transform: uppercase">@lang('main.home')</a></li>
            <li class="active" style="text-transform: uppercase">@lang('main.masters_start')</li>
            <li class="active" style="text-transform: uppercase">@lang('main.filling')</li>
        </ul>
        <a href="{{ url()->previous() }}" class="pull-right">@lang('main.back')</a>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START CONTENT TABS -->
    <div class="app-content-tabs">
        <ul>
            <li><a href="#tab-1" class="active" style="text-transform: uppercase"><span
                        class="icon-user"></span>@lang('main.applicant_details')</a></li>
            <li><a href="#tab-2" style="text-transform: uppercase"><span
                        class="fa fa-graduation-cap"></span>@lang('main.qualifications')</a></li>
            <li><a href="#tab-4"><span class="icon-book"
                                       style="text-transform: uppercase"></span>@lang('main.select_faculty')</a></li>
        <!-- <li><a href="#tab-3" style="text-transform: uppercase"> @lang('main.other_info')</a></li> -->
        </ul>
    </div>
    <!-- END CONTENT TABS -->
    <form action="{{ route('storemasters') }}" method="post" class="has-validation-callback"
          enctype="multipart/form-data" name="masters-form" id="masters-form">
    {{ csrf_field() }}
    <!-- START CONTAINER -->
        <div class="container app-content-tab active" id="tab-1">

            <!-- BLOCK -->
            <div class="block">
                <!-- START HEADING -->
                <div class="app-heading app-heading-small">
                    <div class="icon">
                        <span class="icon-cube"></span>
                    </div>
                    <div class="title">
                        <h2 style="text-transform: capitalize">@lang('main.personal_info')</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.first_name')<span class="text-danger">*</span>:
                                    @if($errors->has('first_name'))
                                        <span class="text-danger"> | {{ $errors->first('first_name') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="" value="{{ old('first_name') }}"
                                       id="first_name" name="first_name" style="border:1px solid lightblue;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.middle_name'):
                                    @if($errors->has('middle_name'))
                                        <span class="text-danger"> | {{ $errors->first('middle_name') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="" value="{{ old('middle_name') }}"
                                       id="middle_name" name="middle_name" style="border:1px solid lightblue;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.birth_place')<span class="text-danger">*</span>:
                                    @if($errors->has('birth_place'))
                                        <span class="text-danger"> | {{ $errors->first('birth_place') }}</span>
                                    @endif
                                </label>
                                <select class="bs-select dynamic" id="birth_place" data-live-search="true"
                                        name="birth_place">
                                    <option style="display: none" value="" selected>@lang('main.select')</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->CountryID}}"
                                                @if(old('birth_place') == $country->CountryID) selected @endif>{{$country->name}} {{ old('birth_address') }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.living_address')<span class="text-danger">*</span>:
                                    @if($errors->has('living_address'))
                                        <span class="text-danger"> | {{ $errors->first('living_address') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="" value="{{ old('living_address') }}"
                                       id="living_address" name="living_address" style="border:1px solid lightblue;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4" style="margin: 0">
                                <label>@lang('main.passport_serial')<span class="text-danger">*</span>:
                                    @if($errors->has('passport_serial'))
                                        <span class="text-danger"> | {{ $errors->first('passport_serial') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="" value="{{ old('passport_serial') }}"
                                       id="passport_serial" name="passport_serial" style="border:1px solid lightblue;">
                            </div>
                            <div class="col-md-8">
                                <label>@lang('main.passport_number')<span class="text-danger">*</span>:
                                    @if($errors->has('passport_number'))
                                        <br>
                                        <br>
                                        <span class="text-danger"> | {{ $errors->first('passport_number') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="" value="{{ old('passport_number') }}"
                                       id="passport_number" name="passport_number" style="border:1px solid lightblue;">
                            </div>
                        </div>
                        <div class="form-group">
                            {{--                            <div class="col-md-6">--}}
                            {{--                                <label for="image" class="control-label">--}}
                            {{--                                     @lang('main.image')<span class="text-danger">*</span>:--}}
                            {{--                                    @if($errors->has('image'))--}}
                            {{--                                        <span class="text-danger"> | {{ $errors->first('image') }}</span>--}}
                            {{--                                    @endif--}}
                            {{--                                </label>--}}
                            {{--                                <input type="file" name="image" id="image" class="dropify" >--}}
                            {{--                            </div>--}}
                            <div class="col-md-6">
                                <label for="image" class="control-label">
                                    @lang('main.passport_copy')<span class="text-danger">*</span>:
                                    @if($errors->has('passport_copy'))
                                        <span class="text-danger"> | {{ $errors->first('passport_copy') }}</span>
                                    @endif
                                </label>
                                <div class="col-md-12">
                                    <input type="file" name="passport_copy" class="file btn-default"
                                           title="<span class='fa fa-file'>&nbsp;</span> @lang('main.upload_passport')">
                                </div>
                                {{--                                <div style="margin-top:50px">--}}
                                {{--                                    <label for="image" class="control-label">--}}
                                {{--                                        @lang('main.copy_letter')<span class="text-danger">*</span>:--}}
                                {{--                                    </label>--}}
                                {{--                                    <div class="col-md-12">--}}
                                {{--                                        <input type="file" name="copy_letter" class="file btn-default" title="<span class='fa fa-file'>&nbsp;</span> @lang('main.copy_letter')">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.last_name')<span class="text-danger">*</span>:
                                    @if($errors->has('last_name'))
                                        <span class="text-danger"> | {{ $errors->first('last_name') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="" value="{{ old('last_name') }}" id="last_name"
                                       name="last_name" style="border:1px solid lightblue;">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.birth_date')<span class="text-danger">*</span>:
                                    @if($errors->has('birth_date'))
                                        <span class="text-danger"> | {{ $errors->first('birth_date') }}</span>
                                    @endif
                                </label>
                                <div class="input-group bs-datepicker">
                                    <input type="text" class="form-control" name="birth_date" id="birth_date"
                                           value="{{ old('birth_date') }}" style="border:1px solid lightblue;">
                                    <span class="input-group-addon"
                                          style="border:1px solid lightblue;border-left: none">
                                          <span class="icon-calendar-full"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6" style="margin:0">
                                <label> @lang('main.citizenship')<span class="text-danger">*</span>:
                                    @if($errors->has('citizenship'))
                                        <span class="text-danger"> | {{ $errors->first('citizenship') }}</span>
                                    @endif
                                </label>
                                <select class="bs-select dynamic" id="citizenship" data-live-search="true"
                                        name="citizenship" style="border:1px solid red;">
                                    <option style="display: none" value="" selected>@lang('main.select')</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->CountryID}}"
                                                @if(old('citizenship')==$country->CountryID))
                                                selected @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label> @lang('main.nationality')<span class="text-danger">*</span>:
                                    @if($errors->has('nationality'))
                                        <span class="text-danger"> | {{ $errors->first('nationality') }}</span>
                                    @endif
                                </label>
                                <select class="bs-select dynamic" id="nationality" data-live-search="true"
                                        name="nationality" style="border:1px solid red;">
                                    <option style="display: none" value="" selected>@lang('main.select')</option>
                                    @foreach($nations as $country)
                                        <option value="{{$country->id}}" @if(old('nationality')==$country->id))
                                                selected @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.gender') {{old('gender')}}
                                    @if($errors->has('gender'))
                                        <span class="text-danger"> | {{ $errors->first('gender') }}</span>
                                    @endif
                                </label>
                                <br>
                                <div class="app-radio danger inline">
                                    <label><input type="radio" name="gender" id="gender" value="1"
                                                  checked=""> @lang('main.female')<span></span></label>
                                </div>
                                <div class="app-radio success inline">
                                    <label><input type="radio" name="gender" id="gender" value="0"
                                                  @if(old('gender')==0) checked @endif> @lang('main.male')<span></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>@lang('main.passport_given_date')<span class="text-danger">*</span>:
                                    <br>
                                    @if($errors->has('passport_given_date'))
                                        <span class="text-danger"> | {{ $errors->first('passport_given_date') }}</span>
                                    @endif
                                </label>
                                <div class="input-group bs-datepicker">
                                    <input type="text" class="form-control" name="passport_given_date"
                                           id="passport_given_date" value="{{ old('passport_given_date') }}"
                                           style="border:1px solid lightblue;">
                                    <span class="input-group-addon"
                                          style="border:1px solid lightblue;border-left: none">
                                          <span class="icon-calendar-full"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>@lang('main.passport_issued_by')<span class="text-danger">*</span>:
                                    <br>
                                    @if($errors->has('passport_issued_by'))
                                        <span class="text-danger"> | {{ $errors->first('passport_issued_by') }}</span>
                                    @endif
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="passport_issued_by"
                                           id="passport_issued_by" value="{{ old('passport_issued_by') }}"
                                           style="border:1px solid lightblue;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.email')<span class="text-danger">*</span>:
                                    @if($errors->has('email'))
                                        <span class="text-danger"> | {{ $errors->first('email') }}</span>
                                    @endif
                                </label>
                                <div class="input-group">
                                <span class="input-group-addon" style="border:1px solid lightblue;border-right: none">
                                      <span class="fa fa-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" placeholder="" name="email" id="email"
                                           value="{{ old('email') }}" style="border:1px solid lightblue;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.phone1')<span class="text-danger">*</span>:
                                    @if($errors->has('phone1'))
                                        <span class="text-danger"> | {{ $errors->first('phone1') }}</span>
                                    @endif
                                </label>
                                <div class="input-group">
                                    <span class="input-group-addon"
                                          style="border:1px solid lightblue;border-right: none">
                                          <span class="fa fa-phone"></span>
                                    </span>
                                    <input type="text" class="form-control" name="phone1" id="phone1"
                                           value="{{ old('phone1') }}" style="border:1px solid lightblue;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>@lang('main.phone2'):
                                    @if($errors->has('phone2'))
                                        <span class="text-danger"> | {{ $errors->first('phone2') }}</span>
                                    @endif
                                </label>
                                <div class="input-group">
                                    <span class="input-group-addon"
                                          style="border:1px solid lightblue;border-right: none">
                                          <span class="icon-phone"></span>
                                    </span>
                                    <input type="text" class="form-control" name="phone2" id="phone2"
                                           value="{{ old('phone2') }}" style="border:1px solid lightblue;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END BLOCK -->

        </div>
        <!-- END CONTAINER -->

        <!-- START CONTAINER -->
        <div class="container app-content-tab" id="tab-2">

            <!-- BLOCK -->
            <div class="block">
                <!-- START HEADING -->
                <div class="app-heading app-heading-small">
                    <div class="title">
                        <h2>@lang('main.qualifications')</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>@lang('main.background_study')<span class="text-danger">*</span>:
                                @if($errors->has('background_study'))
                                    <span class="text-danger"> | {{ $errors->first('background_study') }}</span>
                                @endif
                            </label>
                            <input class="form-control" placeholder="" value="{{ old('background_study') }}"
                                   id="background_study" name="background_study" style="border:1px solid lightblue;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label style="margin-top:5px;">@lang('main.back_cert_type')<span
                                        class="text-danger">*</span>:
                                    @if($errors->has('background_certificate'))
                                        <span
                                            class="text-danger"> | {{ $errors->first('background_certificate') }}</span>
                                    @endif
                                </label>
                                <select class="bs-select" name="background_certificate">
                                    <option value="" style="display: none;" selected>@lang('main.select')</option>
                                    @foreach($degrees as $level)
                                        <option value="{{ $level->id }}"
                                                @if(old('background_certificate')==$level->id) selected @endif>{{ $level->name }}</option>
                                    @endforeach()
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-top: 5px">@lang('main.graduation_year')<span
                                        class="text-danger">*</span>:
                                    @if($errors->has('backgraund_grad_year'))
                                        <span class="text-danger"> | {{ $errors->first('backgraund_grad_year') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="@lang('main.YYYY')"
                                       value="{{ old('backgraund_grad_year') }}" id="backgraund_grad_year"
                                       name="backgraund_grad_year" style="border:1px solid lightblue;">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top:5px;">
                            <label for="image" class="control-label">
                                &nbsp;&nbsp;&nbsp;&nbsp;@lang('main.back_cert_copy')<span class="text-danger">*</span>:
                                @if($errors->has('back_cert_copy'))
                                    <span class="text-danger"> | {{ $errors->first('back_cert_copy') }}</span>
                                @endif
                            </label>
                            <div class="col-md-12">
                                <input type="file" name="back_cert_copy" class="file btn-default form-control"
                                       title="<span class='fa fa-file'>&nbsp;</span> @lang('main.back_cert_copy')"
                                       style="border:1px solid lightblue;">
                            </div>
                        </div>
                        {{--                        <div class="form-group" style="margin-top:5px;">--}}
                        {{--                            <div class="col-md-6" style="padding: 0;">--}}
                        {{--                                <label style="margin-top:5px;">@lang('main.lang_cert_type'):--}}
                        {{--                                    @if($errors->has('lang_cert_type'))--}}
                        {{--                                        <span class="text-danger"> | {{ $errors->first('lang_cert_type') }}</span>--}}
                        {{--                                    @endif--}}
                        {{--                                </label>--}}
                        {{--                                <select class="bs-select" name="lang_cert_type">--}}
                        {{--                                    <option value="" style="display: none;" selected>@lang('main.select')</option>--}}
                        {{--                                    @foreach($certificates as $lang)--}}
                        {{--                                        <option @if(old('foreign_lang') == $lang->id) selected @endif value="{{ $lang->id }}">{{ $lang->name }}</option>--}}
                        {{--                                    @endforeach()--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-6">--}}
                        {{--                                <label style="margin-top: 5px">@lang('main.cert_result'):--}}
                        {{--                                    @if($errors->has('cert_result'))--}}
                        {{--                                        <span class="text-danger"> | {{ $errors->first('cert_result') }}</span>--}}
                        {{--                                    @endif--}}
                        {{--                                </label>--}}
                        {{--                                <input class="form-control"  placeholder="" value="{{ old('cert_result') }}" style="border:1px solid lightblue;" id="cert_result" name="cert_result">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-6" style="padding: 0;">
                                <label style="margin-top: 5px">@lang('main.document_series')<span
                                        class="text-danger">*</span>:
                                    @if($errors->has('back_cert_series'))
                                        <span class="text-danger"> | {{ $errors->first('back_cert_series') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="" value="{{ old('back_cert_series') }}"
                                       style="border:1px solid lightblue;" id="back_cert_series"
                                       name="back_cert_series">
                            </div>
                            <div class="col-md-6">
                                <label style="margin-top: 5px">@lang('main.document_number')<span
                                        class="text-danger">*</span>:
                                    @if($errors->has('back_cert_numbers'))
                                        <span class="text-danger"> | {{ $errors->first('back_cert_numbers') }}</span>
                                    @endif
                                </label>
                                <input class="form-control" placeholder="" value="{{ old('back_cert_numbers') }}"
                                       style="border:1px solid lightblue;" id="back_cert_numbers"
                                       name="back_cert_numbers">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="margin-top:5px;">@lang('main.foreign_lang'):
                                @if($errors->has('foreign_lang'))
                                    <span class="text-danger"> | {{ $errors->first('foreign_lang') }}</span>
                                @endif
                            </label>
                            <select class="bs-select" name="foreign_lang">
                                <option value="" style="display: none;" selected>@lang('main.select')</option>
                                @foreach($langs as $lang)
                                    <option @if(old('foreign_lang') == $lang->id) selected
                                            @endif value="{{ $lang->id }}">{{ $lang->name }}</option>
                                @endforeach()
                            </select>
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            <div class="col-md-6" style="padding: 0;">--}}
                        {{--                                <label>@lang('main.lang_cert_taken_date'):--}}
                        {{--                                    @if($errors->has('lang_cert_taken_date'))--}}
                        {{--                                        <span class="text-danger"> | {{ $errors->first('lang_cert_taken_date') }}</span>--}}
                        {{--                                    @endif--}}
                        {{--                                </label>--}}
                        {{--                                <div class="input-group bs-datepicker">--}}
                        {{--                                    <input type="text" class="form-control"  name="lang_cert_taken_date" id="lang_cert_taken_date" value="{{ old('lang_cert_taken_date') }}" style="border:1px solid lightblue;">--}}
                        {{--                                    <span class="input-group-addon" style="border:1px solid lightblue;border-left: none">--}}
                        {{--                                      <span class="icon-calendar-full"></span>--}}
                        {{--                                    </span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-6">--}}
                        {{--                                <label for="image" class="control-label">--}}
                        {{--                                    @lang('main.lang_cert_copy'):--}}
                        {{--                                    @if($errors->has('lang_cert_file'))--}}
                        {{--                                        <span class="text-danger"> | {{ $errors->first('lang_cert_file') }}</span>--}}
                        {{--                                    @endif--}}
                        {{--                                </label>--}}
                        {{--                                <div class="col-md-12">--}}
                        {{--                                    <input type="file" name="lang_cert_file" class="file btn-default" title="<span class='fa fa-file'>&nbsp;</span> @lang('main.upload_cert_copy')">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    {{--                    <div class="col-md-12 col-xs-12 col-sm-12 margin-top-15">--}}
                    {{--                        <label for="image" class="control-label">--}}
                    {{--                            @lang('main.about_me'):--}}
                    {{--                            @if($errors->has('about_me'))--}}
                    {{--                                <span class="text-danger"> | {{ $errors->first('about_me') }}</span>--}}
                    {{--                            @endif--}}
                    {{--                        </label>--}}
                    {{--                        <div class="form-group">--}}
                    {{--                            <textarea rows="3" class="form-control" name="about_me">{{ old('about_me') }}</textarea>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-md-12 margin-top-15">--}}
                    {{--                        <div class="col-md-3">--}}
                    {{--                            <div class="form-group">--}}
                    {{--                                <label>@lang('main.scholarship') {{old('is_scholarship_has')}}--}}
                    {{--                                    @if($errors->has('is_scholarship_has'))--}}
                    {{--                                        <span class="text-danger"> | {{ $errors->first('is_scholarship_has') }}</span>--}}
                    {{--                                    @endif--}}
                    {{--                                </label>--}}
                    {{--                                <br>--}}
                    {{--                                <div class="app-radio success inline">--}}
                    {{--                                    <label><input type="radio" name="is_scholarship_has" id="scholarship_has" value="1" checked=""> @lang('main.yes')<span></span></label>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="app-radio danger inline">--}}
                    {{--                                    <label><input type="radio" name="is_scholarship_has" id="scholarship_no" value="0" @if(old('is_scholarship_has')==0) checked @endif> @lang('main.no')<span></span></label>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-md-9 margin-top-15">--}}
                    {{--                            <div class="form-group scholarship_div" style="display: none;">--}}
                    {{--                                <label style="margin-top: 5px">@lang('main.scholarship_name')<span class="text-danger">*</span>:--}}
                    {{--                                    @if($errors->has('scholarship_title'))--}}
                    {{--                                        <span class="text-danger"> | {{ $errors->first('scholarship_title') }}</span>--}}
                    {{--                                    @endif--}}
                    {{--                                </label>--}}
                    {{--                                <input class="form-control"  placeholder="" value="{{ old('scholarship_title') }}" style="border:1px solid lightblue" id="scholarship_title" name="scholarship_title">--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-md-12 margin-top-15">--}}
                    {{--                        <div class="col-md-12">--}}
                    {{--                            <div class="form-group">--}}
                    {{--                                <label>@lang('main.work_experience')<span class="text-danger" style="display: none;" id="spanjon">*</span>--}}
                    {{--                                    @if($errors->has('work_experience'))--}}
                    {{--                                        <span class="text-danger"> | {{ $errors->first('work_experience') }}</span>--}}
                    {{--                                    @endif--}}
                    {{--                                </label>--}}
                    {{--                                <br>--}}
                    {{--                                <div class="app-radio success inline">--}}
                    {{--                                    <label><input type="radio" name="is_work_experience" id="experienc_has" value="1" checked=""> @lang('main.yes')<span></span></label>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="app-radio danger inline">--}}
                    {{--                                    <label><input type="radio" name="is_work_experience" id="experience_no" value="0" @if(old('is_scholarship_has')==0) checked @endif> @lang('main.no')<span></span></label>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-md-12 margin-top-15">--}}
                    {{--                            <div class="form-group work_experience" style="display: none;">--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <textarea rows="3" class="form-control" name="work_experience" id="work_experience">{{ old('work_experience') }}</textarea>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
{{--                    <div class="col-md-12 margin-top-20">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>@lang('main.more_info'):--}}
{{--                                @if($errors->has('more_info'))--}}
{{--                                    <span class="text-danger"> | {{ $errors->first('more_info') }}</span>--}}
{{--                                @endif--}}
{{--                            </label>--}}
{{--                            <input class="form-control" placeholder="" value="{{ old('more_info') }}" id="more_info"--}}
{{--                                   name="more_info">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

            </div>
            <!-- END BLOCK -->

        </div>
        <!-- END CONTAINER -->

        <!-- START CONTAINER -->
        <div class="container app-content-tab" id="tab-3">

            <!-- BLOCK -->
            <div class="block">
                <!-- START HEADING -->
                <div class="app-heading app-heading-small">
                    <div class="icon">
                        <span class="icon-cloud-rain"></span>
                    </div>
                    <div class="title">
                        <h2>@lang('main.other_info')</h2>
                    </div>
                </div>
                <!-- END START HEADING -->


                <div class="col-md-6">
                    <br>
                    <div style="height:1px;border:1px solid black"></div>
                    <br>
                    <button type="submit" class="btn btn-success form-control">@lang('main.submit')</button>
                </div>
            </div>
        </div>
        <!-- END BLOCK -->

        </div>
        <!-- END PAGE HEADING -->

        <!-- START CONTAINER -->
        <div class="container app-content-tab" id="tab-4">

            <!-- BLOCK -->
            <div class="block">
                <!-- START HEADING -->
                <div class="app-heading app-heading-small">
                    <div class="icon">
                        <span class="icon-cloud-rain"></span>
                    </div>
                    <div class="title">
                        <h2>@lang('main.select_faculty')</h2>
                    </div>
                </div>
                <!-- END START HEADING -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label style="margin-top:5px;">@lang('main.edu_fig')<span class="text-danger">*</span>:
                                @if($errors->has('edu_fig'))
                                    <span class="text-danger"> | {{ $errors->first('edu_fig') }}</span>
                                @endif
                            </label>
                            <select class="form-control edu-fig-select" name="edu_fig">
                                @foreach($edu_figs as $edu_fig)
                                    <option value="{{$edu_fig->id}}" selected>@lang('main.'.$edu_fig->name)</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label style="margin-top:5px;">@lang('main.course_type')<span class="text-danger">*</span>:
                                @if($errors->has('course_id'))
                                    <span class="text-danger"> | {{ $errors->first('course_id') }}</span>
                                @endif
                            </label>
                            <select class="form-control speciality-select" name="course_id">
                                <option value="" style="display: none;" selected>@lang('main.select')</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}"
                                            @if(old('course_id')==$course->id) selected @endif>{{ $course->name }}</option>
                                @endforeach()
                            </select>


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label style="margin-top:5px;">@lang('main.study_lang')<span class="text-danger">*</span>:
                                @if($errors->has('course_lang'))
                                    <span class="text-danger"> | {{ $errors->first('course_lang') }}</span>
                                @endif
                            </label>
                            <select class="form-control" name="course_lang">
                                <option value="" style="display: none;" selected>@lang('main.select')</option>
                                @foreach($study_languages as $lang)
                                    <option value="{{ $lang->id }}"
                                            @if(old('course_lang')==$lang->id) selected @endif>{{ $lang->name }}</option>
                                @endforeach()
                            </select>
                        </div>
                    </div>
{{--                    <div class="col-md-4">--}}
{{--                        <div class="form-group">--}}
{{--                            <label style="margin-top:5px;">@lang('main.qaror')<span class="text-danger">*</span>:--}}
{{--                                @if($errors->has('punkt'))--}}
{{--                                    <span class="text-danger"> | {{ $errors->first('punkt') }}</span>--}}
{{--                                @endif--}}
{{--                            </label>--}}
{{--                            <select class="form-control" name="punkt">--}}
{{--                                <option value="" style="display: none;" selected>@lang('main.select')</option>--}}
{{--                                <option @if(old('punkt') == '3-punkt') selected--}}
{{--                                        @endif value="3-punkt">@lang('main.3-punkt')</option>--}}
{{--                                <option @if(old('punkt') == '5-punkt') selected--}}
{{--                                        @endif value="5-punkt">@lang('main.5-punkt')</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
                <div class="col-md-12">
                    <br>
                    <strong style="color:red;text-transform: uppercase">@lang('main.note')!</strong>
{{--                    <p style="color: black;font-weight: bolder;">@lang('main.note_message1')</p>--}}
                    <p style="color: black;font-weight: bolder;text-transform: uppercase">@lang('main.note_message')</p>

                </div>
                <div class="col-md-12 d-flex justify-content-center  text-center">
                       <div class="form-group d-flex justify-content-center w-100">
                           <a class="margin-right-5" href="https://lex.uz/docs/-4969812#-4971685" target="_blank" style="font-size: 14px">lex.uz</a>
                            <label style="font-weight: bold"><input type="checkbox" id="agree1"
                                                                    name="app-checkbox-1" class="app-checkbox-1">@lang('main.tanishdim')
                                <span></span></label>
                        </div>
                    <button type="submit" class="btn btn-success form-control submit-button" style="display: none">@lang('main.submit')</button>
                </div>
            </div>


            <!--     <input type="hidden" name="course_id" value="master">   -->
        </div>
    </form>
@endsection
@section('js_last')

    <script>
        $('.edu-fig-select').on('change', function () {
            var value = this.value
            console.log(this.value)
            $.ajax({
                url: '/submit/get-spec-from-edu-fig-mag/' + value,
                method: 'GET',
            }).then(res => {
                console.log('re', res)
                var text = '';
                $.each(res, function (value) {
                    text += '<option value="' + res[value]?.id + '">' + res[value]?.name + '</option>'
                })
                $('.speciality-select').html(text)
                $('.speciality-select').val(res[0]?.id)

            })
        })
        $('.app-checkbox-1').change(function(){
            if(this.checked){
                $('.submit-button').css({
                    'display':'block'
                })
            }
            else{
                 $('.submit-button').css({
                    'display':'none'
                })
            }
        })
        //         $('select').on('change', function() {
        //   alert( this.value );
        // });
    </script>
@endsection
