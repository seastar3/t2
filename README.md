# t2
PaizaCloud GimFesScoreboard

This time, I test-developed a sports festival score bulletin system for PaizaCloud.
If the manager registers the scores of the three teams, the match results can be 
viewed from anywhere.
PHP & MySQL web system.
The important point this time is development in a cloud environment and cooperation 
with GitHub. I was a little confused because the procedure of remote authentication 
of GitHub changed recently, but I managed to cooperate.

I put together the commands.

ssh-keygen
ls .ssh
cat ..ssh/id_rsa.pub
cd (target directory)
git init
git add .
git config --global user.email "my email address"
git config --global user.name "my GitHub name"
git commit -m "Initial commit"
git remote add origin https://github.com/(my GitHub name)/(target repository).git
git push -u origin master

 // Enter your github name and password after push command. This password is token that waz created the Personal Access Token on github by myself.
 Then I could register on GitHub.
