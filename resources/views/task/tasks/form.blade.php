<div class="form-group{{ $errors->has('task_name') ? 'has-error' : ''}}">
    {!! Form::label('task_name', 'Task Name', ['class' => 'control-label']) !!}
    {!! Form::text('task_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('task_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
