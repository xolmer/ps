<div class="form-group farsi {{Form::groupIsInvalid($name)}} ">
    {{Form::label($name, Lang::get("words.$name"), array('class' => 'col-sm-3 control-label' ))}}
    <div class="col-sm-5">
        {{Form::textarea($name, null,
            array(
                'class' => 'form-control ' . $classes,
                'id' => $name,
                'placeholder'=> Lang::get("words.$name"),
                'rows' => 3
            )
        )}}
        <div class="help-block">
            {{Form::error($name)}}
        </div>
    </div>
</div>