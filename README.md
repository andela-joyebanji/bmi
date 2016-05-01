# bmi
A Laravel 5.2 package to calculate body mass index

**Note: This is for package development learning purposes only, it is not intended as a tool.**

##Installation
1. `composer require dlai286/bmi`
2. In `config/app.php` add `dlai286\BMI\BMIServiceProvider::class` to service providers
3. `php artisan serve`, go to `localhost:8000/bmi` or equivalent to use BMI calculator