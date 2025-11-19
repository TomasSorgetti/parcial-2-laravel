## todo

-   [ ] Fix delete: no deberia dejar eliminar una categoria o level si un ejercicio la utiliza (quitar el cascade en el delete)
-   [x] Add description to exercise & categories
-   [ ] Add search input to admin dashboard

## How to start

1. Create a database `sorgetti_tomas`

```bash
mysql -u root
CREATE DATABASE sorgetti_tomas;
EXIT;
```

2. Run `composer install`
3. Run `npm install`
4. Run `php artisan storage:link`
5. Run `php artisan migrate:refresh --seed`
6. Run `npm run dev` or `npm run build`
7. Run `php artisan serve`
8. Go to `http://localhost:8000`
