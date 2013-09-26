<?php
/*
Planning Biblio, Version 1.5.6
Licence GNU/GPL (version 2 et au dela)
Voir les fichiers README.txt et COPYING.txt
Copyright (C) 2011-2013 - Jérôme Combes

Fichier : setup/db_data.php
Création : mai 2011
Dernière modification : 26 septembre 2013
Auteur : Jérôme Combes, jerome@planningbilbio.fr

Description :
Requêtes SQL insérant les données dans les tables lors de l'installation.
Ce fichier est appelé par le fichier setup/createdb.php. Les requêtes sont stockées dans le tableau $sql et executées par le
fichier setup/createdb.php
*/

//	Insertion des droits d'accés
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Authentification', 99, '', 'authentification.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning - Index', 99, '', 'planning/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning par poste - Index', 99, '', 'planning/poste/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Refresh postes', 99, '', 'planning/poste/validation.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Aide', 99, '', 'aide/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Absences - Index', 100, '', 'absences/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Absences - Voir', 100, '', 'absences/voir.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Absences - Ajouter', 100, '', 'absences/ajouter.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Controle des absences avant ajout ou modif', 100, '', 'absences/ctrl_ajax.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Personnel - Password', 100, '', 'personnel/password.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Admin Index', 100, '', 'admin/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Ajout Select', 100, '', 'include/ajoutSelect.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Agenda - index', 100, 'Agenda', 'agenda/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Absences - Modif', 100, '', 'absences/modif.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Absences - Modif2', 100, '', 'absences/modif2.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Absences - Suppression', 100, '', 'absences/delete.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Absences - Infos', 1, 'Gestion des absences', 'absences/infos.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Personnel - Index', 4, 'Voir le personnel', 'personnel/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Personnel - Modif', 4, 'Voir le personnel', 'personnel/modif.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Liste des postes - Index', 5, 'Gestion des postes', 'postes/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Liste des postes - Modif', 5, 'Gestion des postes', 'postes/modif.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Liste des postes - Valid', 5, 'Gestion des postes', 'postes/valid.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning Poste - Suppression', 12, 'Modification du planning', 'planning/poste/supprimer.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning Poste - horaires', 12, 'Modification du planning', 'planning/poste/horaires.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning Poste - Importer un mod&egrave;le', 12, 'Modification du planning', 'planning/poste/importer.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning Poste Verrouillage', 12, 'Modification du planning', 'planning/poste/verrou.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning Poste - Enregistrer un mod&egrave;le', 12, 'Modification du planning', 'planning/poste/enregistrer.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'D&eacute;bogage', 13, 'D&eacute;bogage', '');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Statistiques', 17, 'Statistiques', 'statistiques/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'stats agents par poste', 17, 'Statistiques', 'statistiques/agents.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Statistiques export', 17, 'Statistiques', 'statistiques/export.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'stats postes par agent', 17, 'Statistiques', 'statistiques/postes.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Statistiques Postes de renfort', 17, 'Statistiques', 'statistiques/postes_renfort.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Statistiques par poste (synth&egrave;se)', 17, 'Statistiques', 'statistiques/postes_synthese.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Statistiques', 17, 'Statistiques', 'statistiques/service.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Statistiques', 17, 'Statistiques', 'statistiques/statut.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Feuille de temps-  index', 17, 'Statistiques', 'statistiques/temps.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration avanc&eacute;e', 20, 'Configuration avanc&eacute;e', 'admin/config.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Personnel - Suppression', 21, 'Gestion du personnel', 'personnel/suppression.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Personnel - Valid', 21, 'Gestion du personnel', 'personnel/valid.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Gestion du personnel', 21, 'Gestion du personnel', '');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration des tableaux', 22, 'Configuration des tableaux', 'planning/postes_cfg/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration des horaires des tableaux', 22, 'Configuration des tableaux', 'planning/postes_cfg/horaires.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration des horaires des tableaux', 22, 'Configuration des tableaux', 'planning/postes_cfg/copie.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration des lignes des tableaux', 22, 'Configuration des tableaux', 'planning/postes_cfg/lignes.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration des tableaux : suppression', 22, 'Configuration des tableaux', 'planning/postes_cfg/suppression.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Activit&eacute;s - Index', 5, 'Gestion des postes','activites/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Activit&eacute;s - Modification', 5, 'Gestion des postes','activites/modif.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Activit&eacute;s - Validation', 5, 'Gestion des postes','activites/valid.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning - Mod&egrave;les', 12, 'Modification du planning','planning/modeles/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning - Mod&egrave;les', 12, 'Modification du planning','planning/modeles/modif.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Planning - Mod&egrave;les', 12, 'Modification du planning','planning/modeles/valid.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Personnel - Suppression liste', 21, 'Gestion du personnel','personnel/suppression-liste.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration des tableaux - Modif',22,'Configuration des tableaux','planning/postes_cfg/modif.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Informations',23,'Informations','infos/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Informations',23,'Informations','infos/modif.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Informations',23,'Informations','infos/supprime.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Informations',23,'Informations','infos/ajout.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration des tableaux - Modif',22,'Configuration des tableaux','planning/postes_cfg/lignes_sep.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (NULL, 'Configuration des tableaux - Modif',22,'Configuration des tableaux','planning/postes_cfg/groupes.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (null, 'Configuration des tableaux - Modif',22,'Configuration des tableaux','planning/postes_cfg/groupes2.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (null, 'Modification du planning - menudiv','12','Modification du planning','planning/poste/menudiv.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (null, 'Modification du planning - majdb','12','Modification du planning','planning/poste/majdb.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (null, 'Personnel - Importation','21','Gestion du personnel','personnel/import.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (null, 'Jours fériés','25','Gestion des jours fériés','joursFeries/index.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (null, 'Jours fériés','25','Gestion des jours fériés','joursFeries/valid.php');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (null, 'Voir les agendas de tous','3','Voir les agendas de tous','');";
$sql[]="INSERT INTO `{$dbprefix}acces` VALUES (null, 'Modifier ses propres absences','6','Modifier ses propres absences','');";

//	Insertion des activités
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(1, 'Assistance audiovisuel');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(2, 'Assistance autoformation');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(3, 'Communication');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(4, 'Communication r&eacute;serve');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(5, 'Inscription');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(6, 'Pr&ecirc;t/retour de document');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(7, 'Pr&ecirc;t de mat&eacute;riel');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(8, 'Rangement');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(9, 'Renseignement');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(10, 'Renseignement bibliographique');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(11, 'Renseignement r&eacute;serve');";
$sql[]="INSERT INTO `{$dbprefix}activites` VALUES(12, 'Renseignement sp&eacute;cialis&eacute;');";

// Insertion de la config
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Version', 'info', '1.5.6', 'Version de l&apos;application','','','');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-IsEnabled', 'boolean', '0', 'Active ou d&eacute;sactive l&apos;envoi des mails','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'toutlemonde', 'boolean', '0', 'Affiche ou non l&apos;utilisateur \"tout le monde\" dans le menu.','','','');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-IsMail-IsSMTP', 'enum', 'IsSMTP', 'Classe &agrave; utiliser : SMTP, fonction PHP IsMail','Messagerie','IsSMTP,IsMail','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-WordWrap', '', '50', '','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-Hostname', '', '', 'Nom d''h&ocirc;te du serveur pour l&apos;envoi des mails.','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-Host', '', '', 'Nom FQDN ou IP du serveur SMTP.','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-Port', '', '25', 'Port du serveur SMTP','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-SMTPSecure', 'enum', '', 'Cryptage utilis&eacute; par le serveur STMP.','Messagerie',',ssl,tls','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-SMTPAuth', 'boolean', '0', 'Le serveur SMTP requiert-il une authentification?','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-Username', '', '', 'Nom d&apos;utilisateur pour le serveur SMTP.','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-Password', 'password', '', 'Mot de passe pour le serveur SMTP','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-From', '', 'no-reply@planningbiblio.fr', 'Adresse email de l&apos;expediteur.','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-FromName', '', 'Planning', 'Nom de l&apos;expediteur.','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Mail-Signature', 'textarea', 'Ce message a été envoyé par Planning Biblio.\nMerci de ne pas y répondre.', 'Signature des e-mails','Messagerie','','10');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL, 'Dimanche', 'boolean', '0', 'Utiliser le planning le dimanche','','','');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL ,'nb_semaine','enum','1','Nombre de semaine pour l\'emploi du temps','','1,2,3','');";
$sql[]="INSERT INTO `{$dbprefix}config` (nom,ordre,commentaires) VALUES ('dateDebutPlHebdo','0','Date de d&eacute;but permettant la rotation des plannings hebdomadaires (pour l&apos;utilisation de 3 plannings hebdomadaires. Format YYYY-MM-DD)');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL ,'ctrlHresAgents','boolean','1','Contrôle des heures des agents le samedi et le dimanche','','','');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (NULL ,'agentsIndispo','boolean','1','Afficher les agents indisponibles','','','');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null ,'affiche_etage','boolean','0','Afficher les &eacute;tages des postes dans le planning','Affichage','','7');";
$sql[]="INSERT INTO `{$dbprefix}config` (nom,type,valeur,valeurs,ordre,commentaires) VALUES ('heuresPrecision','enum','heure','heure,demi-heure,quart d&apos;heure','0','Pr&eacute;cision des heures hebdomadaires');";
$sql[]="INSERT INTO `{$dbprefix}config` (nom,type,valeur,valeurs,commentaires,categorie,ordre) VALUES ('absences_planning','enum','',',simple,détaillé,absents et présents','Afficher la liste des absences sur la page du planning','Affichage','7');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Auth-Mode','enum','SQL','M&eacute;thode d&apos;authentification','Authentification','SQL','5');"; 
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'absencesApresValidation','boolean','1','Autoriser l&apos;enregistrement des absences apr&egrave;s validation des plannings','','','');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Multisites-nombre','enum','1','Nombre de sites','Multisites','1,2','15');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Multisites-site1','text','','Nom du site N°1','Multisites','','15');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Multisites-resp1','text','','Nom du responsable du site N°1','Multisites','','15');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Multisites-email1','text','','Email du responsable du site N°1','Multisites','','15');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Multisites-site2','text','','Nom du site N°2','Multisites','','15');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Multisites-resp2','text','','Nom du responsable du site N°2','Multisites','','15');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Multisites-email2','text','','Email du responsable du site N°2','Multisites','','15');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'Multisites-agentsMultisites','boolean','0','Les agents peuvent travailler sur plusieurs sites','Multisites','','15');";
$sql[]="INSERT INTO `{$dbprefix}config` VALUES (null,'hres4semaines','boolean','0','Afficher le total d&apos;heures des 4 derni&egrave,res semaine dans le menu','Affichage','','7');";
$sql[]="INSERT INTO `{$dbprefix}config` (`nom`,`type`,`valeur`,`commentaires`,`categorie`,`ordre`) VALUES ('Auth-Anonyme','boolean','0','Autoriser les logins anonymes','Authentification','5');";
$sql[]="INSERT INTO `{$dbprefix}config` (`nom`,`type`,`commentaires`,`categorie`,`ordre`) VALUES ('titre','text','Titre affich&eacute; sur la page d&apos;accueil','Affichage','7');";

//	Lignes de séparations
$sql[]="INSERT INTO `{$dbprefix}lignes` VALUES (null,'Magasins');";
$sql[]="INSERT INTO `{$dbprefix}lignes` VALUES (null,'Mezzanine');";
$sql[]="INSERT INTO `{$dbprefix}lignes` VALUES (null,'Rez de chauss&eacute;e');";
$sql[]="INSERT INTO `{$dbprefix}lignes` VALUES (null,'Rez de jardin');";

// Menu
$sql[]="INSERT INTO `{$dbprefix}menu` (`niveau1`,`niveau2`,`titre`,`url`) VALUES 
  ('10','0','Absences','absences/index.php'),
  ('10','10','Voir les absences','absences/voir.php'),
  ('10','20','Ajouter une absence','absences/ajouter.php'),
  ('10','30','Informations','absences/infos.php'),
  ('20','0','Agenda','agenda/index.php'),
  ('30','0','Planning','planning/poste/index.php'),
  ('40','0','Statistiques','statistiques/index.php'),
  ('40','10','Feuille de temps','statistiques/temps.php'),
  ('40','20','Par agent','statistiques/agents.php'),
  ('40','30','Par poste','statistiques/postes.php'),
  ('40','40','Par poste (Synthèse)','statistiques/postes_synthese.php'),
  ('40','50','Postes de renfort','statistiques/postes_renfort.php'),
  ('40','24','Par service','statistiques/service.php'),
  ('40','26','Par statut','statistiques/statut.php'),
  ('50','0','Administration','admin/index.php'),
  ('50','10','Informations','infos/index.php'),
  ('50','20','Les activités','activites/index.php'),
  ('50','30','Les agents','personnel/index.php'),
  ('50','40','Les postes','postes/index.php'),
  ('50','50','Les modèles','planning/modeles/index.php'),
  ('50','60','Les tableaux','planning/postes_cfg/index.php'),
  ('50','70','Jours de fermeture','joursFeries/index.php'),
  ('50','80','Configuration','admin/config.php'),
  ('60','0','Aide','aide/index.php');";

$sql[]="INSERT INTO `{$dbprefix}personnel` (`id`,`nom`,`postes`,`actif`,`droits`,`login`,`password`,`commentaires`) VALUES (1, 'Administrateur', 'a:11:{i:0;s:2:\"20\";i:1;s:2:\"22\";i:2;s:2:\"13\";i:3;s:1:\"1\";i:4;s:1:\"5\";i:5;s:2:\"21\";i:6;s:2:\"12\";i:7;s:2:\"17\";i:8;s:1:\"4\";i:9;i:99;i:10;i:100;}', 'Inactif', 'a:15:{i:0;s:2:\"22\";i:1;s:2:\"13\";i:2;s:1:\"1\";i:3;s:2:\"25\";i:4;s:1:\"5\";i:5;s:2:\"21\";i:6;s:2:\"23\";i:7;s:2:\"12\";i:8;s:1:\"6\";i:9;s:2:\"17\";i:10;s:1:\"4\";i:11;s:1:\"3\";i:12;i:99;i:13;i:100;i:14;i:20;}', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Compte cr&eacute;&eacute; lors de l&apos;installation du planning');";
$sql[]="INSERT INTO `{$dbprefix}personnel` (`id`,`nom`,`postes`,`actif`,`droits`,`commentaires`,`temps`) VALUES (2, 'Tout le monde', 'a:1:{i:0;s:0:\"\";}', 'Actif', 'a:2:{i:0;i:99;i:1;i:100;}','Compte cr&eacute;&eacute; lors de l&apos;installation du planning', 'a:6:{i:0;a:4:{i:0;s:8:\"09:00:00\";i:1;s:8:\"12:00:00\";i:2;s:8:\"13:00:00\";i:3;s:8:\"17:00:00\";}i:1;a:4:{i:0;s:8:\"09:00:00\";i:1;s:8:\"12:00:00\";i:2;s:8:\"13:00:00\";i:3;s:8:\"17:00:00\";}i:2;a:4:{i:0;s:8:\"09:00:00\";i:1;s:8:\"12:00:00\";i:2;s:8:\"13:00:00\";i:3;s:8:\"17:00:00\";}i:3;a:4:{i:0;s:8:\"09:00:00\";i:1;s:8:\"12:00:00\";i:2;s:8:\"13:00:00\";i:3;s:8:\"17:00:00\";}i:4;a:4:{i:0;s:8:\"09:00:00\";i:1;s:8:\"12:00:00\";i:2;s:8:\"13:00:00\";i:3;s:8:\"17:00:00\";}i:5;a:4:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}}');";

//	Insertion des horaires
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '09:00:00', '10:00:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '10:00:00', '11:30:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '11:30:00', '13:00:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '13:00:00', '14:30:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '14:30:00', '16:00:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '16:00:00', '17:30:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '17:30:00', '19:00:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '19:00:00', '20:00:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '20:00:00', '22:00:00', 'general', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '09:00:00', '10:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '10:00:00', '11:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '11:00:00', '12:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '12:00:00', '13:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '13:00:00', '14:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '14:00:00', '15:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '15:00:00', '16:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '16:00:00', '17:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '17:00:00', '18:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '18:00:00', '19:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '19:00:00', '20:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '20:00:00', '22:00:00', 'rangement', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '09:00:00', '14:00:00', 'reserve', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '14:00:00', '16:00:00', 'reserve', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '16:00:00', '18:00:00', 'reserve', 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_horaires` VALUES (NULL, '18:00:00', '22:00:00', 'reserve', 1);";

//	Insertion des lignes
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 0, '24', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 1, '36', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 2, '3', 'ligne');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 3, '4', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 4, '5', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 6, '6', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 7, '7', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 8, '8', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 9, '9', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 10, '10', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 11, '11', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 12, '12', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 13, '4', 'ligne');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 15, '13', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 16, '14', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 17, '15', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 18, '16', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 19, '17', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 20, '19', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 21, '20', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 22, '21', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 23, '22', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'general', 0, 'Mezzanine', 'titre');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 0, '28', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 1, '25', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 2, '26', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 3, '27', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 4, '29', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 5, '30', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 6, '31', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 7, '32', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 8, '33', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 9, '34', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 10, '35', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'rangement', 0, 'Rangement', 'titre');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'reserve', 0, '23', 'poste');";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_lignes` VALUES (NULL, 1, 'reserve', 0, 'R&eacute;serve', 'titre');";

// Insertion des cellules grise
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 0, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 0, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 1, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 1, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 3, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 4, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 6, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 7, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 7, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 8, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 8, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 9, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 9, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 10, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 10, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 11, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 11, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 12, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 14, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 15, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 15, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 16, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 16, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 17, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 17, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 18, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 18, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 19, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 19, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 20, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 20, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 21, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 21, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 22, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 22, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 23, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 23, 8);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'general', 23, 9);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 0, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 1, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 2, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 3, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 4, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 5, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 6, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 7, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 8, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 9, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'rangement', 10, 12);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'reserve', 0, 1);";
$sql[]="INSERT INTO `{$dbprefix}pl_poste_cellules` VALUES (NULL, 1, 'reserve', 0, 4);";

$sql[]="INSERT INTO `{$dbprefix}pl_poste_tab` VALUES(NULL, 1, 'Tableau 1');";

//	Insertion des postes
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (4, 'Inscription 1', '', 0, 'Obligatoire', 'RDC', 'a:2:{i:0;s:1:\"5\";i:1;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (5, 'Retour', '', 0, 'Obligatoire', 'RDC', 'a:2:{i:0;s:1:\"6\";i:1;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (6, 'Pr&ecirc;t / retour 1', '', 0, 'Obligatoire', 'RDC', 'a:3:{i:0;s:1:\"7\";i:1;s:1:\"6\";i:2;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (7, 'Pr&ecirc;t / retour 2', '', 0, 'Renfort', 'RDC', 'a:3:{i:0;s:1:\"7\";i:1;s:1:\"6\";i:2;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (8, 'Pr&ecirc;t / retour 3', '', 0, 'Renfort', 'RDC', 'a:4:{i:0;s:1:\"5\";i:1;s:1:\"7\";i:2;s:1:\"6\";i:3;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (9, 'Pr&ecirc;t / retour 4', '', 0, 'Renfort', 'RDC', 'a:3:{i:0;s:1:\"7\";i:1;s:1:\"6\";i:2;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (10, 'Inscription 2', '', 0, 'Renfort', 'RDC', 'a:1:{i:0;s:1:\"5\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (11, 'Communication RDC', '', 0, 'Renfort', 'RDC', 'a:3:{i:0;s:1:\"3\";i:1;s:1:\"7\";i:2;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (12, 'Renseignement RDC', '', 0, 'Obligatoire', 'RDC', 'a:2:{i:0;s:1:\"9\";i:1;s:2:\"10\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (13, 'Renseignement sp&eacute;cialis&eacute; 1', '', 0, 'Obligatoire', 'RDJ', 'a:3:{i:0;s:1:\"9\";i:1;s:2:\"10\";i:2;s:2:\"12\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (14, 'Renseignement sp&eacute;cialis&eacute; 2', '', 0, 'Renfort', 'RDJ', 'a:3:{i:0;s:1:\"9\";i:1;s:2:\"10\";i:2;s:2:\"12\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (15, 'Renseignement sp&eacute;cialis&eacute; 3', '', 0, 'Renfort', 'RDJ', 'a:3:{i:0;s:1:\"9\";i:1;s:2:\"10\";i:2;s:2:\"12\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (16, 'Communication (banque 1)', '', 0, 'Obligatoire', 'RDJ', 'a:4:{i:0;s:1:\"3\";i:1;s:1:\"7\";i:2;s:1:\"6\";i:3;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (17, 'Communication (banque 2)', '', 0, 'Renfort', 'RDJ', 'a:3:{i:0;s:1:\"3\";i:1;s:1:\"9\";i:2;s:2:\"10\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (19, 'Communication (coordination)', '', 0, 'Obligatoire', 'RDJ', 'a:1:{i:0;s:1:\"3\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (20, 'Communication (magasin 1)', '', 0, 'Obligatoire', 'RDJ', 'a:1:{i:0;s:1:\"3\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (21, 'Communication (magasin 2)', '', 0, 'Obligatoire', 'RDJ', 'a:1:{i:0;s:2:\"11\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (22, 'Communication (magasin 3)', '', 0, 'Renfort', 'RDJ', 'a:1:{i:0;s:1:\"3\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (23, 'Consultation de la r&eacute;serve', '', 0, 'Obligatoire', 'RDJ', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (24, 'Audiovisuel et autoformation', '', 0, 'Obligatoire', 'Mezzanine', 'a:4:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"7\";i:3;s:1:\"9\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (25, 'Rangement 2', '', 0, 'Obligatoire', 'RDC', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (26, 'Rangement 3', '', 0, 'Obligatoire', 'RDC', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (27, 'Rangement 4', '', 0, 'Renfort', 'RDC', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (28, 'Rangement 1', '', 0, 'Obligatoire', 'Mezzanine', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (29, 'Rangement 5', '', 0, 'Obligatoire', 'RDJ', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (30, 'Rangement 6', '', 0, 'Obligatoire', 'RDJ', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (31, 'Rangement 7', '', 0, 'Renfort', 'RDJ', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (32, 'Rangement 8', '', 0, 'Renfort', 'RDJ', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (33, 'Rangement 9', '', 0, 'Renfort', 'RDJ', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (34, 'Rangement 10', '', 0, 'Obligatoire', 'Magasins', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (35, 'Rangement 11', '', 0, 'Obligatoire', 'Magasins', 'a:1:{i:0;s:1:\"8\";}','1','1');";
$sql[]=" INSERT INTO `{$dbprefix}postes` (`id`, `nom`, `groupe`, `groupe_id`, `obligatoire`, `etage`, `activites`, `statistiques`, `bloquant`) VALUES (36, 'Renseignement kiosque', '', 0, 'Renfort', 'Mezzanine', 'a:2:{i:0;s:1:\"9\";i:1;s:2:\"10\";}','1','1');";

//	Insertion des motif d'absences
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Non justifi&eacute;e', 1);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Cong&eacute;s pay&eacute;s', 2);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Maladie', 3);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Cong&eacute; maternit&eacute;', 4);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'R&eacute;union syndicale', 5);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Gr&egrave;ve', 6);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Formation', 7);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Concours', 8);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Stage', 9);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'R&eacute;union', 10);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Entretien', 11);";
$sql[]="INSERT INTO `{$dbprefix}select_abs` VALUES (NULL, 'Autre', 12);";

//	Insertion des étages
$sql[]="INSERT INTO `{$dbprefix}select_etages` (`valeur`,`rang`) VALUES ('Mezzanine',1),('RDC',2),('RDJ',3),('Magasins',4);";

//	Insertion des noms des services
$sql[]="INSERT INTO `{$dbprefix}select_services` VALUES (NULL, 'P&ocirc;le public', 1, '');";
$sql[]="INSERT INTO `{$dbprefix}select_services` VALUES (NULL, 'P&ocirc;le conservation', 2, '');";
$sql[]="INSERT INTO `{$dbprefix}select_services` VALUES (NULL, 'P&ocirc;le collection', 3, '');";
$sql[]="INSERT INTO `{$dbprefix}select_services` VALUES (NULL, 'P&ocirc;le informatique', 4, '');";
$sql[]="INSERT INTO `{$dbprefix}select_services` VALUES (NULL, 'P&ocirc;le administratif', 5, '');";
$sql[]="INSERT INTO `{$dbprefix}select_services` VALUES (NULL, 'Direction', 6, '');";

//	Insertion des statuts
$sql[]="INSERT INTO `{$dbprefix}select_statuts` VALUES (NULL, 'Conservateur', 1, '#93E3FE');";
$sql[]="INSERT INTO `{$dbprefix}select_statuts` VALUES (NULL, 'Biblioth&eacute;caire', 2, '#B18CFE');";
$sql[]="INSERT INTO `{$dbprefix}select_statuts` VALUES (NULL, 'AB', 3, '#CCE8B5');";
$sql[]="INSERT INTO `{$dbprefix}select_statuts` VALUES (NULL, 'BAS', 4, '#FFB5AF');";
$sql[]="INSERT INTO `{$dbprefix}select_statuts` VALUES (NULL, 'Magasinier', 5, '#EBF38F');";
$sql[]="INSERT INTO `{$dbprefix}select_statuts` VALUES (NULL, 'Etudiant', 6, '#FFB43F');";
$sql[]="INSERT INTO `{$dbprefix}select_statuts` VALUES (NULL, 'Garde de nuit', 7, '');";
$sql[]="INSERT INTO `{$dbprefix}select_statuts` VALUES (NULL, 'Autre', 8, '');";

?>