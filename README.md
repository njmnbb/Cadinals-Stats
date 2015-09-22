# Cardinals-Stats
An example of the Kimono API creator for my CMP_SC 4830 exploration.

The Kimono API creator is a handy tool that allows the user to grab information from a given website, without using that website's API (if it even has one), and compiles it in a continually updating JSON file stored on their cloud servers.

This tool is mainly used for those with little experience using a website's API, or for those trying to access information from a website that does not have a publicly available API. The interface is simple and easy to use; you simply load up the Kimono add-on in Google Chrome, click the data on the page that you would like to scrape, give that section a name for the JSON file, and click done. The data is then collected and compiled in an easy-to-use fashion on Kimono's servers.

For this particular use, I decided to grab player statistics from the St. Louis Cardinals' website and display it in a table. This particular data was already in a table-like format so it was easy to convert into a usable API. Kimono also detects patterns of a website making for even easier data collection. For example, if the data is already in table tags, Kimono will detect the columns and automatically highlight the entire column to be added. you can, of course, uncheck any unwanted data from this autocompletion method, but the feature is mostly favorable.
