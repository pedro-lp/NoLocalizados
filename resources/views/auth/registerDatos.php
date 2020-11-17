@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registerDatos') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="primerApellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                            <div class="col-md-6">
                                <input id="primerApellido" type="text" class="form-control{{ $errors->has('primerApellido') ? ' is-invalid' : '' }}" name="primerApellido" value="{{ old('primerApellido') }}" required>

                                @if ($errors->has('primerApellido'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('primerApellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="segundoApellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-6">
                                <input id="segundoApellido" type="text" class="form-control{{ $errors->has('segundoApellido') ? ' is-invalid' : '' }}" name="segundoApellido" value="{{ old('segundoApellido') }}" required>

                                @if ($errors->has('segundoApellido'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('segundoApellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control{{ $errors->has('cargo') ? ' is-invalid' : '' }}" name="cargo" value="{{ old('cargo') }}" required>

                                @if ($errors->has('cargo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dependencia" class="col-md-4 col-form-label text-md-right">{{ __('Dependencia') }}</label>

                            <div class="col-md-6">
                                <input id="dependencia" type="text" class="form-control{{ $errors->has('dependencia') ? ' is-invalid' : '' }}" name="dependencia" value="{{ old('dependencia') }}" required>

                                @if ($errors->has('dependencia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dependencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
