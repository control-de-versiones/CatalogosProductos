Catálogo-PHP
============

Catálogo de productos en PHP



Instalacion
------------

Subir archivos al servidor web y darles privilegios de ejecucion.
Editar los archivos de /application/config:
  - config.php : $config['base_url']	= 'TU URL HASTA EL DIRECTORIO';
  - config.php : $config['encryption_key'] = 'TU CLAVE DE ENCRIPTACION';
  - database.php : $db['default']['username'] = 'USUARIO';
                   $db['default']['password'] = 'CONTRASEÑA';
                   $db['default']['database'] = 'BASE DE DATOS';

Usuarios
--------

Como administrador:
- admin / admin

Como usuario sin privilegios:
- alberto / alberto



Servidor
--------
Para que Codeigniter funcione correctamente hay que habilitar el Mod Rewrite
- sudo a2enmod rewrite

Y configurar nuestro sitio (archivo /etc/apache2/sites-enabled/000-default por defecto) cambiando las directivas AllowOverride en All

Hecho esto creamos un archivo ".htaccess" en la raiz del proyecto con:

RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule .* index.php/$0 [PT,L] 


Demo
----
http://beta.dragost.es/webs/catalogo/
