<template>
    <div class="container">
        <Menu />
        <div class="row">
            <div class="card">
                Content
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
import Footer from '../components/partials/Footer.vue';
import Menu from '../components/partials/Menu.vue';
export default {
    name: 'App',
    components: {
        Menu,
        Footer
    }
}
</script>

<style>

</style>
