# Val's Rain Middle-man API

Collects data as a proxy API to DOST's web-api.

http://weather.asti.dost.gov.ph/web-api/index.php/api/data/1520

Accessing the data from a limited-memory IoT devices causes an overflow.

This middle-man API slices and isolates the data on a PHP-capable web server before exposing it to be consumed by a smaller IoT device.
