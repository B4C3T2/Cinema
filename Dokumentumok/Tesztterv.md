# HyperTeam - Hyper Cinema tesztelési terv

**A tesztterv célja**

A tesztterv fontos dokumentum, amely leírja, hogy mit, milyen céllal, hogyan kell tesztelni.
Lefekteti a tesztelés elveit, folyamatát és kontrollját. Meghatározza a fő
teszteseteket. Meghatározza a sikeres teszt kritériumait.
A tesztterv elkészítéséhez a célon túl tudni kell, hogy mit és hogyan kell tesztelni, mikor tekintjük a tesztet sikeresnek.

A tesztek végrehajtása során tesztnaplót vezetünk. Ebben írjuk le, hogy milyen lépéseket hajtottunk
végre és milyen eredményeket kaptunk. A tesztnapló alapján a tesztnek megismételhetőnek kell
lennie. Ha hibát találunk, akkor a hibabejelentőt a tesztnapló alapján töltjük ki.
A tesztek eredményei alapján további teszteket készíthetünk. Elhatározhatjuk, hogy a megtalált hibákhoz hasonló hibákat felderítjük.

A teszt célja:
- Megtalálni a hibákat.
- Növelni a megbízhatóságot.
- Megelőzni a hibákat.

|  Dokumentum címe: |  Hyper Cinema tesztterv |
|---|:-:|
| **Minősítés: (állapot)** | Tervezet |
| **Verziószám:** | 0.1 |
| **Projekt név:** | Hyper Cinema |
| **Készítette:** | Hyper Team |
| **Dokumentum célja:** | A Hyper Cinema tesztelésének tervezete. |
| **Utolsó mentés kelte:** | 2021.03.09. |
| **Fájlnév:** | Tesztterv.md |


# 1. Bevezetés

A fejlesztő csapat célja, hogy a produktum kikerülése előtt a lehető legnagyobb mértékű tesztelésen essen át a szoftver. Ezzel egy megbízható szoftvert adhatunk át a megrendelőnek rengeteg problémát megelőzve, és a hibajavítások elvégzése után.

A tesztelés teljeskörű, igyekszünk minden tesztesetet megnézni mind a UI, mind a szerveroldal részéről.

A UI tesztelése során fontos, hogy a weboldal ugyanolyan könnyen kezelhető legyen telefonról vagy tabletről, mint egy asztali számítógépről vagy laptopról.

A Backend tesztelése azért is tartozik a legfontosabb és legnehezebb feladatok közé, mert a lehető legtöbb hibát itt lehet elkövetni.

## 1.1 Tesztelési terv célja

A tesztelési terv célja a tesztelés teljes körűségének biztosítása, a tesztelés során alkalmazott eljárások és megoldások meghatározásával.

 
## 1.2 Elvárások

Az alábbi alap elvárások képezik ennek a teszttervnek az alapját:

- Az olvasó ismeri az alapdokumentumokat, amelyek meghatározzák a rendszert.
- A Hyper Team felelős a tesztadatok előállításáért.
- A tesztprogram az ebben a dokumentumban meghatározott tesztterv alapján fut.


# 2. Szükséges erőforrások

A teszteléshez szükség van egy olyan eszközre, amely az internetre  van csatlakoztatva.
Az általunk használt erőforrások **egyike**:
- Processzor: AMD Ryzen 5 2500U with Radeon Vega Mobile Gfx 2.00 GHz
- RAM: 8 GB
- Operációs rendszer: Windows 10 Home (64-bit)
- Le: 29Mbps/ Fel: 5Mbps internetkapcsolat
- Böngésző: Google Chrome (88.0.4324.190)

## 2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása)

| Feladatkör | Felelősség/tevékenység |
| --- | --- |
| Tesztelő | A teszt végrehajtása, Észrevételek dokumentálása, Teszt dokumentáció archiválása. |
| Szakértő | A szakértő az észrevételek elemzi és megoldást javasol. |
| Teszt koordinátor | Teszt terv készítése, A tesztterv jóváhagyatása a projektmenedzserrel, Teszt forgatókönyvek létrehozása, Inkonzisztenciák kezelése, Helyes és időbeni hibakezelés, Szükség esetén problémák eszkalálása a projekt menedzsernek, Végső riport készítése, Teszt dokumentum archiválása, Az észrevételek státuszának követése, ill. dokumentálása. |
| Projektvezető | Teszt terv jóváhagyása, Teszt forgatókönyv (testscript) jóváhagyása. |

## 2.2 Tesztkörnyezet

Ebben a részben meg kell határozni, hogy a tesztelés milyen környezetben történjen (fejlesztői vagy tesztkörnyezet), a környezetek hogyan érthetőek el, továbbá a tesztelők milyen hozzáféréssel végezzék a tesztelést.

| Környezet neve és feladata | A hozzáférés módja | Konfiguráció                             |
| --- | --- | --- |
| Fejlesztői környezet       | Dokumentáció       | Fentebb említett számítógép konfiguráció |


## 2.3 Tesztadatok
A teszt végrehajtásához szükséges rekordok (tesztadatok) száma: 3
A tesztadatok elkészítéséért és feltöltéséért felelős személy(ek): 

A tesztadatoknak az alábbi követelményeknek kell megfelelniük:
- Az alapadatok értékkészlete az éles rendszerrel megegyező kell, hogy legyen.



## 2.4 Tesztelési eszközök
- A böngésző beépíített segédeszközei
- Weboldal validátor

# 3 Tesztelési terv
A frontend teszteléséhez a böngészőkbe beépített segédeszközökkel kerülnek tesztelésre. Előre beállítható képernyő méretekkel ellenőrizzük, hogy a méretek jól beállítottak a különböző képernyőkhöz. A teszt akkor sikeres, ha a főbb funkciók jól olvashatók és alkalmazhatók.
A backend tesztelése minta inputokkal történik. A beviteli mezőkbe elsősorban a kívánt intervallumok és értékek kerülnek tesztelésre, majd ezután véletlenszerű értékekkel is ellenőrzés alá esnek. A teszt abban az esetben sikeres, ha a kívánt értékek elfogadásra kerülnek, a hibás értékekre a rendszer hibaüzenetet küld a felhasználó számára, ami számára is információval szolgál.
Azért, hogy hibás adat ne kerülhessen az adatbázisba, illetve illetéktelen személyen ne jussanak információkhoz a felhasználókról, több figyelmet fordítunk ezen részek tesztelésére.

## 3.1 Fejlesztői teszt
Tervezés és fejlesztés során ügyelünk arra, hogy lehetőleg minden hibát kiküszöböljünk, de természetesen előfordulhatnak problémák, amikre nem gondoltunk. Ennek megelőzése képpen, amikor egy modul elkészül, megkezdjük a tesztelését.

## 3.2 Integrációs teszt
A szoftver nem használ külső rendszert, sem API, sem egyéb módon, viszont az oldal által használt adatbázis többféle szerveren és adatbázismotor alatt tesztelésre kerül, hogy egy verzióváltás / platformváltás esetén se történhessen nagyobb kimaradás.

## 3.3 Elfogadási teszt
A megrendelő számára átadásra kerül egy példány a weboldalról, aki egy hozzáértő személy segítségével, vagy az általa kiválasztott felhasználókkal teszteli. Ha a megrendelő hibát tapasztal, azt a lehető leghamarabb jelezze a fejlesztő csapat felé, hogy a hiba minél előbb javításra kerüljön. Ha a megrendelő számára megfelel a szoftver, úgy elfogadásra kerül a teszt és megkezdődik az éles tesztelés.

## 3.4 Terheléses teszt
Az elfogadási teszt jóváhagyását követően, a termék kiadása előtt, terhelés alá kell vetni a szoftvert. A tesztelés történhet valódi felhasználók bevonásával vagy script segítségével, mely több felhasználót kezel egyszerre és mindegyikkel az összes funkciót egy időben teszteli. A teszt során a szerver monitorozásra kerül. A teszt végeztével kiértékelésre kerül sor. Ha az előre megszabott határértékeket tapasztaljuk, a terhelési teszt sikerrel zárul. Ha nem, a megrendelővel és csapattal kommunikációt kell folytatni a probléma kiküszöbölésére.

## 3.5 Biztonsági teszt
Az oldalon történő regisztráció során a felhasználói adatok mentésre kerülnek. Hogy ezek ne kerülhessenek rossz kézbe, alapos tesztelésre van szükség. Akkor tekinthető sikeresnek a teszt, ha illetéktelen személy nem juthat információhoz. Ha mégis sikerül bejelentkeznie, nyomon követhető az illető és a felhasználó erről értesítést kap.

## 3.6 Tesztelési feladatok, teszt-esetek leírása
A tesztelési feladat a következő teszt-eseteket foglalja magába:
	- Frontend teszt (UI)
	- Backend teszt (programlogika)

## 3.7 Teszt forgatókönyv
A teszt elvégzésének meghatározott sorrendjét és függőségeit teszt forgatókönyvben kell rögzíteni. A teszt forgatókönyv elkészítése során ügyelni kell a párhuzamosan elvégezhető tevékenységek lehetőség szerinti kihasználásra, az tesztelési idő csökkentésének érdekében. 

# 4 Tesztelési jegyzőkönyv és tesztelési jelentés

## 4.1 Tesztelési jegyzőkönyv
- A tesztelők a tesztforgatókönyvnek megfelelően elvégzik a tesztelést és az eredményt tesztjegyzőkönyvekben dokumentálják.
- A teszt kimenetelét minden esetben jelenteni kell a tesztkoordinátornak.
- A tesztkoordinátor a csapattal együtt megoldást keres a problémákra, ezután frissíti a tesztforgatókönyvet.
- Ha a problémát megoldották, a tesztelő újrakezdheti a tesztelést, majd dokumentálja az eredményeket.
- Ha a hiba továbbra is fennáll, és harmadik félen múlik a megoldása eszkalálni kell a problémát a projekt menedzsernek.

## 4.2 Tesztelési jelentés
A tesztelési jelentést a tesztkoordinátor készíti el. Ez egy részletes áttekintése a lefutott teszteknek, azok eredményeinek, státuszának és a megjegyzéseknek.
A tesztkoordinátornak ezután el kell juttatnia a projektmenedzsernek a tesztelési jelentést. 


## 4.3 Elfogadási kritériumok

A teszt sikerességének kritériumai:

-   Technikai, a teszt forgatókönyvben leírtak szerint.
    
-   A projekt menedzser jóváhagyása a teszt leszállítandókra.

## 4.5 Kockázatkezelés

| Kockázat | Hatás (magas/közepes/alacsony) | Kockázatkezelési mód |
|---|---|---|
| Csapattag megbetegedése  | közepes | Adott feladatok áthárulnak egy másik csapattagra |
| Számítógép meghibásodása | magas  | Erőforrások megosztása a csapattagoknál |
| Adatveszteség  | magas | Folyamatos biztonsági mentés, verziókövetés |
| Kiosztott feladat elmulasztása | magas  | Szigorú határidők betartása, folyamatos törekvés hátráltató probléma esetén a mielőbbi megoldást megtalálására. |

## 4.6 Tesztjegyzőkönyv minta

|Sorszám| Tesztelendő funkció csoport | Tesztlépés neve | Leírás | Teszt adatok | Elvárt működés | Tesztelő | Teszt eredménye |
| --- | --- | --- | --- | --- | --- | --- | --- |
| Példa | Példa funkció csoport | Példa neve | Példa leírása | Példa adatok | Elvárt példa működés | Példa Pál | Példa eredmény |