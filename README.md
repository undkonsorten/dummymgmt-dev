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

Login in backend with

user: admin
pass: joh316

or use the auto login feature. Should be installed automatically so you automatically logged in.
    
## Test in TYPO3 10

Switch to branch feature/typo3-10.

After ddev composer install you should have a running TYPO3 10 system.
The database dump in repository is from 9.5. You have to run all upgrade wizards and database compare in install tool.
