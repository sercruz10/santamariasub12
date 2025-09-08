@echo off
setlocal
set "PHP=C:\laragon-new\bin\php\php-8.3.16-Win32-vs16-x64\php.exe"
"%PHP%" "%~dp0artisan" %*
endlocal