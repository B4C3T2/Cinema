
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
Az általunk használt erőforrások egyike:
- Processzor: AMD Ryzen 5 2500U with Radeon Vega Mobile Gfx 2.00 GHz
- RAM: 8 GB
- Operációs rendszer: Windows 10 Home (64-bit)
- Le: 29Mbps/ Fel: 5Mbps internetkapcsolat
- Böngésző: Google Chrome (88.0.4324.190)

## 2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása)


**Feladatkörök és felelősségek**

|**Feladatkör**|  **Felelősség/tevékenység**	|
| --- | --- | --- |
| Tesztelő |  A teszt végrehajtása, Észrevételek dokumentálása, Teszt dokumentáció archiválása	|
|Szakértő 	 |  A szakértő az észrevételek elemzi és megoldást javasol.	|
| Teszt koordinátor |  Teszt terv készítése,  A tesztterv jóváhagyatása a projektmenedzserrel,  Teszt forgatókönyvek létrehozása,  Inkonzisztenciák kezelése,   Helyes és időbeni hibakezelés,   Szükség esetén problémák eszkalálása a projekt menedzsernek,   Végső riport készítése,   Teszt dokumentum archiválása,   Az észrevételek státuszának követése, ill. dokumentálása 	|
|  Projektvezető		|  Teszt terv jóváhagyása, Teszt forgatókönyv (testscript) jóváhagyása	|

## 2.2 Tesztkörnyezet

Ebben a részben meg kell határozni, hogy a tesztelés milyen környezetben történjen (fejlesztői vagy tesztkörnyezet), a környezetek hogyan érthetőek el, továbbá a tesztelők milyen hozzáféréssel végezzék a tesztelést.

| Környezet neve és feladata | A hozzáférés módja  | Konfiguráció |
|-|-|-|-|
| Fejlesztői környezet | Dokumentáció | Fentebb említett számítógép konfiguráció |

## 2.3 Tesztadatok
A teszt végrehajtásához szükséges rekordok (tesztadatok) száma: 3
A tesztadatok elkészítéséért és feltöltéséért felelős személy(ek): 

A tesztadatoknak az alábbi követelményeknek kell megfelelniük:
- Az alapadatok értékkészlete az éles rendszerrel megegyező kell, hogy legyen.

## 2.4 Leszállítandó teszt dokumentumok

| **Cím** | **Felelős személy** | **Szállítás gyakorisága** | **Szállítás módja** |
| --- | --- | --- | --- |
| Tesztterv |  |  |  |
| Teszt-esetek |  |  |  |
| Tesztjegyőkönyvek |  |  |  |
| Tesztelési jelentés  |  |  |  |

## 2.5 Tesztelési eszközök
- A böngésző beépíített segédeszközei
- Weboldal validátor

