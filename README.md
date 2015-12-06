# xpath-evaluator

# What is it?

A simple application to help evaluate xpaths

As a developer, when I need to build a web scraper, I never know if simple xpaths will work.

I wanted to build a ready-to-use application that I can just feed a URL too, and a potential xpath, and see what the output is.

This application can be served from any server as long as it's got Apache and PHP running.

# How to use

Clone the code, and ensure it's somewhwere accessible by browser.

Navigate to the right directory, and fill in the site URL, and the xpath. The application will return the results
of the xpath query.

# Version 1.0

This was coded one Saturday evening, and uses PHP and file_get_contents to retrieve the initial HTML. Over time, I will be adding
more HTML retrieval methods, as well as amending the UI to allow you to select which method you use.

I'd love for it to look a bit more shiny than it is now, and so would love for you to submit pull requests (hint hint! :D )

Please remember: Always ensure you have permission before scraping a site.

Related tags: #PHP, #scraping, #XML
