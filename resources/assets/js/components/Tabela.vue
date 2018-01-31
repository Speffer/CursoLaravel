<template>

    <div>

        <div class="form-inline">
            <a v-if="criar" v-bind:href="criar">Criar</a>

            <div class="form-group pull-right">
                <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
            </div>

        </div>

        <table class="table table-striped table-hover">

            <thead>
            <tr>
                <th v-for="cabecalho in cabecalhos">{{cabecalho}}</th>
                <th v-if="editar || detalhar || deletar">Ação</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="(dado, index) in lista">
                <td v-for="d in dado">{{d}}</td>
                <td v-if="editar || detalhar || deletar">

                    <form v-bind:id="index" v-if="token && deletar" v-bind:action="deletar" method="post">

                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" v-bind:value="token">


                        <a v-if="editar" v-bind:href="editar">Editar | </a>
                        <a v-if="detalhar" v-bind:href="detalhar">Detalhar | </a>
                        <a href="#" v-on:click="executaForm(index)">Deletar</a>

                    </form>

                    <span v-if="!token">
                        <a v-if="editar" v-bind:href="editar">Editar | </a>
                        <a v-if="detalhar" v-bind:href="detalhar">Detalhar | </a>
                        <a v-if="deletar" v-bind:href="deletar">Deletar</a>
                    </span>

                    <span v-if="token && !deletar">
                        <a v-if="editar" v-bind:href="editar">Editar | </a>
                        <a v-if="detalhar" v-bind:href="detalhar">Detalhar</a>
                    </span>


                </td>
            </tr>
            </tbody>

        </table>
    </div>

</template>

<script>
    export default {
        name: "tabela",
        props: ['cabecalhos', 'dados', 'criar', 'editar', 'detalhar', 'deletar', 'token'],
        data: function () {
          return {
              buscar: ''
          }
        },
        methods: {
            executaForm: function(index) {
                document.getElementById(index).submit();
            }
        },
        computed: {
            lista: function() {

            this.dados.sort(function(a, b) {
               if (a[0] > b[0]) {return 1;}
               if (a[0] < b[0]) {return -1;}
               return 0;
            });


                return this.dados.filter(res => {

                    for( let i = 0; i < 3; i++) {
                        if((res[i] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0) {
                            return true;
                        }
                    }
                    return false;
                });

                return this.dados;
            }
        }

    }
</script>

<style scoped>

</style>