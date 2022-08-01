Start
 first you run the initial command 
    php artisan migrate:fresh --seed
then run 
    php artisan serve


then you can find customer using tinker

Customer::first()

then you can find customer location

Customer::first()->location

you can find customer cars and also find single car

Customer::first()->car

if you want to find car delivery location

Customer::first()->car->delivery_location

if you want to find car detail

Customer::first()->car->car
Customer::first()->car->car_detail

also you can check thought Car model

Car::first()

Car::first()->order

Car::first()->order->delivery_location

Car::first()->order->car

Car::first()->order->car_detail

so i dont have more time to write test case to test these cases

