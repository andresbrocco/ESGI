What does "open for extension" mean in the context of the open-closed principle?
================================================================================
- Whenever you need to do something that generically works with documents, you use that Document class for the type, or the type of variable or generic
- Instead of using if...else you check different conditionals
- You need to ensure document classes are not locked off – that they can't be inherited from for other parts of your application

What is the relationship between OCP and interfaces?
====================================================
- Design with interfaces first so closure for modifications is catered for at the outset

Certain C# language constructs can be used to identify possible cases of violating the open-closed principle. What are these constructs?
========================================================================================================================================
- switch/case
- if/elseif/else

Which key code conventions are a result of object-oriented design?
==================================================================
- Inheritance
- Interfaces
- Polymorphism
- Encapsulation

The open-closed principle states that software entities, such as classes, modules, and functions, should be open for extension, but closed for modification. Why is closure an important part of OCP?
=====================================================================================================================================================================================================
- Change is disruptive, breaks things, and causes a testing load
- You have to think of the interface as set in stone even if it's as a small public API
- Once published, users expect method calls to work the way they've always worked

Identify statements that accurately describe the relationship between OCP and abstraction.
==========================================================================================
- Write code that depends upon abstractions, rather than implementation
- Abstract different parts of classes to a base class so they can be reused
- Code ought to depend solely on the interface functions and behavior that results from abstract base classes


