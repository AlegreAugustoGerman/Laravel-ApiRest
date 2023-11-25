# Laravel-ApiRest
Prueba de v1 y v2 

#comandos utilizados:

php artisan make:model Post -cmf   
c : controller
m : model
f : factory

php artisan migrate --seed

php artisan make:controller Api/V1/PostController --api --model=Post

php artisan route:list

--------------------------------------------------------------------
proyectos de equipos siempre trabajar por versiones,
porque aunque no esté planificado ahora otra versión si lo estará en un futuro
--------------------------------------------------------------------
unicos 2 archivos posible para resource 

php artisan make:resource V1/PostResource  
php artisan make:resource V2/PostCollection

composer require laravel/sanctum

Laravel Sanctum proporciona un sistema de autenticación para SPA (aplicaciones de una sola página), aplicaciones móviles y API simples basadas en tokens. Sanctum permite que cada usuario de su aplicación genere múltiples tokens API para su cuenta. A estos tokens se les pueden otorgar habilidades / alcances que especifican qué acciones pueden realizar los tokens. Fuente: https://laravel.com/docs/8.x/sanctum#introduction
---------------------------------------

