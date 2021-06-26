<VirtualHost *:80>
        ServerName mvc.sdslabs.local
        # Change the path below to wherever your application's public folder is in your system
        DocumentRoot /home/diyap/mvcasn/public
        # Change the path below too
        <Directory /home/diyap/mvcasn/public>
                #Do not show indexes
                #Do not follow symlinks
                Options -Indexes -MultiViews
                #Order allow,deny
                Require all granted
                Allowoverride All
                <IfModule mod_rewrite.c>
                        RewriteEngine on
                        RewriteCond %{REQUEST_FILENAME} !-f
                        RewriteCond %{REQUEST_FILENAME} !-d
                        RewriteCond $1 !^(index\.php)
                        RewriteRule ^(.*)$ index.php/$1 [L]
                </IfModule>
        </Directory>
        ErrorLog ${APACHE_LOG_DIR}/mvc.error.log
        LogLevel warn
        CustomLog ${APACHE_LOG_DIR}/mvc.access.log combined
        # Possible values include: debug, info, notice, warn, error, crit,
        # alert, emerg.
</VirtualHost>
