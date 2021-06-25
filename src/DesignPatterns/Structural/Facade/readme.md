### Facade Pattern

The Facade Pattern provides a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level
interface that makes the subsystem easier to use.

* A facade does not forbid you the access to the sub-system
* You can (you should) have multiple facades for one sub-system

Facade pattern also helps us implement the principle of least knowledge or also known as Law of Demeter.

It's principles are:
take any object, and from any method in that object, invoke only methods that belong to:
* The object itself
* Objects passed in as a parameter to the method 
* Any object the method creates or instantiates
* Any components of the object

Never invoke a method on an object that was returned from calling other methods.

Note: The example was taken from: https://github.com/DesignPatternsPHP/DesignPatternsPHP/blob/main/Structural/Facade/Facade.php