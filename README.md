

### Watching for Changes
```bash
$ npm run watch
```
* Watches for changes in the `assets/scss/scss` directory. When a change is made the SCSS files are compiled.  
* Watches for changes in the `assets/js` directory. When a change is made the JS files are compiled and saved to the `/public/js` directory.  

## Compile and Minify All Theme Assets
```bash
$ npm run build
```
Compiles and minifies all scripts and styles.
 
## Compile Gutenburg Block scripts
```bash
$ npm run build:scripts
```
Uses the Wordpress compiler to convert React code to ES5 compatable scripts to run on the admin and front end.

## Modifying custom fields
ACF settings can be modified in the admin. All changes there must be commited to this repo. 

## Export the PHP and the JSON.
The PHP code which generates the fields is in functions/custom-fields.php
To modify the fields, we need the JSON fields settings found in includes/acf-export...json This file can be imported to make changes to the fields.