# Software De Votaciones Para IEVE

## Introduccion

Este software fue creado a partir de php y mysql para facilitar la ejecucion en todos los pc

## Como configurar

Recuerda: Para que el software funcione necesitas tener instalado Xampp y git

- Primero abriremos el cmd (preferiblemente en htdocs de xampp la ruta por defecto es: C:\xampp\htdocs)
  ![Alt text](image-1.png)
- Luego ejecutamos el siguiente comando: git clone https://github.com/wubbzy25/Votaciones.git
  Esto nos permitara clonar el repositorio a nuestro pc
  ![Alt text](image-2.png)
- Verificamos que la carpeta se subio a htdocs
  ![Alt text](image-3.png)
- Abrimos el panel de control de xampp y activamos apache y MySQL
  ![Alt text](image-4.png)
- Primero montaremos la base de datos para esto ingresa a la carpeta votaciones que previamente clonamos en htdocs y ingresa a database
  ![Alt text](image-5.png)
- Regresamos al panel de control de xampp y damos click a admin en MySQL y creamos una nueva base de datos llamada votaciones (si o si debe tener este nombre)
  ![Alt text](image-6.png)
- Damos click a la base de datos y le damos a importar
  ![Alt text](image-7.png)
  -Despues seleccionamos la base de datos
  ![Alt text](image-8.png)
  Y le damos importa

Y listo ya hemos instalado el configurado ¿que sigue?

## Como usar?

- regresamos al panel de control de xampp y le damos admin a apache y en la ruta despues del primer / escribimos votaciones

- Para votar la ruta es este http://localhost/votaciones/

Creadenciales de votador para testear

- ID: 21241523
- contraseña: 8CCADFqy

- -Y para el admin este es el link http://localhost/votaciones/admin/index.php

Credenciales del admin temporal:

- Usuario: admin
- Contraseña: admin

Muchas gracias :)
