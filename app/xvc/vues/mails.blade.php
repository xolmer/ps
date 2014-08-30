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
                    {{Lang::get('words.mails')}}
                </a>
            </li>
        </ol>
    </div>
</div>

@stop