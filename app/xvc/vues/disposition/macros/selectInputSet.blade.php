<div class="form-group {{Form::groupIsInvalid($name)}}">
    {{Form::label($name, $label, array('class' => 'col-sm-3 control-label
    farsi'))}}
    <div class="col-sm-5">
        {{Form::select($name,
        $data , $defaultValue, array('class' => 'form-control select2' . $classes ,  
        'id' => $name,
        'placeholder'=>$label))}}
        <div class="help-block">
            {{Form::error($name)}}
        </div>
    </div>
</div>