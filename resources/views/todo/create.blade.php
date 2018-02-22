@extends('layouts.app')
@section('content')

    <h2 class="page-header">ToDo作成</h2>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="ToDo内容">
        </div>
        <button type="submit" class="btn btn-success pull-right">追加</button>
    </form>

@endsection
