# Adapter Design Pattern

The Adapter Design Pattern converts the interface of a class into another interface that clients expect. This pattern allows classes with incompatible interfaces to work together by creating a class that acts as a bridge between them.

To use the Adapter pattern, create an adapter class that implements the target interface and contains an instance of the adaptee class. The adapter class then maps the methods of the target interface to the methods of the adaptee class.