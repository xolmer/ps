<div class="form-group {{Form::groupIsInvalid($name)}}">
    {{Form::label($name, Lang::get("words.$name"), array('class' => 'col-sm-3 control-label
    farsi'))}}
    <div class="col-sm-5">
        {{Form::select($name,
        $data , $defaultValue, array('class' => 'form-control ltr ' . $classes ,  
        'id' => $name,
        'placeholder'=>Lang::get("words.$name")))}}
        <div class="help-block">
            {{Form::error($name)}}
        </div>
    </div>
</div>