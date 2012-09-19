xml-sitemap-php
===============

Sitemaps are a way to tell search engines about pages on your site we might not otherwise discover. 
In its simplest terms, a XML Sitemap is a list of the pages on your website. 
Creating and submitting a Sitemap helps make sure that all search engines knows about all the pages on 
your site, including URLs that may not be discoverable by Google's normal crawling process.

***********************************
* IS THIS SITEMAP RIGHT FOR YOU ? *
***********************************

If you use a CMS or any other framework you might give this a miss.

*************************
* WHO SHOULD USE THIS ? *
*************************

If you have a website that has PHP / HTML / PDF / DOC or any other large number of pages and files listed under multiple directories then you can use this project to generate a sitemap for your project.

Lets say you have a website structure as:

..index.php
..about-us.html
..readme.txt

....images/**.jpg
....images/**.png

....folder-1/index.php
....folder-1/some-file.pdf
....folder-1
........subfolder-1/a.php
........subfolder-1/b.php
....folder-1/b.php
	
....folder-2/index.php
....folder-2/a.php
....folder-2/
........subfolder-2/
........subfolder-3/c.php

and you want to generate a sitemap that can recursively go to all directories and genrate a list everytime its called then ***** YOU ARE AT THE RIGHT PLACE ****

***************************
* FACTS ** FACTS ** FACTS *
***************************

1) The entire API is less than 100 lines of php code. Easy to understand and modify.
2) Defined arrays to specify:
    2.1) Which directories you want to include / exclude in sitemap generation.
    2.2) Which files you want to include / exclude from sitemap.
    2.3) Which extensions (like .jpg etc) that you want to include / exclude from sitemap.
3) Genrates XML Sitemap that is based on the google's XML Sitemap guidelines.
4) Can be customized in 15 mins to be used by any website.

 