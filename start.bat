@echo off
REM ============================================================
REM  Floors & Stone — local dev server
REM  Double-click this file to run the site locally.
REM ============================================================

set HOST=localhost
set PORT=8000

echo.
echo  Starting Floors ^& Stone at http://%HOST%:%PORT%
echo  Press Ctrl+C in this window to stop the server.
echo.

REM Open the site in the default browser after a short delay
start "" /b cmd /c "timeout /t 1 >nul & start http://%HOST%:%PORT%"

REM Start PHP's built-in server from this script's folder
php -S %HOST%:%PORT% -t "%~dp0"

pause
