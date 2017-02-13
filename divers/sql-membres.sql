CREATE TABLE `membresX` (
  `clef` int(11) NOT NULL,
  `nom_usage` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mot_de_passe` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `code_postal` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ville` varchar(35) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pays` varchar(35) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `date_inscription` date NOT NULL,
  `date_miseajour` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `clef` int(11) NOT NULL AUTO_INCREMENT;