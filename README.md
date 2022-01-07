# Pi Cloud - Docker

Pi Cloud compiler dockerized container 

## Build an image using Dockerfile

git repository and run below command

```
sudo docker build -t phpcompiler
```

## Run docker image

```
sudo docker run -p 5001:80 phpcompiler
```

Go to http://<IP>:5001

Note : Login page is skipped for docker image
