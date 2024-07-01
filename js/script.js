
  const { createApp } = Vue

  createApp({
    data() {
      return {
       taglia: 'Grande',
       animali: [],
      }
    },
    
    methods: {
     
        getData(){
            axios.get('./server.php', {
                params: {
                    taglia: this.taglia,
                }
            })
            .then((response) => {
                console.log(response);
                this.animali = response.data;
            })
            .catch((error) => {
                console.log(error);
            })
            .finally(() => {
                // always executed
            });
        }


    },
    created() {
        this.getData();
    },


  }).mount('#app')
