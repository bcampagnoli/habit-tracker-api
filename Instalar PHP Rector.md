Instalar PHP Rector
https://github.com/rectorphp/rector OU 
composer require rector/rector --dev

INstalar o pint
composer require laravel/pint --dev



Fiz algumas alterações no arquivo rector.php. Depois disso executei o comando .\vendor\bin\rector --dry-run pra ele exibir as alterações nos arquivos. Depois eu executo o .\vendor\bin\rector pra ele aplicar as mudanças

Tb tem o Pint. ELe formata o código
Pra exibir as alterações, execute .\vendor\bin\pint --test. PRa alterar de fato, é só execitar .\vendor\bin\pint

Fiz algumas alterações no composer.json . Adicionei esses caras:
"lint": "pint",
"rector": "rector",
"test:lint": "pint --test",
"test:rector": "rector --dry-run",
"test:pest": "pest",
"test": [
    "@test:lint",
    "@test:rector"
]

PRa executar eles, é só digitar composer lint, composer rector ....


INstalação do sanctum
php artisan install:api

