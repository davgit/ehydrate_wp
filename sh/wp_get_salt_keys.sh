#!/bin/bash

SH_DIR="$(dirname "${PWD}")/public/sh"
. ${SH_DIR}/_config.sh

## find  ${WP_BASE_DIR}/ -name wp-config.php -print | while read line
## do
##     curl http://api.wordpress.org/secret-key/1.1/salt/ > wp_keys.txt
##     sed -i.bak -e '/this_unique_string_needed_to_get_salt_keys/d' -e \
##     '/AUTH_KEY/d' -e '/SECURE_AUTH_KEY/d' -e '/LOGGED_IN_KEY/d' -e '/NONCE_KEY/d' -e \
##     '/AUTH_SALT/d' -e '/SECURE_AUTH_SALT/d' -e '/LOGGED_IN_SALT/d' -e '/NONCE_SALT/d' $line
##     cat wp_keys.txt >> $line
##     rm wp_keys.txt
## done


SALT=$(curl -L https://api.wordpress.org/secret-key/1.1/salt/)
STRING='this_unique_string_needed_to_get_salt_keys'
printf '%s\n' "g/$STRING/d" a "$SALT" . w | ed -s  ${WP_BASE_DIR}/wp-config.php