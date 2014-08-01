saisie-autocomplete
===================

Une saisie autocompletée par fichier JSON

Il faut simplement passer le fichier l'adresse du fichier json en paramètre:

[(#SAISIE{
autocomplete,
name
json=URL_FICHIER_JSON})]

Le saisie enverra au fichier json la variable "arg" qui contiendra le contenu du champ input
