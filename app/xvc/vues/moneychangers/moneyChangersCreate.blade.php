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
            <li>
                <a href="{{URL::route('moneychangers.index')}}">
                    <i class="fa fa-strikethrough"></i>
                   {{Lang::get('ui.menu_items.money_changers')}}
                </a>
            </li>
            <li class="active">
                <a>
                    <i class="entypo-plus"></i>
                   {{Lang::get('ui.menu_items.create_money_changer')}}
                </a>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2 class="farsi-content"> {{Lang::get('ui.menu_items.create_money_changer')}} </h2>

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title farsi">
                    {{Lang::get('phrases.enter_moneychanger_information')}}
                </div>
            </div>

            <div class="panel-body">

                {{Form::open(array('class' => 'form-horizontal form-groups-bordered' ,'id' => 'create-user-form'))}}

                {{Form::textInputSet(['name' => 'name', 'label' => Lang::get('words.moneychanger_name')])}}

                {{Form::countrySelectSet(['name' => 'country_id','label' => Lang::get('words.country')])}}

                {{Form::textInputSet('director_name')}} 

                {{Form::textInputSet('director_last_name')}}   

                {{Form::textareaInputSet('address')}}

                {{Form::textInputSet('phone_number')}}
        
                {{Form::textInputSet('mobile_number')}}

                {{Form::textInputSet('fax_number')}}

                {{Form::textInputSet('email_address')}}
                
                {{Form::submitInputSet(Lang::get('ui.buttons.create_money_changer'))}}

                {{Form::close()}}
            </div>

    </div>
</div>
@stop