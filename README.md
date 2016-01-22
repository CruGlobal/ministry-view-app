# ministry-view-app
Ministry View Reports Application

This repository uses [git-flow](http://nvie.com/posts/a-successful-git-branching-model/) for feature and
release management. All development should be on the staging branch or a fork of it.

## Installation on localhost
Clone the repo
```bash
git clone -b staging --recursive https://github.com/CruGlobal/ministry-view-app.git ministry-view-app
cd ministry-view-app
```
Install Composer and Download PHP Dependencies
```bash
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```
Copy provided config.php to the config directory
```bash
cp config.php config/
```

Install npm, bower and componenets (install bower may require sudo)
```bash
cd app
npm install
bower install
./node_modules/.bin/gulp
```

Point your server at the ministry-view-app directory as the document root and serve index.php as the entry point to the application.
