#!/bin/bash

SH_DIR="$(dirname "${PWD}")/public/sh"
. ${SH_DIR}/_config.sh

# copy '14 and '15 themes to wp-content/themes
if [ -d $WP_THEMES_DIR ]; then
    echo "Themes directory exists at ${WP_THEMES_DIR}";
else
    echo "Creating themes directory at ${WP_THEMES_DIR}";
    mkdir $WP_THEMES_DIR;
fi

wptwentyfourteen=${WP_BASE_CONTENT_DIR}/themes/twentyfourteen
wptwentyfifteen=${WP_BASE_CONTENT_DIR}/themes/twentyfifteen

cp -R ${wptwentyfourteen} ${WP_THEMES_DIR}/
cp -R ${wptwentyfifteen} ${WP_THEMES_DIR}/

# Remove old wp default themes
rm -Rf ${WP_CONTENT_DIR}/themes/twentyten;
rm -Rf ${WP_CONTENT_DIR}/themes/twentyeleven;
rm -Rf ${WP_CONTENT_DIR}/themes/twentytwelve;
rm -Rf ${WP_CONTENT_DIR}/themes/twentythirteen;


rm -Rf ${WP_BASE_CONTENT_DIR}/themes/twentyten;
rm -Rf ${WP_BASE_CONTENT_DIR}/themes/twentyeleven;
rm -Rf ${WP_BASE_CONTENT_DIR}/themes/twentytwelve;
rm -Rf ${WP_BASE_CONTENT_DIR}/themes/twentythirteen;
rm -Rf ${WP_BASE_CONTENT_DIR}/themes/twentyfourteen;
# rm -Rf ${WP_BASE_CONTENT_DIR}/themes/twentyfifteen;
# rm -Rf ${WP_BASE_CONTENT_DIR};

echo "old wp themes at ${WP_CONTENT_DIR}/themes/ and ${PUBLIC_DIR}/wp/wp-content/ removed";


# copy plugins to new wp-content dir
cp ${WP_BASE_CONTENT_DIR}/plugins/* ${WP_CONTENT_DIR}/plugins/