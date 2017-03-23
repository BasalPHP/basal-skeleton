# Basal skeleton
Skeleton project for Basal.

## Installation
Create a project via Composer:
```
$ composer create-project basal/basal-skeleton:dev-master [project]
```
Go to the newly created project folder and copy ```.env.dist``` to ```.env```:
```
$ cp .env.dist .env
```
Run a native PHP server:
```
$ php -S localhost:8080 -t public
```
Go to your browser: [http://localhost:8080](http://localhost:8080).