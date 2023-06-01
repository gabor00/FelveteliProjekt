## Telepítés
Kövesd az alábbi lépéseket a projekt telepítéséhez és beállításához a saját gépeden:

## Előfeltételek
Győződj meg róla, hogy a következő szoftverek telepítve vannak a gépeden:

    PHP (X.X.X verzió)

    Composer (X.X.X verzió)

    MySQL (X.X.X verzió)
    
    Git (X.X.X verzió)

## Repository klónozása

1. Nyisd meg a terminált és navigálj abba a könyvtárba ahova telepíteni szeretnéd a projektet.

2. Majd az alábbi parancs segítségével klónozhatod a repositoryt:

    git clone https://github.com/gabor00/FelveteliProjekt

## Függöségek telepítése

1. Navigálj a projekt mappába a következ módon:
    
    cd FelveteliProjekt

2. Az alábbi Composer parancs segítségével telepítheted a függőségeket:

    composer install

## Környezet beállítása

1. Hozz létre egy .env fájlt a .env.example fájl másolataként:

    cp .env.example .env

2. Generálj egy új alkalmazás kulcsot:

    php artisan key:generate

3. Majd frissitsd a .env fájlt a szükséges konfigurációs beállításokkal.

## Adatbázis beállítása

1. Hozz létre egy új MySQL adatbázist a projekthez.

2. A .env fájlban frissitsd az adatbázis hitelesítési adatokat:

    DB_CONNECTION=mysql

    DB_HOST=127.0.0.1

    DB_PORT=3306

    DB_DATABASE=your_database_name

    DB_USERNAME=your_username

    DB_PASSWORD=your_password

3. Futtasd az adatbázis migrációt a szükséges táblák létrehozásához:

    php artisan migrate

## Az alkalmazás futtatása

1. Inditsd el a helyi fejlesztői szervert:

    php artisan serve

2. Nyiss meg egy böngészőt és látogass el a http://localhoast:8000 címre.