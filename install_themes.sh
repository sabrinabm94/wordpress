#!/bin/bash
defaultTheme="basicblogchild"
themes=("twentynineteen"  "twentytwenty"  "twentytwentyone")

for theme in ${themes[*]}; do
  wp theme is-installed $theme
  if [ $? ]; then
    echo "REMOVING THEME $theme"
    wp theme delete $theme;
  fi
done

wp theme is-installed $defaultTheme
if [ $? ]; then
  echo "ACTIVING THEME $defaultTheme"
  wp theme activate $defaultTheme;
fi
