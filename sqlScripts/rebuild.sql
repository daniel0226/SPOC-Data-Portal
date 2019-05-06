#makes rebuilding the db easier

drop database termproject;
create database termproject;
use termproject;

source /home/james/4300/termProject/sqlScripts/main.sql;
source /home/james/4300/termProject/sqlScripts/test.sql;
