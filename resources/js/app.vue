<template>
    <div class="container-fluid px-0">
        <Menu />
        <div class="section" id="cards">
            <Cards />
        </div>
        <Footer />
    </div>
</template>

<script>
import Footer from '../components/partials/Footer.vue';
import Menu from '../components/partials/Menu.vue';
import Cards from '../components/Cards/CardsList.vue';
export default {
    name: 'App',
    components: {
        Menu,
        Footer,
        Cards
    }
}
</script>

<style>

</style>
