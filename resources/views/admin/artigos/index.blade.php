@extends('layouts.app')

@section('content')

    <pagina-component tamanho="10">
        <painel-component titulo="Lista de Artigos">

            <tabela-component v-bind:cabecalhos="['#', 'Título', 'Descrição', 'Data', 'Autor']"
                              v-bind:dados="[['1', 'Teste', 'Um teste qualquer', '23/12/12', 'Lúh'], ['2', 'Algo', 'Algo louco', '23/23/23', 'Alguém']]">
            </tabela-component>

        </painel-component>
    </pagina-component>

@endsection