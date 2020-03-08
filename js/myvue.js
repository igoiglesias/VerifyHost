Vue.component('tab-home',{
    template: `<h2>Bem vindo ao VHost</h2>`,
    methods: {
        action(){
            alert("Oi!");
        }
    },
})
Vue.component("tab-ping",{
    template: `<div><div class="row">
            <div class="col-md-12">
              <h1 class="text-center">Ping</h1>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-4 text-center"></div>
            <div class="col-md-4">
              <form>
                <div class="form-group" >
                  <label class="control-label">IP/Site</label>
                  <input class="form-control" id="exampleInputEmail1" placeholder="8.8.8.8"
                  type="text" name="ip">
                </div>
                <div class="form-group">
                  <label class="control-label">Qtd</label>
                  <input class="form-control" id="exampleInputPassword1" placeholder="5"
                  type="text" name="n">
                </div>
                <button type="submit" v-on:click="action" class="btn btn-lg btn-primary">Pingar</button>

              </form>

            </div>
            <div class="col-md-4"></div>
          </div></div>`,
    methods: {
        action(){
            alert("Oi!");
        }
    },
})
Vue.component("tab-tracert",{
    template: "<h1>Tracert</h1>",
    methods: {
        action(){
            alert("Oi!");
        }
    },
})

const app = new Vue({
    el:"#vhost",
    data: {
        title: "Ping",
        currentTab: "Home",
        tabs:["Home","Ping","Tracert"]
    },
    computed: {
        tabAtual(){
            //alert("tab-" + this.currentTab.toLowerCase());
            return "tab-" + this.currentTab.toLowerCase();
        }
    },


});
