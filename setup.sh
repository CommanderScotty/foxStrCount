docker build -t foxstrcount .
#docker volume create hello
#docker run  -d -v hello:/var/www/html --name foxStrCount -p 8080:80 foxstrcount
docker run  -d --name foxStrCount -p 8080:80 foxstrcount
