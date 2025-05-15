@extends('layouts.default')

@section('content')
    <html>
        @if (empty($email))
            <p>Пустая строка вместо электронной почты</p>
        @else
            <p>{{ $email }}</p>
        @endif
    </html>
@stop