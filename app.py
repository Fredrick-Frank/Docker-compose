import os
print ("This is my first image.")
print ("Current Dir is: ",os.getcwd())
print(os.listdir())

##Run: docker build -t <app-name> . where (.) is the dockerfile
##Run: docker run <app-name> --- to create a container image

