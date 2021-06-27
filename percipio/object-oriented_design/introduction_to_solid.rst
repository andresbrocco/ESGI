You are designing an application from scratch. You intend for something to be overridden in the base classes but you need it indicated that you don't need to hide it. Which modifier should you use?
=====================================================================================================================================================================================================
- abstract

Which concepts are inherent in Agile software development?
==========================================================
- Individuals and interactions over processes and tools
- Customer collaboration over contract negotiation

What does the single responsibility principle entail?
=====================================================
- Ensuring that each class only has one axis or reason to change

Which statements are accurate regarding the use of LSP in C#?
=============================================================
- Abstract classes can be used as a common base class between implementations
- Interfaces can be used to describe classes and provide "contracts"
- Virtual/abstract methods can be used in a similar manner

Which statements about object-oriented design are accurate?
===========================================================
- Involves decoupling of application components
- Existing logic and components are re-used
- Access is controlled to restricted components
- Components are tested in isolation

Which potential abuse of object-oriented design arises when a class has too many responsibilities or when a concern is spread over a number of classes?
=======================================================================================================================================================
- Tightly-coupled classes

SOLID is a set of principles for object-oriented design that can help you avoid many of the code issues that can happen in an object-oriented application. Match each SOLID principle to a description.
=======================================================================================================================================================================================================
Your classes or constructs should be open for extension and closed for modification
- Open/closed
Instead of creating dependencies, your class should be receiving dependencies
- Dependency inversion
Any subtype should be directly compatible with the parent type
- Liskov substitution
Different modules or components of the application should be responsible for a single change
- Single responsibility
You have interfaces between your different classes
- Interface segregation

Identify the benefits of SOLID.
===============================
- Test components in isolation
- Control access to restricted components of the application
- Decouple application components
- Re-use existing logic and components

What are the benefits of the single responsibility principle?
=============================================================
- Code is more readable
- Testing is more straightforward
- Code is more reusable
- Code is less complex

How do you implement the single responsibility principle in the C# class design?
================================================================================
- Use the Cyclomatic Complexity tool to determine that your class is not "doing too much"
- Analyze your classes to ensure that they are only responsible for one change
- Use Code Metrics to determine that your class is not "doing too much"

Which statements apply to the Liskov substitution principle?
============================================================
- Reinforced by many OOP languages, including Java and C#
- While supported and reinforced by a language, it is not guaranteed
- Children of the type should be interchangeable with that type

How might you violate the spirit of the principle of substitution?
==================================================================
- Employ a behavior that is not specified in the base class

How do you manage re-use when applying the single responsibility principle?
===========================================================================
- Think about what you can re-use and balance the increase in classes to the decrease of responsibility
