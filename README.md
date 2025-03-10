# MoonShine 3 blank project

---

| Settings                          |
|-----------------------------------|
| ✅ Enable authentication?          |
| ✅ Install with system migrations? |
| ⛔ Enable notifications?           |
| ✅ Base theme                      |

---

| Included         |
|------------------|
| ✅ Basic setting  |
| ✅ PhpStan        |
| ✅ Php CS Fixer   |
| ✅ TypeScript     |
| ✅ Xdebug         |
| ✅ Docker         |

## Installation
- Run the git clone command `git clone git@github.com:dev-lnk/moonshine-blank.git .`.
- Copy the `.env.example` file and rename it to `.env`, customize the `#Docker` section to your needs.
- Run the command `make build`, and then `make install`.
- Check the application's operation using the link `http://localhost/admin` or `http://localhost/admin:${APP_WEB_PORT}`.
- Run stat analysis and tests using the command `make test`.

## About
This is a Blank Moonshine 3 based on the [laravel-blank](https://github.com/dev-lnk/laravel-blank) project.

## Docker

### Images

- nginx:1.27.3-alpine
- php:8.4.4-fpm (with xdebug)
- mysql:9.2.0
- redis:7.0.11-alpine
- node:23.6.1-alpine3.18

### Other
- Many commands to speed up development and work with docker can be found in the `Makefile`
- If you don't need Docker, remove: `/docker`, `docker-compose.yml`, `Makefile`. Convert `.env` to standard Laravel form
- To launch containers with `worker` and `scheduler`, delete comments on the corresponding blocks in `docker-compose.yml`