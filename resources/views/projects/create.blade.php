@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center mt-3">
            <h2>Новый проект</h2>
            <a class="btn btn-primary mx-3" href="{{ route('projects') }}">Назад</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-md-5">
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="projectName">Навзвание проекта</label>
                    <input class="form-control" type="text" name="projectName" id="projectName">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="projectAdminLogin">Логин от административной панели</label>
                    <input class="form-control" type="text" name="projectAdminLogin" id="projectAdminLogin">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="projectAdminPass">Пароль от административной панели</label>
                    <input class="form-control" type="text" name="projectAdminPass" id="projectAdminPass">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="projectSSHHost">SSH хост</label>
                    <input class="form-control" type="text" name="projectSSHHost" id="projectSSHHost">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="projectSSHLogin">SSH логин</label>
                    <input class="form-control" type="text" name="projectSSHLogin" id="projectSSHLogin">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="projectSSHPass">SSH пароль</label>
                    <input class="form-control" type="text" name="projectSSHPass" id="projectSSHHost">
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </div>
@endsection
