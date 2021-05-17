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

## 4. Tesztelési tábla
|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Tesztelő | Teszt eredménye |
| --- | --- | --- | --- | --- | --- | --- | --- |
| 1. | Weboldal felület | Nav baron lévő Home gombra kattintás | A Home feliratú gomb Főoldalra való átjutást eredményezi. | ----------------- | A Home gomb lenyomásával vissza térünk a Főoldalra | Majoros Norbert | Megfelelt |
| 2. | Weboldal felület | Nav baron lévő Regisztráció gombra kattintás | A Regisztráció gomb lenyomásával átirányít a regisztrációs felületre. | ----------------- | A Regisztráció gomb lenyomását követőn átirányít a regisztrációs oldalra. | Majoros Norbert | Megfelelt |
| 3. | Weboldal felület | Nav baron lévő Bejelentkezés gombra kattintás |A Bejelentkezés gomb lenyomásával átirányít a bejelentkezés felületre. | ----------------- | A Regisztráció gomb lenyomását követőn átirányít a regisztrációs oldalra. | Majoros Norbert | Megfelelt |
| 4. | Weboldal felület | Főoldalon lévő Filmborítókra kattintás | Bejelentkezés nélkül nem nyitható meg a foglalási felület ellenben igen. | ----------------- | A Filmborítóra való kattintás nem csinál semmit, mind addig amíg nem jelentkeztünk be. Ezt követően a foglalási oldalra irányít át. | Majoros Norbert | Megfelelt |
| 5. | Weboldal felület | Főoldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | 1080x1920 kép van beszúrva | Illetszkednie minden oldalra, a böngésző méretezése közben | Majoros Norbert | Nem felelt meg |
| 6. | Weboldal felület | Foglalási oldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | 1080x1920 kép van beszúrva | Illetszkednie minden oldalra, a böngésző méretezése közben | Majoros Norbert | Nem felelt meg |
| 7. | Weboldal mögötti php kód | Foglalás gomb működésének vizsgálata | Foglalás gomb megnyomása székek kiválasztása nélkül | ----------------- | Megjelenik egy tájékoztató üzenet a formon, és nem kerül adat az adatbázisba | Heim József | Megfelelt |
| 8. | Weboldal mögötti php kód | Foglalás gomb működésének vizsgálata | Foglalás gomb megnyomása székek kiválasztával | ----------------- | Bekerülnek a foglalási adatok az adatbázisba | Heim József | A film azonosító nem adódik át, ezért csak beégetett adattal működik |
| 9. | Weboldal mögötti php kód | Lemondás gomb működésének vizsgálata | Lemondás gomb megnyomása nem létező foglalásazonosítóval | foglalásazonosító = 100 | Nem törlődik a foglalás az adatbázisból | Heim József | Megfelelt |
| 10. | Weboldal mögötti php kód | Lemondás gomb működésének vizsgálata | Lemondás gomb megnyomása helyes foglalásazonosítóval | foglalásazonosító = 1 | Törlődik a foglalás az adatbázisból | Heim József | Nem törlődik a rekord az adatbázisból |
| 11. | Backend tesztelés | Regisztráció adatbázisba történő megjelenítése | Böngésző általi tesztelés | Regisztráció esetén a regisztrált felhasználót a phpmyadmin user táblájába helyezi(gyors). | A regisztráció sikeres. | Nagy Milán | Megfelelt |
| 12. | Backend tesztelés | Bejelentkezés azonosítása | Böngésző általi tesztelés | Regisztráció után megadott adatokkal képes a felhasználó bejelentkezni. | Megtörténik a bejelentkezés. | Nagy Milán | Megfelelt | 
| 13. | Backend tesztelés | Bejelentkezés nem regisztrált adatokkal | Böngésző általi tesztelés | Nem regisztrált felhasználó nem képes bejelentkezni. | A bejelentkezés sikertelen. | Nagy Milán | Nem felelt meg |
| 14. | Backend tesztelés | Regisztráció nem megfelelő hosszúságú jelszó megadása | Böngésző általi tesztelés | Regisztráció esetén a jelszó hosszának legalább 3 karakter hosszúnak kell lennie. | Nagy Milán | Nem felelt meg |
| 15. | Backend tesztelés | Email cím validáció | Böngésző általi tesztelés | A felhasználónak kötelező valid e-mail címet megadnia(@, stb) | ----------------- | Hiba üzenet az érvénytelen e-mail címről. | Nagy Milán | Megfelelt |
| 16. | Weboldal felület | A bejelentkezés oldalon lévő Bejelentkezés gombra kattintás valós adatok beírása után | A Bejelentkezés feliratú gomb a Főoldalra való átjutást eredményezi hibaüzenet nélkül | ----------------- | A gomb átirányít a Főoldalra hibaüzenet nélkül, és bejelentkeztet | Tóth Szabina | Megfelelt |
| 17. | Weboldal felület | A bejelentkezés oldalon lévő Bejelentkezés gombra kattintás hiányos adatok beírása után | A Bejelentkezés feliratú gombra kattintás után hibaüzenetet kapunk | ----------------- | A Bejelentkezés feliratú gombra kattintás után hibaüzenetet kapunk | Tóth Szabina | Megfelelt |
| 18. | Weboldal felület | A bejelentkezés oldalon lévő Bejelentkezés gombra kattintás fals adatok beírása után | A Bejelentkezés feliratú gombra kattintás után hibaüzenetet kapunk | ----------------- | A Bejelentkezés feliratú gombra kattintás után hibaüzenetet kapunk | Tóth Szabina | Megfelelt |
| 19. | Weboldal felület | A bejelentkezés oldalon lévő Még nem vagyok tag gombra kattintás | A bejelentkezés oldalon lévő Még nem vagyok tag gombra kattintunk | ----------------- | A gomb átirányít a Regisztráció oldalra | Tóth Szabina | Megfelelt |
| 20. | Weboldal felület | A regisztrációs oldalon lévő Regisztráció gombra kattintás valós adatok beírása után | A Regisztráció feliratú gomb a Bejelentkezési oldalra való átjutást eredményezi hibaüzenet nélkül | ----------------- | A gomb átirányít a Bejelentkezési oldalra hibaüzenet nélkül | Tóth Szabina | Megfelelt |
| 21. | Weboldal felület | Regisztrációs és bejelentkezési oldal háttérképe | Különböző képernyőméretekre kell változnia, dizájn elemként szolgál | Tesztelve 4:3, 3:2 és 16:9 képarányokkal | Illetszkednie kell minden oldalra, a böngésző méretezése közben | Tóth Szabina | Megfelelt |