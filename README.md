## Overview

Baisc Chat App where users can register and find users to chat with.

## Requirements

-   PHP 8.0 or later
-   Nodejs 16.17 or later

## Installing Project

```bash
composer install
```

```bash
npm install
```

## Running Project

Open two terminal tabs and from each tab run the below commands:

```bash
npm run dev
use http:localhost:8000
```

```bash
php artisan serve
```

## Important notes

-   Env file is added on purpose because we need couple of values to run this app
-   Using Pusher for realtime communication, you might have to add those env as well
-   you'll find env.local just update those variable you are good to go
-   I didn't pay much attention on the ui for now.
-   If you run your app and it says generate app key button on top click on it and refresh app will work.
