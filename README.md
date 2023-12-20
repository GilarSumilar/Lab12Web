# Lab12Web
## Profil
| Variable | Isi |
| -------- | --- |
| **Nama** | Gilar Sumilar |
| **NIM** | 312210407 |
| **Kelas** | TI.22.A4 |
| **Mata Kuliah** | Pemrograman WEB |

# Sistem Login

# Langkah-langkah Praktikum
## DDL Table User
```sql
CREATE TABLE `user`(
`id` INT NOT NULL AUTO_INCREMENT,
`username` VARCHAR(50),
`password` VARCHAR(50),
PRIMARY KEY (`id`),
UNIQUE INDEX `UNIQUE` (`username`)
) ENGINE=MYISAM;

INSERT INTO `user` (`username`, `password`) VALUES ('admin'
, md5('admin'));
```
**Hasil :**

![1]()

#### *Note :*
Username : admin

Password : admin
