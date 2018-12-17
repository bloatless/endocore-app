# ShinyCore App

You can use this bootstrap application to quickly start a new project based on the
[ShinyCore](https://github.com/nekudo/shiny_core) framework.

This repository includes all required files and samples so you can start building your project right away.

## Installation

The easiest way to create a new ShinyCore application is by using composer. In the directory where you
want to start your project execute the following command:

```bash
php composer.phar create-project nekudo/shiny_core_app myshinyproject
```

You can of course change `myshinyproject` to whatever project name you want.

After that you can change into the just created project folder and start a PHPs webserver to test
if the application was installed correctly:

```bash
cd myshinyproject
php -S localhost:8080 -t public public/index.php
```

You can now access your application by pointing your browser to `http://localhost:8080`.

Of course you can also use any other webserver like nginx or apache. Just point the document root
of your projects vhost to the `public` folder inside your project folder.

## Documentation

The ShinyCore app sourcecode includes some useful examples and includes inline documentation wherever necessary.

Additionally there is a complete documentation on the
[ShinyCore frameworks GitHub page](https://github.com/nekudo/shiny_core). 

## License

MIT
