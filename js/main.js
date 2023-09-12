"use strict"

Vue.createApp({

    data() {

        return {

            // Usiamo un oggetto per memorizzare i parametri che saranno inviati con la richiesta GET. 

            albumsList: [],

        }
    },

    methods: {

    },

    mounted() {

        // La  risposta della richiesta GET, che per convenzione chiamiamo response, avrà la proprietà data, che conterrà i dati inviati dal server.

        axios.get("api/albums.php").then((response) => {
            this.albumsList = response.data
        })

    }

}).mount('#app');
