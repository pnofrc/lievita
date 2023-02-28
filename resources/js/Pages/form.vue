<template>
    <background></background>

    <div id="formContainer">
        <form action="">


            <div id="place">
                <div class="inputPlace" @click="drop()" id="dropPlace"><span>Locale</span>
                    <img v-if="dropped" src="../../assets/undropped.png">
                    <img v-else src="../../assets/dropped.png">
                </div>

                <div v-for="store in stores" v-if="dropped" class="inputPlace" @click="selectStore(store)">
                    <span class="storeName">{{ store.name }}</span>
                    <span class="checkbox" :class="selectedStore(store)"></span>
                </div>

            </div>

            <div class="inputRest">
                <input class="input" type="text" placeholder="Nome" name="" id="">
                <input class="input" type="text" placeholder="Cognome">
                <input class="input" type="email" placeholder="Email" name="" id="">
                <input class="input" type="tel" placeholder="Telefono" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                <input class="input" type="text" placeholder="Data di nascita">
            </div>

        </form>

        <div id="confirmForm" @click="confirmForm()" @keyup.enter="confirmForm()">
            <span>OK</span>
        </div>
    </div>
</template>

<script>
import background from '../Common/lightBackground.vue';
import { Inertia } from '@inertiajs/inertia'

export default {
    props: ['stores'],
    data() {
        return {
            dropped: false,
        }
    },
    components: {
        background,
    },
    methods: {
        drop() {
            this.dropped = !this.dropped
        },
        selectStore(store) {
            for (let n in this.stores) {
                this.stores[n].selected = false
            }
            store.selected = !store.selected
        },
        selectedStore(store) {

            if (store.selected) {
                return 'selectedStore'
            }
        },
        confirmForm() {
            Inertia.get('/success')
        }
    },
}
</script>

<style>
#formContainer {
    position: absolute;
    width: 100%;
    height: min-content;
    display: flex;
    flex-direction: column;
    align-items: center;
    top: 12%;
}

form {
    width: 80%;
}

.input {
    width: 80%;
    height: 35px;
    border: none;
    border-bottom: 1px solid var(--dark);
}


#confirmForm {
    position: relative;
    margin-top: 5%
}

#confirmForm span {
    font-size: 'Adieu';
    font-size: 55px;
}

#place {
    display: flex;
    flex-direction: column;
    width: 100%;
    align-items: center;
    margin-bottom: 15px;
}

.inputPlace {
    display: flex;
    width: 80%;
    height: 35px;
    border-bottom: 1px solid var(--dark);
    align-items: center;
    justify-content: space-between;
    background-color: var(--pure);
}

.inputRest {
    display: flex;
    flex-direction: column;
    width: 100%;
    align-items: center;
    gap: 10px;
}

.inputPlace span:nth-child(2) {
    margin-right: 10px;
}


.inputPlace img {
    width: 20px;
    margin-right: 10px;
}

::placeholder {
    font-size: 'Suisse Works';
    color: black;
    margin-left: 20px !important
}

.inputPlace span:nth-child(1),
.input {
    font-size: 18px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 400;
    padding-left: 10px;
    text-transform: capitalize;
}

input[type="date"] {
    text-transform: none;
}

.checkbox {
    width: 20px;
    border-radius: 50%;
    height: 20px;
    background-image: url("../../assets/unchecked.png");
    background-position: center;
    background-repeat: no-repeat;
}

.selectedStore {
    background-image: url("../../assets/checked.png");
    background-position: center;
    background-repeat: no-repeat;
    background-color: red;
    /* width: 50px; */
}
</style>