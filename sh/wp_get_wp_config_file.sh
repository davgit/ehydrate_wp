#!/bin/bash

SH_DIR="$(dirname "${PWD}")/public/sh"
. ${SH_DIR}/_config.sh

if [ ! -f $WP_CONFIG_FILE ]; then

    echo "WP Config file not found!";
    curl -O https://gist.githubusercontent.com/lukedanielson/889217a39541d9e3f847/raw/wp-config.php;
    mv -f wp-config.php ${WP_BASE_DIR}/wp-config.php;
    sh ${SH_DIR}/wp_get_salt_keys.sh;

else

	 echo "WP Config file exists";

fi

