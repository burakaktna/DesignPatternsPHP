# Composite Design Pattern

The Composite Design Pattern composes objects into tree structures to represent whole-part hierarchies. This pattern allows clients to treat individual objects and compositions of objects uniformly.

To use the Composite pattern, create a component interface that defines the common methods for both leaf and composite objects. Then, create a leaf class that implements the component interface for individual objects, and a composite class that contains a collection of component objects.