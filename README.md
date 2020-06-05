# FilePush

FilePush is an open-source Discord-enabled file uploader which allows people to upload files and share the links to anyone in the world, with speed.

# Features

  - Integrations with Discord allowing you to easily track uploads by specific users and authenticate file uploads.
  - Uploading files the easy way. You can do it through the home page or using the upload API which is ShareX compatible.
  - Fully functional administration/moderation panel where selected users can remove files or ban users.
  - File Hashing to blacklist certain files. We will use this in the future to compare hashes to a database of child abuse imagery to protect children and our website. We plan on using Microsoft's PhotoDNA, but if there are any better alternatives please let us know, we're actively looking for better solutions.
  
# Planned Features
  - Importing files from other websites.
  - Featured images. Image files marked as public on upload will be displayed on a seperate page.

# Self hosting instructions - Requirements.
  - A Linux-based host, we recommend Debian. Windows may work, but some features may be broken. We're aiming to have compatibility working in the future.
  - Nginx or Apache (We recommend Nginx; it's generally faster)
  - PHP 7.4.2 (It may work on earlier versions, but be warned that we have not tested it on earlier versions and results will be unexpected)
  - A MySQL server. We use PostgreSQL.
  - A Discord account. (So you can create the client-application to enable logins)

 # Self hosting Instructions - Setting it up.
 1) Clone this project into the root directory of which ever website you're using it on.
 2) Create a database, import database.sql and fill the details in config.php - This is pretty self explanatory.
 - $servername is the location of the SQL server. This is usually localhost. It's typically bad practise to have SQL servers on the open internet, so if you do make sure it can only be accessed from the IP address where the website is hosted, if not, atleast use a strong password.
 - $username is the username which will be used to login to the database.
 - $password is the password which will be used to login to the database.
 - $database is the name of the database which the website will be connecting to.

3) Go to discord.com/developers/application and create an application; Take note of the client ID and the client secret.
4) Fill in the client ID and client secret in the appropiate sections in config.php
5) Create a webhook in a Discord channel of your choice, copy the webhook URL and paste it in $report_webhook - This will send file reports to the channel where the webhook is allocated to.
6) Put the website address in $url, for example: https://filepush.pw
7) Put the name of your website in $appname, for example: FilePush. This will be displayed on all pages where the name of the website is expected to be displayed, such as on the header.
8) Fill in contact emails for $email_dmca and $email_contact. This is where people can mail to contact you about anything, and for copyright issues.
