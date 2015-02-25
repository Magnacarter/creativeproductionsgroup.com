#!/bin/bash

# Init script for ChurchThemes.net
echo "Commencing creativeproductions.com setup"

# Make a database, if we don't already have one
echo "Creating database (if it's not already there)"

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS creativeproductions"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON creativeproductions.* TO wp@localhost IDENTIFIED BY 'wp';"

# The Vagrant site setup script will restart Nginx for us

# Let the user know the good news
echo "creativeproductions.com now installed";
