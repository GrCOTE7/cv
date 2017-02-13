CREATE TABLE `membres` (
  `clef`             INT(11)                 NOT NULL,
  `nom_usage`        VARCHAR(25)
                     COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mot_de_passe`     VARCHAR(20)
                     COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `prenom`           VARCHAR(30)
                     COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `code_postal`      VARCHAR(12)
                     COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ville`            VARCHAR(35)
                     COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pays`             VARCHAR(35)
                     COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email`            VARCHAR(50)
                     COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `quesrtionsecrete` VARCHAR(255)
                     COLLATE utf8_unicode_ci NOT NULL,
  `reponse`          VARCHAR(255)
                     COLLATE utf8_unicode_ci NOT NULL,
  `date_inscription` DATE                    NOT NULL,
  `date_miseajour`   TIMESTAMP(6)            NOT NULL DEFAULT CURRENT_TIMESTAMP
);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
MODIFY `clef` INT(11) NOT NULL AUTO_INCREMENT;