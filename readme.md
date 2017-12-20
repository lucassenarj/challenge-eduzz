# English

## Eduzz Challenge

### Configuring host

1 - Access `challenge-eduzz` folder by the terminal

2 - Execute `composer install`

3 - Create a mysql DB using `CREATE DATABASE eduzz;`

4 - Open `.env` file and edit the following lines:
```
    DB_DATABASE=eduzz
    DB_USERNAME=root
    DB_PASSWORD=pass
```

5 - Execute `php artisan migrate --seed`

6 - Execute `php artisan jwt:secret`

7 - Execute `php -S localhost:8000 -t public`

8 - Access `http://localhost:8000/` to front end

9 - Click `Login` and use `administrator@admin.com` for email and `administrator` for password

### Informations
Lumen 5.5 version with [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki) plugin for authentication.

### Documentations
- [Lumen](https://lumen.laravel.com/docs/5.5)
- [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki)

# Português

## Teste Eduzz

### Configurando o servidor
1 - Acesse a pasta `challenge-eduzz` pelo terminal

2 - Execute `composer install`

3 - Crie um banco de dados no mysql: `CREATE DATABASE eduzz;`

4 - Abra o arquivo `.env` e configure as seguintes linhas:
```
    DB_DATABASE=eduzz
    DB_USERNAME=root
    DB_PASSWORD=password
```

5 - Execute `php artisan migrate --seed`

6 - Execute `php artisan jwt:secret`

7 - Execute `php -S localhost:8000 -t public`

8 - Acesse `http://localhost:8000/` para o front end

9 - Click `Login` e use `administrator@admin.com` para o email e `administrator` para a senha


### Informações
Utilizada versão 5.5 do Lumen, utilizando o plugin [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki) para autenticação.

### Documentações
- [Lumen](https://lumen.laravel.com/docs/5.5)
- [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki)
