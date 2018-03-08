# Laravel ShortenAPI for my own ShortURL webapp
Composer package

## Requirements
 - Laravel > 5.5
 - PHP > 7.1

## Installation

 - composer require daika7ana/shortenapi
 - php artisan vendor:publish the following Provider:
 
   `Daika7ana\Shortenapi\ShortenapiServiceProvider`
- in %projectroot%/config/shortenapi.php configure your API url with a trailing slash afterwards

   `'api_url'   =>  'http://example.ex/' `

## Usage
- `Shortenapi::shorten('https://example.ex/')`
- `Shortenapi::expand('https://example.ex/6axQe2')`
