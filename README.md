# MODX AMP
Enable Accelerated Mobile Pages (AMP) for your MODX website. More info about AMP on the [AMP Project website](https://www.ampproject.org).

## Features
* Every page on your website will get an alternative AMP-compatible page
* You can call an AMP page in two ways:
    * Add suffix or prefix "/amp/" to the page URI, for example:"https://website.com/news/article" will be callable as "https://website.com/news/article/amp/" or as "https://website.com/amp/news/article", which will show the AMP page
    * Add suffix "?amp=1" to the page URI, for example "https://website.com/news/article" will be callable as "https://website.com/news/article?amp=1", which will show the AMP page
* All regular and AMP-pages will have a link-tag added in the head-element for referring to the AMP and regular version of a page:
    * AMP reference in regular page: <link rel="amphtml" href="https://website.com/news/article/amp/">
    * Regular reference in AMP page:  <link rel="canonical" href="https://website.com/news/article">
* [idea/optional] AMP-pages will be cached in the "amp" cache-key. It is not yet clear if cache is needed, because Google has an own cache for AMP pages. [More cache info here](https://www.ampproject.org/docs/support/faqs.html#how-do-accelerated-mobile-pages-work)
* [idea] Generate AMP-versions ondoc-save
