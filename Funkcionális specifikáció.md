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

## 4. Jelenlegi üzleti folyamatok modellje
Mai világban már létezik egy technika az adatok dinamikus kezelésére, ennek ellenére számos filmszínház még a régi módszereket alkalmazza. A régi megszokott megoldás papír alapú foglalásokat jelent. A recepciós emiatt lassabban és nehezebben látja át a foglalt illetve a szabad parcellákat, illetve a különböző vendégekhez tartozó adatokat. A papír alapú könyvelés növeli a hibázás kockázatát, emellett nehezebben javítható. Ez a megoldás a XXI. században elavultnak számít, ráadásul nem igazán környezetbarát módszernek minősül. 
 
## 5. Igényelt üzleti folyamatok
A foglalást szándékozó vendégek számára a legkézenfekvőbb megoldás az lenne, hogy az adataikat illetve a foglalásukat digitális formában tehessék meg, továbbá elektronikus számla kiállítására is legyen mód. A jelenleg használt kézi megoldásokhoz képest sokkal előnyösebb a digitális rendszer, hiszen itt a hiba kockázata kisebb.
   
> A cél, hogy adott időközre megkapjuk mely parcellák szabadok, illetve foglaltak.
> A vendégek választhatnak, hogy egy vagy több férőhelyet szeretnének foglalni (max 4 lehetséges), ennek megfelelően jelzi a rendszer a számára megfelelő helyeket, illetve e szerint állapítja meg az árat.
> Minden vendég lefoglalhatja a számára legjobb parcellát.
> A rendszernek számon kell tartania az adott időközben foglalt parcellákat, ezekre ne engedjen több foglalást amíg az adott foglalás ideje le nem jár.
> A számlát a vendég a foglalás végrehajtása után fogja megkapni.

## 6. Használati esetek
Foglaló/Vendég: 
A vendég a következőket tudja kezelni a rendszeren belül :
>adatait felvinni
>adatait megtekinteni
>adatait módosítani
>adatait törölni
>
>foglalásokat létrehozni.
>foglalásokat lekérdezni
>foglalásokat módosítani
>foglalásokat törölni

## 7. Megfeleltetés , hogyan fedik le a használati esetek a követelményeket
 Ez egy teljes adminisztrációs felület. A vendég nincsen közvetlen kapcsolatban a jegyeladó ügyfelekkel, de közvetett módon igen, hiszen a foglalást mind két fél látni fogja, a rendszeren keresztül. A weboldal megnyitásakor megnyílik a főoldalunk, ahol található a Lekérdezés, amellyel letudjuk kérdezni mely férőhelyek szabadak illetve foglaltak adott intervallumon. Ez alatt található a foglalás. A weboldal középső részén találjuk a férőhelyeket amelyeket a lekérdezésben megadott intervallumon lefoglalt időpontban megjeleníti a foglalt ülőhelyeket helyeket pirossal, a szabad helyeket zölddel. Ezt a felületet a vendég a saját készülékén tekintheti meg. A jobb oldalon pedig letudjuk foglalni, férőhely száma alapján a mezők kitöltésével.
 
## 8. Képernyő tervek
A képernyő tervek a ScreenPlan mappában érhetőek majd el.
![Bejelentkezesi_felulet](https://media.discordapp.net/attachments/806192892586360873/816324838024151090/Login_page_plan.png?width=800&height=451)

## 9. Forgatókönyv
 - Webes felület
 >Ülőhelyek lekérdezése:
 >>Itt tudjuk lekérdezni a férőhelyeket a megadott intervallumon belül. Ezt a webes felületen látjuk.
 >
 >Foglalás létrehozása:
 >> Itt kell a saját adatokat megadni: a nevet, az email címet, a lakcímet és a telefon számot majd a  Létrehoz gombra kattintva máris létre is lefogaltuk a számunkra megfelelő helyet.
>
>Moziterem:
>>Itt találjuk az ülőhelyek lekérdezésénél megadott intervallumon belüli helyeket. Amelyeket két szín jelzi, a piros a foglaltat jelzi, a zöld a szabadot, az az le lehet foglalni.
>
>Foglalás:
>>Itt tudjuk lefoglalni férőhely szám alapján. Kiválasztjuk, hogy melyik filmre szeretnék foglalni, és hány órától. Meg kell adnunk, hogy hány főre szeretnénk lefoglani a helyeket. Ha végeztünk az adatok feltöltésével akkor a Foglal gombra kattintunk, amely lefoglalja az adott helyet ha létezik ilyen email cím az adatbázisban.