
var slider1 = document.getElementById("slider1");
var slider2 = document.getElementById("slider2");
var slider3 = document.getElementById("slider3");
var selector = document.getElementById("selector");
var selectValue = document.getElementById("selectValue");
selectValue.innerHTML= slider3.value;

slider1.oninput = function(){
  selector.style.left = this.value;
  selectValue.innerHTML = this.value;
}
slider2.oninput = function(){
  selector.style.left = this.value;
  selectValue.innerHTML = this.value;
}
slider3.oninput = function(){
  selector.style.left = this.value;
  selectValue.innerHTML = this.value;
}


$(document).ready(function () {
  $(".past").click(function () {
    if(!($(this).hasClass('active'))){
      $("#slider1").toggle();
      slider3.style.display = "none";
      slider2.style.display = "none";
      selectValue.innerHTML= slider1.value;
      $(this).addClass('active');
      $(".future").removeClass('active');
      $(".current").removeClass('active');
    }
  });

  $(".current").click(function () {
    if(!($(this).hasClass('active'))){
      $("#slider2").toggle();
      slider2.disabled = true;
      slider3.style.display = "none";
      slider1.style.display = "none";
      selectValue.innerHTML= slider2.value;
      $(this).addClass('active');
      $(".future").removeClass('active');
      $(".past").removeClass('active');
    }
  });

  $(".future").click(function () {
    if(!($(this).hasClass('active'))){
      $("#slider3").toggle();
      slider2.style.display = "none";
      slider1.style.display = "none";
      selectValue.innerHTML= slider3.value;
      $(this).addClass('active');
      $(".current").removeClass('active');
      $(".past").removeClass('active');
    }
  });

});

var map;
function init() {
  // create map and set center and zoom level
  map = new L.map('map');
  map.setView([39.9526,-75.1652],13);
  
  // create wms layer
  var pollenlayer = L.tileLayer.wms('http://localhost:8080/geoserver/pollen/wms', {
    layers: 'pollenConcentration:2098year_rcp26_MPI.M.MPI.ESM.LR_r1i1p1.UHOH.WRF361H',
    // layers: 'bayernpollen:osmpollen',
    format: 'image/png',
    transparent: true
  });

  pollenlayer.addTo(map);
}
