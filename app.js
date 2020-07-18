const form = document.forms["teste"];
form["testar"].addEventListener("click", GetTest);

function GetTest(){
  event.preventDefault();

  let ip = form["ip"].value ? form["ip"].value : "8.8.8.8";
  let nPing = form["nping"].value ? form["nping"].value : 4;
  DoPing(ip, nPing);
  
}

function DoPing(ip, n) {
  console.log(ip + " " + n);
}
