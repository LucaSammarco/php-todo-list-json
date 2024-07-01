
  const { createApp } = Vue

  createApp({
    data() {
      return {
       tasks: [],
       completed: '',
       task: '',
      }
    },
    
    methods: {
     
        getData(){
            axios.get('./server.php', {
                params: {
                    task: this.task,
                }
            })
            .then((response) => {
                console.log(response);
                this.todo = response.data;
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
