# php-basic-cms - 15 Lines [Now 11] is all you need...
A very basic content management system, It is to make websites simpler, no confusing big files, just a directory, the documentation is at [docs.hn.fyi](https://docs.hn.fyi/d/5-hng-cms-guide) 

**Main Features**

* IP Logger (Basic functionality)
* DDoS Attack Preventor [Original Here](https://github.com/GiacomoDevIT/AntiDDoS)
* IP Blocker System


To edit the index.php files, add css in /content/index/css, js in /content/index/js and body content in /content/index/body, note that files are included alphabetically (e.g a.php shows up before c.php)

Logging is in the /logging directory, They collect the following information, you can disable logs in /config/config.php in the [logging] section (THe below is an extract from [cms.hn.fyi](http://cms.hn.fyi/logging/log-1597341517.log);
```php
Array
(
    [timestamp] => 1597341517 / 2020-08-13 13:58:37
    [ip] => 176.xxx.162.117
    [ver] => Array
        (
            [cmsver] => 1.2.1
            [getip] => 1.0
            [blockipver] => 1.1-alpha
            [antiddosver] => 1.0
        )

    [author] => Hayden NG of HNG Networks
    [webroot] => /home/vol13_5/host.hng.ovh/www//cms.hn.fyi
    [domain] => cms.hn.fyi
)

```
All this does is provide diagnostics of what the system is running, and the xxx in the ip, the script actually generated, no protection is provided to the folder, however it doesn't leak anything too important.

**Please Note**
If you are using a free host, remove the /console file, as they may think it is a webshell, of which you intend to use it for hacking, however the console, {Credits in /console/console.php} runs in www-data user (Webserver user), and has to have permissions to run command, however it doesn't stop automatic systems detecting it.
