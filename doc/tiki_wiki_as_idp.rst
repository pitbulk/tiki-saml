Tiki Wiki as an IdP
*******************

Deploy a simpleSAMLphp on a machine with a TikiWiki instance and build an IdP
=============================================================================

Install simpleSAMLphp
---------------------

First of all install the `simpleSAMLphp library dependences <http://simplesamlphp.org/docs/stable/simplesamlphp-install#section_3>`_:

.. code-block:: bash

 CentOS --> yum install php5 php-ldap php-mbstring php-xml mod_ssl
 Debian --> apt-get install php5 php5-mcrypt php5-mhash php5-mysql  


Now we can download the `latest version of simpleSAMLphp <http://code.google.com/p/simplesamlphp/downloads/list>`_, now is the 1.10: ::

 Directly --> http://simplesamlphp.googlecode.com/files/simplesamlphp-1.10.0.tar.gz
 From subversion repository --> svn co http://simplesamlphp.googlecode.com/svn/tags/simplesamlphp-1.10.0

Put the simplesamlphp directory at ``/var/www/idp/simplesamlphp``


Create a self-signed cert
-------------------------

In order to generate a self-signed cert you need openssl:

.. code-block:: bash

 Centos --> yum install openssl
 Debian --> apt-get install openssl

Using OpenSSL we will generate a self-signed certificate in 3 steps.

* Generate private key:

.. code-block:: bash

 openssl genrsa -out server.pem 1024

* Generate CSR: (In the "Common Name" set the domain of your instance)

.. code-block:: bash

 openssl req -new -key server.pem -out server.csr

* Generate Self Signed Key:

.. code-block:: bash

 openssl x509 -req -days 365 -in server.csr -signkey server.pem -out server.crt


Override the certs of the ``/var/www/idp/simplesamlphp/cert`` folder with the  generated certs.


Apache configuration
--------------------

The configuration may look like this: ::

 <VirtualHost *>
        ServerName idp.example.com
        DocumentRoot /var/www/simplesamlphp/www

        Alias /simplesaml /var/simplesamlphp/www
 </VirtualHost>


Security considerations: Make sure that your IdP server runs HTTPS (SSL)




NTP server
----------

To get Saml2 run correctly we need have sure that all machine's clock are synced.

Install ntp: 

.. code-block:: bash

 Centos --> yum install ntp
 Debian --> apt-get install ntp

Configure the ntp service `/etc/ntp.conf`: ::

 server 0.uk.pool.ntp.org
 server 1.uk.pool.ntp.org
 server 2.uk.pool.ntp.org
 server 3.uk.pool.ntp.org

`Check the` `ntp server list <http://www.pool.ntp.org/use.html>`_ `and use the server that is near from your server.`

Enable the server and put it on the system boot

.. code-block:: bash

 Centos --> service ntpd start
            chkconfig ntpd on

 Debian -> /etc/init.d/ntp start
           update-rc.d ntp defaults



Configure simplesamlphp as IdP and use Tiki Wiki database as auth source backend
--------------------------------------------------------------------------------

Copy the simpleSAMLphp config file template to the config folder:

.. code-block:: bash

 cp /var/www/simplesamlphp/config-templates/config.php /var/www/simplesamlphp/config/config.php
 
Edit the file and config some params:
* 'auth.adminpassword'
* 'secretsalt'
* 'technicalcontact_name'
* 'technicalcontact_email'

Set the 'enable.saml20-idp' to true to enable the simpleSAMLphp instance as an IdP.


Now lets create the metadata file of our IdP, create a new file ``/var/www/simplesamlphp/metadata/saml20-idp-hosted.php``:

.. code-block:: php

 <?php

 $metadata['https://<domain>/simplesaml/saml2/idp/metadata.php'] = array(
        'host' => '<domain>',

        'privatekey' => 'server.pem',
        'certificate' => 'server.crt',

        'auth' => 'tiki-sql',   # Auth source backend used for this IdP
 );

 ?>

`Replace <domain> with the domain of your IdP`


Now lets configure the tiki-sql auth source backend, create a new file ``/var/www/simplesamlphp/config/authsources.php``:

.. code-block:: php

 <?php

 $config = array(

    'tiki-sql' => array(
        'sqlauth:SQL',
        'dsn' => 'mysql:host:localhost;dbname=tiki',
        'username' => '<databaseuser>',
        'password' => '<databasepass>',
        'query' => 'SELECT login AS username, email FROM tiki.users_users WHERE login = :username AND (hash = encrypt(:password, tiki.users_users.hash) OR hash = md5(:password))',

    ),
 );

 ?>

``Replace the <databaseuser> and the <databasepass> with the correct value. This values are the user and password needed to connect to the tiki databse. If you forgor those value go to your Tiki Wiki folder and check the db/local.php file.``

``Notice that I have assumed that the name of the Tiki Wiki database was 'tiki', if you chose other, replace it in the 'dsn' and 'query' params.``


Testing the IdP
---------------

Open a browser and access to your simplesamlphp instance (Check your apache configuration. Ex. https://<domain>/simplesamlphp)

Access to the "Authentication" section, Click on "Test configured authentication sources" and click on "tiki-wiki" (or the name you have used for the tiki SQL backend)

An user/pass form will appear where you will be able to authenticate with your Tiki-Wiki credentials. Test it and see if you sucessfully access(A view with your Tiki-wiki user data will appear, those data will be send for the SPs).

Connect Google Apps with the IdP 
================================

There is a guide that explain it at http://simplesamlphp.org/docs/stable/simplesamlphp-googleapps#section_7 (see 7.2 and the following)

The resume:

* Add the Google Apps Metadata to your IdP
* Configure the Google Apps panel

Add the Google Apps Metadata to your IdP
----------------------------------------

At the metadata folder are defined the metadatas. SPs metadatas are described at ``metadata/saml20-sp-remote.php``.
There is a metadata template available at metadata-templates.

To connect our IdP with the Google Apps add the following data to the ``metadata/saml20-sp-remote.php`` file:

.. code-block:: php

 <?php

 $metadata['google.com'] = array(
    'AssertionConsumerService'   => 'https://www.google.com/a/<your_google_domain>/acs', 
    'NameIDFormat'               => 'urn:oasis:names:tc:SAML:2.0:nameid-format:email',
    'simplesaml.nameidattribute' => '<attribute_used_as_identifier>',
    'simplesaml.attributes'      => false
  );


  ?>

`Replace <your_google_domain> (Check at your Google Apps panel) and the <attribute_used_as_identifier> (For example 'uid' or 'eduPersonPrincipalName')`

`Set 'simplesaml.attributes' to false if you don't want to transfer any attribute to Google Apps, otherwise delete this parameter or set it to true`

Configure the Google Apps panel
-------------------------------

Configure your Google Apps instance to look to SimpleSAMLphp-TikiWiki for single sign-on. To do this, go to the Google Apps domain management screen, click on Advanced tools, and then on Set up single sign-on (SSO). Configure the following options:

* **Enable Single Sign-on** Check this box to turn on SSO for your domain.
* **Sign-in page URL** Set this to the URL of SimpleSAMLphp's SAML2 Redirect SSO endpoint.
* **Sing-out page URL** Set this to the URL of SimpleSAMLphp's SAML2 Redirect SLO endpoint.
* **Change password URL** Set this to the "reset password view" URL of Tiki-Wiki. (http://<tiki-domain&path>/tiki-remind_password.php)
* **Verification certificate** You must upload the public cert used in your simpleSAMLphp enviroment (/var/www/idp/simplesamlphp/cert/server.crt)

`To check what are the SSO and the SLO endpoints of your IdP, you have to open a browser, access to the "federation"`
`Open a browser and access to your simplesamlphp instance (Check your apache configuration. Ex. https://<domain>/simplesamlphp)`
`Access to the "Federation" section, there, under the "SAML 2.0 IdP Metadata" is a link to the metadata of your idp.
`Set as 'Sign-in page URL' the 'SingleSignOnService' and as 'Sing-out page URL' the 'SingleLogoutService'


Connect Salesforce with the IdP
===============================

There is a guide that explain how to configure Salesforce http://wiki.developerforce.com/page/Single_Sign-On_with_SAML_on_Force.com#Configuring_Force.com_for_SSO

The resume:

* Configure the Salesforce SSO panel
* Add the Salesforce Metadata to your IdP


Configure the Salesforce SSO panel
----------------------------------

Login into your Force.com org and click Setup -> Security Controls -> Single Sign-On Settings. 

Click the Edit button and then check the SAML Enabled checkbox to display the input fields for the SAML.

Configure:

* **SAML Version** Set 2.0
* **Identity Provider Certificate** You must upload the public cert used in your simpleSAMLphp enviroment (/var/www/idp/simplesamlphp/cert/server.crt)
* **Issuer** 
* **User provisioning** Check if you want to auto create users
* **Identity Provider Login URL** Set this to the URL of SimpleSAMLphp's SAML2 Redirect SSO endpoint.
* **Identity Provider Logout URL** Set this to the URL of SimpleSAMLphp's SAML2 Redirect SLO endpoint.
* **Custom Error URL** If you have a page error
* **SAML User ID Type** Set to "Assertion contains the Federation ID from the User object"
* **SAML User ID Location**  "User ID is in an Attribute element"
* **Atribute Name** 'email'
* **Name ID Format** 'urn:oasis:names:tc:SAML:2.0:nameid-format:email'

`To check what are the SSO and the SLO endpoints of your IdP, you have to open a browser, access to the "federation"`
`Open a browser and access to your simplesamlphp instance (Check your apache configuration. Ex. https://<domain>/simplesamlphp)`
`Access to the "Federation" section, there, under the "SAML 2.0 IdP Metadata" is a link to the metadata of your idp.
`Set as 'Sign-in page URL' the 'SingleSignOnService' and as 'Sing-out page URL' the 'SingleLogoutService


Save the data and copy the "Salesforce Login URL" (ACS)  and the "Salesforce Logout URL"

Also you can download the metadata and copy the content and paste it in the simpleSAMLphp metadata converter (federation section)


Add the Salesforce Metadata to your IdP
---------------------------------------

At the metadata folder are defined the metadatas. SPs metadatas are described at ``metadata/saml20-sp-remote.php``.
There is a metadata template available at metadata-templates.

To connect our IdP with Salesforces add the following data to the ``metadata/saml20-sp-remote.php`` file:

.. code-block:: php

 <?php


  $metadata['https://saml.salesforce.com'] = array(
      'AssertionConsumerService'   => '<salesforce_login_url>',
      'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
      'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:email',
      'attributes' => array (
	    0 => 'email',
      ), 

      'authproc' => array(
          90 => array(
              'class' => 'core:AttributeAdd',
              'ssoStartPage' => array(
                  '<customer_url>'
              ),
              'logoutURL' => array(
                  '<salesforce_logout_url>',
              ),
          ),
      ),

  );


  ?>

`<customer_url> Set an URL with a view with a link to init again the login process`

`The fiter is needed to support the SLO in salesforce` [`1 <https://groups.google.com/forum/#!msg/simplesamlphp/8G5K5W2KV0M/J-tRvk4h8tYJ>`_]
`'url_when_logout>, the  logout redirect will end at this URL.`

If you want to validate sings and decrypt you will need salesforce cert so you can copy the 'key' attribute from the parsed metadata


References
==========

* `How to install simpleSAMLphp <http://simplesamlphp.org/docs/stable/simplesamlphp-install>`_
* `How to config simpleSAMLphp as an IdP <http://simplesamlphp.org/docs/stable/simplesamlphp-idp>`_
* `How works and configure the SQLAuth <http://simplesamlphp.org/docs/stable/sqlauth:sql>`_
* `Adding SPs to the IdP <http://simplesamlphp.org/docs/stable/simplesamlphp-idp#section_6>`_
* `How to connect Google Apps to a simpleSAMLphp IdP <http://simplesamlphp.org/docs/stable/simplesamlphp-googleapps>`_
* `Single Sign-On with SAML on Force.com <http://wiki.developerforce.com/page/Single_Sign-On_with_SAML_on_Force.com#Configuring_Force.com_for_SSO>`_


