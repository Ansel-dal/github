@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('/empleado/' . $empleado->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            {{ method_field('PATCH') }}
            @include('empleado.form', ['modo' => 'Editar']);
        </form>
    </div>
@endsection
 