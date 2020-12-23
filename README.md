# json-rpc
Laravel json-rpc test

<p><strong>How to use</strong></p>
weather-history (json-rpc server)
<li>1. Edit .env file to set your MySql settings
<li>2. Run "php artisan migrate" to create DB table
<li>3. Run "php artisan db:seed" to fill DB table with dummy data
<li>4. Run "php artisan serve" to start it
<br>
site (json-rpc client)
<li>1. Edit .env file , set JSON_RPC_SERVER_URL= to url where json-rpc server started (127.0.0.1:8000 by default)
<li>2. Run "php artisan serve" to start it
<br>
