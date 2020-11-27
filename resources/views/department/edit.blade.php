@extends('layouts.app')

@section('title', 'Редактировать')

@section('content')
<main class="main-content row">
    <section class="col-12 mx-auto">
        <h1 class="title mt-4 h2">Радактировать данные отдела</h1>

        {{ Form::model($department, [
                'url' => route('departments.update', $department),
                'method' => 'PATCH',
                'class' => 'form-staff col-md-7 col-lg-6',
                'role' => 'form',
                'autocomplete' => 'off',
            ]) }}

        @include('department.form')

        {{ Form::submit('Сохранить', [
                'class' => 'btn btn-outline-secondary',
                'role' => 'button',
                'data-disable-with' => 'Сохраняем',
            ]) }}
        {{ Form::close() }}
    </section>
</main>
@endsection