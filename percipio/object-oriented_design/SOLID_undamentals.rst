You are implementing DIP. In this example, sequence the steps of how you can implement your classes from the gate to use dependency inversion in C#.
====================================================================================================================================================
- Create a new class and a property that users cannot change
- Design an interface with both the maximum and minimum requirements
- Use the DIP to fulfill dependency requirements specified in a constructor
- Add a reference to System.Drawing and add a color to a method
- Use the return command to get the location and color of an item

How do abstractions relate to the DIP?
======================================
- High or low level modules should not depend upon each other, but upon abstractions
- Abstractions should not depend upon details; details should depend upon abstractions

You want to apply the interface segregation principle to a new application that you are designing from scratch. There are a number of ways to approach this. Which method will produce the most readable and maintainable code?
===============================================================================================================================================================================================================================
- Interface inheritance

Which statements about cohesion and coupling in the context of the dependency inversion principle are accurate?
===============================================================================================================
- Coupling is decreased but dependencies remain
- Tight couplings that cannot easily be undone later are not created

What problems are created by violating the DIP in C#?
=====================================================
- It will be difficult to reuse the code in another system because it cannot be unraveled from its original point of creationo
- It's challenging to change a part of the application code without affecting many other parts of the system
- If you change one part, unexpected parts of the application will break, making it fragile

What is the advantage of making use of the adapter pattern, through delegation, when dealing with fat interfaces?
=================================================================================================================
- Can be separated into abstract base classes that split the unwanted coupling between clients

What is the benefit of setting to implement explicitly when you go to implement an interface?
=============================================================================================
- Tells you which interface each method comes from

What is the advantage of using the DIP and the open-closed principle together?
==============================================================================
- Your code is completely wide open for extensibility, but still you maintain closed for modification by using dependency inversion

Which statements about interfaces are accurate?
===============================================
- Can be used to create plug-and-play interfaces where components can be easily interchanged
- An interface has a specific purpose, looks like a class, but has no implementation
- An interface contains definitions that a class or a structure can implement
- The bigger the interface, the more likely it will include methods that not every implementation can accomplish

Which statements apply to dependencies in code?
===============================================
- When a class X uses another class or interface Y, X depends on Y
- A dependent depends on its dependencies
- Two classes that use each other are coupled

Which statements apply to the interface segregation principle?
==============================================================
- Consumers aren't forced to depend on methods they don't intend to use
- Interfaces can represent an implementation
- Interfaces need to be as lean as possible
- Modules should use and depend on a minimum number of other modules

Suppose you are creating a data access class for your application and you've decided to interface the class. You declare methods for a variety of actions – from saving to updating through to searching and deleting – and then implement the interface using a concrete class. You now have an excessively large class but it doesn't facilitate appropriate scaling. What is the problem here?
=================================================================================================================================================================================================================================================================================================================================================================================================
- Interface bloat

Which statements apply to the dependency inversion principle?
=============================================================
- Your classes and your constructs are self-describing
- Classes and constructs describe what dependencies they need
- Interfaces and base classes can be relied on to describe the dependencies
- The caller is responsible for providing dependencies
