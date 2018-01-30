@extends('layouts.app')

@section('content')

    <pagina-component tamanho="7">
        <painel-component titulo="Dashboard">
            Testeee

            <div class="row">
                <div class="col-md-4">
                    <caixa-component qtd="200" titulo="Artigos" cor="#00c0ef" url="#" icone="ion ion-pie-graph"></caixa-component>
                </div>

                <div class="col-md-4">
                    <caixa-component qtd="150" titulo="Usuários" cor="#00a65a" url="#" icone="ion ion-person-stalker"></caixa-component>
                </div>

                <div class="col-md-4">
                   <caixa-component qtd="400" titulo="Autores" cor="#dd4b39" url="#" icone="ion ion-person"></caixa-component>
                </div>
            </div>

       </painel-component>
    </pagina-component>

@endsection
