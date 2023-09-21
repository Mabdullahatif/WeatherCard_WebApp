<?php
$status="";
$msg="";
$city="";
if(isset($_POST['submit'])){
    $city=$_POST['city'];
    $city = urlencode($city); // Encode the city name
    $url="http://api.openweathermap.org/data/2.5/weather?q=$city&appid=49c0bad2c7458f1c76bec9654081a661";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if($result['cod']==200){
        $status="yes";
    }
    else{
        $msg=$result['message'];
    }
}

// Function to fetch a random photo from Unsplash API based on a query
function getRandomPhotoByQuery($query) {
    $accessKey = 'J7NyqWijLsOykuPlqdcdXDMlVdQMKFUs6q7foiahn1Q';
    $query = urlencode($query);
    $url = "https://api.unsplash.com/photos/random?query=$query&client_id=$accessKey";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);
    return $result['urls']['full'] ?? ''; // Returns the URL of the full-size photo
}
?>

<html lang="en" class=" -webkit-">
<head>
    <meta charset="UTF-8">
    <title>Weather Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poiret+One);

        body {
            /* Remove the background-color property */
            background: url("<?php echo getRandomPhotoByQuery($result['weather'][0]['main']); ?>") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poiret One', cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

    .form {
        margin-top: 10px;
        margin-bottom: 0px;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .text {
        width: 200px;
        padding: 11px;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
    }

    .submit {
        margin-top: 10px;
        background-color: #2980b9;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 100px;
        height: 40px;
        border-radius: 5px;
        font-size: 16px;
    }

    .submit:hover {
        background-color: #1a5276;
    }

        .error {
            color: #c0392b;
            font-size: 14px;
            margin-top: 10px;
        }

        .widget {
            display: flex;
            flex-direction: column;
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease-in-out;
        }

        .weatherIcon {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 80px;
            color: #34495e;
        }

        .weatherInfo {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .temperature {
            font-size: 60px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #34495e;
        }

        .description {
            font-size: 24px;
            color: #7f8c8d;
            font-weight: bold;
        }

        .place {
            font-size: 18px;
            color: #95a5a6;
            font-weight: bold;
        }

        .date {
            padding: 10px 20px;
            background-color: #34495e;
            color: #fff;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            border-radius: 10px;
        }

        .card {
            width: 300px;
            height: 350px;
            background-image: linear-gradient();
            border-radius: 20px;
            transition: all .3s;
            margin-bottom: 300px;
        }

        .card2 {
            width: 300px;
            height: 350px;
            border-radius: 20px;
            transition: all .2s;
        }

        .card2:hover {
            transform: scale(0.98);
            border-radius: 20px;
        }

        .card:hover {
            box-shadow: 0px 0px 30px 1px rgba(0, 0, 0, 0.60);
        }

        .form1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
       <div class="form">
           <form method="post">
               <input type="text" class="text" placeholder="Enter city name" name="city" value="<?php echo preg_replace('/[^a-zA-Z]/', ' ', $city)?>"/>
               <input type="submit" value="&#x1F50D; Search" class="submit" name="submit"/>
               <span class="error"><?php echo $msg?></span>
           </form>
       </div>
       <?php if($status=="yes"){?>
       <div class="card">
          <div class="widget card2">
              <div class="weatherIcon">
                  <img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon']?>@4x.png"/>
              </div>
              <div class="weatherInfo">
                  <div class="temperature">
                      <?php echo round($result['main']['temp']-273.15)?>°C
                  </div>
                  <div class="description">
                      <?php echo $result['weather'][0]['main']?>
                  </div>
                  <div class="place">
                      <?php echo $result['name']?>
                  </div>
              </div>
              <div class="date">
                  <?php echo date('d M',$result['dt'])?>
              </div>
          </div>
       </div>
       <?php } ?>
      </div>
</body>
</html>