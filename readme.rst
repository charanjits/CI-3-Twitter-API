###################
About this Project
###################

This project is used to fetch tweets from Twitter having:
* A particular hashtag
* Re-tweeted at least once

*********
Features
*********
* Setup using the latest version of CodeIgniter v3.0.0
* Uses TwitterOAuth - most popular PHP library for Twitter's OAuth REST API. See documentation
 at `https://twitteroauth.com<https://twitteroauth.com>`_.
* Configurable scipt
* Easy to extend
* Uses Bootstrap and Fontawesome

*******************
Server Requirements
*******************

PHP version 5.4 or newer is recommended.

It should work on 5.2.4 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

* Install Composer
    ```
     curl -sS https://getcomposer.org/installer | php
     mv composer.phar /usr/local/bin/composer
    ```
* Clone or Download the Source Code Zip.
* Extract and Point Document Root to `twitter`
* Run `php composer.phar install` / `composer install` in `twitter` directory
* Add Twitter API credentials  in ``application/config/twitter.php``
* Run your PHP server with default config
* Open browser and navigate to localhost/twitter
* All the tweets will be displayed

*******
License
*******

* CodeIgniter Licenese: Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <http://www.codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community IRC <http://www.codeigniter.com/irc>`_
-  `TwitterOAuth<https://twitteroauth.com>`_
-  `Bootstrap<http://getbootstrap.com/getting-started/>`_
-  `FontAwesome<http://fortawesome.github.io/Font-Awesome/get-started/>`_

*************
Contributers
*************
0. Charanjit Singh
