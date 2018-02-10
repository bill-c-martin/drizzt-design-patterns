## Introduction

This is a collection of design patterns written in PHP7 using Drizzt Do'Urden and his dark elf adventures in the Forgotten Realms as examples. This is entirely for my own amusement and practice, of course..

## Overview

Each pattern in the List is described using the following template:

- **Type**:
    + **Structural Patterns**: Deal with relationships between entities, improving how they work together.
    + **Creational Patterns**: Provide instantiation mechanisms, making it easier to create objects.
    + **Behavioral Patterns**: Facilitate flexible communications between entities.
- **What**: What benefit does the pattern bring to application design?
- **How**: How to implement the pattern?
- **When**: When to use the pattern, and common dead giveaways?
- **Real World Usages**: Common use cases for the pattern
- **Drizzt Example**: Implementation of this pattern in the context of Drizzt Do'Urden doing some badass dark elf thing.

### Running

Yes, this code runs.

1. Install VirtualBox and Vagrant
2. Add xyz to OS' hosts file
3. From the command line:
    1. `cd` into this project's directory
    2. `vagrant up`
4. Go to http://asdf/

## List of Design Patterns

### Strategy Pattern

- **Type**: Structural|Creational|Behavioral
- **What**: allows you to decide which course of action a program should take, based on a specific context during runtime. You encapsulate two different algorithms inside two classes, and decide at runtime which strategy you want to go with.
- **How**: How does it solve the problem?
- **When**: When to use it

#### Real-World Usages

#### Example: Drizzt blah blah