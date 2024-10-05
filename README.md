[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/AyryOJcI)


# Symfony & Table de pythagore

## Travail à réaliser:

- Cloner votre repository personnel
- Créer une classe `PythagoreUtility` avec une méthode `display` qui retournera la code html d'un carrée de pythagore ( <table></table>)
- Créer un controller `PythagoreController`
- Dans le constructeur de `PythagoreController` charger votre classe `PythagoreUtility`
- Créer une action `DisplayPythagoreAction` accessible via l'URL /pythagore/view
- Cette action fera un return `$this->render` du fichier `displayPythagore.html.twig` **( fichier fournie )** et qui affichera la table de pythagore
- La balise title contiendra la mention "Symfony & table de pythagore"
- Il y aura aussi une balise h1 avec votre nom et prénom

- Commit et push votre fichier AVANT LE 11 (23h59) OCTOBRE
