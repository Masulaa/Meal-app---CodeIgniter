## Restaurant Menu App
This project is a simple CodeIgniter application that displays a menu of meals. Users can view available meals and order one by clicking a button.

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.



**Clone the Repository** 
```
git clone https://github.com/your-username/restaurant-menu-app.git
cd restaurant-menu-app
```


## Run these commands in terminal

```
php spark migrate
php spark db:seed MealSeeder
php spark serve
```

## Usage
Open http://localhost:8080/meals in your browser to view the list of meals.
Click the Order button next to any meal to see an order confirmation message.
