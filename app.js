const form = document.forms["teste"];
form["testar"].addEventListener("click", GetTest);

const result = document.getElementById("result");

function GetTest() {
  event.preventDefault();

  let ip = form["ip"].value == "" ? "8.8.8.8" : form["ip"].value;
  let nPing = form["nping"].value == "" ? "4" : form["nping"].value;


  DoPing(ip, nPing);

}

async function DoPing(ip, n) {

  const Url = "App/PingController.php";
  let Data = {
    ip: ip,
    n: n
  }
  Data = JSON.stringify(Data);

  const Options = {
    headers: {
      "content-type": "/application/json; charset=UTF-8"
    },
    body: Data,
    method: "POST"

  };

  await fetch(Url, Options)
    .then(res => res.json())
    .then(data => {

      let div = document.createElement("div");
      let h = document.createElement("h3");
      let br = document.createElement("br");
      let small = document.createElement("small");
      let textH = document.createTextNode("O teste para o IP " + data["ip"] + " teve o seguinte resultado: " + data["status"]);
      let textSmall = document.createTextNode(data["saida"]);

      h.appendChild(textH);
      small.appendChild(textSmall);
      div.appendChild(h);
      div.appendChild(br);
      div.appendChild(small);
      
      result.prepend(div);

    })
    .catch(error => {
      console.log("Error: " + error);
    });



}