<div class="form-group">
    {{ Form::label('department_name', 'Название') }}
    {{ Form::text('department_name', $department->department_name, [
        'class' => 'form-control',
        'aria-describedby' => 'department-error',
        'placeholder' => 'Введите уникальное название отдела',
        'required',
    ]) }}
    <small id="department-error" class="form-text text-muted"></small>
</div>
