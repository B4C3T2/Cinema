## 1. Áttekintés
Egy olyan  rendszert fejlesztünk, ami egy mozi gyorsabb, áttekinthetőbb rendszerét szeretné létrehozni, ezzel megkönnyítve a szórakozni járó emberek fogalásait. A rendszer az egyszerűségre alapoz ,hogy minél könnyebben és egyszerűbben elsajátítható legyen a foglaló fél számára. A projekt netes böngészőből indítható lesz így akármilyen platformon elérhető, nem létfontosságú, hogy a személy egy irodai környezetben legyen. Akár egy tabletről is le tudjuk foglalni a megfelelő férőhelyet. A rendszerünk nyilvántartja a szabad és foglalt férőhelyeket, illetve egy grafikus felületen is láthatóak ezek (A megfelelő intervallumok között). Ha az ügyfél szeretne a moziban egy férőhelyet lefoglalni , akkor előbb regisztrálásra lesz szüksége ahol meg kell adni a személyes adatait ami arra szolgál, hogy későbbiekben letudja foglalni az ülő helyet az adott adatokkal. Ha ez megtörtént le is foglalhatjuk a helyet. Ha véletlenül a vendég valamilyen okból leszeretné mondani a foglalását akkor ezt megteheti. A lefogalás után a rendszer egy összegekt fog generálni, hogy esetlegesen mennyit kell a lefoglalt helyekért fizetnie.

## 2. Jelenlegi helyzet

 - Nincs digitális foglalás

 - Előre fogalás csak a mozi kasszájánál lehetséges

 - Sok vendég esetén nehéz az áttekinthetőség

## 3. Követelmény lista
| modul| id | név | verzió | kifejtés | 
| --- | ---: | --- | --- | --- |
| funkció| K1 | Férőhelyek-lekérdezése |1.0| A vendég lekérdezi a férőhelyek adatait a megadott időre vonatkozóan. |
| funkció| K2| Foglalás |1.0| Amikor a fogaláls megtörtént akkor az adott helyere, a foglalás saját azonosítót kap.|
| funkció| K3| Számla generálása |1.0| A vendég foglaláskor számlát kap.| 
| modifikáció | K4| Módosítás |1.0| A foglalási idő és a számla módosul. |
| funkció| K5| Távozás |1.0| A mozi rendszer a film vetítése utána automatikusan törtli a felhaszmálókat. |
| funkció| K6| Lemondás|1.0| A vendég bármikor lemondhatja a foglalást jelen időpontra vonatkozólag. |
