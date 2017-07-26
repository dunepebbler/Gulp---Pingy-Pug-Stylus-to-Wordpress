# Gulp---Pingy-pug-Stylus-to-WordPress
Gulp script to compile Pingy exported files to a WordPress base template

Port from earlier Gulp script to be used with Pingy: https://github.com/pingyhq/pingy-cli.
For Pingy use the Pug and Stylus options then this script will compile the export to a base WordPress template to start from.
Comes with own WP Menu script which can be edited to reflect your own menu setup.

## Usage
* Your Pingy template should be in a folder named 'html'
* clone this repository to the parent folder
* Use `$ npm install` to install all dependencies
* Use `$ npm init` to override the project's title, version, description etc.
... This will be used for the WP template information
* run `$ gulp start` to initialize the templating script
... The script wil generate a wordpress folder in the parent folder

Your folder structure will look like this:

Parent folder
 - html
 - Gulp---Pingy-pug-Stylus-to-WordPress (or whatever you've renamed it to)
 - wordpress (this wil contain your wordpress template code)
 
You can use `$ stylus -w styles/main.styl -o css/` to watch and compile your Stylus edits.
