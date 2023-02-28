<template>
    <background></background>
    <div id="container">
        <div id="logo" class="flex"><img src="../../assets/logo.png" alt=""></div>
        <div id="description" class="flex">
            <p>Unisciti alla <i>famiglia</i>, registrati e ottieni la fidelity card</p>
        </div>
        <div id="confirm" @click="accept()" class="flex">
            <span>OK</span>
            <img class="okButton" src="../../assets/OK.png">
        </div>
    </div>
</template>

<script>
import background from '../Common/darkBackground.vue';
import { Inertia } from '@inertiajs/inertia'


export default {
    props: [],
    data() {
        return {
        }
    },
    components: {
        background,
    },
    methods: {

        accept() {
            Inertia.get('/form')
        }
    },
}
</script>

<style>
.okButton {
    position: absolute;
}

.flex {
    display: flex;
    height: 20%;
    align-items: center;
    justify-content: center;
}

#container {
    position: absolute;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    gap: 5%;
    margin-top: 50px;
}


#logo img {
    width: 55%;
}


#description {
    height: 30%;
}

#description p {
    font-size: 'suisse';
    font-size: 2rem;
    text-align: center;
    color: var(--mid);
    width: 60%;
}

#confirm img {
    width: 35%;
}

#confirm span {
    font-family: 'adieu';
    color: var(--dark);
    position: absolute;
    z-index: 10;
    font-size: 2rem;
    margin-top: 10px;
}
</style>