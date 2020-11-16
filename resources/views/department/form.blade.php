<div class="form-group">
    {{ Form::label('name', 'Название') }} <i class="text-danger">*</i>
    {{ Form::text('name', $department->name, [
        'class' => 'form-control',
        'aria-describedby' => 'department-error',
        'placeholder' => 'Введите уникальное название отдела',
        'required',
    ]) }}
    @if ($errors->has('name'))
        <small id="department-error" class="form-text text-danger">
            {{ $errors->first('name') }}
        </small>
    @endif
</div>
