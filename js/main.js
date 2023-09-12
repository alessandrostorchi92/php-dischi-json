"use strict"


Vue.createApp({

    data() {

        return {

            // Usiamo un oggetto per memorizzare i parametri che saranno inviati con la richiesta GET. 

            albums: [],
        };

    },

    methods: {

    },

    mounted() {

        // La risposta di axios sarà strutturata in un oggetto, che per convenzione chiamiamo response, la cui proprietà data conterrà i dati inviati dal server. 

        axios.get("api/albums.php").then((response) => {
            this.albums = response.data

            console.log(this.albums);

        })
    }

}).mount('#app');


