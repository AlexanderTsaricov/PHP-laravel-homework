@extends('layouts.default')

@section('content')
    <html>
        @if ($age > 18)
            <p>{{ $age }}</p>
        @else
            <p>You so yong</p>
        @endif
    </html>
@stop