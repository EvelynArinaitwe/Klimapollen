<!DOCTYPE html>
<html>
  <head>
    <title>HTML Google Maps</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

    <link href = "css/design.css" type = "text/css" rel = "stylesheet" />
    <link href = "css/bootstrap.min.css" type = "text/css" rel = "stylesheet" />
    <link href = "css/jquery-ui.min.css" type = "text/css" rel = "stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.css" type="text/css" crossorigin="">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.js" crossorigin=""></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
  </head>
  <body onload="init()">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Klima</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Map<span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
          </ul>
    </nav>

    <div class="container">
      <h3 class="design_heading">KlimaPollen design prototype</h3>
      
        <div class="row">
          <div class="col-sm-8">
            <!-- <div class="map_image"> -->
              <div id="map"></div>
            </div>
          <!-- </div> -->
          <div class="col-sm-4">
            <div class="map_params">
                <!-- <nav class="params">
                  <label for="location">Choose a location:</label>

                  <select name="location" id="location">
                    <option value="bayern">Bayern</option>
                    <option value="munich">Munich</option>
                    <option value="augsburg">Augsburg</option>
                  </select>
                </nav> -->
                <nav class="params">
                  <label for="scenario">Scenario:</label>

                  <select name="scenario" id="scenario">
                    <option value="scenario1">RCP 2.6</option>
                    <option value="scenario2">RCP 4.5</option>
                    <option value="scenario3">RCP 8.5</option>
                  </select>
                </nav>
                <nav class="params">
                  <label for="pollen">Pollen:</label>

                  <select name="pollen" id="pollen">
                    <option value="birch">birch</option>
                    <option value="grasses">grasses</option>
                  </select>
                </nav>
                <nav class="params">
                  <label for="param">Parameter:</label>

                  <select name="param" id="param">
                    <option value="allergy-risk">allergy risk</option>
                    <option value="pollen-amount">pollen amount</option>
                    <option value="start-date-season">start date of season</option>
                    <option value="peak-date">peak date of season</option>
                    <option value="length-season">length of season</option>

                  </select>
                </nav>
                <nav class="params">
                  <label>Year:</label>
                </nav>
                <div class="slider-wrap">
                  <input type="range" min="1989" max="2018" step="1" value="1990" id="slider1" style="display:none">
                  <input type="range" min="1989" max="2018" step="5" value="2003" id="slider2" style="display:none">
                  <input type="range" min="2035" max="2085" step="5" value="2040" id="slider3">
                  <div id="selector">
                    <!-- <div class="selectBtn"></div> -->
                    <div id="selectValue"></div>
                  </div>
                </div>
                <button class="button past">Past</button>
                <button class="button current">Current</button>
                <button class="button future active">Future</button>
            </div>
          </div>
        </div>
    </div>
  </body>

      <script type="text/javascript" src="js/klima-query.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <footer>
    <div class="container">
      <!-- <h5>social klimapollen</h5> -->
          <hr>
              <div class="text-center center-block">
                  <p class="txt-railway">- Klimapollen.com -</p>
                  <br />
                    <a href="https://www.facebook.com/#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                    <a href="https://twitter.com/#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                    <a href="https://plus.google.com/#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                    <a href="mailto:eatumusiime@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
              </div>
          <hr>
    </div>
  </footer>

</html>