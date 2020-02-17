
## changepasswordfirst ##
 
### Installation ###

You can install the package using composer

```
   $ composer require riftone07/changepasswordfirst
```
 
Then add the service provider to config/app.php. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```
    riftone07\changepasswordfirst\ChangePasswordFirstServiceProvider::class,
```
 
### Publish ###
 
As optional if you want to modify the default views, you can publish the views file:
```
    php artisan vendor:publish
```
 
Congratulations, you have successfully installed changepasswordfirst !