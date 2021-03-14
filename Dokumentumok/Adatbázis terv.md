## Adatstruktúrák definiálása

***K1: Férőhely-lekérdezés:***


***K2: Foglalás:***


***K3: Számla generálása:***


***K4: Módosítás:***


***Férőhelyek:***

- Egy férőhelynek van ID-je, ami a fix helyre utal.

- A teremben a székek helye lehet szabad illetve foglalt. 

*A helyek elhelyezkedése, azonosítója, foglaltsága a felhasználói felületen vizuálisan megjelenik.*

***Vendég:***

- Egy vendégnek van neve, e-mail címe, jelszava. 

- Ezek szükségesek a vendég számára ahhoz, hogy a regisztráció után be tudjon jelentkezni. A vendég számára szükséges adatok létfontosságúak a felhasználó számára. 

***Foglalás:***

- Egy foglalásban található a hely száma, a film kezdetének illetve befejezésének időpontja. A vendég e-mail címe jelzi, a helyet melyik vendég foglalta le.

***Foglalás lemondása/megszakítása:***

- A foglalás vissza mondható/törölhető. Minden foglalásnak generált id-je van. A felhasználó ez alapján törölheti, vagy módosíthatja a foglalást.

**Számla:**

- A helyfoglalás árát a foglalás adatai alapján határozzuk meg, például hány széket foglalunk és így kerül előállításra a számla.

