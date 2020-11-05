@extends('layouts.app')

@section('title', 'Персонал')

@section('content')
    <main class="main-content row">
        <section class="col-12 mx-auto">
            <h1 class="title mt-4 h2">Список сотрудников</h1>

            <!-- todo link -->
            <a href="create.html" role="button" class="btn btn-outline-secondary">Добавить сотрудника</a>

            <div class="list staff-list table-responsive rounded">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">ФИО</th>
                            <th scope="col">Пол</th>
                            <th scope="col">ЗП, грн</th>
                            <th scope="col">Отдел(ы)</th>
                            <th scope="col" colspan="2">Навигация</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staff as $employee)
                            <tr>
                                <th scope="row">{{ $employee->id }}</th>
                                <td>{{ $employee->last_name }} {{ $employee->first_name }} {{ $employee->patronymic ?? '' }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>{{ $employee->salary }}</td>
                                <!-- todo foreach->relationships->department -->
                                <td>Отдел закупок,<br>Отдел продаж</td>
                                <!-- todo link -->
                                <td><a href="edit.html"><i class="fas fa-edit"></i></a></td>
                                <td><a href="#"><i class="far fa-minus-square"></a></i></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $staff->links() }}
        </section>
    </main>
@endsection
