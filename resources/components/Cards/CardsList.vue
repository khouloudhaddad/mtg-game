<template>
    <div class="container py-5">
        <div class="row">
            <h2>Cards list</h2>
        </div>
        <div class="row">
            <CardItem v-for="item in cards" :key="item.id"
            :name="item.name"
            :imageUrl="item.imageUrl"
            :colors="item.colors"
            :originalText="item.originalText"
            :originalType="item.originalType"
            :manaCost="item.manaCost"
            :power="item.power"
             />
        </div>
    </div>
</template>

<script>
import axios from "axios";
import CardItem from "./CardItem.vue";
export default {
    data() {
        return {
            cards: [],
        };
    },
    methods: {
        async fetchCards() {
            const cards = axios
                .get("https://api.magicthegathering.io/v1/cards")
                .then((response) => (this.cards = response.data.cards));
            this.cards = cards.data;
        },
    },
    async mounted() {
        await this.fetchCards();
    },
    components: { CardItem }
};
</script>


