<template>

    <div>

        <button v-if="tipo == 'button'" class="btn btn-primary" type="button" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
        <a href=""></a>
    </div>

</template>

<script>
    export default {
        name: "modal-link",
        props: ['tipo', 'nome', 'titulo']
    }
</script>

<style scoped>

</style>