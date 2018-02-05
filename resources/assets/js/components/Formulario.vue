<template>
    <form v-bind:action="action" v-bind:method="defineMethod" v-bind:enctype="enctype" v-bind:class="css">

        <input v-if="alteraMethod" type="hidden" name="_method" v-bind:value="alteraMethod">
        <input  v-if="token" type="hidden" name="_token" v-bind:value="token">

        <slot></slot>

    </form>
</template>

<script>
    export default {
        name: "formulario",
        props: ['css', 'action', 'method', 'enctype', 'token'],
        data: function() {
          return{
              alteraMethod: ''
          }
        },
        computed: {
            defineMethod: function() {
                if(this.method.toLowerCase() == 'post' || this.method.toLowerCase() == 'get') {
                    return this.method.toLowerCase();

                } else if(this.method.toLowerCase() == 'put') {
                    this.method = 'post';
                    return this.alteraMethod = 'PUT';

                } else if(this.method.toLowerCase() == 'delete') {
                    return this.method.toLowerCase();
                    return this.alteraMethod = 'DELETE';

                }


            }
        }
    }
</script>

<style scoped>

</style>