## Tesztjegyzőkönyv



## 1. Bevezetés
Tesztelés célja a projektben megtalálható felépítésbeli vagy design hibák feltárása.
# Test

### 1.1 Tesztelési terv hatóköre, célja:

- A tesztelési terv célja a tesztelés teljes körűségének biztosítása, a tesztelés során alkalmazott eljárások és megoldások meghatározása.
- A teszt végrehajtásáért ez esetben a test manager fele , és a tesztelést az általa összeállított tesztcsapat hajtja végre.

### 1.2 Elvárások
#### Az alábbi alap elvárások képezik ennek a teszttervnek az alapját:
- Az olvasó ismeri az alapdokumentumokat, amelyek meghatározzák a rendszert. 
- A **HyperTeam** projektcsapat felelős a tesztadatok előállításáért.

## 2. Szükséges erőforrások
Ez a fejezet a teszteléshez szükséges erőforrásokat fejti ki.

### 2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása)
| Feladatkör  |  Felelősség/tevékenység |  Személy(ek)  |
|---|---|---|
|  **Tesztelő, Teszt-koordinátor:** |  A teszt végrehajtása, észrevételek dokumentálása, teszt dokumentáció archiválása.Teszt terv készítése.  A tesztterv jóváhagyatása a projektmenedzserrel.  Teszt forgatókönyvek létrehozása  Inkonzisztenciák kezelése.  Helyes és időbeni hibakezelés.  Szükség esetén problémák eszkalálása a projekt menedzsernek.  Végső riport készítése.  Teszt dokumentum archiválása.  Az észrevételek státuszának követése, ill. dokumentálása |  Tóth Szabina, Heim József, Majoros Norbert, Nagy Milán |
| **Szakértő:**  |  A szakértő az észrevételek elemzi és megoldást javasol. |  Balogh Dániel  |
|**Projektvezető:**| Teszt terv jóváhagyása  Teszt forgatókönyv (testscript)| Vajda Krisztián |

### 2.2 Tesztadatok
A tesztadatok elkészítéséért és feltöltéséért felelős személy: Heim József

A tesztadatoknak az alábbi követelményeknek kell megfelelniük:
- Az adatbázisba felvitt adatoknak csak is az UTF-8 kódtáblában található karaktereket szabad tartalmaznia.

## 3. Tesztelési terv
Ez a fejezet leírja a teszt típusát, a metodológiáját és a riport készítés módszerét. Emellett meghatározza a teszt elvárásokat, a teszt-esetek elvárt eredményeit, sikerességének kritériumait, a kockázatok kezelését és a hatáskörön kívül eseteket.

### 3.1 Elfogadási teszt
Az elfogadási teszt (angolul User Acceptance Test) célja a rendszer teljes funkcionalitásának vizsgálata a felhasználók szemszögéből.

### 3.2 Terheléses teszt
A terheléses teszt célja a tervezett kapacitások, valamint a rendelkezésre álló növekedési potenciál meghatározása.


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
| 1. | Weboldal felület | Nav baron lévő Home gombra kattintás | A Home feliratú gomb Főoldalra való átjutást eredményezi | ----------------- | A Home gomb lenyomásával vissza térünk a Főoldalra | Megfelelt |
| 2. | Weboldal felület | Nav baron lévő Regisztráció gombra kattintás | A Regisztráció gomb lenyomásával átirányít a regisztrációs felületre | ----------------- | A Regisztráció gomb lenyomását követőn átirányít a regisztrációs oldalra | Megfelelt |
| 3. | Weboldal felület | Nav baron lévő Bejelentkezés gombra kattintás |A Bejelentkezés gomb lenyomásával átirányít a bejelentkezés felületre | ----------------- | A Regisztráció gomb lenyomását követőn átirányít a regisztrációs oldalra | Megfelelt |
| 4. | Weboldal felület | Főoldalon lévő Filmborítókra kattintás | Bejelentkezés nélkül nem nyitható meg a foglalási felület ellenben igen | ----------------- | A Filmborítóra való kattintás nem csinál semmit, mind addig amíg nem jelentkeztünk be Ezt követően a foglalási oldalra irányít át || Megfelelt |
| 5. | Weboldal felület | Főoldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | 1080x1920 kép van beszúrva | Illetszkednie minden oldalra, a böngésző méretezése közben | Nem felelt meg |
| 6. | Weboldal felület | Foglalási oldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | 1080x1920 kép van beszúrva | Illetszkednie minden oldalra, a böngésző méretezése közben | Nem felelt meg |
| 7. | Weboldal felület | Főoldalon a fogalalási azonosító megjelenése  | Miután a foglalás sikeresen megtörtént a Főoldalra fog vissza vezetni a rendszer és az adott fogalalási azonosítót megkapjuk | Foglalási azonosító: 26 | Sikeres foglalásnál a Főoldalra kiírjuk a foglalási azonosító számát | Megfelelt |

| Készítette | Heim József |
| --- | --- |
| Beosztás | Backend fejlesztő – Junior |
| Dátum | 2021.05.11 / 2021.05.18. |
| Projekt | **HyperCinema** |
| Vizsgálat eszköze | OperaGX, phpMyAdmin adatbázis |

**Foglalás és lemondás backendbeli tesztelése**

|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Teszt eredménye | Dátum |
| ---   | ---                         | ---             | ---    | ---          | ---            | ---             | ---   |
| 1. | Weboldal mögötti php kód | Foglalás gomb működésének vizsgálata | Foglalás gomb megnyomása székek kiválasztása nélkül | ----------------- | Megjelenik egy tájékoztató üzenet a formon, és nem kerül adat az adatbázisba | Megfelelt | 2021.05.11. |
| 2. | Weboldal mögötti php kód | Foglalás gomb működésének vizsgálata | Foglalás gomb megnyomása székek kiválasztával | ----------------- | Bekerülnek a foglalási adatok az adatbázisba | A film azonosító nem adódik át, ezért csak beégetett adattal működik | 2021.05.11. |
| 3. | Weboldal mögötti php kód | Lemondás gomb működésének vizsgálata | Lemondás gomb megnyomása nem létező foglalásazonosítóval | foglalásazonosító = 100 | Nem törlődik a foglalás az adatbázisból | Megfelelt | 2021.05.11. |
| 4. | Weboldal mögötti php kód | Lemondás gomb működésének vizsgálata | Lemondás gomb megnyomása helyes foglalásazonosítóval | foglalásazonosító = 1 | Törlődik a foglalás az adatbázisból | Nem törlődik a rekord az adatbázisból | 2020.05.11. |
| 5. | Weboldal mögötti php kód | Foglalás gomb működésének vizsgálata | Foglalás gomb megnyomása csak szabad székek kiválasztával | 2.film, 1,2,3 indexű székek | Bekerülnek a foglalási adatok az adatbázisba | Megfelelt | 2021.05.18. |
| 6. | Weboldal mögötti php kód | Foglalás gomb működésének vizsgálata | Foglalás gomb megnyomása úgy, hogy van foglalt szék is a kiválasztottak között | 2.film 3,4 indexű székek | Nem kerülnek a foglalási adatok az adatbázisba, és az oldalon tájékoztatjuk a felhasználót erről | Megfelelt | 2021.05.18. |
| 7. | Weboldal mögötti php kód | Lemondás gomb működésének vizsgálata | Lemondás gomb működése más felhasználóval, mint aki foglalt | felhasználó: Béla123, foglalási azonosító: 49, foglaló felhasználó: tesztelek| Nem törlődik a foglalás az adatbázisból | Megfelelt | 2021.05.18. |
| 8. | Weboldal mögötti php kód | Lemondás gomb működésének vizsgálata | Lemondás gomb működése azzal a felhasználóval, aki foglalt | felhasználó: tesztelek, foglalási azonosító: 49, foglaló felhasználó: tesztelek| Törlődik a foglalás az adatbázisból | Megfelelt | 2021.05.18. |

| Készítette | Nagy Milán |
| --- | --- |
| Beosztás | Backend fejlesztő – Junior |
| Dátum | 2021.05.18. |
| Projekt | **HyperCinema** |
| Vizsgálat eszköze | Google Chrome, phpMyAdmin adatbázis |

**Login és regisztráció backendbeli tesztelése**

|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Teszt eredménye |
| ---   | ---                         | ---             | ---    | ---          | ---            | ---             |
| 1. | Backend tesztelés | Regisztráció adatbázisba történő megjelenítése | Böngésző általi tesztelés | Regisztráció esetén a regisztrált felhasználót a phpmyadmin user táblájába helyezi(gyors). | A regisztráció sikeres. | Megfelelt |
| 2. | Backend tesztelés | Bejelentkezés azonosítása | Böngésző általi tesztelés | Regisztráció után megadott adatokkal képes a felhasználó bejelentkezni. | Megtörténik a bejelentkezés. | Megfelelt | 
| 3. | Backend tesztelés | Bejelentkezés nem regisztrált adatokkal | Böngésző általi tesztelés | Nem regisztrált felhasználó nem képes bejelentkezni. | A bejelentkezés sikertelen. | Megfelelt |
| 4. | Backend tesztelés | Regisztráció nem megfelelő hosszúságú jelszó megadása | Böngésző általi tesztelés | ----------------- | Regisztráció esetén a jelszó hosszának legalább 3 karakter hosszúnak kell lennie. | Megfelelt |
| 5. | Backend tesztelés | Email cím validáció | Böngésző általi tesztelés | A felhasználónak kötelező valid e-mail címet megadnia(@, stb) | Hiba üzenet az érvénytelen e-mail címről. | Megfelelt |


| Készítette |  Tóth Szabina |
| --- | --- |
| Beosztás | Frontend fejlesztő – Junior |
| Dátum | 2021.05.18. |
| Projekt | **HyperCinema** |
| Vizsgálat eszköze | Google Chrome |

**Login és regisztráció frontendbeli tesztelése**

|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Teszt eredménye |
| ---   | ---                         | ---             | ---    | ---          | ---            | ---             |
| 1. | Frontend - Login | A bejelentkezés oldalon lévő Bejelentkezés gombra kattintás valós adatok beírása után | A Bejelentkezés feliratú gomb a Főoldalra való átjutást eredményezi hibaüzenet nélkül | Használt gomb: "Bejelentkezés". Bejelentkezési adatok: Felhasználónév: tesztelek Jelszó: Teszt | A gomb átirányít a Főoldalra hibaüzenet nélkül, és bejelentkeztet | Megfelelt |
| 2. | Frontend - Login | A bejelentkezés oldalon lévő Bejelentkezés gombra kattintás hiányos adatok beírása után | A Bejelentkezés feliratú gombra kattintás után hibaüzenetet kapunk | Használt gomb: "Bejelentkezés". Bejelentkezési adatok: Felhasználónév: tesztelek Jelszó: üresen hagyva | A Bejelentkezés feliratú gombra kattintás után hibaüzenetet kapunk | Megfelelt |
| 3. | Frontend - Login | A bejelentkezés oldalon lévő Még nem vagyok tag gombra kattintás | A bejelentkezés oldalon lévő Még nem vagyok tag gombra kattintunk | Használt gomb: "Még nem vagyok tag!" | A gomb átirányít a Regisztráció oldalra | Megfelelt |
| 4. | Frontend - Regisztráció | A regisztrációs oldalon lévő Regisztráció gombra kattintás valós adatok beírása után | A Regisztráció feliratú gomb a Bejelentkezési oldalra való átjutást eredményezi hibaüzenet nélkül | Használt gomb: "Regisztráció" Megfelelő formátumú, még nem létező adatok segítségével | A gomb átirányít a Bejelentkezési oldalra hibaüzenet nélkül | Megfelelt |
| 5. | Frontend - Regisztráció | A regisztrációs oldalon lévő Már tag vagyok! gombra kattintás | A regisztrációs oldalon lévő Már tag vagyok! gombra kattintunk | Használt gomb: "Már tag vagyok!" | A gomb átirányít a Bejelentkezési oldalra | Megfelelt |
| 6. | Frontend - Login és Regisztráció | Regisztrációs és bejelentkezési oldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | Tesztelve 4:3, 3:2 és 16:9 képarányokkal | Illetszkednie kell minden oldalra, a böngésző méretezése közben | Megfelelt |