<template>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="">

        <slot></slot>

    </form>
</template>

<script>
    export default {
        name: "formulario"
    }
</script>

<style scoped>

</style>