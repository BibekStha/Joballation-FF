# JOBALLATION - FF INC
A web application where you can view, manage and compare all your job applications in an organized and centralized manner.
Users will be able to apply rankings to interested jobs based on, for example, distance from home, salary, benefits etc.

## GETTING STARTED
### Installing composer dependencies
composer install
### Installing npm dependencies
npm install

### Create env file and generate encryption key
cp .env.example .env

php artisan key:generate

### See changes made in SASS and JS
npm run dev
#### or for automatic refreshing
npm run watch
