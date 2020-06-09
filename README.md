# Somos Nerds! puros Nerds toDevelop

### Proyecto final de CFGS Deserrollo de Aplicacions Web
Grupo 7 | [Adam](https://github.com/adamjalich), [Aleix](https://github.com/aleixr20), [Roger](https://github.com/rogercrdaw)
--- 
### Descripción
Esta web es el resultado de un proyecto de fin de curso de tres compañeros de DAW. Ideado principalemente para dar respuesa a una idea personal junto al interés por desarrollar un producto en el que poder integrar al mismo tiempo, todas o casi todas las cosas que hemos ido aprendiendo a lo largo del nuestar formación.  

Elegir la temàtica no fue tarea fàcil, pues encontrar un producto en el que se pudiesen integrar los contenidos acadèmicos trabajados, como demostración de las aptitudes y conocimientos adquiridos, era complejo por la dificultad de conseguir que pudiesen coexisitir distintas tecnologias de frontend, backend y sistemas sin xocar entre ellas.

Por ello elegimos como aplicación web que para muchos seria a primera vista un simple blog de artículos (posts). No obstante, desde cero, sin usar ningun CRM, template o plantilla predefinida. Permitiendonos compartir nuestro aprendizage con artículos repartido en categorias para los distintos idiomas de programación, frameworks o temas en general.

### Marcandonos como objetivos principales:

- Desarrollar el backend con Symfony para una gestión del enrutado de las URL que nos permitiese jugar con las categorias inCSS, inPHP, inApache...)
- Aplicar en frontend todos las teorias trabajadas en sobre diseño y tecnicas en Responisve, User Experience, OG y SEO)
- Integrar un frontend reactivo con VUE, que no conseguimos y terminamos creando nuestro propio javascript full Modelo Vista Controlador.
- Hacer el Deployment de la web en un entorno de producción real, con configuraciones hoy en dia básicas sobre accesos, redireccionados, permisos, SSL, mails...
- Utiliza herramientas de trabajo coordinado como Git, SCRUM y Basecamp, actualmente muy extendidas en la mayoria de empresas.

Solo en 4 semanas y con la complejidad añadida de un confinamiento, que no ha impedido a 3 personas de 3 provincias distintas, comunicar-se a diario, organizar-se y realizar casi todos los objetivos que nos propusimos, creemos que con exito   

_"Somos Nerds, adictos a la programación, Geeks de las TIC. Aprendimos mucho, y no queremos para de hacerlo. Por ello, si en nuestros apuntes detectas información incorrecta, no dudes en informarnos, pues sabemos que estamos en un sector en constante evolución y somos conscientes que hay mucho a mejorar.
Toda contrubución a nuestro aprendizaje seria mas que bienvenida."_    

_"Pero cuidado, si eres uno de esos programadores Pro repleto de orgullo y con ganas de criticar, te equivocaste de web. Tomate una pildora de humildad y empieza por preguntarte ¿Si tan experto eres, que haces buscando ayuda en una web de novatos?. Ahorrate los tecnicismos y los comentarios vanidosos, los minadores de moral no son bienvenidos.    
Aporta o Aparta!!"_    

---

### Teconologia utilizadas
- HTML5 CSS3, Javascript y Twig para el Frontend
- PHP, Symfony5 y Doctrine para backend

### Requisitos para su intalación
- Symfony5 y Composer
- PHP 7.4 y bases de datos que admita JSON

### Instalación
Se ha preparado una Demo de facil instalación.
1. Clonar repositorio en una carpeta ejecutable desde localhost
2. Crear una base de datos en localhost
3. Cambiar variables de entorno (lineas 33 y 40 del archivo *.env*)
4. Descomentar lines 9 y 10 del gitignore para no sincronizar carpetas VAR y VENDOR 
~~~~
DATABASE_URL=mysql://db_user:db_password@db_server:3306/db_name?serverVersion=5.7
MAILER_URL=smtp://smtp.MAIL-SERVER-DOMAIN:465?encryption=ssl&auth_mode=login&username=MAIL-ACCOUNT&password=MAIL-PASSWORD
~~~~
Y finalmente desde terminal ejecutar:
- `php bin/console make:migrations`
- `php bin/console doctrine:migrations:migrate`
- `php bin/console doctrine:fixtures:load`

### Media
[B-NERDS! toDevelop](https://www.b-nerd.cat)    
[Video Pitch](https://www.b-nerd.cat/docs/files/video_pitch_hd.mp4)    
[Video Demo](https://www.b-nerd.cat/docs/files/demo.mp4)    

Para profesores.
La documentación completa del proyecto está en [b-nerd.cat/doc](https://www.b-nerd.cat/doc)    
Esta carpeta es sólo accesible a usuarios admin.