TYPO3 Bootstrap: Basic installation for websites setup
======================================================
This example contains TYPO3 7.6 and 2 TER extensions (coreapi and RealURL).
 
 
Use as blueprint for your starting website
------------------------------------------
Run `composer create-project -sdev koninklijke-collective/typo3-bootstrap my/project/dir`
 
Detailed information
--------------------

 Run `composer install` from your command line to initiate first setup for TYPO3 environments.
 
 * You still need to add your own apache/nginx configurations with your needed context.
    * https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/Bootstrapping/Index.html#application-context
 * Add nginx rewrites or apache .htaccess 
    * `_.htaccess` can be found in `/vendor/typo3/cms/_.htaccess`
    * the `.htaccess` need to be placed in the /public folder
 * The public folder should be configured for the DocumentRoot in your webserver configuration
 

Install a TER extension
-----------------------
Run `composer require typo3-ter/<extension-key>` to simply install an extension from the TER.

Questions?
----------

Feel free to create an issue in this repository! 
* https://github.com/bmoex/TYPO3-Bootstrap/issues 
