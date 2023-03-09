# Chain of Responsibility Design Pattern

The Chain of Responsibility Design Pattern is a behavioral pattern that allows an object to pass a request along a chain of handlers until one of the handlers handles the request.

To use the Chain of Responsibility pattern, create an abstract Handler class that defines a handleRequest() method, and ConcreteHandler classes that implement the handleRequest() method and pass the request to the next Handler in the chain if they cannot handle the request themselves.