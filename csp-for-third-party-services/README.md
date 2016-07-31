# Collection of examples

Here is a small collection of CSP directives you should use for some third-party services.

## Google Analytics

### 1) If you make the call of GA script in the ```head``` tag

```
script-src 'unsafe-inline' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net
img-src www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net
# you may specify also "http://www.google-analytics.com https://www.google-analytics.com" (I had some bugs sometimes)
```

(or generate a hash for inline script to avoid ```unsafe-inline```)

Other method:

You may use an internal file js script on your domain and use the call of GA script in the head tag
Example :
```
    <script type="text/javascript" src="https://ssl.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" src="/js/front/analytics.js"></script>
```    
Where the file named analytics.js host on your domain contains your GA id UA:
```
    javascript
    ga('create', 'UA-XXXXXXX-X', 'auto');
    ga('send', 'pageview');
```
You can now use the script-src with ```self```

### If you make the call of GA script in an external JS file - __better imho__ -

Put all the analytics code into an JS external file:
```
    <script type="text/javascript" src="/js/front/analytics.js"></script>
```  

So no need to have ```unsafe-inline``` in CSP :

```
script-src 'self' www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net
img-src www.google-analytics.com stats.g.doubleclick.net https://stats.g.doubleclick.net
# you may specify also "http://www.google-analytics.com https://www.google-analytics.com" (I had some bugs sometimes)
```


(```self``` is here only if the call is make on the same domain name, you have to adapt if it is different for your case)

Note: stats.g.doubleclick.net seems to be used for demographics stats in GA. (to confirm?)


## Vimeo player (iframe)

```
default-src *.vimeo.com ;
script-src *.vimeo.com *.vimeocdn.com *.newrelic.com *.nr-data.net ;
style-src *.vimeocdn.com ;
child-src 'self' *.vimeo.com *.vimeocdn.com ;
```

(to test further, these values seem to be ok)


## Color box
```
style-src 'unsafe-inline';
```
(with the script src needed for the JS code, same for CSS)


## Twitter widgets

"An Embedded Tweet or Embedded Timeline may display with restricted capabilities when a Content Security Policy restricts inline loading of Twitter. Set csp=on to disable functionality which could display Content Security Policy warnings on your site."

```<meta name="twitter:widgets:csp" content="on" />```

See: https://dev.twitter.com/web/overview/widgets-webpage-properties#csp

## Disqus

```
script-src your_disqus_subdomain.disqus.com a.disquscdn.com ;
connect-src https://links.services.disqus.com wss://realtime.services.disqus.com ;
```

## Algolia

```
connect-src *.algolia.net *.algolianet.com ;
```

## Flickr

```
script-src embedr.flickr.com widgets.flickr.com ;
connect-src embedr.flickr.com geo.query.yahoo.com ;
```

Feel free to participate. :)
