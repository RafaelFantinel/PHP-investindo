@extends('templates.master')
@section('conteudo-view')
@if (session('success'))
    <h3>{{ session('success') ['messages']}}</h3>   
    
@endif





   {!! Form::open([ 'route'=>'user.store','method' => 'post', 'class' => 'form-padrao']) !!}
   @include('templates.formulario.input', ['input' => 'cpf', 'attributes' => ['placeholder' =>'CPF']])
   @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder'=> 'Nome']])
   @include('templates.formulario.input', ['input' => 'phone', 'attributes' => ['placeholder'=>'Telefone']])
   @include('templates.formulario.input', ['input' => 'email', 'attributes' => ['placeholder'=>'E-mail']])
   @include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder'=>'Senha']])
   @include('templates.formulario.submit', ['input' => 'Cadastrar'])
    {!! Form::close()!!}
    <table class="default-table">
        <thead>
            <tr>
                <td>#</td>
                <td>CPF</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Nascimento</td>
                <td>E-mail</td>
                <td>Status</td>
                <td>Permissao</td>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>teste</td>
                <td>teste</td>
                <td>teste</td>
                <td>teste</td>
                <td>teste</td>
                <td>teste</td>
                <td>teste</td>
                <td>teste</td>
            </tr>
        </tbody>

    </table>



@endsection

@section('css-view')
    
@endsection

@section('js-view')
    
@endsection