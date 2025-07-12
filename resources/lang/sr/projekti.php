<?php

return [
    // Header
    'header' => [
        'logo_text' => 'Pisanje Projekata',
        'nav' => [
            'home' => 'Početna',
            'services' => 'Usluge',
            'process' => 'Proces',
            'partners' => 'Partneri',
            'contact' => 'Kontakt',
        ],
        'cta_button' => 'Besplatna Konsultacija →',
    ],

    // Hero Section
    'hero' => [
        'title' => 'Profesionalno pisanje projekata za subvencije i fondove',
        'description' => 'Specijalizovani smo za izradu projektnih predloga za USAID, EU fondove, startap programe i državne subvencije. Povećajte svoje šanse za dobijanje finansiranja.',
        'form' => [
            'title' => 'Dobijte besplatnu konsultaciju',
            'name' => 'Ime',
            'email' => 'Email',
            'project_type' => 'Tip projekta',
            'project_types' => [
                'select' => 'Tip projekta',
                'eu_funds' => 'EU Fondovi',
                'usaid' => 'USAID Programi',
                'startup' => 'Startup Subvencije',
                'ministry' => 'Ministarstvo Srbije',
                'other' => 'Ostalo',
            ],
            'message' => 'Opišite vaš projekat...',
            'submit' => 'Pošaljite zahtev',
            'success' => 'Hvala vam na interesovanju! Kontaktiraćemo vas u najkraćem roku.',
        ],
    ],

    // Services Section
    'services' => [
        'title' => 'Naše stručne usluge',
        'description' => 'Kompletna podrška u pripremi i pisanju projektnih predloga za različite fondove i programe finansiranja',
        'cards' => [
            'eu_funds' => [
                'title' => 'EU Fondovi',
                'description' => 'Pisanje projekata za Horizon Europe, Erasmus+, INTERREG i druge EU programe',
                'features' => [
                    'call_analysis' => 'Analiza poziva',
                    'project_proposal' => 'Projektni predlog',
                    'budget_plan' => 'Budžet i plan',
                    'implementation' => 'Praćenje realizacije',
                ],
            ],
            'usaid' => [
                'title' => 'USAID Programi',
                'description' => 'Stručna podrška za USAID grantove i razvojne programe',
                'features' => [
                    'grant_applications' => 'Grant aplikacije',
                    'logical_framework' => 'Logički okvir',
                    'me_plan' => 'M&E plan',
                    'reporting' => 'Izveštavanje',
                ],
            ],
            'startup' => [
                'title' => 'Startup Subvencije',
                'description' => 'Biznis planovi i aplikacije za startup fondove i inkubatore',
                'features' => [
                    'business_plan' => 'Biznis plan',
                    'financial_model' => 'Finansijski model',
                    'pitch_deck' => 'Pitch deck',
                    'due_diligence' => 'Due diligence',
                ],
            ],
            'government' => [
                'title' => 'Državne Subvencije',
                'description' => 'Projekti za Ministarstvo privrede, nauke i inovacija Srbije',
                'features' => [
                    'innovation_vouchers' => 'Inovacioni vaučeri',
                    'development_projects' => 'Razvojni projekti',
                    'export_subsidies' => 'Izvozne subvencije',
                    'digitalization' => 'Digitalizacija',
                ],
            ],
            'consulting' => [
                'title' => 'Konsalting Usluge',
                'description' => 'Strategijsko planiranje i upravljanje projektima',
                'features' => [
                    'development_strategies' => 'Strategije razvoja',
                    'market_analysis' => 'Analiza tržišta',
                    'project_management' => 'Upravljanje projektima',
                    'evaluation' => 'Evaluacija',
                ],
            ],
            'partnership' => [
                'title' => 'Partnerstvo',
                'description' => 'Pronalaženje partnera i formiranje konzorcijuma',
                'features' => [
                    'partner_network' => 'Mreža partnera',
                    'consortiums' => 'Konzorcijumi',
                    'agreements' => 'Sporazumi',
                    'coordination' => 'Koordinacija',
                ],
            ],
        ],
    ],

    // Organizations Section
    'organizations' => [
        'title' => 'Organizacije koje finansiraju',
        'description' => 'Radimo sa vodećim domaćim i međunarodnim organizacijama koje pružaju finansijsku podršku',
        'orgs' => [
            'usaid' => [
                'title' => 'USAID',
                'description' => 'Američka agencija za međunarodni razvoj',
            ],
            'eu' => [
                'title' => 'Evropska Unija',
                'description' => 'Horizon Europe, Erasmus+, INTERREG',
            ],
            'ministry' => [
                'title' => 'Ministarstvo Srbije',
                'description' => 'Privrede, nauke i tehnološkog razvoja',
            ],
            'startup' => [
                'title' => 'Startup Fondovi',
                'description' => 'ICT Hub, StartIt, Innovation Fund',
            ],
            'banks' => [
                'title' => 'Razvojne Banke',
                'description' => 'EBRD, Svetska banka, KfW',
            ],
            'un' => [
                'title' => 'UN Agencije',
                'description' => 'UNDP, UNICEF, UNESCO',
            ],
        ],
    ],

    // Process Section
    'process' => [
        'title' => 'Naš proces rada',
        'description' => 'Strukturiran pristup koji garantuje kvalitet i povećava šanse za uspeh',
        'steps' => [
            'step1' => [
                'title' => 'Analiza i Konsultacija',
                'description' => 'Detaljno analiziramo vaše potrebe i dostupne fondove. Besplatna inicijalna konsultacija.',
            ],
            'step2' => [
                'title' => 'Strategija i Plan',
                'description' => 'Kreiramo strategiju aplikacije i detaljni plan projekta prilagođen zahtevima donatora.',
            ],
            'step3' => [
                'title' => 'Pisanje Projekta',
                'description' => 'Profesionalno pisanje projektnog predloga sa svim potrebnim dokumentima i prilozima.',
            ],
            'step4' => [
                'title' => 'Revizija i Slanje',
                'description' => 'Finalna revizija, kontrola kvaliteta i pravovremeno slanje aplikacije.',
            ],
        ],
    ],

    // Stats Section
    'stats' => [
        'successful_projects' => 'Uspešnih projekata',
        'secured_funds' => 'Obezbeđenih sredstava',
        'success_rate' => 'Stopa uspešnosti',
        'satisfied_clients' => 'Zadovoljnih klijenata',
    ],

    // CTA Section
    'cta' => [
        'title' => 'Spremni da pokrenete vaš projekat?',
        'description' => 'Kontaktirajte nas danas za besplatnu konsultaciju i saznajte kako možemo pomoći',
        'buttons' => [
            'schedule' => 'Zakažite konsultaciju',
            'call_us' => 'Pozovite nas',
        ],
    ],

    // Footer
    'footer' => [
        'description' => 'Profesionalne usluge pisanja projekata za subvencije, grantove i fondove. Povećajte svoje šanse za dobijanje finansiranja.',
        'contact' => [
            'title' => 'Kontakt',
            'email' => 'Email: office@pisanjeprojekata.rs',
            'phone' => 'Telefon: +381 63 416 289',
            'address' => 'Adresa: Aleksandra Medvedeva bb, Niš 18115, Srbija',
        ],
        'services' => [
            'title' => 'Usluge',
            'eu_funds' => 'EU Fondovi',
            'usaid' => 'USAID Programi',
            'startup' => 'Startup Subvencije',
            'government' => 'Državne Subvencije',
        ],
        'follow_us' => [
            'title' => 'Pratite nas',
            'linkedin' => 'LinkedIn',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
        ],
        'copyright' => 'Pisanje Projekata. Sva prava zadržana.',
    ],

    // Form Alert
    'form_alert' => 'Hvala vam na interesovanju! Kontaktiraćemo vas u najkraćem roku.',
];