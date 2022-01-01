@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 d-flex align-items-center mt-3">
            <h2>Изменить проект</h2>
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

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
            <div class="mb-3">
                <label class="form-label" for="projectName">Навзвание проекта</label>
                <input class="form-control" type="text" name="projectName" id="projectName" value="{{ $project->projectName }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="projectAdminLogin">Логин от административной панели</label>
                <input class="form-control" type="text" name="projectAdminLogin" id="projectAdminLogin" value="{{ $project->projectAdminLogin }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="projectAdminPass">Пароль от административной панели</label>
                <input class="form-control" type="text" name="projectAdminPass" id="projectAdminPass" value="{{ $project->projectAdminPass }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="projectSSHHost">SSH хост</label>
                <input class="form-control" type="text" name="projectSSHHost" id="projectSSHHost" value="{{ $project->projectSSHHost }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="projectSSHLogin">SSH логин</label>
                <input class="form-control" type="text" name="projectSSHLogin" id="projectSSHLogin" value="{{ $project->projectSSHLogin }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="projectSSHPass">SSH пароль</label>
                <input class="form-control" type="text" name="projectSSHPass" id="projectSSHHost" value="{{ $project->projectSSHHost }}">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Изменить">
            </div>
        </div>
    </form>
@endsection
