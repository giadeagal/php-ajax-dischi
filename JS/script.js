const app = new Vue(
    {
        el: "#app",
        data: {
            url: "albums-api.php",
            albums: ""
        },
        mounted(){
            axios
                .get(this.url)
                .then(respo => {
                    this.albums = respo.data;
                })
                .then(err => {
                    console.log(err);
                })
        }
    }
);