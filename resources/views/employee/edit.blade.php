@extends('layouts.app')

@section('title', 'Редактировать сотрудника')

@section('content')
    <main class="main-content row">
        <section class="col-12 mx-auto">
            <h1 class="title mt-4 h2">Редактировать сотрудника</h1>

            @include('inc.errors')

            {{ Form::model($employee, [
                    'url' => route('staff.update', $employee),
                    'method' => 'PATCH',
                    'class' => 'form-staff col-md-7 col-lg-6',
                    'role' => 'form',
                    'novalidate',
                    'autocomplete' => 'off'
                ]) }}
            @include('employee.form')

            {{ Form::submit('Обновить', [
                    'class' => 'btn btn-outline-secondary',
                    'role' => 'button',
                    'data-disable-with' => 'Сохраняем',
                ]) }}
            {{ Form::close() }}
        </section>
    </main>
@endsection
