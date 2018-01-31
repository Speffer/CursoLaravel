<template>

    <div>
        <a href="#">Criar</a>

        <table class="table table-striped table-hover">

            <thead>
            <tr>
                <th v-for="cabecalho in cabecalhos">{{cabecalho}}</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="dado in dados">
                <td v-for="d in dado">{{d}}</td>
                <td>
                    <a href="#">Editar | </a>
                    <a href="#">Deletar</a>
                </td>
            </tr>
            </tbody>

        </table>
    </div>

</template>

<script>
    export default {
        name: "tabela",
        props: ['cabecalhos', 'dados']
    }
</script>

<style scoped>

</style>