# playsonic.de

## install

````
git clone <repository>
git submodule update --init --recursive
````
## run
````
php -S localhost:3000
````
## deploy
````
git remote add live ssh://psonic@achernar.uberspace.de/home/psonic/playsonic.git
git push live
````

### setup uberspace

#### git bare repository

````
cd ~
git clone --bare <repository> playsonic.git
````
copy bin/git-hooks/post-receive to playsonic.git/hooks/post-receive and make executable for all

