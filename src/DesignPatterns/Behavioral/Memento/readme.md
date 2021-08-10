### Memento Pattern

Use the Memento Pattern when you need to be able to return an object to one of its previous states; for instance, if your user requests an “undo.”

Components of Memento Pattern

1. Memento - The saved state of the object.
2. Originator - The original state of the object. Has a method to createMemento and restoreFromMemento.
3. Caretaker - Saves all memento in a sequential structure like array to facilitate undo and redo like functionality. Not implemented in this example.