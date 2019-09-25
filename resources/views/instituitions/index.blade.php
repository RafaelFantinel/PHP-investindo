@extends('templates.master')
@section('conteudo-view')
@if (session('success')&&'success'== true)
<div class="alert alert-success">
    <h3>{{ session('success') ['messages']}}</h3>   
</div>


@endif
{!! Form::open(['route'=>'instituition.store','method'=>'post','class'=>'form-padrao']) !!}
@include('templates.formulario.input', ['input' => 'Nome', 'input'=> 'name','attributes' => ['placeholder' =>'Nome']])
@include('templates.formulario.submit', ['input' => 'Cadastrar'])
{!! Form::close() !!}

<table class="default-table">
        <thead>
            <tr>
            <td>#</td>
            <td>Nome da Instituição</td>
            <td>Opções</td>
        </tr>
        </thead>
        <tbody>
            @foreach ($instituitions as $inst )
            <tr>
                <td>{{$inst->id}}</td>
                <td>{{$inst->name}} </td>
                <td>
                    {!!Form::open(['route'=>['instituition.destroy',$inst->id], 'method'=>'delete']) !!}
                        {!! Form::submit("Remover") !!}
                    {!!Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
