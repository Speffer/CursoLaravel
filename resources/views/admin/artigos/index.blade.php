@extends('layouts.app')

@section('content')

    <pagina-component tamanho="10">
        <painel-component titulo="Lista de Artigos">
            <breadcrumb-component v-bind:lista="{{$listaCrumb}}"></breadcrumb-component>

            <modallink-component nome="teste" tipo="button" titulo="Modal"></modallink-component>

            <tabela-component v-bind:cabecalhos="['#', 'Título', 'Descrição', 'Data', 'Autor']"
                              v-bind:dados="[['1', 'Teste', 'Um teste qualquer', '23/12/12', 'Lúh'], ['2', 'Algo', 'Algo louco', '23/23/23', 'Alguém']]"
                              criar="#criar" editar="#editar" deletar="#deletar" token="#token" detalhar="#detalhar">
            </tabela-component>

        </painel-component>
    </pagina-component>
    <modal-component nome="teste">

        <painel-component titulo="Adicionar">
            <formulario-component enctype="multipart/form-data" method="post">

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
                </div>
                <button type="submit" class="btn btn-default">Adicionar</button>

            </formulario-component>
        </painel-component>

    </modal-component>

@endsection