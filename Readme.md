# Instalacion

Vhost
``` sh
<VirtualHost *:80>

    DocumentRoot   "/var/www/todo-phalcon-4/public"
    DirectoryIndex index.php
    ServerName     todo.phalcon
    ServerAlias    www.todo.phalcon

    <Directory "/var/vhosts/todo-phalcon-4/public">
        Options       All
        AllowOverride All
        Require       all granted
    </Directory>
    
    <IfModule mod_rewrite.c>

		<Directory "/var/www/todo-phalcon-4">
		    RewriteEngine on
		    RewriteRule  ^$ public/    [L]
		    RewriteRule  ((?s).*) public/$1 [L]
		</Directory>

		<Directory "/var/www/todo-phalcon-4/public">
		    RewriteEngine On
		    RewriteCond   %{REQUEST_FILENAME} !-d
		    RewriteCond   %{REQUEST_FILENAME} !-f
		    RewriteRule   ^((?s).*)$ index.php?_url=/$1 [QSA,L]
		</Directory>

	</IfModule>

</VirtualHost>
```

domain
``` sh
127.0.0.1	todo.phalcon
```
