xml-sitemap-php
===============

Sitemaps are a way to tell search engines about pages on your site we might not otherwise discover. 
In its simplest terms, a XML Sitemap is a list of the pages on your website. 
Creating and submitting a Sitemap helps make sure that all search engines knows about all the pages on 
your site, including URLs that may not be discoverable by Google's normal crawling process.

***********************************
IS THIS SITEMAP RIGHT FOR YOU ?
***************************

*** If you use a CMS or any other framework you might give this a miss. ***

*************************
WHO SHOULD USE THIS ?
***************************

If you have a website that has PHP / HTML / PDF / DOC or any other large number of pages and files listed under multiple directories then you can use this project to generate a sitemap for your project.

Lets say you have a website that has multiple folders and subfolders and it has html / pdf / doc / js and 10s of other types of files and you want to generate a sitemap that can recursively go to all directories and genrate a list everytime its called then *** YOU ARE AT THE RIGHT PLACE *** 

***************************
SOME FACTS
***************************

1.0) The entire API is less than 100 lines of php code. Easy to understand and modify.

2.0) Defined arrays to specify:

    2.1) Which directories you want to include / exclude in sitemap generation.
    
    2.2) Which files you want to include / exclude from sitemap.
    
    2.3) Which extensions (like .jpg etc) that you want to include / exclude from sitemap.
    
3.0) Genrates XML Sitemap that is based on the google's XML Sitemap guidelines.

4.0) Can be customized in 15 mins to be used by any website.

***************************
HOW TO CUSTOMIZE IT
***************************

All you need to know is these 5 variables in the sitemap.php file. You can customize the entire code from these:

$ignored_dir_list - An array containing the names of directories that you dont want to indx (include libraries like geshi, sitemap, images etc.

$files_to_be_ignored - An array containing the names of files you would like to remove from indexing include files like header.php, footer.php, readme.txt etc to this list.

$ext_to_be_indexed - An array of file extensions that you would like to index, Commonly you would want all your .php, html, pdf, doc etc files to be indexed. Add them to this list.

$xsl = it rightnow points to geeksonjava.com but you can make it point to your local copy.

$urlfile = replace the 'http://geeksonjava.com/' with your domain name .com

AND YOU ARE GOOD TO GO !!!


 