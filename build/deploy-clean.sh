#!/usr/bin/env bash

# Usage from root only: build/deploy-clean.sh
# For automatic deployment you can use the following command:
# echo "Y" | ./build/deploy-clean.sh

RESET="\033[0m"
YELLOW='\033[00;33m'
RED="\033[00;31m"

read -ep "$(echo -e ${RED}"========================= BE CAREFUL! =========================\n"${RESET}"Are you sure you want to clean your build for deployment? <y/N> ")" prompt

if [[ ${prompt} == "y" || ${prompt} == "Y" || ${prompt} == "yes" || ${prompt} == "Yes" ]]
then
    echo -e ${YELLOW}"Deleted:"${RESET}
    ## remove unused parameters
    find . -name ".svn" | xargs rm -rf
    find . -name ".git" | xargs rm -rf
    echo -e ${YELLOW}" - All versioning files."${RESET}

    ## Remove default git/development setup
    rm -rf ./.gitignore
    rm -rf ./icon.png
    rm -rf composer.*
    echo -e ${YELLOW}" - Default git/development setup."${RESET}

    ## Remove all build packages
    find . -name "node_modules" | xargs rm -rf
    echo -e ${YELLOW}" - All build files."${RESET}
else
    exit 0
fi
