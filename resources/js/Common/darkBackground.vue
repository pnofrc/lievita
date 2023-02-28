<template>
    <div id="background" class="dark">
        <div id="outsideBorder" class="outDark">
            <div id="insideBorder" class="inDark">

            </div>
        </div>

    </div>
</template>

<script>


export default {

}
</script>

<style>
.dark {
    background-color: var(--dark) !important;
}

.outDark {
    border: solid .5rem var(--mid) !important;
}

.inDark {
    border: solid .2rem var(--mid) !important;
}
</style>