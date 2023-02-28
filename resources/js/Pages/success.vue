<template>
    <background></background>

    <div id="container" v-if="this.acceptedFromLink">
        <div class="flex">
            <p class="fatWhite">Grazie {{ user.name }}!</p>
        </div>
        <div class="flex">
            <p class="goldText"> Da questo momento con la tua <b>fidelity</b> card hai diritto al 20% di sconto</p>
        </div>
        <div class="fatWhite flex" @click="continue2area()">
            <span>Continua</span>
        </div>
    </div>

    <div class="containerSuccess" v-else>
        <div>
            <p>GRAZIE</p>
        </div>
        <div>
            <p class="goldText">Controlla la tua mail e clicca il link di conferma</p>
        </div>
    </div>
</template>

<script>
import background from '../Common/darkBackground.vue';
import { Inertia } from '@inertiajs/inertia'


export default {
    props: ['user'],
    data() {
        return {
            acceptedFromLink: true
        }
    },
    components: {
        background,
    },
    methods: {
        continue2area() {
            Inertia.get('/userArea')
        }
    },
}
</script>

<style>
.containerSuccess {
    position: absolute;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.containerSuccess div:nth-child(1) p {
    font-family: 'adieu';
    color: var(--pure);
    text-transform: uppercase;
    font-size: 40px;
}






/*  */



#container {
    position: absolute;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;

}



.flex {
    display: flex;
    /* height: 20%; */
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 70%;
}
</style>