var windspeed = 1;
var windspeedSpeed = 0.5;
var windspeedIndex = 0;

//get data
setTimeout(function(){
  collectData()
}, 5000);

function collectData(){
  $.getJSON("rest.php/weather", function(result){
    var lastRow = result[result.length -1];
    var rpm = lastRow["windspeed"];
    var humidity = lastRow["humidity"];
    var temperature = lastRow["temperature"];
    var rain = lastRow["rain"];

    $("#volatile-wind-info-kph").html(rpm);
    $("#volatile-wind-info-kph").animate({ color: "olive" }, "slow");
    $("#volatile-wind-info-mps").html(rpm);
    $("#volatile-wind-info-mph").html(rpm);
    $("#volatile-wind-info-fps").html(rpm);
    windspeedSpeed = rpm / 60 * 360 / 60 //rpm to rps times degrees devided by frames per second
    $("#volatile-temp-info-c").html(temperature);
    $("#volatile-temp-info-f").html(temperature * 9/5 + 32 );
    $("#volatile-Humidity-info").html(humidity);
    $("#volatile-Rain-info").html(rain);
  });
}


//Rotate the windspeed image
setInterval(function(){
  $("#windspeed-img").css({
          "-webkit-transform": "rotate("+windspeed+"deg)",
          "-moz-transform": "rotate("+windspeed+"deg)",
          "transform": "rotate("+windspeed+"deg)"
      });
  windspeed+=windspeedSpeed;
}, 1000/60);

//Wind speed button handlers
$("#windspeed-btn-right").click(function(){
      if(windspeedIndex < 3) {windspeedIndex++;}
      else {windspeedIndex = 0;}
        $("#card-windspeed-information").animate({
            marginLeft: "-" + windspeedIndex * 100 + "%"
          }, 500);
        });

$("#windspeed-btn-left").click(function(){
      if(windspeedIndex > 0) {windspeedIndex--;}
      else {windspeedIndex = 3;}
        $("#card-windspeed-information").animate({
            marginLeft: "-" + windspeedIndex * 100 + "%"
          }, 500);
        });

//TEMPERATURE
$("#temp-btn-right").click(function(){
      if(windspeedIndex < 1) {windspeedIndex++;}
      else {windspeedIndex = 0;}
        $("#card-temperature-information").animate({
            marginLeft: "-" + windspeedIndex * 100 + "%"
          }, 500);
        });

$("#temp-btn-left").click(function(){
      if(windspeedIndex > 0) {windspeedIndex--;}
      else {windspeedIndex = 1;}
        $("#card-temperature-information").animate({
            marginLeft: "-" + windspeedIndex * 100 + "%"
          }, 500);
        });
