## ClearWater
Custom PHP5 MVC Framework. 

Old project from 2013, revived to use composer.

## What's ClearWater?
This Model-View-Controller framework is a personal project of mine to further understand and improve upon this popular concept. 
It is inspired off of several different frameworks. This projects aims to be as modular as possible.

This application makes no assumptions on the domain layer, rather gives you the ability to use your own modules
to plugin functionality (such as storage). 

## What's Included?
Sample application is included to view how the concept comes together, as well as the core components.

## How to use
Place the html folder where your static content is served (assets such stylesheets/images/scripts). To configure,
simply change the name of the application folder in Applications/ (ex: Applications/Sample -> Applications/MyApplication),
then point to this by changing the name in the configuration file in the include folder where you initially placed 
the html content (ex: html/include/config.php). Once completed, head to the Bootstrap file in your application and set the route you wish your end users to default to.

In the future, composer will be used for loading/installing the framework. You can add as many applications you wish under this framework.

## Status
Development stages, in active development.

## License
Unlicensed
