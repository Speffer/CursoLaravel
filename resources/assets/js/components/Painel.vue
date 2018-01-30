<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{titulo}}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: "painel",
        props: ['titulo', 'cor'],

        computed: {
            defineCor: function() {
                return `panel ${this.cor} || panel-default`
            }
        }
    }
</script>

<style scoped>

    .blue {
          border-color: #043b6b;
      }

    .blue > .panel-heading {
        color: #cedcde;
        background-color: #043b6b;
        border-color: #043b6b;
    }

    .red {
        border-color: #8a0606;
    }

    .red > .panel-heading {
        color: #ecdfdf;
        background-color: #8a0606;
        border-color: #8a0606;
    }

    .purple {
        border-color: #6b044a
    }

    .purple > .panel-heading {
        color: #e4dde2;
        background-color: #6b044a;
        border-color: #6b044a;
    }

</style>