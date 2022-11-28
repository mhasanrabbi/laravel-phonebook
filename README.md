# Installation

### Clone the repo:
``` 
$ git clone https://github.com/mhasanrabbi/laravel-phonebook.git
```

### Change Directory

```
$ cd laravel-phonebook
```
### Install Composer

``` 
$ composer install
```
### Generate APP_KEY 

``` 
$ php artisan key:generate
```

### Change below credentials with your own config in `.env`
``` 
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### Run Database Migration

``` 
$ php artisan migrate
```

### Start Local Development Server

``` 
$ php artisan serve
