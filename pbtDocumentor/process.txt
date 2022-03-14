Avant toute chose : vérifier que
1 - apigen soit déclaré à la bonne adresse dans /app/pbt-doc.bat
2 - le thème soit présent et bien déclaré dans /app/pbt-doc.bat
3 - l'adresse de pbt-doc.bat soit bonne dans apigen_parser.php L29
4 - le nom du fichier_begin.php soit le bon dans /app/apiParser.php L11

Process
Copier tous les dossiers/fichiers voulus dans /framework-from-pbt
Faire tourner apigen via le bouton de l'index
Quand c'est cuit, copier tous les fichiers + le dossier d'image de framework vers le dossier framework du module

/* --- Écriture type de l'entête d'un fichier
----------------------------------------------------------------------------- */

/**
 * @package     Ajax
 * @subpackage  Controllers
 * @category    Framework
 * @copyright   &copy; 2005-2019 PHPBoost
 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Firstname LASTNAME <nickname@email.com>
 * @version     PHPBoost 5.2 - last update: 2019 01 01
 * @since       PHPBoost 3.0 - 2012 06 25
*/

/* --- Explications --- */
 * @package     dossier racine du fichier dans le kernel ou dans le module (ex: controllers dans le module news)
 * @subpackage  chemin\vers\le\sous-dossier\contenant\le\fichier
 * @category    type de fichier : kernel - module - ...
 * @copyright   &copy; 2005-20XX PHPBoost // 20XX = année en cours
 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Firstname LASTNAME <nickname@email.com> // Nom/pseudo + email du créateur du fichier
 * @version     dernière version de pbt - date de dernière modification du fichier
 * @since       version de pbt quand le fichier est créé - date de création du fichier
 * @contributor Firstname LASTNAME <nickname@email.com>

https://github.com/PHPBoost/PHPBoost/tree/master/kernel/framework

/* --- Liste des contributeurs
----------------------------------------------------------------------------- */
/* --- Kernel --- */

 * @author      Firstname LASTNAME <nickname@email.com>
 * @author      Regis VIARRE <crowkait@phpboost.com>
 * @author      Loic ROUCHON <horn@phpboost.com>
 * @author      Benoit SAUTEL <ben.popeye@phpboost.com>
 * @author      Nicolas Duhamel <akhenathon2@gmail.com>
 * @author      Kevin MASSY <reidlos@phpboost.com>
 * @author      Bruno MERCIER <aiglobulles@gmail.com>
 * @author      Julien BRISWALTER <j1.seth@phpboost.com>
 * @author      Arnaud GENET <elenwii@phpboost.com>
 * @author      Patrick DUBEAU <daaxwizeman@gmail.com>
 * @author      Alain091 <alain091@gmail.com>
 * @author      Sebastien LARTIGUE <babsolune@phpboost.com>
 * @author      Nicolas MAUREL <crunchfamily@free.fr>
 * @author      PaperToss <t0ssp4p3r@gmail.com>
 * @author      Geoffrey ROGUELON <liaght@gmail.com>
 * @author      xela <xela@phpboost.com>

/* --- contributors --- */

 * @contributor Firstname LASTNAME <nickname@email.com>
 * @contributor Regis VIARRE <crowkait@phpboost.com>
 * @contributor Loic ROUCHON <horn@phpboost.com>
 * @contributor Benoit SAUTEL <ben.popeye@phpboost.com>
 * @contributor Nicolas Duhamel <akhenathon2@gmail.com>
 * @contributor Kevin MASSY <reidlos@phpboost.com>
 * @contributor Julien BRISWALTER <j1.seth@phpboost.com>
 * @contributor Arnaud GENET <elenwii@phpboost.com>
 * @contributor mipel <mipel@phpboost.com>
 * @contributor janus57 <janus57@janus57.fr>
 * @contributor Sebastien LARTIGUE <babsolune@phpboost.com>
 * @contributor xela <xela@phpboost.com>
 * @contributor ph-7 <me@ph7.me>
 * @contributor Pierre Pelisset <ppelisset@hotmail.fr>

/* --- Date des versions
----------------------------------------------------------------------------- */
2005 Novembre   PHPBoost 1.3.1
2006 Janvier    PHPBoost 1.4.0
     Mars       PHPBoost 1.4.1
     Juin       PHPBoost 1.5.0
     Septembre  PHPBoost 1.6.0
2007 Novembre   PHPBoost 2.0
2009 Juillet    PHPBoost 3.0
2013 Janvier    PHPBoost 4.0
2014 Juillet    PHPBoost 4.1
2016 Janvier    PHPBoost 5.0
2017 Juillet    PHPBoost 5.1
     Septembre  PHPBoost 5.2


/* --- routine:
----------------------------------------------------------------------------- */
/**
 * copier les dossiers/fichiers que l'on veut dans la doc a.p.i. dans le dossier framework-from-pbt
 * lancer la routine dans E:\xampp-7124\htdocs\workspace-71\phpboost\pbt-doc\apigen-41-to-php index.php
 * copier les fichiers du dossier framework dans le dossier framework du module documentation
 *
 * NB: si la routine est déplacée, il faut changer les adresses du pbt-doc.bat et d'apigen
 */

erratum
*@desc* n'existe plus et ne doit pas être utilisé dans l'entête => envoyé dans encart options
par contre on peut utiliser le langage HTML dans la description. attention toute fois à ne pas mettre de h1 ou de h2
@abstract n'existe plus et peut être remplacé par un message helper en html <div class="message-helper notice|warning|error|...">

/* --- Écriture type de l'entête d'un fichier non kernel/framework
----------------------------------------------------------------------------- */

/**
 * @copyright   &copy; 2005-20XX PHPBoost // 20XX = année en cours
 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Firstname LASTNAME <nickname@email.com> // Nom/pseudo + email du créateur du fichier
 * @version     dernière version de pbt - date de dernière modification du fichier
 * @since       version de pbt quand le fichier est créé - date de création du fichier
 * @contributor Firstname LASTNAME <nickname@email.com>
*/

    config.ini Modules

author                 = "DaaX"
author_mail            = "daaxwizeman@gmail.com"
author_website         = "https://www.phpboost.com"
date                   = "07/03/2013"
version                = "5.2.0"
compatibility          = "5.2"
admin_menu             = "modules"
home_page              = "index.php"
admin_main_page        = "index.php?url=/admin"
contribution_interface = "index.php?url=/add"
enabled_features       = "comments, notation, newcontent"
repository             = "https://dl.phpboost.com/unofficial_modules.xml"
rewrite_rules[]        = "RewriteRule ^...."

    config.ini Themes

author            = "PHPBoost"
author_mail       = "contact@phpboost.com"
author_link       = "https://www.phpboost.com"
version           = "5.2.0"
compatibility     = "5.2"
date              = "24/02/2016"
require_copyright = "0"
html_version      = "5.0 Strict"
css_version       = "3.0"
columns_disabled  = "right"
variable_width    = "0"
width             = "1024px"
pictures          = "theme/images/theme.jpg,theme/images/admin.jpg"
