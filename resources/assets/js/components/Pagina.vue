<template>
    <div class="container">
        <div class="row">
            <div v-bind:class="defineTamanho">
               <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "pagina",
        props: ['tamanho'],

        computed: {
            defineTamanho: function() {
                let tamanhoP = parseInt(this.tamanho);

                if(tamanhoP >= 12) {
                    return `col-md-12`
                }else if(tamanhoP <= 2) {
                    return `col-md-2 col-md-offset-5`
                }else if((tamanhoP % 2) == 0) {
                    return `col-md-${tamanhoP} col-md-offset-${(12 - tamanhoP) / 2}`
                }else {
                    return `col-md-${(tamanhoP + 1)} col-md-offset-${parseInt((12 - tamanhoP) / 2)}`
                }

            }
        }
    }
</script>

<style scoped>

</style>