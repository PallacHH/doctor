@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавление города</div>

                    <div class="panel-body">
                        <form action="/city" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="country">Страна</label>
                                <input type="text" name="country" id="country" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="area">Область</label>
                                <input type="text" name="area" id="area" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Создать">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
