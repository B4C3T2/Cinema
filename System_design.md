# Rendszerterv
>Cinema
>HyperTeam
## A rendszer célja
A rendszer célja, hogy az eddigiekben használt offline rendszert modernizáljuk. Ezentúl a foglalás menete, a szabad, illetve a foglalt helyek követése, a számla összegének kiszámítása elektronikus módon fog történni. A rendszer kezelését részben a felhasználó oldja meg, a foglalásnál ő viheti majd fel az adatokat.
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
- Adatok rendszerbe való bevitele, módosítása.
- Hozzáférés az adatbázishoz.

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

## Fizikai környezet

## Architekturális terv

## Adatbázis terv

## Tesztterv