# FilePush

FilePush is an open-source file uploader which allows people to upload files and share the links to anyone in the world, with speed.

# Security note

While me and my friend are fairly experienced when it comes to seecurity, stuff can slip through. You may responsibly report vulnerabilities to filepush@protonmail.com - We can't offer any sort of monetary compensation in return due to the lacking revenue we make with the project, but you'll recieve a bug hunter role in our Discord.

# Features

  - Integrations with Discord allowing you to easily track uploads by specific users and authenticate file uploads.
  - Uploading files the easy way. Do it through ShareX or on the on-site uploader.
  - Fully functional administration/moderation panel where specified admins and moderators can remove files, view reports, ban users and more.
  - A file reporting system.
  - Public uploads with a commenting system. I know this is drifting towards more of a social media site when compared to uploads, but it was fun to add and some people seem to like screwing with it.
  
# Planned Features
  - Importing files from other websites - especially from other multimedia sites such as YouTube and Twitter.

# Self hosting instructions - Requirements.
  - A Linux-based host, we recommend Debian. Windows may work, but some features may be broken. We're aiming to have compatibility working in the future.
  - Nginx. Unless you can securely convert the rules, don't use Apache. You can use Nginx on an alternative port and reverse proxy requests to Nginx through Apache if you need to do so.
  - PHP 8/7.4.2 - These are the only versions we have used recent FilePush versions on. We're currently on PHP 8, older versions may return undesirable results.
  - A MySQL server. We use MariaDB.
  - ~~A Discord account. (So you can create the client-application to enable logins)~~ Discord integrations have been removed due to Discord being shit. May consider adding it back in the future?

 # Self hosting Instructions - Setting it up.
 1) Clone this project into the root of your site.
 2) Create a database on your MySQL server. Note down the details you'll need them later.
 3) Navigate to your site + /install.php

# Some foot notes...
I an open sourcing FilePush and providing basic setup instructions for the pure purpose of transparency. There are a lot of hard coded references to the word "FilePush" - If you're making your own uploader using FP's source, you might want to consider changing this to something else, although don't ask me to do it for you, if you want the reason please refer back to the first line.
