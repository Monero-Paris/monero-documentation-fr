---
title: Initialiser un wallet
description: Initialiser un wallet
extends: _layouts.documentation
section: content
---

# Initialiser son wallet
<!-- 
<img src="/assets/img/start.jpg" alt="écran de démarrage">
 -->

## Qu'est ce qu'un wallet ? 

Un wallet est un support numérique qui permet de gérer les <a href="https://fr.wikipedia.org/wiki/Cryptographie_asym%C3%A9trique" target="_blank">clés publiques et clés privées</a> et ainsi d'utiliser des fonctionnalités comme l'envoi et la réception de fonds. Il existe plusieurs types de wallets, comme les applications de bureau, les applications mobile, les wallets physiques (ou hardware wallet) trouvables dans le commerce (aucune marque ne sera citée mais <s>google</s>  <a href="https://duckduckgo.com/?q=hardware+wallet&t=h_&ia=web">duckduckgo</a> est votre ami).

## Notions indispensables à comprendre: la phrase mnémonique

Votre wallet est unique, uniquement à vous. Pour ce faire l'application génère à la création du wallet une clé privée d'audit et une clé privée de dépense. Ces clés sont une série de caractère incompréhensibles pour l'humain.

### Exemples

***clé publique de vue***  
dbbd1258c0ae623ef11a8a995efbb6a6be5db9a102e989080f290058620ca507

***clé publique d'envoi***
c5548b424d509343e5b94b2562205e7d4727d19c5546a68bfbc7d8d242b7dd0e


Il est impossible d'écrire ce texte sans erreur du premier coup et encore plus de le retenir. Voilà pourquoi,par des algorithmes mathématiques, l'application va convertir ce texte incompréhensible en une série de 25 mots. Ces 25 mots sont la phrase mnémonique. Cette série de 25 mots est à vous et uniquement à vous. 

***IL FAUT IMPÉRATIVEMENT LES NOTER CES 25 MOTS ET LES GARDER EN LIEU SÙR.***

### Exemple
<pre>
recherche agonie engin notaire gros petit marge cirage figure cartel portion citer cabinet docteur sondage furieux ministre azote loisir jury enfermer mois stock trier stock
</pre>


Vous pouvez perdre le mot de passe de votre wallet, vous faire voler votre matériel c'est pas le plus grave. ***Mais si vous perdez vos 25 mots, vos fonds sont perdus.***


<img src="/assets/img/start.jpg" alt="seed">

Pour changer la langue dans les menus, cliquer sur le bouton en bas à droite ***Change language*** puis cocher le français.

## Commencement

### Créer un nouveau portefeuille

<img src="/assets/img/init-wallet.jpg" alt="seed">

Le premier champ en haut à gauche est simplement le nom du portefeuille, le second à gauche est l'emplacement du fichier wallet. Au milieu la fameuse phrase mnémonique à noter qui vous permettra de restaurer votre wallet ulterieurement.

#### Configuration du démon.

Laisser tout par défaut.