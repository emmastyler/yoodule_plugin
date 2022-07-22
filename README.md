## Yoodule Plugin
A Simple web scraper application with real-time functiionalites, thanks to Laravel WebSockets by beyondcode.

##Requirements
<ul>
<li>Composer</li>
<li>Node</li>
<li>PHP 7.3+</li>
<li>XAMPP or LAMP or WAMP (depending on your OS)</li>
</ul>

##Instalation Guide
1.  Install Laravel 8.0 (For this package we will need Laravel 8.0)
2.  Install Inertia.js (Inertia.js will be used to connect Laravel backend to Vue.js wihtout the need for writing our own API(endpoint) like any other traditional           pattern.click <a href="https://inertiajs.com">here</a> for setup guideline).
3.  Npm Install to install node modules and all dependencies.
4.  Npm install Vue
5.  In our Webpack.mix.js add vue(3) and also the version linkage.
6.  Rename welcome.blade.php to app.blade.php as inertia.js will require this as the primary file to inject data.
7.  Create Pages folder 
8.  Create a Vue file
9.  From inertia.js documentation for client side setup, paste the required code in app.js
10.  Routes can be created in web.php or custom contollers, and data passed to vue component using the inertia helper or by "use Inertia\Inertia".
11.  Run Npm mix watch to build static mix asset accessible in th public folder
12.  We will be using Bootsrtap for styling so run Npm install Bootstrap like so: nom install Bootstrap.
13.  Laravel Queue jobs will be employed here for sending data to the database. A detailed Setup of Queue Jobs can be found <a href="https://beyondco.de/docs/laravel-websockets/getting-started/introduction">here</a>.
14.  Laravel Websocket will also be used for real-time event monitoring and execution after which the data needed is passed to Laravel Echo in the vue Component. A detailed setup of Laravel Webscokects can be found <a href="https://laravel.com/docs/8.x/queues">here</a>.

<p>Always Open for Suggestion...</p>
