# Overview

This repo contains docker setup files and a bash script to help automate unit
testing for a Wordpress plugin.

It should be noted that Wordpress has an
[official node package](https://www.npmjs.com/package/@wordpress/env) that
already does most of this and more. However, I found it quite resource heavy and
I didn't need to use the dev installation, only test. So I created a more
lightweight version plus a helper script to run tests.

Based largely on
[this](https://marioyepes.com/blog/wordpress-plugin-tdd-with-docker-phpunit/).
Thanks to the author of this article.

# First time start

Install [Docker](https://docs.docker.com/engine/install/).

If you are using WSL as I am, you need to install the docker client on your
Linux repo and go into the Docker engine's settings to
[enable WSL integration](https://docs.docker.com/desktop/wsl/).

Then do:

```
docker compose up
```

Then visit [http://localhost:8080](http://localhost:8080) and follow the prompts
to install Wordpress.

You only need to do this once as the docker volumes will persist across restart.

# Installing latest version of your plugin and running tests

IMPORTANT NOTES:
- the helper script only works on bash (perhaps obviously)
- the required directory structure of your plugin is (replace "my-plugin-name"
  with your plugin slug):
```
  __ plugin_root
  |___ my-plugin-name
  |  |___ my-plugin-name.php OR plugin.php
  |___ tests
```

```
./build-plugin.sh -p path/to/your/plugin_root/my-plugin-name -t
```

See `./build-plugin.sh -h` for more options.

# Viewing debug/error logs

```
docker compose exec wp tail -F /var/www/html/wp-content/logs/debug.log
```

# Cleaning up/resetting

```
docker compose rm -v -s -f
```

Then you need to manually remove the persistent volumes:

```
docker volume rm wptest_db-data
docker volume rm wptest_wp-data
```
