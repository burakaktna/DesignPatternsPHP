# Proxy Design Pattern

The Proxy Design Pattern provides a surrogate or placeholder for another object to control access to it. This pattern involves creating a proxy class that acts as a substitute for the real object.

To use the Proxy pattern, create a proxy class that implements the same interface as the real object, and contains an instance of the real object. The proxy class then delegates requests from clients to the real object, while adding additional functionality if required.