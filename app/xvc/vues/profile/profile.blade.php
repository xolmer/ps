@extends('disposition.principal')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb bc-2 farsi">
            <li>
                <a href="{{URL::route('index')}}">
                    <i class="entypo-home"></i>
                    {{Lang::get('ui.menu_items.home')}}
                </a>
            </li>

            <li class="active">
                <a>
                    <i class="entypo-user"></i>
                    {{Lang::get('ui.menu_items.profile')}}
                </a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    @include('partiels._flash')
        <div class="profile-env">

            <header class="row">

                <div class="col-sm-2">
                    <a href="#" class="profile-picture">
                        <img src="{{$currentUser->normal_avatar}}" class="img-responsive img-circle">
                    </a>

                </div>

                <div class="col-sm-7">

                    <ul class="profile-info-sections">
                        <li>
                            <div class="profile-name">
                                <strong>
                                    <a href="#">{{$currentUser->full_name}}</a>
                                    <a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip"
                                       data-placement="top" data-original-title="Online"></a>
                                </strong>
                                {{--<span><a href="#">Co-Founder at Laborator</a></span>--}}
                            </div>
                        </li>


                    </ul>

                </div>

                <div class="col-sm-3">


                </div>

            </header>

            <section class="profile-info-tabs">

                <div class="row">

                    <div class="col-sm-offset-2 col-sm-10">



                        <!-- tabs for the profile links -->
                        <ul class="nav nav-tabs">
                            <li class=" farsi {{Session::has('activeTab') ? '' : 'active'}}"><a href="#profileinfo" data-toggle="tab">{{Lang::get('words.profileDetails')}}</a></li>
                            <li class=" farsi"><a href="#updateprofile" data-toggle="tab">{{Lang::get('words.update')}}</a></li>
                            <li class=" farsi"><a href="#changeavatar" data-toggle="tab">{{Lang::get('words.changeProfilePic')}}</a></li>
                            <li class=" farsi {{Session::get('activeTab') == 'changePassword' ? 'active' : ''}} "><a href="#changepassword" data-toggle="tab">{{Lang::get('words.changePassword')}}</a></li>

                        </ul>

                    </div>

                </div>

            </section>

            <section class="profile-feed">
                <div class="tab-content">
                    <div class="tab-pane {{Session::has('activeTab') ? '' : 'active'}}" id="profileinfo">
                        @include('profile.partiels.pTab1')
                    </div>
                    <div class="tab-pane" id="updateprofile">
                        @include('profile.partiels.pTab2')
                    </div>
                    <div class="tab-pane" id="changeavatar">
                        @include('profile.partiels.pTab3')
                    </div>
                    <div class="tab-pane {{Session::get('activeTab') == 'changePassword' ? 'active' : ''}}" id="changepassword">
                        @include('profile.partiels.pTab4')
                    </div>
                </div>
            </section>

    </div>
</div>
</div>
@stop