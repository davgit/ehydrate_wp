#!/bin/bash

SH_DIR="$(dirname "${PWD}")/public/sh"
. ${SH_DIR}/_config.sh

if [ -d $WP_UL_DIR ]; then

	echo "Uploads Dir Exists";
	sudo chmod 777 $WP_UL_DIR;

else
	echo "Uploads Dir Not found, creating it";
	mkdir $WP_UL_DIR;
	sudo chmod 777 $WP_UL_DIR;
fi