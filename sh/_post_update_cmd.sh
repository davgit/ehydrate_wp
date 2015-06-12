#!/bin/bash

SH_DIR="$(dirname "${PWD}")/public/sh"

echo 'the sh dir is:';
echo $SH_DIR;
echo $SH_DIR/_config.sh;

. $SH_DIR/_config.sh

echo 'who am i:';
whoami;

sh ${SH_DIR}/wp_get_wp_config_file.sh;
sh ${SH_DIR}/wp_copy_and_move_themes_and_plugins.sh;
sh ${SH_DIR}/wp_check_for_uploads_dir.sh;