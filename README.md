# laravel-settings

## Requirements

#### PHP 7 > PHP 7.1

### How to use the library

Install via the composer

### Using the composer(Recomended)

Either run the following command in the root directory of your project:

```
composer require otifsolutions/laravel-settings
```
Then simply run migrations to run the Setting Migration
```
php artisan migrate
```

### Namespace for Model Setting

```
use OTIFSolutions\Laravel\Settings\Models\Setting;
```

### Update or Create a new Setting

```
Setting::set('KEY_GOES_HERE','VALUE_GOES_HERE','TYPE_GOES_HERE')
```

Type can be : 'STRING','BOOL','INT','JSON','DOUBLE'

### Get a Setting

```
Setting::get('KEY_GOES_HERE')
```

If Setting does not exist the system will return null

### Details 

This pakage is used to add generic Settings structure to the Laravel project. 
