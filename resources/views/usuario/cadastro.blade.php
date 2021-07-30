@extends('layout.base')

@section('titulo','Cadastro de usuário')

@section('conteudo')
    <form action="{{route('salvar')}}" method="post">
        @csrf
        <br>
        <div class="panel-primary">
        <div class="text-center p-3 mb-2 bg-primary text-white"><p class="h1">Cadastro de Cliente</p></div>
    

        <div class="form-group">
        <label for="nome">Nome:</label>    
        <input type="text" name="nome" id="nome" class="form-control">
            @if($errors->has('nome'))
                @foreach($errors->get('nome') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="form-group">
        <label for="email">Email:</label>    
        <input type="email" name="email" id="email" class="form-control">
        @if($errors->has('email'))
                @foreach($errors->get('email') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>
        <div class="form-group">
        <label for="senha">Senha:</label>    
        <input type="password" name="senha" id="senha" class="form-control">
        @if($errors->has('senha'))
                @foreach($errors->get('senha') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>
        <div class="btn">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="reset" class="btn btn-primary">Cancelar</button>
        </div>
    </div>

    </form>
@endsection    