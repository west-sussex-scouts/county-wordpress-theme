#!/bin/sh
git config --global user.email "travis@travis-ci.org"
git config --global user.name "Travis CI"
git remote set-url origin "https://tnwhitwell:${GH_TOKEN}@github.com/west-sussex-scouts/county-wordpress-theme.git"
