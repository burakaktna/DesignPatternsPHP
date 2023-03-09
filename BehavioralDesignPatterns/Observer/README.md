# Observer Design Pattern

The Observer Design Pattern is a behavioral pattern that defines a one-to-many dependency between objects. When the state of one object changes, all its dependents are notified and updated automatically.

To implement the Observer pattern, create a Subject class that maintains a list of its dependents, and notify them automatically of any state changes by calling their update() method.