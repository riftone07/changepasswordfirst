
## changepasswordfirst ##

![CP](https://repository-images.githubusercontent.com/241159390/f5b32b80-5276-11ea-8f39-5ece24d8293e)
 
### Installation ###

You can install the package using composer

```
   $ composer require riftone07/changepasswordfirst
```
 
Then add the service provider to config/app.php. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```
    riftone07\changepasswordfirst\ChangePasswordFirstServiceProvider::class,
```

### Run the migrations ###
```
   php artisan migrate
``` 


### Using a middleware ###

This package comes with ``` PasswordExpired ``` middleware. You can add them inside your app/Http/Kernel.php file


```
protected $routeMiddleware = [
    // ...
     'password_expired' => \riftone07\changepasswordfirst\Http\Middleware\PasswordExpired::class
];
```

Then you can protect your routes using middleware rules except your connection routes:

```

Route::group(['middleware' => ['password_expired']], function () {
    //
});
```

### Publish ###
 
As optional if you want to modify the default views, you can publish the views file:
```
    php artisan vendor:publish
```
 
Congratulations, you have successfully installed changepasswordfirst !
