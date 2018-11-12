<!-- Simple homestation dashboard -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- style CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>WHTR Dashboard</title>
  </head>
  <body>
<header class="col-12">
  <div class="col-3 logo"></div>
</header>
    <div class="container col-sm-11 col-md-6 col-lg-4 col-xl-4 justify-content-center">
      <div class="row">
          <!-- Windspeed card BEGIN-->
        <div class="card-spacer col-6">
          <div class="col-1"></div>
          <div class="card-parent col-11">
            <div class="card-title col-12">Windspeed</div>
              <div class="col-12 card-content">
                <div id="windspeed-img"></div>
                <div id="card-windspeed-information">
                <div id="wind-info-1">
                  <div class="col-12 information-type">KPH</div>
                  <div id="volatile-wind-info-kph" class="col-12">11.5</div>
                </div>
                <div id="wind-info-2">
                  <div class="col-12 information-type">MPS</div>
                  <div id="volatile-wind-info-kph" class="col-12">3.2</div>
                </div>
                <div id="wind-info-3">
                  <div class="col-12 information-type">MPH</div>
                  <div id="volatile-wind-info-kph" class="col-12">6.4</div>
                </div>
                <div id="wind-info-4">
                  <div class="col-12 information-type">FPS</div>
                  <div id="volatile-wind-info-kph" class="col-12">2.3</div>
                </div>
              </div>
                <div id="windspeed-control">
                  <div id="windspeed-btn-left"></div>
                  <div id="windspeed-btn-right"></div>
                </div>
            </div>
          </div>
        </div>
          <!-- Windspeed card END -->
          <!-- Temperature card BEGIN -->
          <div class="card-spacer col-6">
            <div class="col-1"></div>
            <div class="card-parent col-11">
              <div class="card-title col-12">Temperature</div>
                <div class="col-12 card-content">
                  <div id="temperature-img">
                    <div id="temperature-bar"></div>
                  </div>
                  <div id="card-temperature-information">
                  <div id="temp-info-1">
                    <div class="col-12 information-type">°C</div>
                    <div id="volatile-temp-info-c" class="col-12">17.6</div>
                  </div>
                  <div id="temp-info-2">
                    <div class="col-12 information-type">°F</div>
                    <div id="volatile-temp-info-f" class="col-12">67.4</div>
                  </div>
                </div>
                  <div id="temp-control">
                    <div id="temp-btn-left"></div>
                    <div id="temp-btn-right"></div>
                  </div>
              </div>
            </div>
          </div>
            <!-- Temperature card BEGIN -->
    </div>
    <div class="row">
      <!-- Humidity -->
      <div class="card-spacer col-6">
        <div class="col-1"></div>
        <div class="card-parent col-11">
          <div class="card-title col-12">Humidity</div>
            <div class="col-12 card-content">
              <div id="Humidity-img">
              </div>
              <div id="card-Humidity-information">
              <div id="Humidity-info-1">
                <div class="col-12 information-type">%</div>
                <div id="volatile-Humidity-info" class="col-12">44.4</div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="card-spacer col-6">
        <div class="col-1"></div>
        <div class="card-parent col-11">
          <div class="card-title col-12">Rain</div>
            <div class="col-12 card-content">
              <div id="Rain-img">
              </div>
              <div id="card-Rain-information">
              <div id="Rain-info-1">
                <div class="col-12 information-type">mm3</div>
                <div id="volatile-Rain-info" class="col-12">1.23</div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="custom.js"></script>
  </body>
</html>
