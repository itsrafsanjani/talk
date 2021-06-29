## Talk Example

This is a demo project for [Laravel-Talk](https://github.com/nahid/talk) package. You can learn from here how to use
Talk.

### Announcement

Yes, now Talk Example project is Docker ready.

### Requirements

* Docker
* Docker Compose

### Configurations

If you want to use our default settings then you didn't need to configure anything except Pusher credentials.

So copy `.env.example` to `.env`

```shell
cp .env.example .env
```

Then configure your desire settings.

### Installation With Docker

Copy docker-compose.yml.example to docker-compose.yml and configure as you want.

```shell
cp docker-compose.yml.example docker-compose.yml
```

There are no extra panic to install this project just run this command and enjoy

```shell
./talk ready
```

#### What contains with Docker?

- PHP 7.1.1
- Nginx
- MySQL 5.7
- Redis
- Supervisor
- Git
- GD Library
- Zip Library

So you no need to Install PHP, no need to manage queue, our system will manage all queue, worker and database system
with auto migration and seeding. Cool nah?

### Installation Without Docker

```sh 
composer install

npm install

npm run dev

php artisan key:generate

php artisan migrate --seed

php artisan serve

php artisan queue:work
```

Now open you project in browser and goto [http://localhost:8000](http://localhost:8000). Then login with the given user
credentials

> email: `talk@example.com` \
> password: `password`

> email: `chat@example.com` \
> password: `password`

So, Lets start you journey :)

Here is a project screenshot that was developed by Talk.

![Talk-Example Screenshot](http://i.imgur.com/uQ7sgmI.png "Talk-Example Project")

## Template Credit

Template - [Live chat window widget](http://www.bypeople.com/live-chat-window-widget/ )
by [SergioGalindo](http://www.bypeople.com/author/uakala/)


