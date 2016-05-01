
/**
 * Created by PhpStorm.
 * User: emaktse
 * Date: 02.05.2016
 * Time: 20:40
 */

1. Luua uus tabel 'loomaaed', kus on järgnevad väljad:

CREATE TABLE loomaaed_mtseljab(id INTEGER PRIMARY KEY AUTO_INCREMENT , nimi TEXT , vanus TEXT , liik TEXT , puur INTEGER)

2. Täita eelnevalt loodud tabel vähemalt 5 reaga. Sisestamisel valida andmed nii, et mõned loomad jagavad samat puuri ja mõnest liigist on mitu looma.

INSERT INTO loomaaed_mtseljab  VALUES (NULL,'loom1', 3, 'koer',1)
INSERT INTO loomaaed_mtseljab(nimi, liik,puur, vanus) VALUES('loom2','kass',7,4)
INSERT INTO loomaaed_mtseljab(nimi, liik,puur, vanus) VALUES('loom3','lind',2,2)
INSERT INTO loomaaed_mtseljab(nimi, liik,puur, vanus) VALUES('loom4','lihtsaltloom',4,4)
INSERT INTO loomaaed_mtseljab(nimi, liik,puur, vanus) VALUES('loom5','teineloom',9,6)


3. Hankida kõigi mingis ühes kindlas puuris elavate loomade nimi ja puuri number:

SELECT nimi, puur FROM `loomaaed_mtseljab` WHERE puur=4

4. Hankida vanima ja noorima looma vanused:

SELECT MIN(vanus) as noorim, MAX(vanus) as vanim FROM `loomaaed_mtseljab`

5. Hankida puuri number koos selles elavate loomade arvuga (vihjeks: group by ja count ):

SELECT count(*), puur FROM `loomaaed_mtseljab` GROUP BY puur

6. Suurendada kõiki tabelis olevaid vanuseid 1 aasta võrra:

UPDATE loomaaed_mtseljab SET vanus=vanus+1