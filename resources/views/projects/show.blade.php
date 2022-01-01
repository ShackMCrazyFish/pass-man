@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 d-flex align-items-center mt-3">
            <h2>Проект</h2>
            <a class="btn btn-primary mx-3" href="{{ route('projects') }}">Назад</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Навзвание проекта:</strong>
                {{ $project->projectName }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Логин от административной панели:</strong>
                {{ $project->projectAdminLogin }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Пароль от административной панели:</strong>
                {{ $project->projectAdminPass }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SSH хост:</strong>
                {{ $project->projectSSHHost }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SSH логин:</strong>
                {{ $project->projectSSHLogin }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SSH пароль:</strong>
                {{ $project->projectSSHHost }}
            </div>
        </div>

    </div>
@endsection
