# json-rpc
Laravel json-rpc test

<p><strong>How to use</strong></p>
weather-history (json-rpc server)
<li>Edit .env file to set your MySql settings
<li>Run "php artisan migrate" to create DB table
<li>Run "php artisan db:seed" to fill DB table with dummy data
<li>Run "php artisan serve" to start it
<br>
site (json-rpc client)
<li>In .env file set param JSON_RPC_SERVER_URL to url where json-rpc server started (127.0.0.1:8000 by default)
<li>Run "php artisan serve" to start it
<br>
<br>
Access to server API using POST request to address server_url/api/
<br>
Available methods:
<br>
{"jsonrpc": "2.0", "method": "weather.getByDate", "params": {"date": "2020-02-30"}, "id": 1}
<br>
{"jsonrpc": "2.0", "method": "weather.getHistory", "params": {"lastDays": 30}, "id": 1}

