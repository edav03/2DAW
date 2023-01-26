export default async function cargarMapa() {
    let apiInput = document.getElementById("apikey").value;
    var headers = new Headers({
      "cache-control": "no-cache"
    });
    var conf = {
      method: "GET",
      mode: "cors",
      headers:headers,
    }
    try{
    const resp1 = await fetch("https://opendata.aemet.es/opendata/api/mapasygraficos/analisis?api_key="+apiInput,conf);
    const data1 = await resp1.json();
    const resp2 = await fetch(data1.datos,conf);
    console.log(data1)
    const mapa = resp2.blob();
    const img = document.createElement("img");
    img.setAttribute("src",URL.createObjectURL(mapa));
    
    form = document.getElementById('form');
    form.style.display = "none";
    let map = document.getElementById("map");
    map.appendChild(img);
    }catch(error){console.log(error)}

      form.style.display = "none";
    /* console.log(apiInput)*/
    }