@extends('templates.default')

@section('content')

    <link rel="stylesheet" href="/css/style1.css">
    <div class="page-header">
        <img src="/img/iitu.png" class="img-rounded">
        <h4>Appellation system of IITU</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 box offset-md-4">
                <form method="post" action="{{route('auth.signin')}}" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="email">ID</label>
                        <input name="email" type="email"
                               class="form-control"{{$errors->has('email') ? 'is-invalid' : ''}} id="email"
                               placeholder="например, 12454@edu.iitu.kz"
                               value="{{Request::old('email')?:''}}">
                        @if ($errors->has('email'))
                            <span class="help-block text-danger">
                                {{$errors->first('email')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="iin">ИИН</label>
                        <input name="iin" type="text" class="form-control"{{$errors->has('iin') ? 'is-invalid' : ''}}  id="iin"
                               placeholder="Введите пожалуйста ИИН">
                        @if ($errors->has('iin'))
                            <span class="help-block text-danger">
                                {{$errors->first('iin')}}
                            </span>
                        @endif
                    </div>
                    <div class="custom-control custom-checkbox mb-3" >
                        <input name="remember" type="checkbox" class="custom-control-input" id="remember">
                        <label class="custom-control-label" for="remember">Запомнить меня!</label>
                    </div>
                    <button type="submit" class="btn btn-info" >Войти</button>
                </form>
            </div>

        </div>
    </div>
@endsection

