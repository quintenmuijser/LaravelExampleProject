# About the project
 This laravel project is to demonstrate my current skills as a PHP developer and my knowledge of laravel.

 It was started on 22-7-2021 and should be seen as a Work in progress.



# Current contents

<h4>Controllers:<h4>
<ul>
    <li>ShoppingCartController</li>
    <li>ProductController</li>
    <li>CategoryController</li>
</ul>

<h4>Models:<h4>
<ul>
    <li>ShoppingCart</li>
    <li>ShoppingCartItem</li>
    <li>Product</li>
    <li>Category</li>
</ul>

<h4>Factories:<h4>
<ul>
    <li>ProductFactory</li>
    <li>CategoryFactory</li>
</ul>

<h4>Seeders:<h4>
<ul>
    <li>ProductSeeder</li>
    <li>CategorySeeder</li>
</ul>

<h4>Migrations (in order oldest to newest):<h4>
<ul>
    <li>create_failed_jobs_table</li>
    <li>create_products_table</li>
    <li>create_categories_table</li>
    <li>update_product_table_properties</li>
    <li>update_category_table_properties</li>
    <li>link_products_to_categories</li>
    <li>create_sessions_table</li>
    <li>create_shopping_carts_table</li>
    <li>link_shopping_carts_table</li>
    <li>create_shopping_cart_products</li>
</ul>

<h4>Routes:<h4>
<p>
+--------+-----------+----------------------------------+----------------------+-----------------------------------------------------+------------+
| Domain | Method    | URI                              | Name                 | Action                                              | Middleware |
+--------+-----------+----------------------------------+----------------------+-----------------------------------------------------+------------+
|        | GET|HEAD  | category/all                     |                      | App\Http\Controllers\CategoryController@categories  | web        |
|        | GET|HEAD  | category/{id}                    |                      | App\Http\Controllers\CategoryController@category    | web        |
|        | GET|HEAD  | product/all                      |                      | App\Http\Controllers\ProductController@products     | web        |
|        | GET|HEAD  | product/{id}                     |                      | App\Http\Controllers\ProductController@product      | web        |
|        | GET|HEAD  | shoppingCart                     | shoppingCart.index   | App\Http\Controllers\ShoppingCartController@index   | web        |
|        | POST      | shoppingCart                     | shoppingCart.store   | App\Http\Controllers\ShoppingCartController@store   | web        |
|        | GET|HEAD  | shoppingCart/create              | shoppingCart.create  | App\Http\Controllers\ShoppingCartController@create  | web        |
|        | GET|HEAD  | shoppingCart/{shoppingCart}      | shoppingCart.show    | App\Http\Controllers\ShoppingCartController@show    | web        |
|        | PUT|PATCH | shoppingCart/{shoppingCart}      | shoppingCart.update  | App\Http\Controllers\ShoppingCartController@update  | web        |
|        | DELETE    | shoppingCart/{shoppingCart}      | shoppingCart.destroy | App\Http\Controllers\ShoppingCartController@destroy | web        |
|        | GET|HEAD  | shoppingCart/{shoppingCart}/edit | shoppingCart.edit    | App\Http\Controllers\ShoppingCartController@edit    | web        |
+--------+-----------+----------------------------------+----------------------+-----------------------------------------------------+------------+
<li>

# Future planned content:
1. Create a header / footer and apply styling to the current pages
2. Add CRUD operations (Create/Read/Update/Delete)
3. Add login / register functionality for customers
4. Add a customer section which includes
    - order history
    - adress details
    - basic customer information like name,phone ect
5. Create shopping cart
6. Make it possible to order a product (using sandbox paypal as payment tool)
7. Add a employee section which includes
    - Create / edit / delete product actions
    - Create / edit / delete category actions
8. Create unit tests for project
9. Setup a CI / CD pipeline 


# instructions
<h4>
1. Create a database and edit the database.php located in the config folder to match your database details
</h4>
<br>

<h4>
2. Use the command php artisan migrate:fresh to automaticly setup the database tables needed for this demo project
</h4>
<br>

<h4>
3. (optional) Its possible to automaticly fill the database with test data using commands in the following order

- php artisan db:seed --class=CategorySeeder

- php artisan db:seed --class=ProductSeeder

<p>After using those commands the database should be populated with test data</p>

</h4>

<br>
<h4>4. Start the application using "php artisan serve"</h4>