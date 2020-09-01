# Local development with TYPO3 CMS Base Distribution

This project is for testing TYPO3 bidirectinal relation handling with translated data of extensions.

## Dependencies

Installed ddev, docker, docker-compose

https://ddev.readthedocs.io/en/stable/


## Setup project

    git clone git clone git@github.com:undkonsorten/dummymgmt-dev.git .
    
go to the cloned directory and run:
    
    ddev start
    
After successfully starting the project you have to install dependencies

    ddev composer install --dev
    
Import database

    ddev import-db --src=fixtures/database/dump.sql.gz
