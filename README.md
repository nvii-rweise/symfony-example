# 1. How it starts...

## create VirtualHost for easy operation and less writing effort

### for XAMPP User

- go to C:\xampp\apache\conf\extra\httpd-vhosts.conf
- add entry

```json
<VirtualHost *:80>
    ServerAdmin <EMAIL>
    DocumentRoot "C:/xampp/htdocs/develop/symfony-example/public/"
    ServerName symfony-example.local
</VirtualHost>
```

- on your system add to your `\ect\hosts`

```json
127.0.0.1 symfony-example.local
```

- restart Apache-Server
