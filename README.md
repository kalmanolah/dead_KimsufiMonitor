KimsufiMonitor
==============

It's a site showing the availability of [Kimsufi](http://kimsufi.co.uk) servers.

Availability is checked every two minutes, so no manual refreshing is needed.

For some reason I decided building this with Silex would be a good idea.

Configuration
-------------

Nope.

Deploying/setting up
--------------------

You'll need Composer in order to actually get this project to work.

    curl -sS https://getcomposer.org/installer | php
    php composer.phar install

After you've done these things, you can visit `/web`.