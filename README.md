# php-basic-cms - 15 Lines is all you need...
A very basic content management system, It is to make websites simpler, no confusing big files, just a directory, the documentation is at [docs.hn.fyi](https://docs.hn.fyi/d/5-hng-cms-guide) and the most recent, up to date version at [hn.fyi/hng-cms.zip](https://www.hn.fyi/hng-cms.zip), However this repositary will get large updates.

** Main Features**

* IP Logger (Basic functionality)
* DDoS Attack Preventor [Original Here](https://github.com/GiacomoDevIT/AntiDDoS)
* IP Blocker System


To edit the index.php files, add css in /content/index/css, js in /content/index/js and body content in /content/index/body, note that files are included alphabetically (e.g a.php shows up before c.php)

Logging is in the /logging directory, They collect the following information;
```php
Array
(
    [timestamp] => 1597261237 / 2020-08-12 15:40:37
    [ip] => 176.xxx.162.117
    [ver] => Array
        (
            [cmsver] => 1.0
            [getip] => 1.0
            [blockipver] => 1.1
            [antiddosver] => 1.0
        )

    [author] => Hayden NG of HNG Networks
    [webroot] => /home/vol13_5/host.hng.ovh/www/cms.netn.ga/htdocs/
    [domain] => cms.netn.ga
)
```
All this does is provide diagnostics of what the system is running, and the xxx in the ip, the script actually generated, no protection is provided to the folder, however it doesn't leak anything too important.

**Please Note**
If you are using a free host, remove the /console file, as they may think it is a webshell, of which you intend to use it for hacking, however the console, {Credits in /console/console.php} runs in www-data user (Webserver user), and has to have permissions to run command, however it doesn't stop automatic systems detecting it.
