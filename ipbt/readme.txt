# Ajouter un logo
repasser par l'app icomoon https://icomoon.io/app/#/select
renvoyer tous les logo perso déjà présents dans les fichiers en version svg + les nouveaux
=> generate font en bas à droite dans l'api
download

Extraire de l'archive téléchargée le dossier fonts et son contenu + le fichier style.css
Renommer le style.css en ipbt.css et l'éditer

remplacer [class^="icon-"], [class*=" icon-"] par .ipbt.fa
remplacer toutes les occurences de .icon par .ipbt.fa
supprimer les propriétés color des logos si nécessaire

ajouter le stack du logo

.fa-stack.logo-stack {
    width: 3em;
    height: 3em;
}

.fa-stack .ipbt.fa-pbt1 {
    position: absolute;
    top: 0;
    left: 0;
}

.fa-stack .ipbt.fa-pbt2 {
    position: absolute;
    top: 0.17em;
    left: 0.65em;
}

.fa-stack .ipbt.fa-pbt3 {
    position: absolute;
    top: 0.57em;
    left: 0;
}

copier le dossier fonts et le fichier ipbt.css dans le dossier theme du thème
modifier le frame.tpl pour ajouter l'appel de ipbt.css

# Alias
pour ajouter un alias (même logo avec un nom différent), il suffit d'uploader 2 fois le logo avec des noms différents lors de l'ajout dans l'appli icomoon

# Crédits
Ajouter un crédit pour icomoon dans l'entête du ipbt.css ne serait pas un mal

/**
 * @copyright 	&copy; 2005-2019 Icomoon - PHPBoost
 * @license 	PHPBoost - https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @license 	Icomoon - see license of each pack at https://icomoon.io/app/#/select/library
 * @author      Icomoon <https://icomoon.io/#contact>
 * @link        https://icomoon.io/app/#/select
 * @version   	PHPBoost 5.2 - last update: 2019 01 10
 * @since   	PHPBoost 5.2 - 2019 01 10
 * @contributor PHPBoost <contact@phpboost.com>
*/
