#!/bin/bash
echo "Restaurando base de datos..."
#mysql -h 127.0.0.1 -u admin -pcrud_php_password crud_php < sql/dump.sql
mysql -h 127.0.0.1 -u admin -p crud_php < sql/dump.sql
echo "Base de datos restaurada."
