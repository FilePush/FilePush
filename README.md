# FilePush

FilePush is an open-source file uploader which allows people to upload files and share the links to anyone in the world, with speed.

# Contributor notes

You're free to make contributions as well as pull requests. We'll merge them as we see fit.

PHP is a very loose language and will very from developer to developer - this isn't an excuse to make messy contributions.

# Security note

While me and my friend are fairly experienced when it comes to security, stuff can slip through. You may responsibly report vulnerabilities to filepush@protonmail.com - We can't offer any sort of monetary compensation in return due to the lacking revenue we make with the project, but you'll recieve a bug hunter role in our Discord.

# Current features

  - Registration and logging in, email verification, invite system, CAPTCHA, etc etc...
  - Uploading files the easy way. Do it through ShareX or on the on-site uploader.
  - Fully functional administration/moderation panel where specified admins and moderators can remove files, view reports, ban users and more.
  - A file reporting system with accompanying administration.
  - Public uploads with a commenting system (This drifts more towards being a social media site than an image uploader, but it's something fun to screw with)
  - (obviously) users can manage their own accounts, make changes such as password changing, deleting uploads, regenerating the name of an upload.
  
# Planned Features
  - Importing files/content from other websites - especially from other multimedia sites such as YouTube, Reddit and Twitter.
  - File encryption with password. Preferably client side decryption on download.
  - Fully functional API for applications and other front-ends such as React.js site or Android app (example)
  - User profiles. A system for this exists already, but is extremely broken and was only really created as a proof of concept.
  - _Linking_ your Discord account. Not the same as using a Discord account for registration, but opens up another way for people to login with Discord if their account is already linked. We're not planning on relying on Discord due to how unstable their Trust and Safety team are (which is why we dropped Discord support in the first place)
  - Deleting files through a link (So you can delete files within ShareX)
  - 

# Self hosting instructions - Requirements.
  - A Linux-based host. Some features use the Linux command line and will _not_ work on Windows. (Debian recommended, others will more than likely work fine)
  - Nginx. Unless you can securely convert the rules, don't use Apache. You can use Nginx on an alternative port and reverse proxy requests to Nginx through Apache if you need to do so.
  - PHP 8/~~7.4.2~~ - These are the only versions we have used recent FilePush versions on. We're currently on PHP 8, ~~older versions may return undesirable results~~ Older versions will no longer work due to elements we're using within PHP8.
  - A MySQL server. We use MariaDB.
  - ~~A Discord account. (So you can create the client-application to enable logins)~~ Discord integrations have been removed due to Discord being shit. May consider adding it back in the future?

 # Self hosting Instructions - Setting it up.
 1) Clone this project into the root of your site.
 2) Create a database on your MySQL server. Note down the details you'll need them later.
 3) Navigate to your site + /install.php

# Some foot notes...
I an open sourcing FilePush and providing basic setup instructions for the pure purpose of transparency. There are a lot of hard coded references to the word "FilePush" - If you're making your own uploader using FP's source, you might want to consider changing this to something else, although don't ask me to do it for you, if you want the reason please refer back to the first line.
