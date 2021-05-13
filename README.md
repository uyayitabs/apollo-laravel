### Install PHP dependencies
```
composer install
```
### (Optional - if to truncate the randoms & breakdowns tables)
```
php artisan migrate:fresh
```
### (Optional - To generate new random & breakdown records)
### Check app/Console/Commands/CreateTestData.php
```
php artisan create_data --min={integer} --max={integer}
php artisan create_data --min=1 --max=10
```
### (Install JavaScript dependencies)
```
npm install
```
### Serve API (http://127.0.0.1:8000)
```
php artisan optimize && php artisan serve
```
### Compile front-end
```
npm run watch
```