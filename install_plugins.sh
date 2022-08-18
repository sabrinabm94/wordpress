#!/bin/bash

removePluginsList=("hello"  "akismet")
for removePlugin in ${removePluginsList[*]}; do
  wp plugin is-installed $removePlugin
  if [ $? ]; then
    echo "REMOVING $removePlugin"
    wp plugin delete $removePlugin;
  fi
done

installPluginsList=("loco-translate"  "advanced-custom-fields"  "duracelltomi-google-tag-manager"  "ninja-forms"  "wordpress-seo"  "wp-compress-image-optimizer")
for installPlugin in ${installPluginsList[*]}; do
  ! wp plugin is-installed $installPlugin
  if [ $? ]; then
    echo "INSTALLING $installPlugin"
    wp plugin install $installPlugin --activate;
  fi
done


