---
title: Introduction
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

# Introduction

Bienvenue dans le monde de la technologie blockchain, des cryptomonnaies, de la liberté financière. Un monde sans intérmédiaires, sans dépendance aux structures centralisées (banques administrations...). <br>
Un monde ou les seules lois qui s'appliquent sont celle des consensus mathématiques. 

## A propos de ce site

Ce site est actuellement en ligne et son code source est hébergé sur <a href="https://github.com/anon-coins-tutorials/monero-documentation-fr">Github</a>

### Installer le site en local

Si vous souhaitez installer le site sur votre machine pour le consulter hors ligne, il vous faudra installer l'environnement de développement, à savoir:

* <a href="https://www.php.net/" target="_blank">PHP</a>, le language de programmation simple et accéssible pour créer facilement des sites dynamiques
* <a href="https://getcomposer.org/" target="_blank">Composer</a>, le gestionnaire de dépendance qui permet de télécharger et configurer les librairies
* <a href="https://git-scm.com/" target="_blank">Git</a>, le gestionnaire de code source


```bash
git clone https://github.com/anon-coins-tutorials/monero-documentation-fr
cd monero-documentation-fr
composer install
./vendor/bin/jigsaw serve
```

Puis ouvrez un navigateur à l'adresse suivante: <a href="http://localhost:8000">localhost:8000</a>

### Mettre à jour le site en local

```
cd monero-documentation-fr
git pull
```