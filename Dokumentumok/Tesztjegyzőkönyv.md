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
|Sorszám| Funkció leírása | Vizsgálat módja/esz köze, részletes leírása | Elvárt eredmény [válaszidő, végrehajtási idő, egységnyi idő alatt végrehajtott tranzakció] | Eredmény | Megfelelősség státusza [Megfelelő, Pótlás határideje:] | Tesztelő |
| --- | --- | --- | --- | --- | --- | --- |
| 1. | Főoldal háttérképének megjelenítése | Böngésző általi tesztelés | A háttérkép az oldal teljes területét fedje el. | Az oldalt teljes egészében lefedi. | Megfelelt | Majoros Norbert |
| 2. | Főoldalon lévő gombok megjelenítése | Böngésző általi tesztelés | A gombok a megadott formázásoknak megfelelően jelenjen meg. | A gombok formázása haladéktalanul működik. | Megfelelt | Majoros Norbert |
| 3. | Foglalási oldal háttérképének megjelenítése | Böngésző általi tesztelés | A háttérkép az oldal teljes területét fedje el. | Az oldalt teljes egészében lefedi. | Megfelelt  | Majoros Norbert |
| 4. | Foglalási oldalon lévő gombok megjelenítése | Böngésző általi tesztelés | A gombok a megadott formázásoknak megfelelően jelenjen meg. | A gombok formázása haladéktalanul működik. | Megfelelt | Majoros Norbert |
| 5. |  |  |  |  |  |
| 6. |  |  |  |  |  |