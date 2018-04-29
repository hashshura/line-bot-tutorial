# line-bot-tutorial

A multifunctional LINE@-bot that is able to fetch random photos from an Instagram user (regex and crawl), "be taught" words and answer them based on the corresponding answers (Google Firebase), calculate simple mathematics expressions (MathJS API), generate memes (MemeGenerator API), and display random comics from xkcd.com (xkcd API). Made with PHP, mainly to complement the LINE@ Messenger Bot Tutorial that can be found [on my blog](https://blog.ashura.id/category/line/).

### How-to

* Install Messaging API for your LINE@ account. See [here](https://blog.ashura.id/membuat-line-messenger-bot-part-1/).
* Another way to deploy to Heroku is by using Heroku CLI. The tutorial can be found [here](https://devcenter.heroku.com/articles/heroku-cli).
* Put your channel access token and channel secret to the .env file in \env directory.
* Edit the YOUR_FIREBASE_PROJECT_ID (line 71) in index.php and handler/post.php.
