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
                    <i class="entypo-user-add"></i>
                    {{Lang::get('ui.menu_items.create_customer')}}
                </a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2 class="farsi-content"> {{Lang::get('ui.menu_items.create_customer')}} </h2>
        <hr/>
        {{Form::open(array('class' => 'form-horizontal validate form-wizard form-groups-bordered' ,'id' =>
        'create-customer-form'))}}
        <div class="steps-progress">
            <div class="progress-indicator"></div>
        </div>
        <ul class="farsi">
            <li class="completed active">
                <a href="#tab1" data-toggle="tab"><span>{{Lang::get('words.1')}}</span>
                    {{Lang::get('words.personalDetails')}}
                </a>
            </li>
            <li class="">
                <a href="#tab2" data-toggle="tab"><span>{{Lang::get('words.2')}}</span>
                    {{Lang::get('words.bankAccountDetails')}}
                </a>
            </li>
            <li class="">
                <a href="#tab3" data-toggle="tab"><span>{{Lang::get('words.3')}}</span>
                    {{Lang::get('words.contactDetails')}}
                </a>
            </li>
            <li class="">
                <a href="#tab4" data-toggle="tab"><span>{{Lang::get('words.4')}}</span>
                    {{Lang::get('words.addressDetails')}}
                </a>
            </li>

            <li>
                <a href="#tab5" data-toggle="tab"><span>{{Lang::get('words.5')}}</span>
                      {{Lang::get('words.customer_senders')}}
                </a>

            </li>
            <li class="">
                <a href="#tab6" data-toggle="tab"><span>{{Lang::get('words.6')}}</span>
                    {{Lang::get('words.reviewAndCreateCustomer')}}
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="tab1">
                @include('customers.partiels.ccTab1')
            </div>
            <div class="tab-pane" id="tab2">
                @include('customers.partiels.ccTab2')
            </div>
            <div class="tab-pane" id="tab3">
                @include('customers.partiels.ccTab3')
            </div>
            <div class="tab-pane" id="tab4">
                @include('customers.partiels.ccTab4')
            </div>
            <div class="tab-pane" id="tab5">
                @include('customers.partiels.ccTab5')
            </div>
            <div class="tab-pane" id="tab6">
                @include('customers.partiels.ccTab6')
            </div>
            <ul class="pager wizard farsi">
                <li class="previous">
                    <a href="#"><i class="entypo-right-open"></i>
                        {{Lang::get('ui.buttons.previous')}}
                    </a>
                </li>
                <li class="next">
                    <a href="#">
                        {{Lang::get('ui.buttons.next')}}
                        <i class="entypo-left-open"></i></a>
                </li>
            </ul>

        </div>
        {{Form::close()}}
    </div>
</div>
@stop

@section('pageScripts')

<script src="/assets/js/libs/knockoutjs.js"></script>
<script>
    createCustomer();
</script>
@stop