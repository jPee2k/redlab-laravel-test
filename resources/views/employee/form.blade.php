<div class="form-group">
    {{ Form::label('first_name', 'Имя') }}
    {{ Form::text('first_name', $employee->first_name, [
        'class' => 'form-control',
        'aria-describedby' => 'name-error',
        'placeholder' => 'Введите имя',
        'required',
    ]) }}
    <small id="name-error" class="form-text text-muted"></small>
</div>

<div class="form-group">
    {{ Form::label('last_name', 'Фамилия') }}
    {{ Form::text('last_name', $employee->last_name, [
        'class' => 'form-control',
        'aria-describedby' => 'last-name-error',
        'placeholder' => 'Введите фамилию',
        'required',
    ]) }}
    <small id="last-name-error" class="form-text text-muted"></small>
</div>

<div class="form-group">
    {{ Form::label('patronymic', 'Отчество') }}
    {{ Form::text('patronymic', $employee->patronymic, [
        'class' => 'form-control',
        'aria-describedby' => 'patronymic-error',
        'placeholder' => 'Введите отчество',
    ]) }}
    <small id="patronymic-error" class="form-text text-muted"></small>
</div>

<div class="form-group">
    {{ Form::label('salary', 'Зарплата') }}
    {{ Form::number('salary', $employee->salary, [
        'class' => 'form-control',
        'aria-describedby' => 'salary-error',
        'placeholder' => 'Введите сумму, грн',
    ]) }}
    <small id="salary-error" class="form-text text-muted"></small>
</div>

<div class="form-group">
    <label>
        Пол<br />
        <div class="form-check form-check-inline">
            {{ Form::radio('gender', 'Мужской', false, [
                'class' => 'form-check-input',
                'id' => 'male-id',
            ]) }}
            {{ Form::label('male-id', 'Мужской', ['class' => 'form-check-label']) }}
        </div>
        <div class="form-check form-check-inline">
            {{ Form::radio('gender', 'Женский', false, [
                'class' => 'form-check-input',
                'id' => 'female-id',
            ]) }}
            {{ Form::label('female-id', 'Женский', ['class' => 'form-check-label']) }}
        </div>
    </label>
</div>

<div class="form-group">
    {{ Form::label('departments', 'Подразделения') }}
    {{ Form::select('departments[]', $departments, null, ['class' => 'form-control', 'multiple', 'id' => 'departments']) }}
</div>
