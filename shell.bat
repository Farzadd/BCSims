@echo off
:loop
COLOR 02
echo =========== [BCSims] www.bcsims.ca ===========
php app/console --shell
cls
goto loop