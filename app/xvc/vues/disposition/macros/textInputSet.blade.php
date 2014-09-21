<div class="form-group farsi {{Form::groupIsInvalid($name)}} ">
    {{Form::label($name, $label, array('class' => 'col-sm-3 control-label' ))}}
    <div class="col-sm-5">
        {{Form::text($name, null,
            array(
                'class' => 'form-control ' . $classes,
                'id' => $name,
                'placeholder'=> $label
            )
        )}}
        <div class="help-block">
            {{Form::error($name)}}
        </div>
    </div>
</div>