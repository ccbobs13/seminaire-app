# Seminaire-app
This application code is configured to build and deploy on kubernets on mac.  

## Step 1: Create a namespace.
```sh 
kubectl create namespace <kubernetes-namespace>
```

## Step 2: Run this command before building docker image. This is required for minikube.  
```sh
eval $(minikube docker-env)
``` 

## Step 3: Build docker image  
```sh 
docker build -t seminaire -f docker/www/Dockerfile .
```  

## Step 4: Create deployment and service on kubernetes  
```sh 
kubectl apply -f deployment/**-deployment.yaml -n <kubernetes-namespace>
```  
```sh 
kubectl apply -f deployment/**-service.yaml -n <kubernetes-namespace>
```

## Step 5: Open your app in browser  
```sh 
minikube service <app-service> -n <kubernetes-namespace>
```   