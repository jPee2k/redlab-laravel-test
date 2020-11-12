<div class="form-group">
    {{ Form::label('name', 'Название') }}
    {{ Form::text('name', $department->name, [
        'class' => 'form-control',
        'aria-describedby' => 'department-error',
        'placeholder' => 'Введите уникальное название отдела',
        'required',
    ]) }}
    <small id="department-error" class="form-text text-muted"></small>
</div>
