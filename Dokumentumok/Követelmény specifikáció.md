## 1. Áttekintés

**1.1 A leírás célja**

Ennek a dokumentumnak célja, hogy részletes leírást adjon a mozi jegyfoglaló-rendszer projektről. Bemutatja a rendszer célját és feladatait, részeit a megrendelő és a készítők számára is.

**1.2 A projekt leírása**

*Egy mozi számára jegyfoglalós rendszert készítünk.*

Az online jegyfoglaló-rendszer segítségével a jegyfoglalás menetét minden regisztrált felhasználó megteheti. A rendszer számon tartja a szabad, illetve a foglalt férőhelyeket, amik megtekinthetőek foglaláskor. Adatbázis rögzíti a vendégek és foglalások adatait. A foglalás lemondható illetve módosítható, de ezeket a műveleteket minden felhasználó csak a saját foglalásával teheti meg. A rendszer jelzi amikor a foglalás ideje lejárt. A helyek a film vetítése után felszabadulnak.

## 2. Jelenlegi helyzet

**2.1 A jelenlegi helyzet problémái:**

 - Nincs digitális foglalás

 - Előre fogalás csak a mozi kasszájánál lehetséges

 - Sok felhasználó esetén nehéz az áttekinthetőség

## 3. Vízió

**3.1 Cél**

Az eddigiekben használt offline rendszert szeretnénk modernizálni. Ezentúl a foglalás menete, a szabad- illetve foglalt helyek követése, a számla összegének kiszámítása elektronikus módon fog történni. A projekt internetes böngészőből indítható lesz így akármilyen platformon elérhető, nem létfontosságú, hogy a felhasználó egy irodai környezetben legyen. Akár egy tabletről is le tudjuk foglalni a megfelelő férőhelyet.

**3.2 Terjedelem**

A program a regisztált felhasználóknak készül. Az interaktív, vizuális felület segítségével a felhasználó élőben látja az aktuális állapotot. A rendszert a modernizálás, az átláthatóság céljából készítjük: használatával egyszerűbb, gyorsabb, könnyebb lebonyolítani a jegyfoglalást.

**3.3 Foglalás menete**

A szabad helyek lekérdezésére a foglalási oldalon van lehetőség. A felhasználó bejelentkezés után tud választani a helyek közül(maximum 4-et), és le tudja foglalni őket. Ekkor a rendszer egy összeget számol, a jegyek árát. Sikeres foglalás esetén azt az adatbázisban tároljuk, és a felhasználó visszajelzést kap erről a főoldalon.

**3.4 Továbbfejlesztési lehetőségek**

A továbbiakban várható a mozi térbeli fejlődése. Több terem lehet, ahol egy időben külömböző filmek tekinthetőek meg.
Ez alapján külömböző filmek borítóira kattintva a főoldalon, külömbőző lehet a foglalási oldal felépítése(más-más termekben eltérhet a székek száma/elrendezése).

**3.5 A szükséges rendszer specifikáció**

Az alábbi hardvereszközök szükségesek a program működtetéséhez:

A felhasználónak szüksége van egy olyan eszközre, amin weboldalak megjelenítése lehetséges. Ez lehet számítógép, tablet,  vagy akár okostelefon is.

## 4. Funkcionális követelmény

**4.1 A felhasználó lehetőségei:**

- Lekérdezheti a szabad helyeket egy adott időpontban a vetítésre.
- Megadhatja az adatait a rendszerbe a regisztrációhoz.
- Le tudja foglalni a megfelelő helye(ke)t bejelentkezés után.
- Megszüntetheti illetve módosíthatja a foglalást.

## 5. Rendszerre vonatkozó törvények, rendeletek, szabályok és szabványok

>  2016. évi XCIII. törvény a szerzői jogok és a szerzői joghoz kapcsolódó jogok közös kezeléséről
    
>  1997. évi CLV. törvény a fogyasztó védelemről
    
>   1999. évi L XXVI. törvény a szerzői jogról 210/2009. (IX. 29.) Korm. rendelet a kereskedelmi tevékenységek végzésének feltételeiről
     

AZ EURÓPAI PARLAMENT ÉS A TANÁCS 1169/2011/EU RENDELETE (2011. október 25.) A természetes személyeknek a személyes adatok kezelése tekintetében történő védelméről és az ilyen adatok szabad áramlásáról, valamint a 95/46/EK rendelet hatályon kívül helyezéséről (általános adatvédelmi rendelet) AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE (2016. április 27.)

>  2011. évi CXII. törvény – az információs önrendelkezési jogról és az információszabadságról (a továbbiakban: Infotv.)
    
>  2001. évi CVIII. törvény – az elektronikus kereskedelmi szolgáltatások, valamint az információs társadalommal összefüggő szolgáltatások egyes kérdéseiről (főképp a 13/A. §-a)

## 6. Jelenlegi üzleti folyamatok modellje 

Mai világban már létezik egy technika az adatok dinamikus kezelésére, ennek ellenére számos filmszínház még a régi módszereket alkalmazza. A régi megszokott megoldás papír alapú foglalásokat jelent. A felhasználó emiatt lassabban és nehezebben látja át a foglalt illetve a szabad ülőhelyeket, illetve a különböző vendégekhez tartozó adatokat. A papír alapú könyvelés növeli a hibázás kockázatát, emellett nehezebben javítható. Ez a megoldás a XXI. században elavultnak számít, ráadásul nem igazán környezetbarát módszernek minősül. 

## 7. Igényelt üzleti folyamatok

A foglalást szándékozó felhasználók számára a legkézenfekvőbb megoldás az lenne, hogy az adataikat illetve a foglalásukat digitális formában tehetnék meg, továbbá elektronikus számla kiállítására is legyen mód. A jelenleg használt kézi megoldásokhoz képest sokkal előnyösebb a digitális rendszer, hiszen itt a hiba kockázata kisebb.
   
> A cél, hogy adott időközre megkapjuk mely helyek szabadok, illetve foglaltak.
> A felhasználók választhatnak, hogy egy vagy több férőhelyet szeretnének foglalni (max 4 lehetséges), ennek megfelelően jelzi a rendszer a számára megfelelő helyeket, illetve e szerint állapítja meg az árat.
> Minden felhasználó lefoglalhatja a számára legjobb ülőhelyet.
> A rendszernek számon kell tartania az adott időközben foglalt ülőhelyeket, ezekre ne engedjen több foglalást amíg az adott foglalás ideje le nem jár.
> A számlát a felhasználó a foglalás végrehajtása után fogja megkapni.

##8. Követelmény lista

| modul| id | név | verzió | kifejtés | 
| --- | ---: | --- | --- | --- |
| funkció| K1 | Férőhelyek-lekérdezése |1.0| A felhasználó lekérdezi az ülőhelyek adatait a megadott időre vonatkozóan. |
| funkció| K2| Foglalás |1.0| Amikor a fogaláls megtörtént akkor az adott ülőhelyere, a foglalás saját azonosítót kap.|
| funkció| K3| Számla generálása |1.0| A felhasználó foglaláskor számlát kap.| 
| modifikáció | K4| Módosítás |1.0| A foglalási idő és a számla módosul. |
| funkció| K5| Távozás |1.0| A mozi rendszer a film vetítése utána automatikusan törtli a felhasználó foglalását. |
| funkció| K6| Lemondás|1.0| A felhasználó bármikor lemondhatja a foglalást a vetítés előttig. |