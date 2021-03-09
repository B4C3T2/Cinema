# Rendszerterv
>Cinema
>HyperTeam

## A rendszer célja

Egy olyan  rendszert fejlesztünk, ami egy mozi gyorsabb, áttekinthetőbb rendszerét szeretné létrehozni, ezzel megkönnyítve a szórakozni járó emberek fogalásait. A rendszer célja, hogy az eddigiekben használt offline rendszert modernizáljuk. Ezentúl a foglalás menete, a szabad, illetve a foglalt helyek követése, a számla összegének kiszámítása elektronikus módon fog történni. A rendszer az egyszerűségre alapoz ,hogy minél könnyebben és egyszerűbben elsajátítható legyen a foglaló fél számára. A projekt netes böngészőből indítható lesz így akármilyen platformon elérhető, nem létfontosságú, hogy a személy egy irodai környezetben legyen. Akár egy tabletről is le tudjuk foglalni a megfelelő férőhelyet. A rendszerünk nyilvántartja a szabad és foglalt férőhelyeket, illetve egy grafikus felületen is láthatóak ezek (A megfelelő intervallumok között).
A rendszer kezelését részben a felhasználó oldja meg, a foglalásnál ő viheti majd fel az adatokat. Ha az ügyfél szeretne a moziban egy férőhelyet lefoglalni , akkor előbb regisztrálásra lesz szüksége ahol meg kell adni a személyes adatait ami arra szolgál, hogy későbbiekben letudja foglalni az ülő helyet az adott adatokkal. Ha ez megtörtént le is foglalhatjuk a helyet. Ha a vendég le szeretné mondani a foglalását, akkor ezt megteheti. A fogalás után a rendszer egy összeget fog generálni, hogy esetlegesen mennyit kell a lefoglalt helyekért fizetnie.
A projekt netes böngészőből lesz indítható, így akármilyen platformon elérhető lesz, nem létfontosságú, hogy a személy egy irodai környezetben tartózkodjon. Akár egy tabletről is le tudjuk majd foglalni a megfelelő férőhelyet.


## Projekt terv

A projektet webalkalmazásként  fejlesztjük frontend és backend segítségével. Az elkülönített feladatokon más-más emberek dolgoznak majd.
A backend fejlesztése Java, a frontend fejlesztése pedig PHP segítségével fog zajlani.

**Projekt szerepkörök, felelősségek**
-   Szerepkörök:
	-   Product Owner: Tajti Tibor
    -   Scrum Master: Balogh Dániel, Vajda Krisztián
    -   Junior fejlesztők: Heim József, Majoros Norbert, Nagy Milán, Tóth Szabina Mária
-   Felelősségek:
    -   Scrum Master: A Scrum master felügyeli és megkönnyíti a folyamat fenntartását, segíti a csapatot, ha problémába ütközik, illetve felügyeli, hogy mindenki betartja-e a Scrum alapvető szabályait.
    -   Junior fejlesztő: A projektet készíti el. 
    
**Projekt munkások és felelősségeik**
-   Webfelület: -még nincs meghatározva
-   Frontend: -még nincs meghatározva
-   Backend: -még nincs meghatározva

**Ütemterv**
	-még nincs meghatározva
**Mérföldkövek**
	-még nincs meghatározva


## Üzleti folyamatok modellje

A regisztrált felhasználó közvetlen kapcsolatban áll a rendszerünkkel. A weboldal megnyitásakor megnyílik a főoldalunk, ahol található a Bejelentkezés valamint a Regisztáció. Bejelentkezés után elérhetővé válik a foglalási oldal. Kiválaszthatjuk, hogy mely filmre melyik időpontban szeretnénk jegyet foglalni, valamint láthatjuk, hogy mely férőhelyek szabadok vagy foglaltak az adott intervallumon. A mező kijelölésével tudjuk kiválasztani a kívánt és szabad ülőhelyeket.
A cél, hogy adott időközre megkapjuk, hogy mely ülések szabadok, illetve foglaltak. A vendégek választhatnak, hogy hány főre foglalnak helyet, illetve a rendszer eszerint állapítja meg az árat. A rendszernek számon kell tartania az adott időközben foglalt ülőhelyeket, ezekre ne engedjen több foglalást, amíg az adott foglalás ideje le nem jár. A számlát a vendég érkezéskor kapja meg és fizeti ki.

**Üzleti szereplők**
- Regisztrált felhasználók
   
**Üzleti folyamatok**
- Adatok rendszerbe való bevitele, módosítása
- Hozzáférés az adatbázishoz


## Követelmények

**Funkcionális**
- Webes környezetben futattható legyen.
- Felhasználók adatainak tárolása, listázása.
    
**Nemfunkcionális**
- Gyors listázás.
- Egyszerű, egyértelmű navigációs felület.

**Törvényi előírások, szabványok**
>  2016. évi XCIII. törvény a szerzői jogok és a szerzői joghoz kapcsolódó jogok közös kezeléséről
    
>  1997. évi CLV. törvény a fogyasztó védelemről
    
>   1999. évi L XXVI. törvény a szerzői jogról 210/2009. (IX. 29.) Korm. rendelet a kereskedelmi tevékenységek végzésének feltételeiről
     

AZ EURÓPAI PARLAMENT ÉS A TANÁCS 1169/2011/EU RENDELETE (2011. október 25.) A természetes személyeknek a személyes adatok kezelése tekintetében történő védelméről és az ilyen adatok szabad áramlásáról, valamint a 95/46/EK rendelet hatályon kívül helyezéséről (általános adatvédelmi rendelet) AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE (2016. április 27.)

>  2011. évi CXII. törvény – az információs önrendelkezési jogról és az információszabadságról (a továbbiakban: Infotv.)
    
>  2001. évi CVIII. törvény – az elektronikus kereskedelmi szolgáltatások, valamint az információs társadalommal összefüggő szolgáltatások egyes kérdéseiről (főképp a 13/A. §-a)


| Modul| ID | Név | Verzió | Kifejtés | 
| --- | ---: | --- | --- | --- |
| Funkció| K1 | Férőhelyek-lekérdezése |1.0| A vendég lekérdezi a férőhelyek adatait a megadott időre vonatkozóan. |
| Funkció| K2| Foglalás |1.0| Amikor a fogaláls megtörtént, akkor az adott helyekre a foglalás saját azonosítót kap.|
| Funkció| K3| Számla generálása |1.0| A vendég foglaláskor számlát kap.| 
| Modifikáció | K4| Módosítás |1.0| A foglalási idő és a számla módosul. |
| Funkció| K5| Távozás |1.0| A mozi rendszer a film vetítése utána automatikusan törli a felhasználókat. |
| Funkció| K6| Lemondás|1.0| A vendég bármikor lemondhatja a foglalást jelen időpontra vonatkozólag. |


## Funkcionális terv

**A felhasználó, mint a rendszer felhasználója**
- Lekérdezheti a szabad férőhelyeket egy adott időközre, kérése szerint.
- Betáplálhatja a rendszerbe a kérést miszerint melyik filmre, melyik időintervallumban, hány férőhelyet foglalna le.
- Betáplálhatja saját adatait a rendszerbe a foglaláshoz.
- Le tudja foglalni a megfelelő helyet.
- Megszüntetheti illetve módosíthatja a foglalást.
- A rendszer segítségével ki tudja nyomtatni a számlát.

**Menü hierarchiák**
- Kezdőlap
  - Foglalás adatai
      - Fizetés adatok
vagy
- Kezdőlap
  - Regisztáció adatai	  
	  
*Férőhelyek lekérdezése:*
- Kezdés dátuma
- Befejezés dátuma
- Szabad és foglalt ülőhelyek

*Vendég létrehozása:*
- Név
- Email
- Telefonszám
    > Létrehoz

*Foglalás:*
- Film címe
- Kezdés dátuma
- Befejezés dátuma 
- Szabad és foglalt ülőhelyek
- Kiválasztott ülőhelyek
- Felhasználó által kiválasztott ülőhelyek száma
	 >Foglal

**Képernyő tervek**
>Képernyőtervek -még nincs meghatározva


## Fizikai környezet

**Fizikai környezet**
Itt határozzuk meg, hogy milyen platformon fogunk fejleszteni, milyen operációs rendszerre és hardverre. Gyakran fontos tudnunk a hálózat felépítését is, például, hogy van-e tűzfal, az milyen portokat engedélyez. Ha vannak megvásárolt komponenseink, azokat is itt kell megadnunk.
A backend fejlesztése Java, a frontend fejlesztése PHP segítségével zajlik.
Az alkalmazás webplatformra készül.
Nincsenek megvásárolt komponenseink.

**Fejlesztői eszközök**
 - Linux, bash, screen, curl 
 - Java, Maven, ItelliJ IDEA
 - Node, npm, WebStorm
 - Docker, docker-compose, Dockstation
 - Postman
 - git (Github account)
 - React
 - PHP
 - MySQL
 **Keretrendszer**
 - Spring framework
 
A weboldal használatához egy egyszerű böngészőre van szükség, így akármilyen platformon elérhető, nem létfontosságú, hogy a személy egy irodai környezetben legyen. Akár egy tabletről is le tudjuk foglalni a megfelelő férőhelyeket.


## Architekturális terv

**Backend**
- A rendszerhez szükség van egy adatbázis szerverre, ebben az esetben MySQL-t használunk.
- A kliens oldali programokat egy PHP alapú REST api szolgálja ki, ez csatlakozik az adatbázis szerverhez. A kliensekkel JSON objektumok segítségével kommunikál.
    
**Frontend**
- A Webes felület főként PHP segítségével fog készülni.
- Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság, és könnyebb bővítés érdekében.
- Képes lesz felhasználni a Backend részen futó szolgáltatás metódusait, ezáltal tud felvinni és lekérdezni adatokat az adatbázisból.


## Adatbázis terv
## Adatstruktúrák definiálása

**K1: Férőhely-lekérdezés:**

**K2: Foglalás:**

**K3: Számla generálása:**

**K4: Módosítás:**

**Férőhelyek:**

- Egy férőhelynek van ID-je, ami a fix helyre utal.

- A teremben a székek helye lehet szabad illetve foglalt.

*A helyek elhelyezkedése, azonosítója, foglaltsága a felhasználói felületen vizuálisan megjelenik.*

**Vendég:**

- Egy vendégnek van neve, e-mail címe, jelszava

**Foglalás:**

- Egy foglalásban található a hely száma, a film kezdetének illetve befejezésének időpontja. A vendég e-mail jelzi, a helyet melyik vendég foglalta le.

**Foglalás lemondása/megszakítása:**

- A foglalás vissza mondható/törölhető. Minden foglalásnak generált id-je van. A felhasználó ez alapján törölheti, vagy módosíthatja a foglalást.

**Számla:**

- A helyfoglalás árát a foglalás adatai alapján határozzuk meg, például hány széket foglalunk és így kerül előállításra a számla.


## Tesztterv


## Telepítési terv

A webes alkalmazás telepítés nélkül futtatható, bármely webböngészőn keresztül, belső hálózaton.

Az alkalmazás használatához internetelérésen és a böngészőn kívül nincs szükség más külső szoftverre.

Az alkalmazás használatához regisztrációra van szükség, ez az adat tárolódik későbbi felhasználás esetére. Regisztráció után be kell jelentkezni, csak ezután lesz elérhető a foglalási felület.


## Karbantartási terv

A webes alkalmazás minimális karbantartást igényel, amely a következőkre bontható:

- Ellenőrizni kell, hogy a jövőben kiadott böngésző frissítésekkel működőképes marad-e.
A webalkalmazás karbantartása során alkalmazkodni kell az újabb böngésző kiadásokhoz, hibás megjelenés / működést javítani kell.
* Tesztelés frissebb verzió használatával. Hiba észlelése esetén azok javítása.

- A szerver folyamatos karbantartása és megfelelő kezelése.
A felhasználóbázis növekedésével ügyelni kell arra, hogy mind az adatbázis, mind a webszerver képes legyen a felhasználók gyors kiszolgálására, és az általuk felvitt adatok tárolására.

Az alkalmazás bővítési lehetőségét fenntartjuk.

Igény esetén új funkciók hozzáadása.