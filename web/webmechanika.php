<?php
/*
Narsykle kreipesi i narsykle, ne i PHP
--------
https://www.google.com/
-------
url eilute susidaro is dveju daliu:
    adresas/link (i koki serveri pristatyti)
    kelias, pagal kuri useris gali atkeliauti i noriama vieta
----------
Su kokiu metod mes kreipiames i serveri?
    metodas GET
        - rodo su kokiu klausimu mes norime gauti informacija;
    metodas POST
        - 


    Request header
        - masyvas, kuris turi raktus, kurie turi specifinius duomenis;
        raktai:
            authority - adresas
            method - GET / POST
            path - tikslus kelias (kur tam pastate pristatyti laiska (kambaris))
            scheme - https (budas kaip pristatysim laiska)
            accept - sarasa dokumentu, kurios jis gali atidaryt
            accept-encoding - kokius dalykus gali isformatot (kokius formatus zino) gzip
            accept-language - kokias kalbas zino
            cookies - 
            user-agent - prisistato (narsykle tikia it tokia, versija tokia it tokia, operacine sistema tikia ir tokia)
    Response header
        - informacija apie musu persuodama faila (vienas ilgas stringas)
    Request body
        - serverio atsakymas i uzklausa
        - galim siusti tik viena ilga stringa (turi buti paversta i string pavydala)
*/