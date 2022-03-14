# Créer la font
- App icomoon https://icomoon.io/app/#/select
- supprimer les couleurs
- si nécessaire renommer chaque icon en ajoutant des alias (bouton edit puis selectionner un icone)

=> "generate font" en bas à droite dans l'api
modifer la font avant de télécharger :
- code unix pour chaque icone (cf liste bas de page)
=> Onglet Preferences
- nom des icones
- nom de la font = icoboost
- nom du prefix = fa-iboost- (fa pour être compatible avec le bbcode, iboost pour éviter les conflits avec des nom d'icone déjà existants dans FA)
- nom de la class selector .iboost (font/generate/preferences/css selector/Use a class)

# Download
et beh daounlode quoi :p

# Ajouter un icône
Pour ajouter un icône, il faut impérativement repasser par l'appli icomoon pour qu'il soit pris en compte dans la font

# Intégration dans phpboost
Extraire de l'archive téléchargée le dossier fonts et son contenu + le fichier style.css
Renommer le style.css en icoboost.css et l'éditer

ajouter le stack du logo pbt

.fa-stack.logo-stack {
    width: 3em;
    height: 3em;
}

.fa-stack .fa-iboost-logo-01 {
    position: absolute;
    top: 0;
    left: 0;
}

.fa-stack .fa-iboost-logo-02 {
    position: absolute;
    top: 0.17em;
    left: 0.65em;
}

.fa-stack .fa-iboost-logo-03 {
    position: absolute;
    top: 0.57em;
    left: 0;
}

ajouter le forçage de couleur pour les tags

.color-tag.fa-iboost-tag-51 { color: #366493; }
.color-tag.fa-iboost-tag-52 { color: #16a086; }
.color-tag.fa-iboost-tag-53 { color: #ffc21c; }
.color-tag.fa-iboost-tag-54 { color: #e3a127; }
.color-tag.fa-iboost-tag-55 { color: #e45126; }
.color-tag.fa-iboost-tag-56 { color: #134f61; }
.color-tag.fa-iboost-tag-57 { color: #0b72b7; }
.color-tag.fa-iboost-tag-58 { color: #8693bd; }

copier le dossier fonts et le fichier icoboost.css dans le dossier theme du thème
modifier le frame.tpl pour ajouter l'appel de icoboost.css

# Alias
pour ajouter un alias (même logo avec un nom différent), il suffit d'uploader 2 fois le logo avec des noms différents lors de l'ajout dans l'appli icomoon

# Crédits
Ajouter un docblock avec crédit pour icomoon dans l'entête du icoboost.css

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

Code unix et nom des icones PBT
e000 iboost-logo,
e001 iboost-logo-01
e002 iboost-logo-02
e003 iboost-logo-03
e051 iboost-tag-51
e052 iboost-tag-52
e053 iboost-tag-53
e054 iboost-tag-54
e055 iboost-tag-55
e056 iboost-tag-56
e057 iboost-tag-57
e058 iboost-tag-58
