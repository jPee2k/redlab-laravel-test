@extends('layouts.app')

@section('title', 'Отделы')

@section('content')
    <main class="main-content row">
        <section class="col-12 mx-auto">
            <h1 class="title mt-4 h2">Список отделов</h1>
            @include('inc.success')

            <!-- todo link -->
            <a href="create.html" role="button" class="btn btn-outline-secondary">Добавить отдел</a>

            <div class="list department-list table-responsive rounded">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Название отдела</th>
                            <th scope="col">Кол-во сотрудников</th>
                            <th scope="col">Максимальная ЗП, грн</th>
                            <th scope="col" colspan="2">Навигация</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <th scope="row">{{ $department->id }}</th>
                                <td>{{ $department->department_name }}</td>
                                <td>{{ $department->staff()->count() }}</td>
                                <td>
                                    <!-- todo maximum salary among employees of one department -->

                                    <!-- maximum salary among departments -->
                                    {{ $department->staff()->max('salary') }}
                                </td>

                                <!-- todo links -->
                                <td><a href="edit.html"><i class="fas fa-edit"></i></a></td>
                                <td><a href="#"><i class="far fa-minus-square"></a></i></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- todo->repair frontend -->
            {{ $departments->links() }}
        </section>
    </main>
@endsection
