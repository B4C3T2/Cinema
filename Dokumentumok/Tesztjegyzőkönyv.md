
## 4. Tesztelési táblák

| Készítette | Majoros Norbert |
| --- | --- |
| Beosztás | Frontend fejlesztő – Junior |
| Dátum | 2021.05.18. |
| Projekt | **HyperCinema** |
| Vizsgálat eszköze | Google Chrome |

**Főoldal és foglalási oldal frontendbeli tesztelése**

|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Teszt eredménye |
| ---   | ---                         | ---             | ---    | ---          | ---            | ---             |
| 1. | Weboldal felület | Nav baron lévő Home gombra kattintás | A Home feliratú gomb Főoldalra való átjutást eredményezi. | ----------------- | A Home gomb lenyomásával vissza térünk a Főoldalra | Megfelelt |
| 2. | Weboldal felület | Nav baron lévő Regisztráció gombra kattintás | A Regisztráció gomb lenyomásával átirányít a regisztrációs felületre. | ----------------- | A Regisztráció gomb lenyomását követőn átirányít a regisztrációs oldalra. | Megfelelt |
| 3. | Weboldal felület | Nav baron lévő Bejelentkezés gombra kattintás |A Bejelentkezés gomb lenyomásával átirányít a bejelentkezés felületre. | ----------------- | A Regisztráció gomb lenyomását követőn átirányít a regisztrációs oldalra. | Megfelelt |
| 4. | Weboldal felület | Főoldalon lévő Filmborítókra kattintás | Bejelentkezés nélkül nem nyitható meg a foglalási felület ellenben igen. | ----------------- | A Filmborítóra való kattintás nem csinál semmit, mind addig amíg nem jelentkeztünk be. Ezt követően a foglalási oldalra irányít át. || Megfelelt |
| 5. | Weboldal felület | Főoldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | 1080x1920 kép van beszúrva | Illetszkednie minden oldalra, a böngésző méretezése közben | Nem felelt meg |
| 6. | Weboldal felület | Foglalási oldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | 1080x1920 kép van beszúrva | Illetszkednie minden oldalra, a böngésző méretezése közben | Nem felelt meg |

| Készítette | Heim József |
| --- | --- |
| Beosztás | Backend fejlesztő – Junior |
| Dátum | 2021.05.18. |
| Projekt | **HyperCinema** |
| Vizsgálat eszköze | Google Chrome, phpMyAdmin adatbázis |

**Foglalás és lemondás backendbeli tesztelése**

|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Teszt eredménye |
| ---   | ---                         | ---             | ---    | ---          | ---            | ---             |
| 7. | Weboldal mögötti php kód | Foglalás gomb működésének vizsgálata | Foglalás gomb megnyomása székek kiválasztása nélkül | ----------------- | Megjelenik egy tájékoztató üzenet a formon, és nem kerül adat az adatbázisba | Megfelelt |
| 8. | Weboldal mögötti php kód | Foglalás gomb működésének vizsgálata | Foglalás gomb megnyomása székek kiválasztával | ----------------- | Bekerülnek a foglalási adatok az adatbázisba | A film azonosító nem adódik át, ezért csak beégetett adattal működik |
| 9. | Weboldal mögötti php kód | Lemondás gomb működésének vizsgálata | Lemondás gomb megnyomása nem létező foglalásazonosítóval | foglalásazonosító = 100 | Nem törlődik a foglalás az adatbázisból | Megfelelt |
| 10. | Weboldal mögötti php kód | Lemondás gomb működésének vizsgálata | Lemondás gomb megnyomása helyes foglalásazonosítóval | foglalásazonosító = 1 | Törlődik a foglalás az adatbázisból | Nem törlődik a rekord az adatbázisból |

| Készítette | Nagy Milán |
| --- | --- |
| Beosztás | Backend fejlesztő – Junior |
| Dátum | 2021.05.18. |
| Projekt | **HyperCinema** |
| Vizsgálat eszköze | Google Chrome, phpMyAdmin adatbázis |

**Login és regisztráció backendbeli tesztelése**

|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Teszt eredménye |
| ---   | ---                         | ---             | ---    | ---          | ---            | ---             |
| 11. | Backend tesztelés | Regisztráció adatbázisba történő megjelenítése | Böngésző általi tesztelés | Regisztráció esetén a regisztrált felhasználót a phpmyadmin user táblájába helyezi(gyors). | A regisztráció sikeres. | Megfelelt |
| 12. | Backend tesztelés | Bejelentkezés azonosítása | Böngésző általi tesztelés | Regisztráció után megadott adatokkal képes a felhasználó bejelentkezni. | Megtörténik a bejelentkezés. | Megfelelt | 
| 13. | Backend tesztelés | Bejelentkezés nem regisztrált adatokkal | Böngésző általi tesztelés | Nem regisztrált felhasználó nem képes bejelentkezni. | A bejelentkezés sikertelen. | Nem felelt meg |
| 14. | Backend tesztelés | Regisztráció nem megfelelő hosszúságú jelszó megadása | Böngésző általi tesztelés | ----------------- | Regisztráció esetén a jelszó hosszának legalább 3 karakter hosszúnak kell lennie. | Nem felelt meg |
| 15. | Backend tesztelés | Email cím validáció | Böngésző általi tesztelés | A felhasználónak kötelező valid e-mail címet megadnia(@, stb) | ----------------- | Hiba üzenet az érvénytelen e-mail címről. | Megfelelt |


| Készítette |  Tóth Szabina |
| --- | --- |
| Beosztás | Frontend fejlesztő – Junior |
| Dátum | 2021.05.18. |
| Projekt | **HyperCinema** |
| Vizsgálat eszköze | Google Chrome |

**Login és regisztráció frontendbeli tesztelése**

|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Teszt eredménye |
| ---   | ---                         | ---             | ---    | ---          | ---            | ---             |
| 16. | Frontend - Login | A bejelentkezés oldalon lévő Bejelentkezés gombra kattintás valós adatok beírása után | A Bejelentkezés feliratú gomb a Főoldalra való átjutást eredményezi hibaüzenet nélkül | Használt gomb: "Bejelentkezés". Bejelentkezési adatok: Felhasználónév: tesztelek Jelszó: Teszt | A gomb átirányít a Főoldalra hibaüzenet nélkül, és bejelentkeztet | Megfelelt |
| 17. | Frontend - Login | A bejelentkezés oldalon lévő Bejelentkezés gombra kattintás hiányos adatok beírása után | A Bejelentkezés feliratú gombra kattintás után hibaüzenetet kapunk | Használt gomb: "Bejelentkezés". Bejelentkezési adatok: Felhasználónév: tesztelek Jelszó: üresen hagyva | A Bejelentkezés feliratú gombra kattintás után hibaüzenetet kapunk | Megfelelt |
| 18. | Frontend - Login | A bejelentkezés oldalon lévő Még nem vagyok tag gombra kattintás | A bejelentkezés oldalon lévő Még nem vagyok tag gombra kattintunk | Használt gomb: "Még nem vagyok tag!" | A gomb átirányít a Regisztráció oldalra | Megfelelt |
| 19. | Frontend - Regisztráció | A regisztrációs oldalon lévő Regisztráció gombra kattintás valós adatok beírása után | A Regisztráció feliratú gomb a Bejelentkezési oldalra való átjutást eredményezi hibaüzenet nélkül | Használt gomb: "Regisztráció" Megfelelő formátumú, még nem létező adatok segítségével | A gomb átirányít a Bejelentkezési oldalra hibaüzenet nélkül | Megfelelt |
| 20. | Frontend - Regisztráció | A regisztrációs oldalon lévő Már tag vagyok! gombra kattintás | A regisztrációs oldalon lévő Már tag vagyok! gombra kattintunk | Használt gomb: "Már tag vagyok!" | A gomb átirányít a Bejelentkezési oldalra | Megfelelt |
| 21. | Frontend - Login és Regisztráció | Regisztrációs és bejelentkezési oldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | Tesztelve 4:3, 3:2 és 16:9 képarányokkal | Illetszkednie kell minden oldalra, a böngésző méretezése közben | Megfelelt |