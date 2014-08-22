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
                    <i class="entypo-users"></i>
                   {{Lang::get('ui.menu_items.site_users')}}
                </a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2 class="farsi-content">
            {{Lang::get('ui.menu_items.site_users')}}
        </h2>
        <hr/>
        @include('partiels._flash')
        <div class="pull-right">
            <a class="btn btn-primary farsi btn-icon" href="{{URL::route('user.create')}}">
                <i class="entypo-user-add"></i>
               {{Lang::get('ui.buttons.create_user')}}
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover farsi">
                <thead>
                <tr>
                    <th></th>
                    <th>
                        {{Lang::get('words.first_name')}}
                    </th>
                    <th>
                        {{Lang::get('words.last_name')}}
                    </th>
                    <th>
                        {{Lang::get('words.username')}}
                    </th>
                    <th>
                        {{Lang::get('words.email_address')}}
                    </th>
                    <th>
                        {{Lang::get('words.mobile_number')}}
                    </th>
                    <th>
                        {{Lang::get('words.account_state')}}
                    </th>
                    <th>
                        {{Lang::get('words.timezone')}}

                    </th>
                    <th>
                        {{Lang::get('words.last_login')}}

                    </th>
                    <th>

                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $index => $user)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email_address}}</td>
                    <td>{{$user->mobile_number}}</td>
                    <td>{{$user->account_status}}</td>
                    <td>{{$user->timezone}}</td>
                    <td>{{$user->last_login}}</td>
                    <td>
                        <a class="btn btn-default btn-xs farsi btn-icon btn-block" href="{{URL::route('user.edit',array('id' => $user->id))}}">
                            <i class="fa fa-edit"></i>
                            {{Lang::get('ui.buttons.edit')}}
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop