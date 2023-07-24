Initially coded last November 1, 2017. Rechecked for compatability with PHP 8.2 on July 24, 2023

# PHP Text to Speech using Microsoft Speech API

Microsoft Speech API
Read more about this API on [wikipedia](https://en.m.wikipedia.org/wiki/Microsoft_Speech_API).

### Installation

Copy the files to htdocs folder
(Mine is C:\xampp\htdocs\ using xampp, yours might be different)

### How to run
Open your browser, then navigate to http://localhost/phpmssapi/ and press "Enter"
(Your test URL might be different)

## Note
before you can run this file, add first

```
[COM_DOT_NET]
extension=php_com_dotnet.dll
```

at the end of your 'php.ini' file

```
Xampp for Windows = (Drive Letter):\xampp\php\php.ini
Wamp (Drive Letter):\wamp\bin\apache\apache(version)\bin\php.ini   (I'm not sure about this one because I'm using Xampp)
```

Read extension documentation from [php.net](http://php.net/manual/en/com.installation.php).
If you get error(s), refer to this link from [Stackoverflow](https://stackoverflow.com/questions/10678325/class-com-not-found/12050332).

Using this code, you can embed text-to-speech which you can use in registration system, attendance system and the like.