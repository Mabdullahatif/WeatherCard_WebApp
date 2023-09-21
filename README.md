# Weather Card Web App

This is a simple web application that allows users to check the weather for a specific city and displays it in a stylish "weather card." The application fetches weather data from the OpenWeatherMap API and displays it along with a background image from Unsplash. Users can input the name of a city, and the application will provide the current temperature, weather description, and city name.

## Table of Contents

- [Features](#features)
- [Interface](#interface)
  - [Screen Elements](#screen-elements)
  - [Weather Card](#weather-card)
  - [Weather Cards Sample outputs](#weather-cards-sample-outputs)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Running Locally with XAMPP](#running-locally-with-xampp)
- [Usage](#usage)
- [Contributing](#contributing)
- [Initial Contributor](#initial-contributor)

## Features

- Fetches real-time weather data from the OpenWeatherMap API.
- Displays weather information in a visually appealing "weather card."
- Automatically sets a background image related to the weather from Unsplash.
- Responsive design for different screen sizes.

## Interface

 - ## **Search Element**: <br>
      ![w3](https://github.com/Mabdullahatif/WeatherCard_WebApp/assets/113658337/109f2bb8-04ef-44b3-a8e6-fc8ce5df5994)
   
      ![w4](https://github.com/Mabdullahatif/WeatherCard_WebApp/assets/113658337/2a219903-1f32-42ec-bf4f-1a52555f9b2b)

- ## **Weather Card**: <br>
     <img src="https://github.com/Mabdullahatif/WeatherCard_WebApp/assets/113658337/09dd3ac5-4e54-4c6a-8740-7290beec14e9" alt="Main Screen" width="200" height="300">

- ## **Weather Cards Sample outputs**: <br>
     <img src="https://github.com/Mabdullahatif/WeatherCard_WebApp/assets/113658337/e859dc0a-2a2d-44b4-ae59-79ff632b330c" alt="Welcome Screen" width="600" height="300">
     <img src="https://github.com/Mabdullahatif/WeatherCard_WebApp/assets/113658337/c54b87c9-ef70-495d-ba2c-5ff544d1595a" alt="Welcome Screen" width="600" height="300">


## Prerequisites

Before you begin, ensure you have met the following requirements:

- You need to have an [OpenWeatherMap API Key](https://openweathermap.org/api) to fetch weather data.
- You need to have a [Unsplash API Access Key](https://unsplash.com/developers) to fetch background images.

## Getting Started

1. Clone the repository to your local machine:

```bash
git clone https://github.com/Mabdullahatif/WeatherCard_WebApp.git
```

2. Create a file named `config.php` in the project root directory and add your OpenWeatherMap API key and Unsplash API access key as follows:

```php
<?php
$openWeatherMapApiKey = 'YOUR_OPENWEATHERMAP_API_KEY';
$unsplashApiKey = 'YOUR_UNSPLASH_API_ACCESS_KEY';
```

Replace `YOUR_OPENWEATHERMAP_API_KEY` and `YOUR_UNSPLASH_API_ACCESS_KEY` with your API keys.

3. Upload the project files to your web server.

## Running Locally with XAMPP

To run the application locally using XAMPP, follow these steps:

1. **Install XAMPP:**
   If you haven't already, download and install XAMPP from the official website for your operating system:
   - [XAMPP for Windows](https://www.apachefriends.org/index.html)
   - [XAMPP for macOS](https://www.apachefriends.org/index.html)
   - [XAMPP for Linux](https://www.apachefriends.org/index.html)

2. **Start XAMPP:**
   After installation, start the XAMPP control panel and ensure that both the Apache (web server) and MySQL (database server) services are running. You can usually start them by clicking the "Start" button next to each service.

3. **Create a New Project Folder:**
   Create a new folder in XAMPP's web server directory (usually `htdocs`). You can name the folder anything you like, but for this example, let's call it "weather-app."

4. **Move Your PHP Code:**
   Move your PHP code and any necessary files (like the `config.php` file with API keys) into the "weather-app" folder you just created within `htdocs`.

5. **Access Your Code in a Web Browser:**
   Open your web browser and navigate to the following URL, replacing `"weather-app"` with the actual name of your project folder:
   `http://localhost/weather-app`

6. **Testing Your PHP Code:**
   You should now see your PHP application running on your local XAMPP server. You can enter a city name and test your weather card application locally.

Remember to configure your `config.php` file with the actual API keys you have for OpenWeatherMap and Unsplash.

## Usage

Open the web application in your browser by accessing the project URL.
Enter the name of the city for which you want to check the weather in the input field.
Click the "Search" button or press Enter.
The weather information will be displayed in a weather card with a background image related to the weather.

## Contributing

Feel free to contribute to this project by submitting bug reports, feature requests, or pull requests. Let's keep the spirit of Assembly programming alive!

## Initial Contributor

So far, all the work in this repository is purely done by me.

## LinkedIn &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Facebook &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Instagram &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Twitter
<a href="https://www.linkedin.com/in/muhammad-abdullah-atif/">
    <img height="50" src="https://cdn2.iconfinder.com/data/icons/social-icon-3/512/social_style_3_in-306.png"/>
</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

<a href="https://www.facebook.com/abdullahatif362/">
    <img height="50" src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/facebook-64.png"/>
</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="https://www.instagram.com/abdullah._.atif/">
    <img height="50" src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_3-instagram-64.png"/>
</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;

<a href="https://www.twitter.com/abd_allah_atif/">
    <img height="50" src="https://cdn2.iconfinder.com/data/icons/threads-by-instagram/24/x-logo-twitter-new-brand-64.png"/>
</a>
