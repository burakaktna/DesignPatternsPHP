# Flyweight Design Pattern

The Flyweight Design Pattern conserves memory by sharing large numbers of fine-grained objects efficiently. This pattern involves creating a factory class that creates and manages the shared flyweight objects.

To use the Flyweight pattern, create a flyweight interface that defines the common methods for both the shared flyweight objects and the unshared context objects. Then, create a flyweight factory class that creates and manages the flyweight objects.