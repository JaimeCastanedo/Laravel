# laravelProyect

## Descripción del proyecto
Aplicación web desarrollada con Laravel para gestionar clientes, empleados, inventario y productos.

## Requisitos para ejecutarlo
- PHP 8.1 o superior
- Composer
- Node.js (16+) y NPM o Yarn
- MySQL o MariaDB
- Servidor local (XAMPP, WAMP) o entorno equivalente
- Extensiones PHP: `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`, `fileinfo`

## Pasos básicos de instalación
1. Clona el repositorio:

```
git clone <repo-url>
cd laravelProyect
```

2. Instala dependencias PHP:

```
composer install
cp .env.example .env
```

3. Configura el archivo `.env` (datos de base de datos) y genera la clave de la aplicación:

```
php artisan key:generate
```

4. Ejecuta migraciones y seeders (si procede):

```
php artisan migrate
php artisan db:seed
```

5. Instala dependencias JS y compila assets:

```
npm install
npm run dev
```

6. Levanta el servidor de desarrollo:

```
php artisan serve
```

<p> He seguido también los pasos que pusiste:</p>
<p>1.- Composer create-project laravel/laravel nombre_proyecto
cd nombre_proyecto
Crea un nuevo proyecto Laravel con toda la estructura base y dependencias
necesarias.
</p>
<p>
2.- Composer require laravel/ui
Instala el paquete Laravel UI, que permite generar interfaces básicas de autenƟcación y
frontend (Bootstrap, Vue o React).
</p>
<p>
3.- php arƟsan ui Bootstrap –auth
Genera las vistas de autenƟcación (login, registro, etc.) usando Bootstrap como
framework CSS.
(yes) -> Confirma la sobrescritura de archivos existentes, si Laravel lo solicita.
</p>
<p>
4.- Npm install
Instala las dependencias frontend (Bootstrap, jQuery, etc.) definidas en package.json.
</p>
<p>
5.- Npm run dev
Compila los archivos CSS y JavaScript para desarrollo usando Laravel Mix/Vite.
</p>
<p>
6.- Cambiar/configurar base de datos .env
Configura la conexión a la base de datos en el archivo .env (nombre, usuario,
contraseña).
</p>
<p>
7.- Php arƟsan migrate
Ejecuta las migraciones y crea las tablas en la base de datos (usuarios, contraseñas,
etc.).
</p>
<p>
8.- Composer require jeroennoten/laravel-adminlte
Instala AdminLTE, un panel administraƟvo con diseño profesional para Laravel.
</p>
<p>
9.- php arƟsan adminlte:install –type=full
Instala AdminLTE con todas las vistas, assets, autenƟcación y configuración completa.
</p>
<p>
10.- Copiar el app.blade.php de jeroennoten github
Reemplaza el layout principal para que la estructura HTML base sea compaƟble con
AdminLTE.
</p>

<p></p><p></p>

<p>Y para completar el resto he usado la IA como dijiste</p>

---

## Usuario y contraseña de prueba (si procede)
- Usuario: `admin@example.com`
- Contraseña: `password`

Si los seeders del proyecto crean un usuario de prueba, ejecuta `php artisan db:seed`. Si no, crea el usuario manualmente.

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
