# Command Design Pattern

The Command Design Pattern is a behavioral pattern that encapsulates a request as an object, thereby letting you parameterize clients with different requests, queue or log requests, and support undoable operations.

To implement the Command pattern, create a Command interface that defines the execute() method, and ConcreteCommand classes that implement the execute() method by invoking the appropriate operations on Receiver objects.