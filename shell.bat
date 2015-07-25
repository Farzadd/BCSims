@echo off
:loop
COLOR 02
echo =========== [PEAR] www.pearprogrammers.com ===========
php app/console --shell
cls
goto loop