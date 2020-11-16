@extends('layouts.app')

@section('title', 'Редактировать')

@section('content')
    <main class="main-content row">
        <section class="col-12 mx-auto">
            <h1 class="title mt-4 h2">Редактировать данные сотрудника</h1>

            {{ Form::model($employee, [
                    'url' => route('staff.update', $employee),
                    'method' => 'PATCH',
                    'class' => 'form-staff col-md-7 col-lg-6',
                    'role' => 'form',
                    'novalidate',
                    'autocomplete' => 'off'
                ]) }}
            @include('employee.form')

            {{ Form::submit('Соранить', [
                    'class' => 'btn btn-outline-secondary',
                    'role' => 'button',
                    'data-disable-with' => 'Сохраняем',
                ]) }}
            {{ Form::close() }}
        </section>
    </main>
@endsection
