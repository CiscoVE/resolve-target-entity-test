Test case for resolving target entities in form types
=====================================================

To help with this test case, please do the following:

### 1. Clone this repository

```
git clone git://github.com/CiscoVE/resolve-target-entity-test.git
```

### 2. Configure a virtual host

```
<VirtualHost *:80>
	ServerName test.local
	DocumentRoot /path/to/resolve-target-entity-test/web
	<Directory /path/to/resolve-target-entity-test/web>
		AllowOverride All
		Allow from All
	</Directory>
</VirtualHost>
```

### 3. Add an entry in /etc/hosts

```
127.0.0.1   test.local
```

### 4. Restart Apache

```
sudo apache2ctl restart
```

### 4. Copy app/config/parameters.yml.dist to app/config/parameters.yml

```
cp app/config/parameters.yml.dist app/config/parameters.yml
```

### 5. Create a database and edit app/config/parameters.yml

```
    database_name:     test
    database_user:     root
    database_password: ~
```

### 6. Install vendor libraries and bundles

```
php composer.php install
```

### 7. Create tables and load data fixtures

```
php app/console doctrine:schema:update --force
php app/console doctrine:fixtures:load
```

### 8. Call up the project root URL in your browser and try adding an Audit

### 9. ...?
