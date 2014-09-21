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
                    <i class="fa fa-strikethrough"></i>
                   {{Lang::get('ui.menu_items.money_changers')}}
                </a>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2 class="farsi-content">
            {{Lang::get('ui.menu_items.money_changers')}}
        </h2>
        <hr/>
        @include('partiels._flash')
        <div class="pull-right">
            <a class="btn btn-primary farsi btn-icon" href="{{URL::route('moneychanger.create')}}">
                <i class="entypo-user-add"></i>
               {{Lang::get('ui.buttons.create_money_changer')}}
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-striped farsi">
                <thead>
                <tr>
                    <th></th>
                    <th>
                        {{Lang::get('words.money_changer_name')}}
                    </th>
                    <th>
                        {{Lang::get('words.country')}}
                    </th>
                    <th>
                        {{Lang::get('words.director_name')}}
                    </th>
                    <th>
                        {{Lang::get('words.director_last_name')}}
                    </th>
                     <th>
                        {{Lang::get('words.phone_number')}}
                    </th>
                    <th>
                        {{Lang::get('words.mobile_number')}}
                    </th>
                    <th>
                        {{Lang::get('words.email_address')}}
                    </th>
                    <th>
                        {{Lang::get('words.number_of_affiliated_customers')}}
                    </th>
                    <th>
                        {{Lang::get('words.created_at')}}
                    </th>
                    <th>

                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach($moneyChangers as $index => $moneyChanger)
                <tr>
                    <td>{{$index+1}}</td>
                    <th>{{$moneyChanger->name}}</th>
                    <th>{{country($moneyChanger->country_id)}}</th>
                    <td>{{$moneyChanger->director_name}}</td>
                    <td>{{$moneyChanger->director_last_name}}</td>
                    <td>{{$moneyChanger->phone_number}}</td>
                    <td>{{$moneyChanger->mobile_number}}</td>
                    <td>{{$moneyChanger->email_address}}</td>
                    <td>tedad</td>
                    <td>{{HTML::dateblock($moneyChanger->last_login)}}</td>
                    <td>
                        <a class="btn btn-default btn-xs farsi btn-icon btn-block" href="{{URL::route('moneychanger.edit',array('id' => $moneyChanger->id))}}">
                            <i class="fa fa-edit"></i>
                            {{Lang::get('ui.buttons.edit')}}
                        </a>
                    </td>
                    <td></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop