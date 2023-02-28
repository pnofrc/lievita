<template>
    <background></background>

    <div class="containerLogin">
        <div class="logo">
            <img src="../../assets/logo.png" alt="">
        </div>
        <div class="input">
            <input placeholder="Accedi con la tua email" @keyup.enter="confirm()" type="email">
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
        confirm() {
            Inertia.get('/userArea')
        }
    },
}
</script>

<style>
.containerLogin {
    width: 100%;
    height: 50%;
    margin-top: 10%;
    position: absolute;
    top: 0;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: space-around;
}

.containerLogin div {
    display: flex;
    align-items: center;
    justify-content: center;
}

.containerLogin div img {
    width: 60%;
}

.containerLogin .input {
    width: 80%;
}

input {
    background-color: transparent;
    width: 90%;
    border: none;
    font-family: 'suiss';
    background: url('../../assets/email.png') no-repeat left center;
    background-size: 8%;
    background-position: 3% 10%;
    outline: none;
    padding: 0 0 5px 45px;
    font-size: 15px;
    border-bottom: 1px solid var(--mid);
    color: var(--mid);

}

input:after {
    content: '';
    border-bottom: 1px solid var(--mid);
    position: absolute;
    bottom: 20px;
}

input::placeholder {
    font-family: 'suiss';
    color: var(--mid);
    /* padding-left: 40px; */
}
</style>