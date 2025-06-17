1. asegurarse que tienes instalado mysql
sudo apt update
sudo apt install mysql-server
sudo service mysql start

2. ejecutar script en mysql para creacion de usuario 
sudo mysql
source sql/create_user.sql;

3. ejecutar script en mysql para creacion de base y privivlegios a usuario
source sql/create_db.sql;

4. restaurar base anterior en bash gitpod ejectar:
mysql -h 127.0.0.1 -u admin -p crud_php < sql/dump.sql
pssword: 1234

5. para iniciar servidor.
php -S 0.0.0.0:8000
