<?php

return [
    'plugin' => [
        'name' => 'Éducations',
        'description' => 'Une platforme de blog',
    ],
    'sidemenu' => [
        'posts' => 'Sujets',
        'categories' => 'Catégories',
        'tags' => 'Étiquettes'
    ],
    'settings' => [
        'description' => 'Gérer les réglages du blogue',
        'tabs' => [
            'render' => 'Page généré',
            'editor' => 'Éditeur',
            'social' => 'Social',
            'api' => "Réglage de l'API",
            'authentication' => 'Authentification'
        ],
        'labels' => [
            'render' => 'Choix de la page par défaut qui va générer les sujets',
            'editor' => "Activer l'éditeur Markdown / aperçu",
            'parent' => 'Choisir une page antécédente du blogue.',
            'sharethis' => 'Clé API ShareThis',
            'facebook' => 'Activer le partage par Facebook?',
            'twitter' => 'Activer le partage par Twitter?',
            'google' => 'Activer le partage par Google?',
            'embedly' => 'Clé API Embed.ly',
            'alchemy' => 'Clé API Alchemy',
            'twitterauth' => 'Authentification par Twitter'
        ]
    ],
    'backend' => [
        'form' => [
            'cancle' => 'Annuler',
            'saveclose' => 'Enregistré et fermé',
            'or' => 'ou',
            'create' => 'Créer',
            'createclose' => 'Créé et fermé',
            'save' => 'Enregistré',
            'update' => 'Mise à jour',
            'updateclose' => 'Mise à jour et fermée'
        ],
        'toolbar' => [
            'duplicate' => 'Dupliquer',
            'delete' => 'Supprimer'
        ],
        'post' => [
            'form' => [
                'title' => 'Sujets',
                'confirmdelete' => 'Voulez-vous vraiment supprimer ce sujet?',
                'back' => 'Retour à la liste des sujets'
            ],
            'toolbar' => [
                'create' => 'Créer un sujet',
                'edit' => 'Éditer un sujet',
                'toolbarnew' => 'Nouveau sujet',
            ],
            'columns' => [
                'title' => 'Titre',
                'author' => 'Auteur',
                'parent' => 'Antécédent',
                'category' => 'Catégorie',
                'publishedat' => 'Date de publication',
                'published' => 'Publier'
            ],
            'fields' => [
                'tab' => [
                    'general' => 'Général',
                    'content' => 'Contenu',
                    'metas' => 'Metas',
                    'optimizer' => 'Optimiser le SEO',
                    'social' => 'Social',
                    'publish' => 'Publier',
                    'category' => 'Catégories',
                    'tags' => 'Étiquettes'
                ],
                'title' => 'Titre',
                'slug' => 'slug',
                'excerpt' => 'Extrait',
                'featured' => 'Images principales',
                'metatitle' => 'Meta de titre',
                'metadescription' => 'Meta de description',
                'metakeyword' => 'Meta de mots clés',
                'optimize' => 'Optimiser',
                'twitter' => 'Publier sur Twitter',
                'parent' => "Page d'affichage",
                'user' => 'Auteur du sujet',
                'publishedon' => 'Publié le',
                'published' => 'Publier',
                'category_note' => 'Sélectionner une catégorie dont le sujet appartient à',
                'tag_note' => 'Ajouter des étiquettes à relier à d\'autres sujets',
            ],
        ],
        'category' => [
            'form' => [
                'title' => 'Catégories',
                'back' => 'Retourner à la liste des catégories',
                'confirmdelete' => 'Êtes-vous vraiment sûr de supprimer cette catégorie'
            ],
            'toolbar' => [
                'create' => 'Créer une catégorie',
                'edit' => 'Modifier une catégorie',
                'toolbarnew' => 'Nouvelle catégorie'
            ],
            'columns' => [
                'name' => 'Nom',
                'slug' => 'Slug'
            ],
            'fields' => [
                'name' => 'Nom',
                'slug' => 'Slug',
                'generate' => 'Générer automatiquement une page de catégorie sous le blogue antécédent par défaut?'
            ],
        ],
        'tag' => [
            'form' => [
                'title' => 'Étiquettes',
                'back' => 'Retourner à la liste des étiquettes',
                'confirmdelete' => 'Êtes-vous vraiment sûr de supprimer cette étiquette?'
            ],
            'toolbar' => [
                'create' => 'Créer une étiquette',
                'edit' => 'Modifier une étiquette',
                'toolbarnew' => 'Nouvelle étiquette'
            ],
            'columns' => [
                'name' => 'Nom',
                'slug' => 'Slug'
            ],
            'fields' => [
                'name' => 'Nom',
                'slug' => 'Slug',
            ],
        ]
    ],
    'components' => [
        'archive' => [
            'details' => [
                'name' => 'Liste d\'archive du blogue',
                'description' => 'Afficher l\'archive d\'un blogue avec la date de publication.'
            ],
            'properties' => [
                'parent' => [
                    'title' => 'Filtrer par antécédent d\'archive',
                    'description' => 'Filtrer les sujets par page d\'antécédent.'
                ],
                'render' => [
                    'title' => 'Générer les sujets par',
                    'description' => 'Sélectionner la façon dont vous voulez générer les sujets',
                    'group' => 'Rendering'
                ],
                'specific' => [
                    'title' => 'Page à générer',
                    'description' => 'Une page qui va générer des sujets',
                    'group' => 'Rendering'
                ],
            ]
        ],
        'bloglist' => [
            'details' => [
                'name' => 'Liste du blogue',
                'description' => 'Afficher  la liste mise à jour des derniers sujets sur la page.'
            ],
            'properties' => [
                'postsperpage' => [
                    'title' => 'Sujets par page',
                    'validationmessage' => 'Valeur invalide de sujets par page.',
                    'group' => 'Pagination'
                ],
                'filter_type' => [
                    'title' => 'Filtrer par type',
                    'description' => 'Type de filtreur?',
                    'group' => 'Filters'
                ],
                'filter_value' => [
                    'title' => 'Filtrer par valeur',
                    'description' => 'La valeur a filtré.',
                    'group' => 'Filters'
                ],
                'pagination' => [
                    'title' => 'Pagination',
                    'description' => 'Afficher la pagination?',
                    'group' => 'Pagination'
                ],
                'parent' => [
                    'title' => 'Filtrer par page antécédente',
                    'description' => 'Page antécédente à filtrer les sujets.',
                    'group' => 'Filters'
                ],
                'render' => [
                    'title' => 'Générer les sujets par',
                    'description' => 'Sélection de la façon de générer les sujets',
                    'group' => 'Rendering'
                ],
                'specific' => [
                    'title' => 'Page généré',
                    'description' => 'Une page qui génère les sujets',
                    'group' => 'Rendering'
                ],
                'enable_rss' => [
                    'title' => 'Lien RSS',
                    'description' => 'Afficher les RSS?',
                    'group' => 'Rss'
                ],
                'rss_title' => [
                    'title' => 'Titre RSS',
                    'description' => 'Afficher le titre RSS?',
                    'group' => 'Rss'
                ],
                'rss_description' => [
                    'title' => 'Description du RSS',
                    'description' => 'Afficher la description RSS?',
                    'group' => 'Rss'
                ]
            ],
        ],
        'categories' => [
            'details' => [
                'name' => 'Liste des catégories du Blogue',
                'description' => 'Afficher la liste des catégories du blogue sur la page.'
            ],
            'properties' => [
                'parent' => [
                    'title' => 'Filtrer les catégories par antécédent',
                    'description' => 'Page antécédent filtré par sujets.'
                ],
                'categorypage' => [
                    'title' => 'Page de recherche du blogue',
                    'description' => 'Nom de la page de recherche du blogue. Ce paramètre est utilisé par défaut avec les composantes partielles.'
                ],
            ]
        ],
        'tags' => [
            'details' => [
                'name' => 'Liste d\'étiquettes du blogue',
                'description' => 'Affiche une liste d\'étiquettes sur une page.'
            ],
            'properties' => [
                'parent' => [
                    'title' => 'Filtrer les étiquettes par antécédent',
                    'description' => 'Page antécédent à filtrer par les sujets.'
                ],
                'tagpage' => [
                    'title' => 'Page de recherche du blogue',
                    'description' => 'Nom de la page de recherche du blogue. Ce paramètre est utilisé par défaut avec les composantes partielles.'
                ],
            ]
        ],
        'post' => [
            'details' => [
                'name' => 'Sujet ProBlog',
                'description' => 'Affiche les sujets sur la page.'
            ],
            'properties' => [
                'slug' => [
                    'title' => 'Paramètre ID',
                    'description' => 'Paramètre de l\'URL utilisé pour regarder les sujets par slug'
                ],
                'search' => [
                    'title' => 'Page de recherche du blogue',
                    'description' => 'Page qui génère un résultat de recherche par étiquettes/catégorie.'
                ],
            ]
        ],
    ]
];
