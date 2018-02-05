<template>

    <div>
        <button v-if="tipo == 'button'" v-bind:class="css || 'btn btn-primary'" type="button" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
        <button v-if="!tipo || (tipo != 'button' && tipo != 'link')" v-bind:class="css || 'btn btn-primary'" type="button" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
        <a href="#" v-if="tipo == 'link'" v-bind:class="css || 'btn btn-primary'" data-togle="modal" v-bind:data-target="'#' + nome">{{titulo}}</a>
    </div>

</template>

<script>
    export default {
        name: "modal-link",
        props: ['tipo', 'nome', 'titulo', 'css']
    }
</script>

<style scoped>

</style>