<div class="form-group">
    {{ Form::label('first_name', 'Имя') }} <i class="text-danger">*</i>
    {{ Form::text('first_name', $employee->first_name, [
        'class' => 'form-control',
        'aria-describedby' => 'name-error',
        'placeholder' => 'Введите имя',
    ]) }}
    @if ($errors->has('first_name'))
        <small id="name-error" class="form-text text-danger">
            {{ $errors->first('first_name') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('last_name', 'Фамилия') }} <i class="text-danger">*</i>
    {{ Form::text('last_name', $employee->last_name, [
        'class' => 'form-control',
        'aria-describedby' => 'last-name-error',
        'placeholder' => 'Введите фамилию',
    ]) }}
    @if ($errors->has('last_name'))
        <small id="last-name-error" class="form-text text-danger">
            {{ $errors->first('last_name') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('patronymic', 'Отчество') }}
    {{ Form::text('patronymic', $employee->patronymic, [
        'class' => 'form-control',
        'aria-describedby' => 'patronymic-error',
        'placeholder' => 'Введите отчество',
    ]) }}
    @if ($errors->has('patronymic'))
        <small id="patronymic-error" class="form-text text-danger">
            {{ $errors->first('patronymic') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('salary', 'Зарплата') }}
    {{ Form::number('salary', $employee->salary, [
        'class' => 'form-control',
        'aria-describedby' => 'salary-error',
        'placeholder' => 'Введите сумму, грн',
    ]) }}
    @if ($errors->has('salary'))
        <small id="salary-error" class="form-text text-danger">
            {{ $errors->first('salary') }}
        </small>
    @endif
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
    {{ Form::label('departments', 'Отделы') }} <i class="text-danger">*</i>
    {{ Form::select('departments[]', $departments, null, [
        'class' => 'form-control',
        'multiple',
        'id' => 'departments',
        'aria-describedby' => 'departments-error',
    ]) }}
    @if ($errors->has('departments'))
        <small id="departments-error" class="form-text text-danger">
            {{ $errors->first('departments') }}
        </small>
    @endif
</div>
