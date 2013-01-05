#!/bin/bash
USER=$(whoami)
ENV=$1

if [ $# -ne 1 ]; then
    echo "Usage: ./deploy.sh [development|production]"
    exit 1
fi

if [ $ENV != "development" ] && [ $ENV != "production" ]; then
    echo "Usage: ./deploy.sh [development|production]"
    exit 1    
fi

if [ $ENV == "development" ] && [ $USER != "root" ]; then
    echo "Needs to be root."
    exit 1
elif [ $ENV == "production" ] && [ $USER != "deployer" ]; then
    echo "Needs to be deployer."
    exit 1       
fi    

TEMP_DIR=/tmp
GIT_ADDR=https://github.com/arthurbailao/ego.git
REPO_NAME=ego
DEVELOPMENT_DIR=/var/www/ego
PRODUCTION_DIR=/srv/www/www.ego.com/public_html

if [ $ENV == "development" ]; then
    APP_DIR=$DEVELOPMENT_DIR
elif [ $ENV == "production" ]; then
    APP_DIR=$PRODUCTION_DIR
fi

if [ -d $TEMP_DIR/$REPO_NAME ]; then
    rm -rf $TEMP_DIR/$REPO_NAME
fi

git clone $GIT_ADDR $TEMP_DIR/$REPO_NAME
touch $TEMP_DIR/$REPO_NAME/.$ENV

if [ "$(ls -A $APP_DIR)" ]; then
    rm -rf $APP_DIR/*
fi

mv $TEMP_DIR/$REPO_NAME/* $APP_DIR/
rm -rf $TEMP_DIR/$REPO_NAME
rm $APP_DIR/README.md
rm $APP_DIR/deploy.sh
exit 0
