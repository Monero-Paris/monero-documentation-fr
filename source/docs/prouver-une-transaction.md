---
title: Prouver une transaction
description: Prouver une transaction
extends: _layouts.documentation
section: content
---

# Prouver un paiement

Lorsque vous envoyez de l'argent à une partie qui conteste ensuite que le paiement a été effectué, vous devez être en mesure de prouver que le paiement a été effectué.

Avec Bitcoin, cela se fait généralement en recherchant l'ID de la transaction, où les adresses d'origine et de destination sont indiquées, ainsi que le montant de la transaction.

Monero, cependant, est privé : cette information n'est pas disponible publiquement sur la chaîne. Les étapes sont donc un peu plus impliquées.

Pour prouver à Charlie qu'elle a effectué un paiement à Bob, Alice doit fournir à Charlie trois éléments d'information :

* l'identification de la transaction, comme c'est le cas dans Bitcoin
* l'adresse de Bob, comme c'est le cas pour Bitcoin
* la clé de la transaction, ce qui est nouveau avec Monero et d'autres devises CryptoNote

Lorsqu'Alice a effectué la transaction, une clé unique a été automatiquement générée juste pour cette transaction.

get_tx_key TXID

Alice y inscrirait son numéro de transaction au lieu de ce caractère de remplacement TXID. Tout va bien, la clé de transaction unique sera affichée.

Notez que cela ne fonctionnera que si monero-walt-cli est réglé pour sauvegarder les clés de transaction. Pour une double vérification :

set

Si elle est réglée sur 0, réglez-la sur 1 :

## GUI

Alice peut ouvrir son monero-wallet-gui et se rendre sur la page d'historique pour voir le détail de sa transaction :

<img src="https://web.getmonero.org/resources/user-guides/png/prove-payment/history.png" alt="">

Ici, elle peut copier le numéro de transaction et l'adresse de Bob en cliquant sur chacun d'eux. Ensuite, elle peut cliquer sur P pour obtenir une preuve de paiement (clé de transaction) :

<img src="https://web.getmonero.org/resources/user-guides/png/prove-payment/payment-proof.png" alt="">

Alice peut désormais envoyer à Charlie la clé de transaction ainsi que l'identifiant de la transaction et l'adresse de Bob.

Remarque : si plusieurs transactions ont été effectuées, il convient de le répéter pour chacune d'entre elles.

## Vérifier le paiement

Charlie a maintenant reçu ces trois informations, et veut vérifier qu'Alice dit bien la vérité : sur une chaîne de blocage à jour,

### CLI

Charlie tape dans monero-wallet-cli :

check_tx_key TXID TXKEY ADDRESS

Les informations fournies par Alice se branchent proprement à la place des caractères de remplissage. monero-walt-cli utilisera la clé de transaction pour décoder la transaction et afficher le montant de cette transaction particulière envoyée à cette adresse. Évidemment, Charlie voudra vérifier avec Bob que l'adresse est bien la sienne, comme pour Bitcoin.

## GUI

Charlie ouvrira son monero-wallet-gui et se rendra à la page Avancé > Prouver/Vérifier pour remplir la section Vérification avec les informations fournies par Alice :

<img src="https://web.getmonero.org/resources/user-guides/png/prove-payment/check-payment.png" alt="">

Ensuite, en cliquant sur "Check", vous indiquerez à Charlie le montant de la transaction envoyée à cette adresse et le montant de la confirmation de la transaction :

<img src="https://web.getmonero.org/resources/user-guides/png/prove-payment/payment-checked.png" alt="">