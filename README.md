# Laravel Tankcheck

### The assignment
I had to make a backend system using an MVC framework. For this I picked laravel, because I really like the way laravel works and the good explanation and documentation it has.
Using Laravel I built a website where users can post gas prices for gasstations and earn points from other user if the price is correct, ultimately to find the cheapest gas nearby.

### The system
![Main Screen](https://i.imgur.com/IRloeOF.jpg)
Focused mainly on the data aspect of the system, I didn't do any fancy styling for this project (Obviously). On the main screen I used the Maps API to load a map and put markers on gasstations saved in the database. Using the maps api you can search for a location using the searchbar at the bottom.
![Gas Info](https://i.imgur.com/EUCT8Uj.png)

![Account Info](https://i.imgur.com/sRnVp4M.png)
The main thing implemented in this system is the verification built in to prevent new users from doing 'damage' to the system. Without logging in, you'll only be able to look at the map and approve prices. You can also make an account, and you'll be able to change prices at stations. Your account has a verification level, which starts at level 0. By doing certain actions, this can be improved to level 1. For testing purposes, this can be done by approving other people's prices 10 times. At level 1, users are able to add new gasstations to the system. All these statistics can be seen by clicking on the account name in the top right.

![Admin view](https://i.imgur.com/v9nmGOA.png)
When logged in as the admin user, you have authentication level 2, which gives you permission to see other people's statistics and, if needed, disable those users in the system to prevent them from using it with that account.
