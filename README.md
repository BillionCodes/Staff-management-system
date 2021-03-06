## About SMS

SMS is a web application used for HRM of staffs with robust authentication and access manangement system made in lastest Laravel 8 Framework and MySQL.

-   [Simple, fast routing engine of laravel is used](https://laravel.com/docs/routing).

-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent) is used for database queries.
-   Efficient usage of laravel [relationships](https://laravel.com/docs/7.x/eloquent-relationships).

-   [Gates](https://laravel.com/docs/7.x/authorization) used for authorizations.
-   [Session](https://laravel.com/docs/7.x/session) used for remembering the logged in user.
-   Optimal usage of laravel [advanced routing](https://laravel.com/docs/4.2/routing)
-   Fully responsive website across all devices and screen sizes.

SMS is fast and easy to use and can be customized easily according to client project

<img src="./readme_images/login.png" align="center">
<p align="center">Login Page</p>

<img src="./readme_images/admin.index.png" align="center">
<p align="center">Admin Dashboard</p>

<img src="./readme_images/employee.index.png" align="center">
<p align="center">Staff Dashboard</p>

## Usage

### Functions

It has two sides staff and admin side.
**Employee** has:

-   Attendance module
    -   Register attendance [The images have 127.0.0.1 as IP because it was being tested locally, on live server it will catch client IP using laravel method Request()->ip]
        -   While recording user public IPv4 and current location in address format using reverse geocoding.
    -   List attendances
-   Leaves
    -   Apply for leaves
    -   Review leave status applied
-   Expenses
    -   Claim for an expense
    -   Review expenses claimed
-   Self
    -   View Holiday List
    -   Print salary slip
-   Profile - Set profile information - Change password
    <img src="./readme_images/employee.profile.png" align="center">
    <p align="center">Staff profile</p>
    **Admin** has:
-   Staff module

    -   Add employee
    <img src="./readme_images/admin.add.employee.png" align="center">
    <p align="center">Staff profile</p>

    -   View staffs
    <img src="./readme_images/admin.list.employee.png" align="center">
    <p align="center">Staff profile</p>

    -   Monitor staff attendance
    <img src="./readme_images/admin.attendance.employee.png" align="center">
    <p align="center">Staff profile</p>

-   Authorizate
    -   Leaves applied
    -   Expenses claimed
-   Holidays
    -   Add, edit, remove holidays according to company regulations

### Configuration

Make sure that this project has proper file permissions.
To run this project, you will need to set up a database and a smtp server for password reset and add it to your .env file

After that, you run migration to get it running.

```console
php artisan migrate
```

And link public folder to storage for file uploads

```console
php artisan storage:link
```

To get initial test data in database

```console
php artisan db:seed
```

Run server

```console
php artisan serve
```

To see the API documentation, nagivate to

```console
localhost:8000/docs
```

### Postman Doc

A postman collection has also been generated alongside the API documentation
the collection will be available in public/docs/collection.json, so it can be accessed by visiting localhost:8000/docs/colllection.json or by importing the json file on Postman

-   Postman collection
    <img src="./readme_images/postman.png" align="center">
    <p align="center">API doc in Postman</p>

## Themes, plugins, packages used for developement

Following are the assets used for this project

-   [AdminLTE](https://adminlte.io/) a bootstrap and jquery based admin dashboard theme
-   [DataRangePicker](https://www.daterangepicker.com/) for date pickers
-   [DataTables](https://datatables.net/) for responsive table
-   [Intervention/Image](http://image.intervention.io/getting_started/installation) package in laravel for image upload optimisaton
-   [HTML Geolocation API](https://www.w3schools.com/html/html5_geolocation.asp) which works only on SSL, for using make sure your domain is SSL certified.
-   [Nominatim](https://nominatim.org/) an open source geocoding API for reverse geocoding.
