# php-basic-cms - 15 Lines is all you need...
A very basic content management system, It is to make websites simpler, no confusing big files, just a directory, the documentation is at [docs.hn.fyi](https://docs.hn.fyi/d/5-hng-cms-guide) and the most recent, up to date version at [hn.fyi/hng-cms.zip](https://www.hn.fyi/hng-cms.zip), However this repositary will get large updates.

To edit the index.php files, add css in /content/index/css, js in /content/index/js and body content in /content/index/body, note that files are included alphabetically (e.g a.php shows up before c.php)

**Please Note**
If you are using a free host, remove the /console file, as they may think it is a webshell, of which you intend to use it for hacking, however the console, {Credits in /console/console.php} runs in www-data user (Webserver user), and has to have permissions to run command, however it doesn't stop automatic systems detecting it.
