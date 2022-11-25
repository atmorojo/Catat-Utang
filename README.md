# Catet Utang

Simple PHP app to help me record payable accounts. Yes, I should use GNUCash or another tried-and-tested apps out there but those apps come with their own complexity and my employees aren't yet ready to face those stuff. Help me I'm stuck what should I do to improve my business T_T

## Installation
Just clone this on your server public dir (`htdocs` or `www` or whatever).
Then run
```
php composer.phar install
```
don't forget to `touch` your sqlite db cuz I'm too lazy to set up some DBMS and this is just running locally so why not?
```
touch db.sqlite3
```

## Potential Improvements
- [ ] Single connection file (my brain is fried so instaed of using one php connection file I connect with the database everytime I have to work with the DB). Should I use a singleton here?
- [ ] Routing (added a routing library but as eye said my brain is deeply fried).
- [ ] Clean up JS code. Please note that I'm running running Laragon on Win 7 machine as our local production machine and `npm` no longer saport Win 7 so bye-bye modern JS frameworks. What about [arrow-js](https://www.arrow-js.com/)?

## License
I'm not sure help me decide plz (like anyone would give a care at this app).
