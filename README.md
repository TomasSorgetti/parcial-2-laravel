## todo

-   [ ] Fix delete: no deberia dejar eliminar una categoria o level si un ejercicio la utiliza (quitar el cascade en el delete)
-   [x] Add description to exercise & categories
-   [ ] Add search input to admin dashboard

## How to start

1. Connect to MySQL with `mysql -u root`
2. Run `CREATE DATABASE sorgetti_tomas;`
3. Run `composer install`
4. Run `npm install`
5. Run `php artisan storage:link`
6. Run `php artisan migrate:refresh --seed`
7. Run `npm run dev` or `npm run build`
8. Run `php artisan serve`
9. Go to `http://localhost:8000`
