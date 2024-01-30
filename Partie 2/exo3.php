<style>
    .link {
        position: relative;
        left: 50%;
        top: 50%;
        display: flex;
        justify-content: center;
        align-self: center;
        color: black;
        background-color: white;
        text-decoration: none;
        border: 1px solid black;
        border-radius: 5000px;
        transition: transform 1s ease;
        width: 10rem;
    }

    .link:hover {
        transform: scale(1.5);
    }
</style>

<h1>Exercice 1</h1>

<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
    dans un nouvel onglet (_blank).</p>

<h2>Résultats</h2>

<?php

//Anchor w/ a blank target so that it opens on a new tab.

echo "<a class='link' href='https://www.elan-formation.fr/' target='_blank' >Élan Formation</a>";