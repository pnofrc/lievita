<template>
    <background></background>
    <div class="total">
        <div class="containerUserArea">

            <div>
                <p class="greetings animate__animated" :class="this.changeOn" v-if="this.swiped">CIAO {{ user.name }}!</p>
                <p class="infoText animate__animated" :class="this.changeOff" v-if="!this.swiped">ECCO IL CODICE SCONTO DA
                    MOSTRARE ALLA CASSA</p>

            </div>
            <div class="qrContainer">
                <img class="qr" src="https://pngimg.com/uploads/qr_code/qr_code_PNG6.png">
            </div>
            <div class="short add2wallet"><img src="../../assets/google.png"></div>
            <div class="short add2wallet"><img src="../../assets/apple.png"></div>
            <div class="short score"><span>Fidelity nr</span><span>{{ user.cardNr }}</span></div>
            <div class="short score"><span>Saldo Punti:</span><span>{{ user.points }}</span></div>
            <div class="short score"><span>Credito:</span><span>{{ user.credits }}€</span></div>
            <div class="short score"><span>Movimenti Fidelity</span><img src="../../assets/fidelity.png"></div>

        </div>
    </div>

    <div class="toSwipe animate__animated" v-if="!this.swiped" :class="this.down">
        <p class="goldText save">Salva questa schermata per le prossime volte</p>
        <div @click="swipeDown()">
            <p class="fatWhite touch">TOCCA QUI</p>
            <img src="../../assets/downloadIcon.png">
        </div>
    </div>
</template>

<script>
import background from '../Common/lightBackground.vue';

export default {
    props: ['user'],
    data() {
        return {
            down: '',
            changeOn: '',
            changeOff: '',
            swiped: false
        }
    },
    components: {
        background,
    },
    methods: {
        downloadDiscount() {
            alert('downloaded!')
        },
        swipeDown() {
            this.down = 'animate__backOutDown'
            this.changeOn = 'animate__zoomIn'
            this.changeOff = 'animate__fadeOut'
            setTimeout(() => {
                this.swiped = !this.swiped
            }, 800);
        }
    },
}
</script>

<style>
.animate__animated {
    --animate-duration: 2s;
}

.total {
    width: 100%;
    height: 100%;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
}

.containerUserArea {
    position: absolute;
    width: 75%;
    height: 85%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-bottom: 30px;
    justify-content: space-between;
}


p {
    font-family: 'adieu';
    color: var(--dark);

    text-align: center;
}

.greetings {
    font-size: 25px;
    text-transform: uppercase;
}

.infoText {
    font-size: 20px;
    line-height: 20px;
}

.qrContainer {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 70%;
}

.qr {
    width: 100%;
}

.toSwipe {
    background-color: var(--dark);
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}



.toSwipe div {
    width: 60%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.toSwipe img {
    width: 30px;
}


.goldText {
    width: 60%;
}



.short {
    height: 35px;
    width: 90%;
    border: none;

    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10px;
}

.score {
    background-color: var(--dark);
    color: var(--pure);
}

.score img {
    width: 8%
}


.add2wallet {
    background-color: #1F1F1F;
    display: flex;
    align-items: center;
    justify-content: center;
}

.add2wallet img {
    width: 60%;
}

.save {
    width: 70%;
    font-size: 30px;
}

.touch {
    font-size: 30px;
}
</style>