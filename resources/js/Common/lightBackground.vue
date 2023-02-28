<template>
    <div id="background" class="light">
        <div id="outsideBorder" class="outLight">
            <div id="insideBorder" class="inLight">

            </div>
        </div>

    </div>
</template>

<script>


export default {

}
</script>

<style>
.light {
    background-color: var(--light) !important;
}

.outLight {
    border: solid .5rem var(--dark) !important;
}

.inLight {
    border: solid .2rem var(--dark) !important;
}
</style>