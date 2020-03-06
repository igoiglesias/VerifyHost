const ping = new Vue({
    el:"#ping",
    data: {
        title: "Ping"
    },
    methods:{
        pingar: function(event){
            event.preventDefault();
            alert("pingando...");
        },
    }

});
