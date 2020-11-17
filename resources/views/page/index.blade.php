@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <main class="main-content row">
        <section class="col-12 mx-auto">
            @if ($departments->isNotEmpty() && $staff->isNotEmpty())
                <h1 class="title mt-4 h2">Cотрудники в составе отделов</h1>

                <div class="table-responsive rounded">
                    <table class="table main-table table-sm table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"></th>
                                @foreach ($departments as $department)
                                    <th scope="col">{{ $department->name }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staff as $employee)
                                <tr>
                                    <th scope="row">
                                        {{ $employee->first_name }}
                                        {{ $employee->last_name }}
                                    </th>
                                    @foreach ($departments as $department)
                                        @if ($employee->departments->contains($department))
                                            <td class="align-middle"><i class="far fa-check-circle"></i></td>
                                        @else
                                            <td></td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $staff->links() }}
                </div>
            @else
                <p class="title mt-4 h5">Чтобы увидеть сводную таблицу, нужно создать отдел и добавить работника</p>
            @endif
        </section>
    </main>
@endsection
