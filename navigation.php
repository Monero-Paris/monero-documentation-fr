<?php

return [
    'Introduction' => 'docs/introduction',
    'Avertissements' => 'docs/avertissements',
    'Blockchain' => 'docs/blockchain',
    'Cryptomonnaies' => 'docs/cryptomonnaies',
    'Présentation de Monero' => 'docs/presentation',
    'Utilisation de Monero' => [
        'url' => 'docs/utilisation',
        'children' => [
            "Télécharger l'application" => 'docs/telecharger',
            'Initialiser son wallet' => 'docs/initialiser-son-wallet',
            'Récupérer son Wallet' => 'docs/recuperer-son-wallet',
            'Recevoir' => 'docs/recevoir',
            'Envoyer' => 'docs/envoyer',
            "Consulter l'historique" => 'docs/historique',
            'Comptes et sous-adresses' => 'docs/comptes-et-sous-adresses',
            'Prouver une transaction' => 'docs/prouver-une-transaction',
            'Outils pour les commerçants' => 'docs/commercants',
            "Auditer un wallet" => 'docs/audit',
        ]
    ],
    'Utilisation avancée' => [
        'url' => 'docs/utilisation-avancee',
        'children' => [
            'Ligne de commande - CLI' => 'docs/cli',
            'Stockage froid' => 'docs/stockage-froid',
            'Noeud' => 'docs/noeuds',
            'TOR' => 'docs/tor',
            'TAILS' => 'docs/tails',
            'Minage' => 'docs/minage',
        ],
    ],
    'Acheter du Monero' => 'docs/acheter',
    'Ecosystème Monero' => 'docs/ecosysteme',
    'Autres cryptomonnaies intraçables' => 'docs/autres-cryptomonnaies-intracables'
];