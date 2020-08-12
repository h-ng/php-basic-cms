# 14 Lines, for 200
# hngCMS - A clearer way!
# Hayden Nicholson Goult (hn.fyi/~hng)
if [ -z "$1" ]; then
  echo "hngCMS - Unexpected variable";
  echo "";
  echo "Usage:";
  echo "[new] (page) - creates new page";
  echo "[delete] (page) - deletes page";
fi
if [[ $1 == "new" ]]; then
  if [[ $2 == "page" ]]; then
    # Create new page
    echo "Create new page, What is pages name?";
    read;
    pagename=${REPLY};
    echo $pagename;
    echo "What is your webroot (E.g /var/www/html)";
    read;
    webroot=${REPLY};
    echo $webroot;
    cd $webroot;
    cp index.php $pagename.php
    mkdir content/$pagename
    mkdir content/$pagename/css
    mkdir content/$pagename/js
    mkdir content/$pagename/body
    echo "";
    echo "Add your CSS files to $pagename/css";
    echo "Add you JS files to $pagename/js";
    echo "Add your body file to $pagename/body";
  fi
fi
if [[ $1 == "delete" ]]; then
  if [[ $2 == "page" ]]; then
    echo "What page do you want to remove?";
    read;
    pagename=${REPLY};
    echo "What is your webroot?";
    read;
    webroot=${REPLY};
    cd $webroot;
    rm $pagename.php;
    rm -r content/$pagename
  fi
fi
