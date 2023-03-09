# Mediator Design Pattern

The Mediator Design Pattern is a behavioral pattern that defines an object that encapsulates how a set of objects interact with each other. It promotes loose coupling by keeping objects from referring to each other directly and allows for their interaction to be centrally managed by the mediator.

To use the Mediator pattern, create a Mediator interface that defines the communication protocol between the Colleague objects, and ConcreteMediator classes that implement this protocol to manage the Colleague objects interactions.