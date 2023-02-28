<template>
    <div id="adminPanel">
        <div><img src="../../../../assets/logo.png"></div>
        <div>
            <div>
                <input type="text">
            </div>
            <div>
                <input type="text">
                <a></a>
            </div>
        </div>
        <div>
            <button>AGGIUNGI LOCALE</button>
        </div>
    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia'

export default {
    props: ['stores'],
    data() {
        return {
        }
    },
    components: {
    },
    methods: {

        confirmForm() {
            Inertia.get('/success')
        }
    },
}
</script>

<style></style>