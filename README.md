# This module bases its very own existence on Design by Contract Pattern.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ticaje/m2-contract.svg?style=flat-square)](https://packagist.org/packages/ticaje/m2-contract)
[![Quality Score](https://img.shields.io/scrutinizer/g/M-Contributions/m2-contract.svg?style=flat-square)](https://scrutinizer-ci.com/g/M-Contributions/m2-contract)
[![Total Downloads](https://img.shields.io/packagist/dt/ticaje/m2-contract.svg?style=flat-square)](https://packagist.org/packages/ticaje/m2-contract)

## Preface

This module represents what we, O.O Designers, live for when it comes to complex solutions, such that perhaps, require a D.D.D approach.
I will be glimpsing some of the basis of this amazing pattern but for more discussion and contribution i gently encourage you to check 
my blog out so we can discuss and make interesting points on this.

Although is not something i came up with, it's appreciated the fact that a manifesto should be declared in order to provide insights of what this pattern stands for.

## Installation

You can install this package using composer(the only way i recommend)

```bash
composer require ticaje/m2-contract
```

## Features

The main feature of this extension is not anything tangible, instead we are hereby trying to provide a different(perhaps) approach of where to focus
when dealing with complex solutions. This is a W.I.P ever growing extension for Magento 2.

The disclaimer presented here is that this space of dialogue should never be about standard procedure for solutions oriented to
small/poor Domain Models, those are overrun and do not require bigger approaches when it comes to designing solutions to them.

The bigger a Domain Model is, the more complex its Design turns into. This is where Design by Contract comes into play.
Of course there are lots of concepts we should step into when talking about greater domain modelling, especially if we're gonna deal
with desired scalable, testable and maintainable systems, even though we're gonna focus on the Domain layer since i think it's the Core
of high level solutions from a designer stand point.

Nonetheless there is a concept we should never ignore on this and it's Language Oriented Design.

### Language Oriented Design

A little while ago i found an interesting article coining(not sure) the term i had never heard about and is no other than Language Oriented Design.
Please see the article link posted below.

This is such a great insight because it takes the attention to that point where the Architect needs to separate the business domain from the infrastructure domain.
This is sometimes hard to achieve since we developers tend to think that the tools we're using, e.g the framework we build the solutions upon, are our very own application,
and we get lost in the myriad of policies and rules of the framework, making our application impossible to scale not to talk about the fact that we doom ourselves to 
the whims of the framework and its creators.

We tie our solution to the Framework so hard that if for some reason, the Framework passes away some day in the future(perhaps this may never happen)
or we find a better platform we'd have to throw away the entire solution and build it again from the ground up.

The point of L.O.D is that everything is an API or language: the Framework, the language the framework is built on top, our solution is also an API, all the
libraries our system relies on is governed by an API, external systems we communicate with we do it by interacting with their APIs via standard protocols and so on.

So the mission of an architect is to detect and split up all the components and actors in our Domain organizing the dependencies so we can define our own APIs and the relationships with the rest
of APIs lingering around. This is what actually, in my onw humble estimation, L.O.D stands up for.

By doing so, we end up creating service-isolated-driven components not attached to any framework since the communication happens through well contracted APIs so we can
easily replace any component with the lesser of efforts.

And this is my friend where Contract by Design shines the most.

### Contract by Design Approach(C.B.D)

Coming back to square one where a Language Oriented Design is a must, we have the path clear for us to start making thinks easier to further changes, testing and so on.
given the fact that everything is an API, our whole system is wrapped around the idea that all interactions, that mostly is what complex systems are about, are subjected
to data and service contracts for the sake of communications.

The most thrilling thing about dealing with APIs is that we can define interfaces that technically are the legislative powers of the machinery of our system.
We legislate by defining the contracts for the components of our systems to communicate with each other, the policies of our solutions are those contracts embodied by
such an interfaces, and the workers that execute those policies are the specific implementations of those interfaces.

The business rules/policies/constraints/behavior of our Domain live in the Domain layer, this is what provides value to our Application and makes it different from anything
in the Universe.

By using the Unified Model Language(UML) and a standard domain-policies-transporter oriented language(e.g XML) to design the Architecture of our Domain Model we can build
D.B.C compliant solutions for the sake of scalability, testability and maintainability.

There is a long long way to grow this up but i think it's worth trying it out so eventually it will paid off all the efforts, time and endeavor we soever might apply on.

Have you noticed a concept involved here? I'm you have, it's no other than Domain Driven Design which is, of course, way longer and richer than what C.B.D is. But D.D.D is a whole
universe itself that deserves a entire book(in the lesser of cases).

## O.O.D Patterns applied

Of course D.B.C is not a thing tied to object oriented universe but also to functional design and others.
Even so, since Magento is our reference we're focusing on O.O.D when it comes to prototyping the ground ideas, so a a series of design patterns are used for embodying 
the concepts just before illustrated.

I'd like to say that as we go further in such a concept the system maturity goes stronger and we could use the libraries to model real life problems/solutions.
It's a fact that this is a Magento oriented approach but i encourage you to hand over different and more accurate stand points and concrete solutions to this approach so
we can all benefit from it. Likewise i'd like to hear about any misconception i might introduced so the corrections will be more than welcome.

### Decorator Pattern

This module provides room for injecting behavior into our business classes following a decorator pattern approach.

## Interesting Concepts(and respective articles)

[Hexagonal Architecture](https://fideloper.com/hexagonal-architecture)

[Language Oriented Software Engineering](https://parametri.city/blog/2018-12-23-language-oriented-software-engineering/index.html)

[Domain Driven Design]()

[Design Patterns](https://designpatternsphp.readthedocs.io/)

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Héctor Luis Barrientos](https://github.com/ticaje)
- [All Contributors](../../contributors)

## License

The GNU General Public License (GPLv3). Please see [License File](LICENSE.md) for more information.
